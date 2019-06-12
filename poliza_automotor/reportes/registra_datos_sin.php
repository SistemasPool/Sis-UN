<?php
include "include/conexion.php";
$id = mysqli_real_escape_string($con,  $_POST['id']);
$num_siniestro = mysqli_real_escape_string($con,  $_POST['siniestro']);
$estado = mysqli_real_escape_string($con,  $_POST['estado']);
$monto_reserva = mysqli_real_escape_string($con,  $_POST['montoreserva']);
date_default_timezone_set('America/La_Paz');
$hoy = date("Y-m-d H:i:s");
$up = $con -> query("UPDATE siniestros SET estado='$estado', monto_reserva='$monto_reserva' WHERE id_siniestro='$id'");
$ins = $con -> query("INSERT INTO `datos_act_sin`(`id_datos_act_sin`, `num_siniestro`, `estado`, `monto_reserva`, `fecha_registro`) VALUES ('', '$num_siniestro', '$estado', '$monto_reserva', '$hoy')");
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