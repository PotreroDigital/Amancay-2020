 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="assets/css/main2.css" />
   </head>
<body class="subpage">
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
         <li><a href='registrar.php'>Registrar</a></li>
       </ul>
     </nav>
     <section id="One" class="wrapper style3">
       <div class="inner">
         <header class="align-center">
           <p></p>
           <h2>Eliminar usuario</h2>
         </header>
       </div>
     </section>
     <div id="main" class="container">
       <div class="row 200%">
     <?php
       //1) conexcion
       if ($conexion = mysqli_connect("127.0.0.1","root","")) {
         mysqli_select_db($conexion,"viverochino");
         //2)Almacenar los $datos
         $dni03 = $_POST['dni'];
         //3)Preparar orden SQL
         $consulta = "DELETE FROM floricultura WHERE dni=$dni03";
         //4)Ejecutar la orden e ingresamos datos
         if (mysqli_query($conexion,$consulta)) {
           echo "
           <div class='6u 12u$(medium)'>
           <header>
             <h2>Aviso</h2>
             <p>¡Usuario eliminado con éxito!</p>
           </header>
           <p>¡Ya podés tomar un descanso!</p>
           </div>
           <br></br>
           <br></br>
           <br></br>
           <ul class='actions'>
             <li><li><a href='registrar.php' class='button special big'>Registrar</a></li>
           </ul>
           <ul class='actions'>
             <li><a href='inicio.php' class='button'>Volver a inicio</a></li>
           </ul>
           <ul class='actions'>
             <li><a href='busqueda-pass.php' class='button'>Volver a buscar</a></li>
           </ul>

           ";
         }
       }else {
         echo "
         <div class='6u 12u$(medium)'>
         <header>
           <h2>Aviso</h2>
           <p>¡MySQL no conoce ese usuario y D.N.I!</p>
         </header>
         <p>¡Tal vez intertaste mal el D.N.I o no exista!</p>
         </div>
         <br></br>
         <br></br>
         <br></br>
         <ul class='actions'>
           <li><a href='registrar.php' class='button special big'>Registrar</a></li>
         </ul>
         <ul class='actions'>
           <li><a href='inicio.php' class='button'>Volver a inicio</a></li>
         </ul>
         <ul class='actions'>
           <li><a href='busqueda-pass.php' class='button'>Volver a buscar</a></li>
         </ul>
         ";
       }
      ?>

      </div>
    </div>
     <footer id="footer">
       <div class="copyright">
         &copy; Brian Rogers. <strong>Todos los derechos reservados.</strong>
       </div>
     </footer>
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/jquery.scrollex.min.js"></script>
     <script src="assets/js/skel.min.js"></script>
     <script src="assets/js/util.js"></script>
     <script src="assets/js/main.js"></script>
   </body>
 </html>
