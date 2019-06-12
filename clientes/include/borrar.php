<?php 
include '../include/conexion.php';

$id =$_REQUEST['id'];

$del = $con -> query("DELETE FROM clientes WHERE id_cliente = '$id' ");

$sele = $con ->query("SELECT cod_cliente FROM clientes WHERE id_cliente = '$id'");
$filas = $sele -> fetch_assoc();
$cod_cliente= $filas['cod_cliente'];

$usuario = $_SESSION["usuario"];
$accion = 'Eliminacion Natural'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$inss = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");

if ($del) {
	header('Location: ../index.php');
}else{
	echo "<script>
	alert('El registro no pudo ser eliminado');
	location.href='../index.php';
	</script>";
}
 ?>