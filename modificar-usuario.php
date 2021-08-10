<?php
include 'modificar.php';
$reg=buscar_contrasena();
$nombre=$reg['nombre'];
$apellido=$reg['apellido'];
$email=$reg['email'];
$edad=$reg['edad'];
$dni=$reg['dni'];
$code=$reg['codigodbarra'];
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Modificar</title>
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
     <div class='wrapper style2'>
       <section class='container'>
         <header class='major'>
           <h2>Modificar tus datos</h2>
         </header>
         <p>Ingresá los siguientes datos para modificar tu cuenta debajo de este texto. NOTA: Los datos que se muestran en las líneas son representadas como ejemplos a editar.</p>
         <form class="" action="" method="post">
           <input type="text" name="dni" value="" placeholder="<?php echo "$dni"; ?>">
           <input type="text" name="nombre" value="" placeholder="<?php echo "$nombre"; ?>">
           <input type="text" name="apellido" value="" placeholder="<?php echo "$apellido"; ?>">
           <input type="text" name="edad" value="" placeholder="<?php echo "$edad"; ?>">
           <input type="email" name="email" value="" placeholder="<?php echo "$email"; ?>">
           <input type="submit" name="guardar" value="Guardar cambios">
           <button type="submit" name="cancelar" formaction="busqueda-pass.php" onclick="anuncio()">cancelar</button>
         </form>
       </section>
     </div>
     <?php
     if (array_key_exists('guardar',$_POST)) {
       guardar_cambios();
     }
      ?>
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
