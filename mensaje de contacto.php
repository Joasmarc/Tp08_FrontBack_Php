<?php
	$mensaje = "Gracias Por Visitar Nuestra Pagina";

	if (isset($_GET['dato'])) {
		$mensaje = "Su Pregunta De Precio Fue Enviado Con Exito, Gracias por contactarnos!!!. Pronto Estaremos Enviandole La Informacion";
		// $mensaje = "Su Mensaje Fue Enviado Con Exito, Gracias por contactarnos!!!";
	}
	if (isset($_GET['contacto'])) {
		$datoContacto = $_GET['contacto'];
		$mensaje = "Le Estaremos Enviado Precio E Informacion Del Producto a: ".$datoContacto;
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		 <link rel="shortcut icon" href="img/logo.png" type="image/png" class="img-fluid">
		<title>Categoria</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>+58-0244-417-80-07 / 0414-236-1936 / 0424-887-9164</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> TodoPeriquito08@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> La Victoria, Edo.Aragua</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="catalogo.php" method="POST">
									<select name="categoriaBuscar" class="input-select">
										<option value="0">Todas</option>
										<option value="Medicina Veterinaria">Medicina</option>
										<option value="Accesorios Mascotas">Accesorios</option>
										<option value="Acuarios">Acuarios</option>
										<option value="Ferreteria">Ferreteria</option>
										<option value="Tecnologia">Tecnologia</option>
										<option value="Articulos Del Hogar">Hogar</option>
									</select>
									<input name="nombreBuscar" class="input" placeholder="Producto A Buscar">
									<button name="buscar" type="submit" class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="catalogo.php?categoria=Medicina+Veterinaria">Medicina Veterinaria</a></li>
						<li><a href="catalogo.php?categoria=Accesorios+Mascotas">Accesorios Mascotas</a></li>
						<li><a href="catalogo.php?categoria=Acuarios">Acuarios</a></li>
						<li><a href="catalogo.php?categoria=Ferreteria">Ferreteria</a></li>
						<li><a href="catalogo.php?categoria=Tecnologia">Tecnologia</a></li>
						<li><a href="catalogo.php?categoria=Articulos+Del+Hogar">Articulos Del Hogar</a></li>
						<li><a href="catalogo.php?categoria=Todos">Todos</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<h1><?= $mensaje ?></h1>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-6 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Nosotros</h3>
								<p>Empresa dedicada a la distribucion de productos y medicina para mascotas, el hogar y tu familia</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>La Victoria, Edo.Aragua</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+58-0244-417-80-07</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>TodoPeriquito08@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<li><a href="catalogo.php?categoria=Medicina+Veterinaria">Medicina Veterinaria</a></li>
									<li><a href="catalogo.php?categoria=Accesorios+Mascotas">Accesorios Mascotas</a></li>
									<li><a href="catalogo.php?categoria=Acuarios">Acuarios</a></li>
									<li><a href="catalogo.php?categoria=Ferreteria">Ferreteria</a></li>
									<li><a href="catalogo.php?categoria=Tecnologia">Tecnologia</a></li>
									<li><a href="catalogo.php?categoria=Articulos+Del+Hogar">Articulos Del Hogar</a></li>
									<li><a href="catalogo.php?categoria=Todos">Todos</a></li>
								</ul>
							</div>
						</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Desarrollado por <a href="https://colorlib.com" target="_blank">Joasmarc Developer</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
