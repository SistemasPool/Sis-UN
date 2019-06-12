<?php 
include '../include/conexion.php';

$id =$_REQUEST['id'];
$codigo =$_REQUEST['codigo'];


$del = $con -> query("DELETE FROM cob_adic_au_pol WHERE id_cob_ad_au = '$id' ");
if ($del) {
	header("Location: ../../automotor_individual.php?codigo=$codigo");
   // header("location: pagina.php?variable=$variable") ; 
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='../index.php';
	</script>";
}
 ?>