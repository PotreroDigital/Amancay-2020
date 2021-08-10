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
  $email03 = $_POST['email'];
  $code = $_POST['code'];
  if ($t = "SELECT dni FROM floricultura WHERE dni=$dni03") {
    $registro = mysqli_query($conectar,$t);
    $verificacion = mysqli_fetch_array($registro);
    if ($verificacion['dni']==$dni03 && $verificacion['codigodbarra']==$code) {
      echo "<div><p>¡Ya está en la base de datos!</p></div>
      <div class='wrapper style3'>
        <section class='container'>
          <header class='major'>
            <h2>Aviso</h2>
          </header>
          <p>¡Ya está en la base de datos esa misma información!</p>
          <p>¡O quizás el código de identificación que insertaste ya existe! Por favor, apretá 'Registrar' y vuelva a intentar.</p>
          <a href='inicio.php' class='button alt'>Volver</a>
          <a href='registrar.php' class='button alt'>Registrar</a>
        </section>
      </div>
      ";
    }else {
      //3) Preparar orden al sql
      $consulta = "INSERT INTO floricultura(id,dni,nombre,apellido,edad,email,codigodbarra) VALUES('','$dni03','$nombre03','$apellido03','$edad03','$email03','$code')";
      //4)Ejecutar el orden
      if (mysqli_query($conectar,$consulta)) {
        echo "
        <div class='wrapper style3'>
          <section class='container'>
            <header class='major'>
              <h2>¡Registro agregado!</h2>
            </header>
            <p>¡Ahora podrás disfrutar de nuestros conocimientos, y los lados más bellos de cada plantas que producimos!</p>
            <a href='ingresar.php' class='button alt'>Iniciar sesión</a>
            <a href='inicio.php' class='button alt'>Volver</a>
          </section>
        </div>
        ";
      }else {
        echo "
        <div class='wrapper style3'>
          <section class='container'>
            <header class='major'>
              <h2>¡Registro no agregado!</h2>
            </header>
            <p>¡No se pudo agregar la siguiente información! Por favor, vuelve a intentarlo más tarde.</p>
            <a href='inicio.php' class='button alt'>Volver</a>
          </section>
        </div>
        ";
      }
    }
  }
}else { //De lo contrario general...
  echo "
  <div class='wrapper style3'>
    <section class='container'>
      <header class='major'>
        <h2>¡Error!</h2>
      </header>
      <p>¡Mysql no se pudo reconocer tu nombre y la contraseña!</p>
      <a href='inicio.php' class='button alt'>Volver</a>
      <a href='registrar.php' class='button alt'>Registrar</a>
    </section>
  </div>
  ";
}
 ?>
      </section>
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
