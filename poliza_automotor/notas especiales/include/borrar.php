<?php 
include '../include/conexion.php';

$id =$_REQUEST['id'];

$del = $con -> query("DELETE FROM notas_automotor WHERE id_nota_auto = '$id' ");
if ($del) {
	header('Location: ../index.php');
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='../index.php';
	</script>";
}
 ?>