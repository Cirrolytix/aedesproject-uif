	<nav class="w3-col l3 w3-dark-grey w3-sidebar w3-bar-block w3-large" style="z-index: 2; top: 52px;">
		<div class="w3-button w3-select w3-center" onclick="toggle('small_menu');">X</div>
		<select id="zoom" class="w3-dark-grey w3-select" onchange="toggle('small_menu'); setZoom(this.value);">
			<option value='{"level":"1", "magnification":"39k m/px"}'>Zoom: Continental View</option>
			<option value='{"level":"4", "magnification":"4.9k m/px"}'>Zoom: Neighbors View</option>
			<option value='{"level":"7", "magnification":"611 m/px"}'>Zoom: Regional View</option>
			<option value='{"level":"8", "magnification":"305 m/px"}' selected>Zoom: Default View</option>
			<option value='{"level":"10", "magnification":"76 m/px"}' >Zoom: Near City View</option>
			<option value='{"level":"12", "magnification":"19 m/px"}'>Zoom: City View</option>
			<option value='{"level":"16", "magnification":"1 m/px"}'>Zoom: Street View</option>
		</select>
		<select id="locations" class="w3-dark-grey w3-select" onchange="toggle('small_menu'); setMap(this.value);">
			<option value="0">NCR: Manila</option>
			<option value="1">Ilocos: San Fernando</option>
			<option value="2">Cagayan: Tuguegarao</option>
			<option value="3">Central Luzon: San Fernando</option>
			<option value="4">Calabarzon: Calamba</option>
			<option value="5">Bicol: Legazpi</option>
			<option value="6">Western Visayas: Iloilo</option>
			<option value="7">Central Visayas: Cebu</option>
			<option value="8">Eastern Visayas: Tacloban</option>
			<option value="9">Zamboanga: Pagadian</option>
			<option value="10">North Mindanao: Cagayan de Oro</option>
			<option value="11">Davao: Davao</option>
			<option value="12">Soccskargen: Koronadal</option>
			<option value="13">Bangsamoro: Cotabato</option>
			<option value="14">CAR: Baguio</option>
			<option value="15">Caragan: Butuan</option>
			<option value="16">MIMAROPA: Calapan</option>
		</select>
		<select id="map-style" class="w3-dark-grey w3-select" onchange="toggle('small_menu'); setStyle(this.value);">
			<option value='{"style":"mapbox://styles/mapbox/dark-v9", "name":"Dark Map"}' selected>Dark Map</option>
			<option value='{"style":"mapbox://styles/mapbox/streets-v9", "name":"Streets Map"}'>Streets Map</option>
			<option value='{"style":"mapbox://styles/mapbox/outdoors-v9", "name":"Outdoors Map"}'>Outdoors Map</option>
			<option value='{"style":"mapbox://styles/mapbox/satellite-v9", "name":"Maxar Satellite Map"}'>Maxar Satellite Map</option>
			<option value='{"style":"mapbox://styles/mapbox/satellite-streets-v10", "name":"Maxar Streets Map"}'>Maxar Streets Map</option>
		</select>
		<select id="satelliteLayers" class="w3-dark-grey w3-select" onchange="toggle('small_menu'); setLayer('layer1', 'satellite-layer-1', this.value);">
			<option value="0">Select Layer 1:</option>
			<?php include('layers.php'); ?>
		</select>
		<select id="satelliteLayers" class="w3-dark-grey w3-select" onchange="toggle('small_menu'); setLayer('layer2', 'satellite-layer-2', this.value);">
			<option value="0">Select Layer 2:</option>
			<?php include('layers.php'); ?>
		</select>
		<div class="w3-select w3-padding w3-button" onclick="toggle('small_menu'); toggle('id01');">About</div>
	</nav>