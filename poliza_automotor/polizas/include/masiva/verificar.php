<?php
include("verificar_sesion.php");
$con = new mysqli('localhost','root','','correspondencia');

$usuario =  $_POST["usuario"];
$password = $_POST["password"];
$sql = $con ->query("SELECT * FROM usuarios WHERE usuario='$usuario' and pass='$password'");
//$valida = $sql -> fetch_assoc();
echo $row_cnt = mysqli_num_rows($sql);
if($row_cnt>0)
{
     $fila= $sql -> fetch_assoc();
	 setcookie("usuario_nombre", $fila["nombre"]);
	 $_SESSION["usuario"]=$fila["usuario"];
     $_SESSION["distrito"]=$fila["distrito"];
     header("Location:principal.php");
}else{
echo '<br>El usuario y el password son incorrectos';
echo '<br><a href="index.php">Regresar</a>';
}
?>