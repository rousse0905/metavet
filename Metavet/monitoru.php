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
		<script type='text/javascript'
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
    <script type="text/javascript">
    var map, clusterLayer, infobox;

    function GetMap() {
        map = new Microsoft.Maps.Map('#myMap', {
            credentials: 'Your Bing Maps Key'
        });

        //Add an infobox to the map.
        infobox = new Microsoft.Maps.Infobox(map.getCenter(), { visible: false });
        infobox.setMap(map);

        Microsoft.Maps.loadModule("Microsoft.Maps.Clustering", function () {
            //Create a clustering layer
            clusterLayer = new Microsoft.Maps.ClusterLayer(createCustomPushpins(100), {
                clusteredPinCallback: createCustomClusterPushpins,
                callback: createPushpinList
            });
            map.layers.insert(clusterLayer);
        });
    }

    function createCustomPushpins(size) {
        //Generate random pushpins within the map bounds.
        var pins = Microsoft.Maps.TestDataGenerator.getPushpins(size, map.getBounds());

        for (var i = 0; i < size; i++) {
            //Create a title for each pushpin.
            pins[i].setOptions({ title: 'Pushpin #' + i });

            //Add handler for the pushpin click event.
            Microsoft.Maps.Events.addHandler(pins[i], 'click', pushpinClicked);
        }

        return pins;
    }

    function createCustomClusterPushpins(cluster) {
        //Create a title for the cluster.
        cluster.setOptions({
            title: 'Cluster of ' + cluster.containedPushpins.length + ' pins'
        });

        //Add handler for the cluster click event.
        Microsoft.Maps.Events.addHandler(cluster, 'click', pushpinClicked);
    }

    function pushpinClicked(e) {
        //Show an infobox when a pushpin is clicked.
        showInfobox(e.target);
    }

    function createPushpinList() {
        //Create a list of displayed pushpins each time clustering layer updates.

        if (clusterLayer != null) {
            infobox.setOptions({ visible: false });

            //Get all pushpins that are currently displayed.
            var data = clusterLayer.getDisplayedPushpins();
            var output = [];

            //Create a list of links for each pushpin that opens up the infobox for it.
            for (var i = 0; i < data.length; i++) {
                output.push("<a href='javascript:void(0);' onclick='showInfoboxByGridKey(", data[i].gridKey, ");'>");
                output.push(data[i].getTitle(), "</a><br/>");
            }

            document.getElementById('listOfPins').innerHTML = output.join('');
        }
    }

    function showInfoboxByGridKey(gridKey) {
        //Look up the cluster or pushpin by gridKey.
        var clusterPin = clusterLayer.getClusterPushpinByGridKey(gridKey);

        //Show an infobox for the cluster or pushpin.
        showInfobox(clusterPin);
    }

    function showInfobox(pin) {
        var description = [];

        //Check to see if the pushpin is a cluster.
        if (pin.containedPushpins) {

            //Create a list of all pushpins that are in the cluster.
            description.push('<div style="max-height:75px;overflow-y:auto;"><ul>');
            for (var i = 0; i < pin.containedPushpins.length; i++) {
                description.push('<li>', pin.containedPushpins[i].getTitle(), '</li>');
            }
            description.push('</ul></div>');
        }

        //Display an infobox for the pushpin.
        infobox.setOptions({
            title: pin.getTitle(),
            location: pin.getLocation(),
            description: description.join(''),
            visible: true
        });
    }
    </script>
	</head>
	<body class="subpage">


		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.html" class="logo">Resultados</a>
			</header>

		<!-- Menu -->
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
        
<div id="myMap" style="width:100%;height:500px;"></div>
    <br />

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



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>