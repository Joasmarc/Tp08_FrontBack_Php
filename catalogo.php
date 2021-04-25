<!-- backend -->
<?php
	require('admin/conexion.php');

	if (isset($_GET['categoria'])) {
		$categoria = $_GET['categoria'];
		if ($categoria == "Todos") {
			$querySelect = "SELECT * FROM categorias";
		}else {
			$categoriaEscape = mysqli_real_escape_string($conexion, $categoria);
			$querySelect = "SELECT * FROM categorias WHERE categoria='$categoriaEscape'";
		}
		$querySelectResult = mysqli_query($conexion, $querySelect);
	}
	if (isset($_POST['buscar'])) {
		if (!empty($_POST['nombreBuscar']) && $_POST['categoriaBuscar']==0) {
			$palabraBuscar = $_POST['nombreBuscar'];
			$palabraBuscarEscape = mysqli_real_escape_string($conexion, $palabraBuscar);
			$queryBuscar = "SELECT * FROM categorias WHERE nombre LIKE '%$palabraBuscarEscape%' ";
			$categoria = "Buscar Todos";
		}else if (!empty($_POST['nombreBuscar']) && ($_POST['categoriaBuscar'])<>0) {
			$palabraBuscar = $_POST['nombreBuscar'];
			$palabraBuscarEscape = mysqli_real_escape_string($conexion, $palabraBuscar);
			$categoria = $_POST['categoriaBuscar'];
			$queryBuscar = "SELECT * FROM categorias WHERE categoria='$categoria' AND nombre like '%$palabraBuscarEscape%' ";
		}else {
			header("location:index.php");
		}
		$querySelectResult = mysqli_query($conexion, $queryBuscar);    

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
		<title><?= $categoria ?></title>

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
						<div class="col-md-4">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-8">
							<?php
							if (!empty($palabraBuscar)) {
								echo "<h4 class='text-primary'>Su Busqueda fue > ".$palabraBuscar."</h4>";
							}else {
								echo "<h4 class='text-primary'>".$categoria."</h4>";
							}
							?>
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
						<li class="active"><a href="#"><?= $categoria ?></a></li>
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
<!-- backend -->
<?php
	$contador = 0;
	while ($row = mysqli_fetch_array($querySelectResult)) {
		// validar que sean 4 por fila
		if ($contador < 4) {
			echo" 
			<div class='col-md-3'>
			<div class='product'>
				<div class='product-img'>
					<img src='admin/".$row['imgRoute']."' alt='Imagen Del Producto'>
				</div>
				<div class='product-body'>
					<p class='product-category'>".$row['categoria']."</p>
					<h3 class='product-name'><a href='#'>".$row['nombre']."</a></h3>
				</div>
				<div class='add-to-cart'>
					<a href='producto.php?informacionProducto=".$row['id']."'><button class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i>Ir a Compras</button></a>
				</div>
				</div>
			</div>
			";
			$contador += 1;
		// si son mas de 4 abrir nueva fila
		}else {
			// abrir nueva fila
			echo "</div>
			<div class='row my-2'>";
			// seguir insertando datos en nueva fila
			echo" 
			<div class='col-md-3'>
			<div class='product'>
				<div class='product-img'>
					<img src='admin/".$row['imgRoute']."' alt='Imagen Del Producto'>
				</div>
				<div class='product-body'>
					<p class='product-category'>".$row['categoria']."</p>
					<h3 class='product-name'><a href='#'>".$row['nombre']."</a></h3>
				</div>
				<div class='add-to-cart'>
					<a href='producto.php?informacionProducto=".$row['id']."'><button class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i>Ir a Compras</button></a>
				</div>
				</div>
			</div>";
			$contador = 1;
		}
	}
	mysqli_close($conexion);
?>
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
