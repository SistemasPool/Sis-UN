<?php
include "../../verificar_sesion.php";
include 'conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];
$nro_poliza = $_POST['nro_poliza'];
$cod_cliente = $_POST['cod_cliente'];
$nombre = $_POST['nombre'];
$carnet = $_POST['carnet'];
$num_tarjeta = $_POST['num_tarjeta'];
$f_registro = date("Y-m-d");

$ins = $con -> query("INSERT INTO `cliente_debito`(`id_cli_td`, `nombre_completo`, `carnet`, `numero_tarjeta`, `nro_poliza`, `cod_cliente`, `f_registro`) VALUES ('', '$nombre', '$carnet', '$num_tarjeta', '$nro_poliza', '$cod_cliente', '$f_registro')");

$usuario = $_SESSION["usuario"];
$accion = 'Registro Cliente TD'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");

if ($ins) {
	header("Location: ../ver_td.php?nro_poliza=$nro_poliza&cod_cliente=$cod_cliente");
}else{
	echo "Registro no almacenado";
}
?>