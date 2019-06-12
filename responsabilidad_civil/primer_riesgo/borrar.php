<?php 
include 'conexion.php';

$id = $_REQUEST['id'];
$cod_cotizacion = $_REQUEST['cod_cotizacion'];
$cod_cliente = $_REQUEST['cod_cliente'];

$del = $con -> query("DELETE FROM primer_riesgo_pol WHERE id_pr='$id'");
if ($del) {
	header("Location: ../include/verpolizaincendio.php?cod_cotizacion=$cod_cotizacion&cod_cliente=$cod_cliente");
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='../index.php';
	</script>";
}
 ?>