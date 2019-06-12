<?php
include "include/conexion.php";
$id = mysqli_real_escape_string($con,  $_POST['id']);
$tipo_pago = mysqli_real_escape_string($con,  $_POST['tipo_pago']);

$up = $con -> query("UPDATE automovil_cotizacion SET tipo_pago='$tipo_pago' WHERE id_automovil='$id'");
if ($up) {
	echo "<script>
	location.href='index.php';
	</script>";
}else{
	echo "<script>
	location.href='index.php?id=".$id."';
	</script>";
}
?>