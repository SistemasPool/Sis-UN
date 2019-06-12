<?php 
include 'conexion.php';

$id =$_REQUEST['id'];
$del = $con -> query("DELETE FROM riesgo_cubierto_au_pol WHERE id_riecu='$id'");
if ($del) {
	header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$_REQUEST['cod_cotizacion']);
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='../index.php';
	</script>";
}
 ?>