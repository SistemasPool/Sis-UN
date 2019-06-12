
<?php 
include '../include/conexion.php';

$id =$_REQUEST['id'];
$cod_cliente =$_REQUEST['cod_cliente'];
$cod_cotizacion =$_REQUEST['cod_cotizacion'];

$del = $con -> query("DELETE FROM beneficiarios_ap WHERE id_ben_ap = '$id'");
if ($del) {
	header("Location: ../include/vercotizaionap.php?cod_cliente=$cod_cliente&cod_cotizacion=$cod_cotizacion");
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='../index.php';
	</script>";
}
 ?>
   