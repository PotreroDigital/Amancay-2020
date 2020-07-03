<?php
//Conectando...
if ($connect = mysqli_connect("127.0.0.1","root","")) {
  echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";
  //ejecutar la orden SQL
  $consulta= "SELECT*FROM floricultura";

  mysqli_select_db($connect,"viverochino");
  $datos = mysqli_query($connect,$consulta);
  echo "<h1>registrados</h1>";
  echo "<p>";
  echo "<table>";
  echo "<tr>";
    echo "<th>";
      echo "D.N.I";
      echo " - ";
      echo "email";
      echo " - ";
      echo "Nombre";
      echo " - ";
      echo "Apellido";
      echo " - ";
      echo "Correo Electrónico";
      echo " - ";
      echo "edad";
      echo " - ";
      echo "contraseña";
    echo "</th>";
  echo "</tr>";

  while ($fila=mysqli_fetch_array($datos)) {
    echo "<tr>";//separador
      echo "<td>";
        echo $fila['dni'];
        echo " - ";
        echo $fila['email'];
        echo " - ";
        echo $fila['nombre'];
        echo " - ";
        echo $fila['apellido'];
        echo " - ";
        echo $fila['email'];
        echo " - ";
        echo $fila['edad'];
        echo " - ";
        echo $fila['contrasena'];
      echo "</td>";
    echo "</tr>";
    echo "</table>";
    echo "</p>";
  }
}
else {
  echo "<p>Mysql no lo reconoce el usuario y password</p>";
}
 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Eliminar o modificar cuenta</title>
   </head>
   <body>
     <h2>Busqueda de modificación</h2>
     <h3>¡Bienvenido a la busqueda de cuentas de usuario! Por favor... ingrese la contraseña para eliminar o apretá el botón para modificar los datos.</h3>
     <form class="" action="eliminar-admin.php" method="post">
       <input type="text" name="contrasena" value="" placeholder="<?php  echo "Contraseña";?>">
       <input type="submit" name="submit" value="Eliminar">
       <button type="submit" name="modificar" formaction="modificar-usuario.php">Modificar tus datos</button>
     </form>
   </body>
 </html>
