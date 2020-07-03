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
