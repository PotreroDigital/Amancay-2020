<?php
if ($conexion= mysqli_connect("127.0.0.1","root","")) {
  mysqli_select_db($conexion,"viverochino");
  //almacenar los datos que exigimos
  $usuario = $_POST['nombre'];
  $dni = $_POST['dni'];
  $code = $_POST['code'];
  if ($q = "SELECT * FROM floricultura WHERE dni = $dni AND codigodbarra=$code") {
    $reg = mysqli_query($conexion,$q);
    $user_regg = mysqli_fetch_array($reg);
    if (settype($user_regg['nombre'],'string')== $usuario && settype($user_regg['dni'],'string')== $dni && settype($user_regg['code'],'string')== $code) {
      echo "<p>  ESTADO: ¡Usuario ingresado correctamente! </p> ";
      session_start();
      $_SESSION['nombre']= $usuario;
      $_SESSION['codigodbarra']= $code;
        if ($_SESSION['codigodbarra']>= 100000000) {
          //si el codigo de identificación es mayor o igual a 100.000.000 ... es administrador
          $_SESSION['rol'] = 'admin';
          header("Location:inicio.php");
        }else {
          //si el codigo de identificación es mayor o igual a 100.000.000 ... es cliente
          $_SESSION['rol'] = 'cliente';
          header("Location:inicio.php");
        }
    }else {
      echo "<p> ESTADO: ¡Usuario y contraseña son incorrectos! </p>";
    }
  }
}
 ?>
<form method="post">
  <button type="submit" name="button" formaction="inicio.php">Ir a inicio</button>
</form>
