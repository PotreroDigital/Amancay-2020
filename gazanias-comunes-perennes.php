<!DOCTYPE HTML>
<!--
	Solarize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Gazanias - Amancay</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
    <script src="js/system2.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/estilo1.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

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
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style4">
				<div class="container">
					<div class="row">

						<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
								<header class="major">
									<h2>Catálogos</h2>
								</header>
								<ul class="default">
									<li><a href="gazanias-comunes-perennes.php">Gazanias</a></li>
								</ul>
							</section>
							<!--section>
								<header class="major">
									<h2>Catálogos</h2>
								</header>
								<ul class="default">
									<li><a href="#"></a></li>
								</ul>
							</section-->
						</div>

						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h2>Gazania</h2>
									<span class="byline"><i>Gazania x hybrida, Gazania splendens</i></span>
								</header>
                <p class="container2020">
                  <div class="slider2020">
                    <img src="images/IMG_1_1.jpg" height="600" width="600">
                  </div>
                  <div class="slider2020">
                    <img src="images/IMG_2_2.jpg" height="600" width="600">
                  </div>
                </p>
								<p>Nombre científico (Latín): <i>Gazania x hybrida, Gazania splendens</i>. </p>
                <p>Nombre común (Nombre vulgar): Gazania. </p>
                <p>Familia: <i>Asteraceae</i>. </p>
                <p>Origen: Sudáfrica. </p>
                <p>Altura: 20 Cm. </p>
                <p>Colores: Amarillo, Rojo, Naranja, Rosa. </p>
                <p>Similares a: Margarita (se diferencian por su gran tamaño) </p>
                <p>Temperaturas: Aguanta heladas débiles (-5°C) y esporádicas. Para climas suaves. </p>
                <p>Su etapa de producción y floración comienza en Primavera, hasta el final de verano. En países como Argentina, puede plantarse en terrenos húmedos o ser cultivado en macetas. Cada día soleado (que es necesario para la Fotosíntesis), sus flores se abren y liberan unos colores intensos. Sus riegos no deben ser abundantes en primavera, otoño e invierno, en cambio en verano, necesita abundante agua, ya que a escasa humedad, deben tomar agua fresca.</p>
                <p>Su mayor momento de producir es a partir de la primavera, sus frutos son unas semillas protegidas con pequeños pelos; estos pelos también ayuda a que la semilla pueda desplazar a otros territorios, pero las chances en germinar y desarrollar a planta son bajas, aunque es recomendable germinar desde maceta.</p>
							</section>
						</div>
					</div>
				</div>
			</div>

		<!-- Team -->
			<div class="wrapper style5">
				<section id="team" class="container">
					<header class="major">
						<h2></h2>
						<span class="byline"></span>
					</header>
					<div class="row">
						<div class="3u">
						</div>
						<div class="3u">
						</div>
						<div class="3u">
						</div>
						<div class="3u">
						</div>
					</div>
				</section>
			</div>

	<!-- Footer -->
		<div id="footer">
			<section class="container">
				<header class="major">
					<h2></h2>
					<span class="byline"></span>
				</header>
				<ul class="icons">
					<li class="active"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<hr />
			</section>

			<!-- Copyright -->
      <div id="copyright">
        Brian Rogers. <strong>Todos los derechos reservados.</strong>
      </div>
		</div>

	</body>
</html>
