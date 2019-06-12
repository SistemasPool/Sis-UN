<?php
include "../../verificar_sesion.php";
include 'conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];
$cod_cotizacion = $_POST['cod_cotizacion'];
$cod_cliente = $_POST['cod_cliente'];
$cobertura = $_POST['cobertura'];


$ins = $con -> query("INSERT INTO `coberturas_incendio_pol`(`id_cobin`, `glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) VALUES ('','$cobertura','INCENDIO','$cod_cliente','','$cod_cotizacion')");

$usuario = $_SESSION["usuario"];
$accion = 'Registro Cliente'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");
if ($ins) {
	header("Location: ../include/verpolizaincendio.php?cod_cotizacion=$cod_cotizacion&cod_cliente=$cod_cliente");
}else{
	echo "Registro no almacenado";
}
?>
