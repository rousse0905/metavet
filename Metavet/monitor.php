<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Resultados</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
	<body class="subpage">


		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">Resultados</a>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="index.php">Beneficios</a></li>
					<li><a href="index.php">Saber más</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
			

			<div id="googleMap" style="width:100%;height:900px;"></div>

		<!-- Footer -->
			<footer id="footer">
        <div class="inner">
          <h2>Contáctanos</h2>
          <ul class="actions">
            <li><span class="icon fa-phone"></span> <a href="#">(248) 119-0102</a></li>
            <li><span class="icon fa-envelope"></span> <a href="#">teamchronos@gmail.com</a></li>
            <li><span class="icon fa-map-marker"></span> 123 Oriente, Puebla,  1469</li>
          </ul>
        </div>
        <div class="copyright">
          &copy; chronosteam <a href="https://templated.co">METAVET</a>. <a href="https://unsplash.com">incorporation</a>.
        </div>
      </footer>

			<script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 5,
          center: {lat: 23.6345005, lng: -102.5527878} , 
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: 23.634505, lng: -105.567893},
        {lat: 23.634505, lng: -105.567893},
        {lat: 29.634505, lng: -109.567893},
        {lat: 32.634505, lng: -119.567893},
        {lat: 36.634505, lng: -123.567893},
        {lat: 36.634505, lng: -123.567893},
        {lat: 36.634505, lng: -123.567893},
        {lat: 36.634505, lng: -123.567893},
        {lat: 36.634505, lng: -123.567893},
        {lat: 48.634505, lng: -180.567893},
        {lat: 50.634505, lng: -173.567893},
        {lat: 50.634505, lng: -173.567893},
        {lat: 50.634505, lng: -173.567893},
        {lat: 50.634505, lng: -173.567893},
        {lat: 50.634505, lng: -173.567893},
        {lat: 21.634505, lng: -189.567893},
        {lat: 21.634505, lng: -189.567893},
        {lat: 21.634505, lng: -189.567893},
        {lat: 21.634505, lng: -189.567893},
        {lat: 21.634505, lng: -189.567893},
        {lat: 31.634505, lng: -111.567893},
        {lat: 31.634505, lng: -111.567893},
        {lat: 31.634505, lng: -111.567893}
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBii34IarQQzZx1H4Awp62nrNsgrszseAM&callback=initMap">
    </script>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>