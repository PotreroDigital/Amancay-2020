<?php
include 'modificar.php';
$reg=buscar_contrasena();
$contrasena=$reg['contrasena'];
$nombre=$reg['nombre'];
$apellido=$reg['apellido'];
$email=$reg['email'];
$edad=$reg['edad'];
$dni=$reg['dni'];

 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script src="js/system2.js"></script>
   </head>
   <body>
     <form class="" action="" method="post">
       <input type="text" name="dni" value="" placeholder="<?php echo "$dni"; ?>">
       <input type="text" name="nombre" value="" placeholder="<?php echo "$nombre"; ?>">
       <input type="text" name="apellido" value="" placeholder="<?php echo "$apellido"; ?>">
       <input type="text" name="edad" value="" placeholder="<?php echo "$edad"; ?>">
       <input type="email" name="email" value="" placeholder="<?php echo "$email"; ?>">
       <input type="password" name="contrasena" value="" placeholder="<?php echo "$contrasena"; ?>">
       <input type="submit" name="guardar" value="Guardar cambios">
       <button type="submit" name="cancelar" formaction="busqueda-pass.php" onclick="anuncio()">cancelar</button>
     </form>
     <?php
     if (array_key_exists('guardar',$_POST)) {
       guardar_cambios();
     }
      ?>
   </body>
 </html>
