<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
      <title>St Vincent</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto+Mono:300|Roboto+Slab:300|Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="icon" type="image/ico" href="img/vincent-logo.png">
  </head>
  <body>
  <div class="nav">
  <div id="particles-js"></div>
    <ul>
      <li><img src="img/vincent-logo.png"></li>
      <li><p>St Vincent and the grenadines</p></li>
    </ul>
    <ul class="links">
      <li><a href="#"><p>History</p></a></li>
      <li><a href="#"><p>Contempory</p></a></li>
      <li><a href="#"><p>Garifuna</p></a></li>
      <li><a href="#"><p>Ethnobotany</p></a></li>
      <li><a href="#"><p>3D Island</p></a></li>
      <li><a href="#"><p>Admins</p></a></li>
    </ul>
  </div>
  <div id="map"></div>
  <script type="text/javascript" src="particles.min.js"></script>
  <script>
    particlesJS.load('particles-js', 'particlesjs-config.json');

    function initMap(){
      var options = {
        zoom:11,
        center:{lat:13.15872,lng:-61.22475}
      }

      var map = new google.maps.Map(document.getElementById('map'), options);
    }
  
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGCTYrqoUq5gDTru2NbotuYDPzVvGAYxY&callback=initMap"
  async defer></script>
</body>
</html>