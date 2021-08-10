 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Tabla de informes</title>
     <meta charset="utf-8" />
 		 <meta name="viewport" content="width=device-width, initial-scale=1" />
 		 <link rel="stylesheet" href="assets/css/main2.css" />
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
          <li><a href="quienessomos.html">Sobre nosotros</a></li>
          <li><a href="agradecimientos.html">Agradecimientos</a></li>
          <li><a href="gazanias-comunes-perennes.php">Gazanias</a></li>
          <li><a href='cerrar.php'>Cerrar Sesión</a></li>
 				</ul>
 			</nav>

 		<!-- One -->
 			<section id="One" class="wrapper style3">
 				<div class="inner">
 					<header class="align-center">
 						<p>Solo los administradores pueden ver</p>
 						<h2>Tabla de información</h2>
 					</header>
 				</div>
 			</section>

 		<!-- Main -->
 			<div id="main" class="container">

 				<!-- Elements -->
 					<h2 id="elements">Elements</h2>
          <div class="row 200%">
						<div class="6u 12u$(medium)">
              <div class="table-wrapper">
                <table>
                  <thead>
                    <tr>
                      <th><?php  echo "Nombre";?></th>
                      <th><?php  echo "Apellido";?></th>
                      <th><?php  echo "D.N.I";?></th>
                      <th><?php  echo "Edad";?></th>
                      <th><?php  echo "E-Mail";?></th>
                      <th><?php  echo "Codigo de Identificación";?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    session_start();
                    if (empty($_SESSION['rol'])) {
                    }else {
                      if ($_SESSION['rol'] =='admin') {
                        //Conectando...
                        if ($connect = mysqli_connect("127.0.0.1","root","")) {
                          echo "¡Bienvenido, $_SESSION[nombre] !";
                          echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";
                          //ejecutar la orden SQL
                          $consulta= "SELECT*FROM floricultura";
                          mysqli_select_db($connect,"viverochino");
                          $datos = mysqli_query($connect,$consulta);
                          while ($fila=mysqli_fetch_array($datos)) {
                                echo "
                                  <tr>
                                  <td>$fila[nombre]</td>
                                  <td>$fila[apellido]</td>
                                  <td>$fila[dni]</td>
                                  <td>$fila[edad]</td>
                                  <td>$fila[email]</td>
                                  <td>$fila[codigodbarra]</td>
                                </tr>
                                ";
                          }
                        }
                        else {
                          echo "<p>¡Mysql no reconoce el usuario, tabla o la base de datos!</p>";
                        }
                      }elseif ($_SESSION['rol'] =='cliente') {
                        echo "La base de datos detectó que eres clientes... Debes salir de esta zona.";
                      }else {
                        echo "¡MySQL Detectó que no estás ingresado! Se te enviará nuevamente al inicio";
                        header("Location:inicio.php");
                      }
                    }
                     ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2"></td>
                      <td></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
        </div>
     </div>
     <!-- Footer -->
 			<footer id="footer">
 				<div class="container">
 					<ul class="icons">
 					</ul>
 				</div>
 				<div class="copyright">
 					&copy; Brian Rogers. Hecho en 2020. Todos los derechos reservados.
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
