<!DOCTYPE html>
<?php

echo "Opcion elegida : ".$_POST["palabra"] ;

?>
<html>
  <head>
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3><center>Ubicacion de la ciudad con la mayor delincuencia</center></h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
	// Initialize and add the map
	function initMap() {
	  // The location of Uluru
	  var uluru = {lat: -2.2058400, lng: -79.9079500};
	  // The map, centered at Uluru
	  var map = new google.maps.Map(
		  document.getElementById('map'), {zoom: 8, center: uluru});
	  // The marker, positioned at Uluru
	  var marker = new google.maps.Marker({position: uluru, map: map});
	}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2H4Ki-Jv1pgrmdn-2GIpMA385CL791OI&callback=initMap">
    </script>
  </body>
</html>