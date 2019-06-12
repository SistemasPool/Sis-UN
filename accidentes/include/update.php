<?php 
include '../../verificar_sesion.php';
include 'conexion.php';

	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];

$id = $_POST['id'];
$nombre_completo = $_POST['nombre_completo'];
$muerte = $_POST['muerte'];
$invalidez = $_POST['invalidez'];
$gastos = $_POST['gastos'];
$cod_cliente =$_POST['cod_cliente'];
$cod_cotizacion =$_POST['cod_cotizacion'];

$up = $con -> query("UPDATE `beneficiarios_ap` SET `nombre_completo`='$nombre_completo',`muerte_accidental`='$muerte',`invalidez`='$invalidez',`gastos`='$gastos' WHERE id_ben_ap='$id'");

$usuario = $_SESSION["usuario"];
$accion = 'Actualiza Beneficiario AP'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");
$cod_cliente = $_POST['cod_cliente'];

$ins_log = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");

if ($up) {
	header("Location: ../include/vercotizaionap.php?cod_cliente=$cod_cliente&cod_cotizacion=$cod_cotizacion");
}else{
	echo "<script>
	location.href='actualizar.php?id=".$id."';
	</script>";
}

 ?>