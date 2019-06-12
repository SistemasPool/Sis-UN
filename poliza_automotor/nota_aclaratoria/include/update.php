<?php 
include "../../../verificar_sesion.php";
include 'conexion.php';

$cod_cotizacion = $_POST['cod_cotizacion'];
$nota_aclaratoria = $_POST['nota_aclaratoria'];

$insertar = $con -> query("INSERT INTO nota_aclar_au_pol(id_notacla, nombre, cod_cliente, num_poliza, cod_cotizacion) 
VALUES ('','$nota_aclaratoria','','','$cod_cotizacion')");


$usuario = $_SESSION["usuario"];
$accion = 'Actualiza Riesgos Cubiertos'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins_log = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cotizacion', '', '$nombre_host', '$actual', '$formulario')");
if ($insertar) {
	header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$cod_cotizacion);
}else{
    header('Location: registrar.php?cod_cotizacion='.$cod_cotizacion);
}

?>