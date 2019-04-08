<!DOCTYPE html>
<html>
<head>
  <title>Simple Map</title>
  <meta name="viewport" content="initial-scale=1.0">
  <meta charset="utf-8">
  <style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var default_view = {
          lat: -7.770679,
          lng: 112.695688
        };

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: default_view
        });

        var td = new google.maps.Marker({
          position: {
            lat: -7.770679,
            lng: 112.695688
          },
          map: map,
          title: 'UKM Kutjur'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTUoTGhEfZmBSpPJs1pTCEJ0XRMgcOr9g&callback=initMap"
    async defer></script>
  </body>
  </html>