function toggle(element) {
    var object = document.getElementById(element);
    if (object.style.display == 'none') {
        object.style.display = 'block';
    } else {
        object.style.display = 'none';
    }
}

document.getElementById('mapInfo').innerHTML = JSON.parse(document.getElementById('map-style').value).name;
document.getElementById('zoomInfo').innerHTML = JSON.parse(document.getElementById('zoom').value).magnification;

function setStyle(value) {
    var object = JSON.parse(value);
    map.setStyle(object.style);
    document.getElementById('mapInfo').innerHTML = object.name;
}

function setZoom(value) {
    var object = JSON.parse(value);
    map.setZoom(object.level);
    document.getElementById('zoomInfo').innerHTML = object.magnification;
}

function setLayer(layername, sourcename, value) {
    if (map.getSource(sourcename)) {
        map.removeLayer(layername);
        map.removeSource(sourcename);
    }
    if (value == "" || value == 0) {
        document.getElementById(layername + 'Info').innerHTML = "";
        return;
    }
    var object = JSON.parse(value);
    if (object.layer) {
        document.getElementById(layername + 'Info').innerHTML = object.name;
    } else {
        document.getElementById(layername + 'Info').innerHTML = "";
    }
    if (object.layer) {
        if (object.api == 'http://services.sentinel-hub.com/ogc/wms/16922740-07a2-47f5-936f-70625b01750e' || object.api == 'https://creodias.sentinel-hub.com/ogc/wms/16922740-07a2-47f5-936f-70625b01750e') {
            var time = '&time=2020-06-29/2020-09-29';
        } else {
            var time = '';
        }
        map.addSource(sourcename, {
            'type': 'raster',
            'tiles': [object.api + '?bbox={bbox-epsg-3857}&format=image/png&service=WMS&version=1.1.1&request=GetMap&srs=EPSG:3857&transparent=true&width=256&height=256&layers=' + object.layer + time],
            'tileSize': 256
        });
        map.addLayer({
            'id': layername,
            'type': 'raster',
            'source': sourcename,
            'paint': {}
        });
        map.setPaintProperty(
            layername,
            'raster-opacity',
            .5
        );
    }
}

mapboxgl.accessToken = 'pk.eyJ1IjoiZG9jbGlnb3QiLCJhIjoiY2p3MHQ5MTViMGVvNzQzdGdicTlwM2o3NCJ9.j4qYChJYSxUy8hNnlXrD-g';
var map = new mapboxgl.Map({
	attributionControl: false, 
    container: 'mapContainer', // HTML container id
    style: 'mapbox://styles/mapbox/dark-v9',
    center: [120.9822, 14.6042],
    // starting position as [lng, lat]
    zoom: 8
});

map.addControl(new mapboxgl.AttributionControl({customAttribution: ['SEDAC', 'Sentinel Hub', 'NASA GIBS']})); 

map.addControl(new mapboxgl.NavigationControl(), 'bottom-right');

var popup = [];
var marker = [];
var messages = [];
var locations = [];
var colors = [];

messages.push(['Manila']);
messages.push(['San Fernando La Union']);
messages.push(['Tuguegarao']);
messages.push(['San Fernando Pampanga']);
messages.push(['Calamba']);
messages.push(['Legazpi']);
messages.push(['Iloilo City']);
messages.push(['Cebu City']);
messages.push(['Tacloban City']);
messages.push(['Pagadian']);
messages.push(['Cagayan de Oro']);
messages.push(['Davao City']);
messages.push(['Koronadal']);
messages.push(['Cotabato City']);
messages.push(['Baguio']);
messages.push(['Butuan']);
messages.push(['Calapan']);

locations.push([120.9822, 14.6042]);
locations.push([120.319444, 16.618611]);
locations.push([121.722849, 17.615772]);
locations.push([120.684446, 15.034251]);
locations.push([121.126469, 14.191406]);
locations.push([123.7353, 13.1387]);
locations.push([122.564444, 10.696944]);
locations.push([123.891667, 10.311111]);
locations.push([125.004722, 11.243333]);
locations.push([123.437, 7.8257]);
locations.push([124.643056, 8.481111]);
locations.push([125.612778, 7.073056]);
locations.push([124.987427, 6.24501]);
locations.push([124.246389, 7.223611]);
locations.push([120.590998, 16.417155]);
locations.push([125.543611, 8.949167]);
locations.push([121.179722, 13.410833]);

for (i = 0; i < locations.length; i++) {
    popup[i] = new mapboxgl.Popup()
        .setHTML(messages[i]);

    marker[i] = new mapboxgl.Marker(colors[i])
        .setLngLat(locations[i])
        .setPopup(popup[i])
        .addTo(map);
}

function setMap(area) {
    if (area) {
        var target = locations[area];
        map.flyTo({
            center: target,
            essential: true
        });
    }
}