<?php 
include "../../verificar_sesion.php";
include 'conexion.php';
$id = $_POST['id'];
$cod_cotizacion = $_REQUEST['cod_cotizacion'];

$producto_auto= $_POST['producto_auto'];


	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];
$sel = $con -> query("SELECT * FROM producto_automotores WHERE producto_auto='$producto_auto' ");
$fila = $sel -> fetch_assoc();
$monto = $fila['monto'];



$up = $con -> query("UPDATE producto_automotores_pol SET producto_auto='$producto_auto', monto='$monto' WHERE cod_cliente='$cod_cotizacion'");
$upd = $con -> query("UPDATE automovil_cotizacion SET plan='$producto_auto' WHERE cod_cliente='$cod_cotizacion'");

$usuario = $_SESSION["usuario"];
$accion = 'Actualiza Producto'; 
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