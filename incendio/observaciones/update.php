<?php 
include '../../verificar_sesion.php';
include 'conexion.php';

	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];

$id = $_POST['id'];
$cod_cliente = $_POST['cod_cliente'];
$cod_cotizacion = $_POST['cod_cotizacion'];
$glosa = $_POST['glosa'];

$up = $con -> query("UPDATE observaciones_incendio_pol SET `glosa`='$glosa' WHERE id_oi='$id'");

$usuario = $_SESSION["usuario"];
$accion = 'Actualiza fra INCENCIO'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");
$cod_cliente = $_POST['cod_cliente'];

$ins_log = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");

if ($up) {
	header("Location: ../include/verpolizaincendio.php?cod_cotizacion=$cod_cotizacion&cod_cliente=$cod_cliente");
}else{
	echo "<script>
	location.href='actualizar.php?id=".$id."';
	</script>";
}

 ?>