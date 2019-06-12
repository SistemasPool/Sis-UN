<?php 
include 'conexion.php';

$id =$_REQUEST['id'];

$del = $con -> query("DELETE FROM danos_prop_bu WHERE id_dan_prop = '$id' ");
if ($del) {
	header('Location:index.php');
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='index.php';
	</script>";
}
?>