# CirroLytix Satellite Browser

Generic satellite browsing utility. 

This application utilizes WMS (Web Mapping Services) from NASA and ESA to access satellite imagery and overlays it as a layer on Mapbox. 

## Features

### Browse Locations in PH

The utility allows users to fly around various PH regional centers for location interactivity. Users can also manually zoom and move around. 

### Select Mapbox Styles

The base map utilizes Mapbox styles:

* Dark Map
* Street Map
* Outdoor Map
* Satellite Map // Maxar Layer
* Satellite with Streets Map // Maxar Layer + OSM

### Satellite Layers

On top of the base map, users can select various layers from GIBS, SEDAC, or Sentinel HUB to overlay. 

* Base Layers
	* Land/Water Mask
	* ASTER: Global Digital Elevation Model
	* Global Digital Elevation Model Color Index
	* Shuttle Radar Topography Mission Color Index
	* Landsat: Surface Reflectance
	* MAIAC Isotropic Kernel Parameters

* Pollution
	* Particulate Matter 2.5
	* PM2.5 Grids
	
* Climate
	* Brightness Temperature
	* Land Surface Temperature
	* SMAP: Surface Soil Temperature
	* Summer Daytime Land Surface Temperature
	* Surface Relative Humidity

* Agriculture and Vegetation
	* Gross Primary Production
	* Agricultural Lands Croplands
	* Land Cover Type
	* Fraction of Photosynthetically Active Radiation 
	* Net Photosynthesis
	* Landsat: Surface Normalized Difference Vegetation Index
	* Terra: Normalized Difference Vegetation Index

* Night Lights
	* Black Marble: Nighttime Lights
	* VIIRS Plus DMSP dLight
	
* Human Layers
	* Anthropogenic Biomes
	* Urban Rural Extents in the 10m Low Elevation Zone
	* Global Population Density Estimates
	* Subnational Infant Mortality Rates
	* 2009 Human Footprint
	* GPWv4 Population Count
	* GRUMP v1: Urban Extents
	* Landsat: Impervious Surface Percentage
	* Human Built-up and Settlement Extent
	
* Hazards
	* Volcano Hazard Frequency and Distribution
	* Landslide Hazard Distribution
	* Flood Hazard Frequency and Distribution
	* Earthquake Hazard Frequency and Distribution
	* Cyclone Hazard Frequency and Distribution
	* Drought Hazazrd Frequency and Distribution
	
* Sentinel Layers
	* Sentinel 2: False Color (Urban)
	* Sentinel 2: Geology
	* Sentinel 2: SWIR
	* Sentinel 2: Agriculture
	* Sentinel 2: False Color (Vegetation)
	* Sentinel 2: Bathymetric
	* Sentinel 2: Moisture INdex
	* Sentinel 2: Natural Color (True Color)
	* Sentinel 5P: Nitrogen Dioxide
	* Sentinel 5P: Carbon Monoxide
	* Sentinel 5P: Sulfur Dioxide

## Satellite WMS Services

Satellite layers are obtained using WMS API from GIBS, SEDAC, and Sentinel HUB. Sentinel HUB requires an active subscription. 

### NASA Global Imagery Browse Services (GIBS)

```
https://gibs.earthdata.nasa.gov/wms/epsg4326/best/wms.cgi?bbox={bbox-epsg-3857}&format=image/png&service=WMS&version=1.1.1&request=GetMap&srs=EPSG:3857&transparent=true&width=256&height=256&layers=VIIRS_Black_Marble
```

### NASA Socio Economic Data Applications Center (SEDAC)

```
https://sedac.ciesin.columbia.edu/geoserver/wms?bbox={bbox-epsg-3857}&format=image/png&service=WMS&version=1.1.1&request=GetMap&srs=EPSG:3857&transparent=true&width=256&height=256&layers=ndh:ndh-drought-hazard-frequency-distribution
```

### Sentinel Hub

For Sentinel 1,2:
```
http://services.sentinel-hub.com/ogc/wms/2dbe295c-4b78-4bd3-b236-07f81034664c?REQUEST=GetMap&bbox={bbox-epsg-3857}&LAYERS=MOISTURE,OUTLINE&MAXCC=20&WIDTH=320&HEIGHT=320&FORMAT=image/jpeg&&transparent=true&TIME=2020-03-29/2020-05-29
```

For Sentinel 3,5P:
```
https://creodias.sentinel-hub.com/ogc/wms/2dbe295c-4b78-4bd3-b236-07f81034664c?REQUEST=GetMap&bbox={bbox-epsg-3857}&LAYERS=NO2_SENTINEL5P,OUTLINE&MAXCC=20&WIDTH=320&HEIGHT=320&FORMAT=image/jpeg&&transparent=true&TIME=2020-03-29/2020-05-29
```