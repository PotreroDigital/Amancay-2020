<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eliminar o modificar la cuenta</title>
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
                <li><a href='cerrar.php'>Cerrar Sesión</a></li>
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
    <div class='wrapper style2'>
      <section class='container'>
        <header class='major'>
          <h2>Configurar cuentas de usuarios</h2>
        </header>
        <p>¡Bienvenido a la configuración de cuentas de usuario! </p>
        <p>Por favor... ingrese el D.N.I y luego haz clic en <strong>Eliminar cuenta</strong> o apretá el botón <strong>modificar los datos</strong>.  </p>
        <p>Si no estás seguro qué código y D.N.I deseas eliminar o modificar, haz clic en <strong>Ver tabla</strong>, verás una tabla donde ver los datos de cada cliente registrado.</p>
        <form action="eliminar-admin.php" method="post">
          <input type="text" name="dni" value="" placeholder="<?php  echo "Tu D.N.I";?>" size="8">
          <input type="text" name="code" value="" placeholder="<?php  echo "Tu código";?>" size="9">
          <input type="submit" name="submit" value="Eliminar cuenta">
          <input type="submit" name="modificar" formaction="modificar-usuario.php" value="Modificar los datos">
        </form>
        <?php
        session_start();
        if ($_SESSION['rol'] =='admin') {
          echo "
          <form method='post'>
            <input type='submit' formaction='tabla.php' name='table' class='button' value='Ver Tabla'>
          </form>
          ";
        }elseif ($_SESSION['rol'] =='cliente') {
          //Solo admin puede ver...
        }else {
          //no pasa nada.
        }

         ?>
      </section>
    </div>
      </div>
    </div>
  </div>
     <div id="footer">
       <section class="container">
         <hr />
       </section>
       <!-- Copyright -->
       <div id="copyright">
         Brian Rogers. <strong>Todos los derechos reservados.</strong>
       </div>
     </div>
  </body>
</html>
