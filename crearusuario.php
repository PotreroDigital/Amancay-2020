<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cargando...</title>
    <script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
  </head>
  <body class="">
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
              </ul>
            </nav>
        </div>
      </div>

    <!-- Banner -->
      <div id="banner">
        <section class="container">
          <!--h2>Amancay</h2>
          <span>¡Sean bienvenidos!</span>
          <p>Un sitio hermoso, donde encontrarás las plantas que más produzco y su info de como cuidarlas y ayudarlas a crecer</p-->
        </section>
      </div>

    </div>
    <div class="wrapper style1">
      <div id="main" class="wrapper style4">
				<!-- Content -->
				<div id="content" class="container">
          <section>
<?php
//1)Conectando a mi base!
if ($conectar = mysqli_connect("127.0.0.1","root","")) {
  //de la base de datos
  mysqli_select_db($conectar,"viverochino");
  //2)almacen los datos del post...
  $dni03= $_POST['dni'];
  $nombre03 = $_POST['nombre'];
  $apellido03 = $_POST['apellido'];
  $edad03 = $_POST['edad'];
  $contrasena = $_POST['contrasena'];
  $email03 = $_POST['email'];
  if ($t = "SELECT contrasena FROM floricultura WHERE contrasena='$contrasena'") {
    $registro = mysqli_query($conectar,$t);
    $verificacion = mysqli_fetch_array($registro);
    if ($verificacion) {
      echo "<div><p>¡Ya está en la base de datos!</p></div>";
    }else {
      //3) Preparar orden al sql
      $consulta = "INSERT INTO floricultura(id,dni,nombre,apellido,edad,contrasena,email) VALUES('','$dni03','$nombre03','$apellido03','$edad03','$contrasena','$email03')";
      //4)Ejecutar el orden
      if (mysqli_query($conectar,$consulta)) {
        echo "<div><p>¡Registro agregado!</p></div>";
      }else {
        echo "<div><p>¡ERROR: No se agrego!</p></div>";
      }
    }
  }
}else { //De lo contrario general...
  echo "<p class='' id=''>¡Mysql no se pudo reconocer tu nombre y la contraseña!</p>";
}
 ?>
      </section>
      <form class="" action="" method="post">
        <button type="input" name="button" formaction="ingresar.php">Iniciar sesión</button>
      </form>
      <form class="" action="" method="post">
        <button type="input" name="button" formaction="inicio.php">Volver</button>
      </form>
    </div>
  </div>
</div>
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
