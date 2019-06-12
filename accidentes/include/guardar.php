<?php
include "../../verificar_sesion.php";
include 'conexion.php';

$cod_cliente = $_POST['cod_cliente'];
$cod_cotizacion = $_POST['cod_cotizacion'];
$nombre = $_POST['nombre'];
$muerte = $_POST['muerte'];
$invalidez = $_POST['invalidez'];
$gastos = $_POST['gastos'];

$ins = $con -> query("INSERT INTO `beneficiarios_ap`(`id_ben_ap`, `nombre_completo`, `muerte_accidental`, `invalidez`, `gastos`, `cod_cotizacion`, `num_poliza`, `cod_cliente`) VALUES ('', '$nombre', '$muerte', '$invalidez', '$gastos', '$cod_cotizacion', '', '$cod_cliente')");

$usuario = $_SESSION["usuario"];
$accion = 'Registro Cliente'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");
if ($ins) {
header("Location: ../include/vercotizaionap.php?cod_cotizacion=$cod_cotizacion&cod_cliente=$cod_cliente");
}else{
echo "Registro no almacenado";
}
?>