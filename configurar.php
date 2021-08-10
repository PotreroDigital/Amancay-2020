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
          <h2>Configuración</h2>
        </header>
        <p>¡Bienvenido a la configuración! </p>
        <p>Por favor... ingrese tu D.N.I y código de identificación y luego haz clic en <strong>Modificar cuenta</strong> para editar tus datos persaonales.  </p>
        <p>Si estás seguro que deseas eliminar, haz clic en <strong>Eliminar cuenta</strong>, y todos tus datos se cerrarán y todo tus actividades también.</p>
        <form action="eliminar-cuenta.php" method="post">
          <input type="text" name="dni" value="" placeholder="<?php  echo "Tu D.N.I";?>" size="8">
          <input type="text" name="code" value="" placeholder="<?php  echo "Tu código";?>" size="9">
          <input type="submit" name="submit" value="Eliminar cuenta">
          <input type="submit" name="modificar" formaction="modificar-usuario.php" value="Modificar tus datos">
        </form>
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
