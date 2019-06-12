<?php 
include "../../verificar_sesion.php";
include 'conexion.php';

	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];


$id = $_POST['id'];
$cod_cotizacion = $_POST['cod_cotizacion'];
//$nro_poliza = $_POST['nro_poliza'];
$clase = $_POST['clase'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$color = $_POST['color'];
$modelo = $_POST['modelo'];
$traccion = $_POST['traccion'];
$uso = $_POST['uso'];
$distrito = $_POST['distrito'];
$plazas = $_POST['plazas'];
$chasis = $_POST['chasis'];
$motor = $_POST['motor'];
$auto_cap_aseg = $_POST['auto_cap_aseg'];
$tasa_prima = $_POST['tasa_prima'];
$prima_to = $_POST['auto_cap_aseg']*$_POST['tasa_prima']/100;

$up = $con -> query("UPDATE automovil_cotizacion SET clase='$clase', placa='$placa', ano='$ano', color='$color', modelo='$modelo', traccion='$traccion', uso='$uso', distrito='$distrito', plazas='$plazas', chasis='$chasis', motor='$motor', auto_cap_aseg='$auto_cap_aseg',  prima_total='$prima_to' WHERE id_automovil='$id'");

$usuario = $_SESSION["usuario"];
$accion = 'Actualiza Automovil Cotizacion'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins_log = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cotizacion', '', '$nombre_host', '$actual', '$formulario')");
if ($up){
	header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$cod_cotizacion);
}else{
	header('location.href=actualizar.php?id='.$id);
}
?>