<?php
session_start();
 //eliminar una variable de session
 //unset($_SESSION["usuario"]);
session_destroy();
setcookie("usuario_nombre", "",-36000);
header("Location:index.php?mensaje=1");
?>