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
       </ul>
     </nav>
     <?php
       //1) conexcion
       if ($conexion = mysqli_connect("127.0.0.1","root","")) {
         mysqli_select_db($conexion,"viverochino");
         //2)Almacenar los $datos
         $contrasena = $_POST['contrasena'];
         //3)Preparar orden SQL
         $consulta = "DELETE FROM floricultura WHERE contrasena='$contrasena'";
         //4)Ejecutar la orden e ingresamos datos
         if (mysqli_query($conexion,$consulta)) {
           echo "<div class=''><p>¡Usuario Eliminado!</p></div>";
         }
       }else {
         echo "<div class=''><p>¡MySQL no conoce ese usuario y contraseña!</p></div>";
       }
      ?>
     <form method="post" action="">
       <div class="row uniform">
         <div class="3u$ 12u$(small)">
           <input type="submit" class="fit" formaction="busqueda-pass.php" value="Volver">Volver</input>
         </div>
       </div>
     </form>
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
