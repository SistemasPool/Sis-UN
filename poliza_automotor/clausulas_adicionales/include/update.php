<?php 
include "../../../verificar_sesion.php";
include 'conexion.php';



	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];


$id = $_POST['id'];
$cod_cliente = $_POST['cod_cliente'];
$cubre = $_POST['cubre'];
$nombre = $_POST['nombre'];
$cod_cotizacion = $_POST['cod_cotizacion'];

$up = $con -> query("UPDATE clau_adic_au_pol SET cubre='$cubre', nombre='$nombre' WHERE id_clau_adic='$id'");
$usuario = $_SESSION["usuario"];
$accion = 'Actualiza Clausulas Adicionales'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins_log = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cotizacion', '', '$nombre_host', '$actual', '$formulario')");
if ($up) {
	header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$_POST['cod_cotizacion']);
}else{
	echo "<script>
	location.href='actualizar.php?id=".$id."';
	</script>";
}

 ?>