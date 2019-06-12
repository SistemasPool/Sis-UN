<?php 
include 'conexion.php';

$id =$_REQUEST['id'];
$del = $con -> query("DELETE FROM acc_perso_au_pol WHERE id_acc_pers = '$id'");
if ($del) {
	header('Location: ../../polizas/include/verpoliza.php?carnet='.$_REQUEST['carnet']);
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='../index.php';
	</script>";
}
 ?>