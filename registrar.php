<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Registrate - Amancay</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main2.css" />
    <meta name="keywords" content="HTML, CSS, Javascript, PHP, SQL" />
    <meta name="description" content="¡Registrate para saber más de mis ventas de plantas y más!" />
	</head>
	<body class="subpage">

    <!-- Header -->
			<header id="header">
				<div class="logo"><a href="inicio.php"><span>Amancay</span></a></div>
				<a href="#menu">Menú</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="inicio.php">Inicio</a></li>
					<li><a href="quienessomos.html">Quienes somos</a></li>
          <li><a href="agradecimientos.html">Agradecimientos</a></li>
					<li><a href="ingresar.php">Ingresar</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>¡Registrate para saber más de mis ventas de plantas y más!</p>
						<h2>Registro</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
			<div id="main" class="container">

				<!-- Elements -->
					<h2 id="elements"></h2>
							<!-- Form -->
								<h3>¡Completa esto completo para poder unirte a nuestro sitio!</h3>

								<form method="post" action="crearusuario.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="nombre" id="name" value="" placeholder="<?php echo "Nombre"; ?>" />
										</div>
                    <div class="6u 12u$(xsmall)">
											<input type="text" name="apellido" id="surname" value="" placeholder="<?php echo "Apellido"; ?>" />
										</div>
                    <div class="6u 12u$(xsmall)">
											<input type="text" name="dni" id="name" value="" placeholder="<?php echo "D.N.I"; ?>" />
										</div>
                    <div class="6u$ 12u$(xsmall)">
											<input type="text" name="edad" id="name" value="" placeholder= "<?php echo "Edad"; ?>" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="email" value="" placeholder= "<?php echo "Correo Electrónico"; ?>" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="code" id="name" value="" placeholder= "<?PHP echo "Código";?>" />
										</div>
                    <div class="3u$ 12u$(small)">
											<input type="submit" value="<?php echo "Registrar"; ?>" class="fit" />
										</div>
									</div>
								</form>
							<hr />
			</div>
		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					&copy; Brian Rogers. Hecho en 2020. <strong>Todos los derechos reservados.</strong>
				</div>
			</footer>
		<!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
	</body>
</html>
