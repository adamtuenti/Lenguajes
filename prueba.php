<!DOCTYPE html>
<html>
<head>
 <title> INSERTAR MAPA EN GOOGLE MAPS</title>


 <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBjQ7kwpIvv1sEqFSvGThZfFYV03gP2hGc&callback=initMap"> </script>

 <script>

function init(){
   var mapOption = {
     center: new google.maps.LatLng(0.0, 0.0), 
     zoom: 15,
     mapTypeId:google.maps.MapTypeId.ROADMAP
   };
   var map = new google.maps.Map(document.getElementById("map"),mapOption);

   // Define tu marcador (pon la url de tu imagen en la propiedad **icon**)
   var marker = new google.maps.Marker({
      position: { lat: -12.06244, lng: -77.12272 }, // aca defines las coordenadas
      icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
   });
   // Agregar tu marcador al mapa
   marker.setMap(map);
}

  google.maps.event.addDomListener(window, 'load', init);

 </script>


  </head>
  <body>

  <div id="map" style="width:1000px; height: 800px; border: solid; border-color: #00FFFF  "></div>


</body>
</html>﻿