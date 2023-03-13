<!DOCTYPE HTML>

<html>

<head>
    <title>AEDES Satellite</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <meta name="title" content="WMS Sat Browser" />
    <meta name="description" content="CirroLytix WMS Satellite Browser integrates various satellite services as an interactive map visualization." />
    <meta property="og:url" content="https://opendata.org.ph/sat_browser" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="WMS Sat Browser" />
    <meta property="og:description" content="CirroLytix WMS Satellite Browser integrates various satellite services as an interactive map visualization." />
    <meta property="og:image" content="splash.png" />
    <style>
		 a {
			 text-decoration: none;
		}
		 body, h1, h2, h3, h4, h5, h6 {
			 font-family: "Roboto", sans-serif;
		}
		 #infoCard {
			 position: absolute;
			 top: 52px;
			 z-index: 1;
		}
		 #mapContainer {
			 width: 100%;
			 height: 100vh;
		}
    </style>
</head>

<body class="w3-mobile">
    <header class="w3-bar w3-top w3-indigo w3-xlarge w3-card" style="z-index: 2;">
        <div class="menu-icon w3-button w3-bar-item" onclick="toggle('small_menu');"><img src="menu_rounded_icon.png" /></div>
        <div class="w3-bar-item w3-padding">AEDES Satellite View</div>
    </header>
    <div id="infoCard" class="w3-col l2 w3-bar-block w3-black w3-small" onclick="toggle('infoPanel');">
        <div class="w3-bar-item w3-center w3-padding w3-button w3-grey">Map Info</div>
        <span id="infoPanel" style="display: none;">
			<div class="w3-bar-item w3-padding">Zoom: <span id="zoomInfo"></span></div>
			<div class="w3-bar-item w3-padding">Map: <span id="mapInfo"></span></div>
			<div class="w3-bar-item w3-padding">Layer 1: <span id="layer1Info"></span></div>
			<div class="w3-bar-item w3-padding">Layer 2: <span id="layer2Info"></span></div>
		</span>
		<div class="w3-bar-item w3-center w3-button w3-grey" style="height: 15px;">&nbsp;</div>
    </div>
    <div class="w3-row">
        <div id="small_menu" class="" style="display: none;">
            <?php include ('nav.php'); ?>
        </div>
        <div id="mapContainer"></div>
    </div>
    <!-- The Modal -->
    <section id="id01" class="w3-modal" style="display: block;">
        <div class="w3-modal-content">
            <div>
                <div class="w3-indigo w3-bar w3-xlarge">
                    <div class="w3-padding w3-bar-item">About <span class="w3-hide-small">WMS Satellite Browser</span></div>
                    <div onclick="toggle('id01');" class="w3-bar-item w3-button w3-right"><span class="w3-hide-small">Close </span>&times;</div>
                </div>
                <div class="w3-padding">
                    <div class="w3-row">
                        <div class="w3-col l2">
                            <img src="favicon.png" style="width: 100%;" />
                        </div>
                        <div class="w3-col l10 w3-padding">
                            <p>CirroLytix WMS Satellite Browser integrates various satellite services as an interactive map visualization. The service utilizes the following WMS APIs:</p>
                            <ul>
                                <li>NASA Global Imagery Browse Service (GIBS)</li>
                                <li>NASA Socio-economic Data and Applications Center (SEDAC)</li>
                                <li>ESA Sentinel HUB</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w3-indigo w3-padding">&copy; 2020-2021 CirroLytix Research Services</div>
            </div>
        </div>
    </section>
    <script src="rendermap.js"></script>
</body>

</html>