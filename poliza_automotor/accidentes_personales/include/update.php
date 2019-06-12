<?php 
include "../../../verificar_sesion.php";
include 'conexion.php';



	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];

$cod_cotizacion = $_REQUEST['cod_cotizacion'];
$id = $_POST['id'];
$cod_cliente = $_POST['cod_cliente'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$suma_asegurada = $_POST['suma_asegurada'];


$up = $con -> query("UPDATE acc_perso_au_pol SET nombre='$nombre', suma_asegurada='$suma_asegurada', cubre='$estado' WHERE id_acc_pers='$id'");

$usuario = $_SESSION["usuario"];
$accion = 'Actualiza Accidentes Personales'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins_log = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cotizacion', '', '$nombre_host', '$actual', '$formulario')");

if ($up) {
	header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$_REQUEST['cod_cotizacion']);
}else{
	echo "<script>
	location.href='actualizar.php?id=".$id."';
	</script>";
}

 ?>