<!DOCTYPE HTML>

<html>
	<head>
		<title>Iniciar Sesión</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        
	</head>
	<body style="background-image: url(images/back.jpg)">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<img style="height: 170px; width: 300px;" src="images/metavet.png" alt="" />
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="index.php">Beneficios</a></li>
					<li><a href="index.php">Saber más</a></li>
				</ul>
			</nav>

        <header class="align-center">
            <h1><a class="logo">Iniciar sesión</a></h1>
                
                 
            <div class="card card-container">
                
                <img id="profile-img" class="profile-img-card" src="images/images.jpg" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                

				        <input type="checkbox" id="human" name="human" checked>
				        <label for="human">No soy un robot
                </label>

                    
                    <input type="button" class="btn btn-warning" value="Acceder" onclick="location.href = 'monitoru.php';">
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Olvidaste la contraseña?
                </a>
            </div><!-- /card-container -->
                
        </header>
        
        

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