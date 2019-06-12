<?php
include 'conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];

$beneficio = $_POST['beneficio'];
$cod_cotizacion = $_POST['cod_cotizacion'];
$cod_cliente = $_POST['cod_cliente'];



$ins = $con -> query("INSERT INTO `ben_adic_au_pol`(`id_ben_au`, `nombre`, `suma_asegurada`, `cubre`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) VALUES ('','$beneficio', 0, 'SI CUBRE','$cod_cliente','','$cod_cotizacion')");
if ($ins) {
	header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$cod_cotizacion);
}else{
	echo "Registro no almacenado";
}

?>