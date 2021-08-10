<?php
echo "Espere, por favor...";
session_start();
session_destroy();
header("Location:inicio.php");
 ?>
