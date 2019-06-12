<?php 
include "../../../verificar_sesion.php";
include 'conexion.php';
	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];


$id = $_POST['id'];
$cod_cotizacion = $_POST['cod_cotizacion'];
$nombre = $_POST['nombre'];
$porcentaje = $_POST['porcentaje'];
$franquicia = $_POST['franquicia'];


$up = $con -> query("UPDATE riesgo_cubierto_au_pol SET nombre='$nombre', porcentaje='$porcentaje', franquicia='$franquicia' WHERE id_riecu='$id'");
$usuario = $_SESSION["usuario"];
$accion = 'Actualiza Riesgos Cubiertos'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins_log = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cotizacion', '', '$nombre_host', '$actual', '$formulario')");

if ($up) {
	header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$cod_cotizacion);
}else{
	echo "<script>
	location.href='actualizar.php?id=".$id."';
	</script>";
}

 ?>