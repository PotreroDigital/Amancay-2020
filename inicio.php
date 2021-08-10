<!DOCTYPE HTML>
<!--
	Solarize by TEMPLATED
	Edit by Brian for final project of programation
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Vivero Amancay - Inicio</title><!Solarize by TEMPLATED>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Es una página donde reunimos y compartimos fotos preciosas de flores, vendemos por unidad o en cajones y destacamos lo bello que es la mejor forma de unir la naturaleza con el ser humano." />
		<meta name="keywords" content="HTML, CSS, Javascript, PHP, SQL" />
		<meta name="author" content="Brian Rogers">
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/system2.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/estilo1.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div class="wrapper style1">

			<!-- Header -->
				<div id="header">
					<div class="container">

						<!-- Logo -->
							<h1><a href="inicio.php" id="logo">Amancay</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="active"><a href="inicio.php">Inicio</a></li>
									<li>
										<a href="">Acerca de</a>
										<ul>
											<li><a href="quienessomos.html">Sobre nosotros</a></li>
											<li><a href="agradecimientos.html">Agradecimientos</a></li>
										</ul>
									</li>
									<li><a href="registrar.php">Registrar</a></li>
									<li><a href="ingresar.php">Ingresar</a></li>
									</li>
									<?php
									session_start();
									if (empty($_SESSION['rol'])) {
										//no hace nada, los no ingresados no podran ver nada
									}else {
										if ($_SESSION['rol'] =='admin') {
											echo "<li><a href='gazanias-comunes-perennes.php'>Catálogos</a>";
											echo "<li><a href='cerrar.php'>Cerrar Sesión</a> </li>";
										}elseif ($_SESSION['rol'] =='cliente') {
											echo "<li><a href='configurar.php'>Configuración</a></li>";
											echo "<li><a href='cerrar.php'>Cerrar Sesión</a> </li>";
										}
									}
									 ?>
								</ul>
							</nav>
					</div>
				</div>
			<!-- Banner -->
				<div id="banner">
					<section class="container">
						<h2>Amancay</h2>
						<span>¡Sean bienvenidos!</span>
						<p>Un sitio hermoso, donde encontrarás las plantas que más produzco y su info de como cuidarlas y ayudarlas a crecer</p>
					</section>
				</div>

			</div>
		<!-- Section One -->
			<div class="wrapper style2">
				<section class="container">
					<div class="row double">
						<div class="6u">
							<header class="major">
								<h2>¡Estas cosas y más son un tema!</h2>
								<span class="byline"> Flores de tono intenso, plantas que crecieron y se formaron como madres o árboles... Pero con esta página te contaremos lo más básico hasta las tendencias que pasa en buenos aires y en el mundo. ¡y estas son las que trabajamos mas! #Gazanias #Osteospermun #Alegríadelhogar #Eucalipto #Obconica #Albaca.</span>
							</header>
						</div>
						<div class="6u">
							<h3>Gazanias comunes y perenne</h3>
							<p>¿Que son?, ¿Qué tipo de plantas o yuyo son?, ¿Cual es la diferencia entre comunes y perennes?, ¿Cuando es la estación ideal para sacar semillas? ¡Te contamos en la página siguiente!</p>
							<?php
							if (empty($_SESSION['rol'])) {
							echo "
							<a href='registrar.php' class='button'>Seguir leyendo</a>
						";
					}else {
						if ($_SESSION['rol'] =='admin') {
							echo "
							<a href='gazanias-comunes-perennes.php' class='button'>Seguir leyendo</a>
							";
						}elseif ($_SESSION['rol'] =='cliente') {
							echo "
							<a href='gazanias-comunes-perennes.php' class='button'>Seguir leyendo</a>
							";
						}
					}
							 ?>
						</div>
					</div>
				</section>
			</div>

		<!-- Section Two -->
			<div class="wrapper style3">
				<section class="container">
					<?php
					if (empty($_SESSION['rol'])) {
					echo "
					<header class='major'>
						<h2>¡Los ingresados disfrutan más!</h2>
					</header>
					<p>¿Por qué registrarse en esta página? Recibirás informes de cuidado, y cada semana compartimos las mejores sesiones de fotos de las plantas y destacamos su esplendor en primavera y verano. ¿Qué estás esperando?</p>
					<a href='registrar.php' class='button alt'>¡Registrate!</a>
				";
			}else {
				if ($_SESSION['rol'] =='admin') {
					echo "
					<header class='major'>
						<h2>¡Tenés el rol de administrador!</h2>
					</header>
					<p>El tener el rol de administrador es muy importante; puedes observar que hace los demás usuarios, como compartir, comentar o en general, todas sus actividades. Y por último, podés ver, editar o eliminar las cuentas de los clientes. Para hacerlo, haz clic en el botón <strong>Configurar cuentas (clientes)</strong>.</p>
					<a href='busqueda-pass.php' class='button alt'>Configurar cuentas (clientes)</a>
					";
				}elseif ($_SESSION['rol'] =='cliente') {
					echo "
					<header class='major'>
						<h2>¡Gracias por unirte a nuestra comunidad!</h2>
					</header>
					<p>Ahora, puedes ver nuestros informes semanales acerca de las plantas que producimos y sacar tus curiosidades. Para comenzar, haz clic en el botón <strong>Ver contenido</strong>.</p>
					";
					echo "<a href='contenido.php' class='button alt'>Ver contenido</a>";
				}
			}
					 ?>
				</section>
			</div>

		<!-- Section Three -->
			<div class="wrapper style4">
				<section class="container">
					<header class="major">
					</header>
					<div class="row flush">
						<div class="4u">
							<ul class="special-icons">
								<li>
								</li>
								<li>
								</li>
								<li>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</div>

		<!-- Team -->
			<div class="wrapper style5">
				<section id="team" class="container">
					<header class="major">
						<h2>Opiniones de personas cercanas</h2>
						<span class="byline">Opiniones y visiones variadas y evaluadas por mis más cercanos vecinos y amigos</span>
					</header>
					<div class="row">
						<div class="3u">
							<a href="#" class="image"><img src="images/franco.jpg" alt=""></a>
							<h3>Franco fuentes</h3>
							<p>¡Hermosas gazanias! ¡Un sendero de colores radiantes!</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/profile01.jpg" alt=""></a>
							<h3>Carla Muller</h3>
							<p>¡Los mejores pimpollos de gazania que he visto!</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/profile02.jpg" alt=""></a>
							<h3>Lautaro Marecos</h3>
							<p>¡Me encantó tus ajíes picantes!¡Y cuánta variedad de colores en los ajíes!</p>
						</div>
						<div class="3u">
							<a href="#" class="image"><img src="images/placeholder.png" alt=""></a>
							<h3>Marcos el bueno</h3>
							<p>¡Antes no sabía mucho de la albaca!¡Y aquí lo aprendí!</p>
						</div>
					</div>
				</section>
			</div>

	<!-- Footer -->
		<div id="footer">
			<section class="container">
				<!--header class="major">
					<h2>¡Póngase en contacto en nuestras redes!</h2><!--><!--h2>Connect with us</h2><-->
					<!--span class="byline">¡Tenemos redes sociales para poder atender mejor de nuestros productos!</span>
				</header-->
				<!--ul class="icons">
					<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
					<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
					<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
					<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
				</ul-->
				<hr />
			</section>

			<!-- Copyright -->
				<div id="copyright">
					Brian Rogers. <strong>Todos los derechos reservados.</strong>
				</div>
		</div>

	</body>
</html>
