<?php 
include 'conexion.php';

$id = $_REQUEST['id'];
$cod_cotizacion = $_REQUEST['cod_cotizacion'];
$cod_cliente = $_REQUEST['cod_cliente'];

$del = $con -> query("DELETE FROM clau_accidentes_pol WHERE id_accid_pol='$id'");
if ($del) {
	header("Location: ../include/vercotizaionap.php?cod_cotizacion=$cod_cotizacion&cod_cliente=$cod_cliente");
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='../index.php';
	</script>";
}
 ?>