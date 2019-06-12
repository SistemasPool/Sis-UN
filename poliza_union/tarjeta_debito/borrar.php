<?php 
include 'conexion.php';

$id =$_REQUEST['id'];

$del = $con -> query("DELETE FROM tarjeta_debito WHERE id_tarjeta_debito = '$id' ");
if ($del) {
	header('Location: index.php');
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='index.php';
	</script>";
}
?>