<?php 
include 'conexion.php';

$id =$_REQUEST['id'];

$del = $con -> query("DELETE FROM incencio_bu WHERE id_incendio_bu='$id' ");
if ($del) {
	header('Location: index.php');
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='index.php';
	</script>";
}
 ?>