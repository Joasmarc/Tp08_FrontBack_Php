<!-- Backend -->
<?php
	include("admin/conexion.php");
	// peticion 
	$peticion = "SELECT * FROM top";
	$resultado = mysqli_query($conexion,$peticion);
	// conversion de datos en array
	while ($row = mysqli_fetch_array($resultado)) {
		$id[] = $row['id'];
		$name[] = $row['nombre'];
		$categoria[] = $row['categoria'];
		$imgType[] = $row['img'];
		if ($row['nuevo']==1) {
			$nuevo[] = "<div class='product-label'>
			<span class='new'>Nuevo</span>
			</div>";
		}else{
			$nuevo[] = "";
		}
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
		 <title>Todo Periquito 08</title>

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
		<!-- IconMoon -->
		<link rel="stylesheet" href="css/style2.css">
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

		<!-- categorias principales -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Categoria Principal 1-->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Accesorios<br>Mascotas</h3>
								<a href="catalogo.php?categoria=Accesorios+Mascotas" class="cta-btn">Ir A Accesorios<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /Categoria Principal 1-->

					<!-- Categoria Principal 2 -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Medicina<br>Veterinaria</h3>
								<a href="catalogo.php?categoria=Medicina+Veterinaria" class="cta-btn">Ir A Medicina<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /Categoria Principal 2 -->

					<!-- Categoria Principal 3 -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accesorios<br>Hogar</h3>
								<a href="catalogo.php?categoria=Articulos+Del+Hogar" class="cta-btn">Ir A Articulos Del Hogar<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /Categoria Principal 3 -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /categorias principales -->

		<!-- SECTION TOP -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nuevos productos</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products top -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product1 -->
										<div class="product">
											<div class="product-img">
												<img src="productos/top-<?= $id[0] ?>.<?= $imgType[0] ?>" alt="">
												<?= $nuevo[0] ?>
											</div>
											<div class="product-body">
												<p class="product-category"><?= $categoria[0] ?></p>
												<h3 class="product-name"><a href="#"><?= $name[0] ?></a></h3>
											</div>
											<div class="add-to-cart">
												<button onclick="location.href='producto.php?informacionProductoTop=<?= $id[0] ?>'" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Ir a Compras</button>
											</div>
										</div>
										<!-- /product1 -->

										<!-- product2 -->
										<div class="product">
											<div class="product-img">
												<img src="productos/top-<?= $id[1]?>.<?= $imgType[1] ?>" alt="">
												<?= $nuevo[1] ?>
											</div>
											<div class="product-body">
												<p class="product-category"><?= $categoria[1] ?></p>
												<h3 class="product-name"><a href="#"><?= $name[1] ?></a></h3>
											</div>
											<div class="add-to-cart">
												<button onclick="location.href='producto.php?informacionProductoTop=<?= $id[1] ?>'" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Ir a Compras</button>
											</div>
										</div>
										<!-- /product2 -->

										<!-- product3 -->
										<div class="product">
											<div class="product-img">
												<img src="productos/top-<?= $id[2] ?>.<?= $imgType[2] ?>" alt="">
												<?= $nuevo[2] ?>
											</div>
											<div class="product-body">
												<p class="product-category"><?= $categoria[2] ?></p>
												<h3 class="product-name"><a href="#"><?= $name[2] ?></a></h3>
											</div>
											<div class="add-to-cart">
												<button onclick="location.href='producto.php?informacionProductoTop=<?= $id[2] ?>'" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Ir a Compras</button>
											</div>
										</div>
										<!-- /product3 -->

										<!-- product4 -->
										<div class="product">
											<div class="product-img">
												<img src="productos/top-<?= $id[3] ?>.<?= $imgType[3] ?>" alt="">
												<?= $nuevo[3] ?>
											</div>
											<div class="product-body">
												<p class="product-category"><?= $categoria[3] ?></p>
												<h3 class="product-name"><a href="#"><?= $name[3] ?></a></h3>
											</div>
											<div class="add-to-cart">
												<button onclick="location.href='producto.php?informacionProductoTop=<?= $id[3] ?>'" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Ir a Compras</button>
											</div>
										</div>
										<!-- /product4 -->

										<!-- product5 -->
										<div class="product">
											<div class="product-img">
												<img src="productos/top-<?= $id[4] ?>.<?= $imgType[4] ?>" alt="">
												<?= $nuevo[4] ?>
											</div>
											<div class="product-body">
												<p class="product-category"><?= $categoria[4] ?></p>
												<h3 class="product-name"><a href="#"><?= $name[4] ?></a></h3>
											</div>
											<div class="add-to-cart">
												<button onclick="location.href='producto.php?informacionProductoTop=<?= $id[4] ?>'" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Ir a Compras</button>
											</div>
										</div>
										<!-- /product5 -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products top -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION TOP -->

		<!-- MENSAJERIA -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Ingrese dato de contacto para recibir nuestra <strong>Lista De Precios Y Productos</strong></p>
							<form action="mensajes.php" method="post">
								<input class="input" name="dato" type="text" placeholder="Dato De Contacto Ej: WhatsApp o EMail">
								<input class="input" name="motivo" type="hidden" value="Solicitud De Lista De Precios">
								<button type="submit" name="lista" class="newsletter-btn"><i class="fa fa-envelope"></i> Solicitar</button>
							</form>
							<!-- iconos de redes -->
							<ul class="newsletter-follow">
								<!-- <li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li> -->
								<li>
									<a href="https://twitter.com/todoperiquito08" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/todoperiquito08/" target="_blank"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
							<!--/iconos de redes -->

						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /MENSAJERIA -->

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