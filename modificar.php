<?php
return;

function buscar_contrasena(){
  //1)conectando...
  if ($conectar = mysqli_connect("127.0.0.1","root","")) {
    mysqli_select_db($conectar,"viverochino");
    //2) Almacenar los datos...
    $contrasena = $_POST['contrasena'];
    if ($b = "SELECT * FROM floricultura WHERE contrasena ='$contrasena'") {
      $reg=mysqli_query($conectar,$b);
      $contrasena_reg = mysqli_fetch_array($reg);
      if ($contrasena_reg['contrasena'] == $contrasena) {
        return $contrasena_reg;
      }
    }else {
      echo "<p>¡Mysql no pudo conocer ese usuario y contraseña!</p>";
    }
  }else {
    echo "<p>¡ERROR!<p>";
  }
}
function guardar_cambios(){
  //1)conexion
  if ($conectar6 = mysqli_connect("127.0.0.1","root","")){
    mysqli_select_db($conectar6,"viverochino");
    //2) Almacenar...
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $contrasena3 = $_POST['contrasena'];
    //3)Preparar la orden
    $consultados = "UPDATE floricultura SET dni='$dni',nombre='$nombre',
    apellido='$apellido', email = '$email', edad='$edad',
    contrasena='$contrasena3'  WHERE contrasena =$contrasena3";
    //4) Ejecutar la orden e ingresamos los datos
    mysqli_query($conectar6,$consultados);
      header('Location:busqueda-pass.php');
      return;
  }else {
    echo "¡ERROR FATALITY!";
  }
}
 ?>
