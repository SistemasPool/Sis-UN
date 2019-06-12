<?php
include 'conexion.php';

$sele = $con ->query("SELECT MAX(id_liq) as id_liqui FROM liquidacion_auto");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['id_liqui']+1;
$prefijo = 'LQ';

if($ids<=10){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}

$num_liqui = $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);

$num_orden = $_POST['num_orden'];
$num_siniestro = $_POST['num_siniestro'];
$num_cheque = $_POST['num_cheque'];
$girado = $_POST['girado'];
$num_tran = $_POST['num_tran'];
$monto = $_POST['monto'];
$monto_letra = $_POST['monto_letra'];
$f_registro = date("Y-m-d");
$user = $_POST['user'];

$se = $con ->query("SELECT * FROM circun_siniestro WHERE num_siniestro='$num_siniestro'");
		          $fila = $se -> fetch_assoc();
                  $circ = $fila['narracion_hecho'];

$ins = $con -> query("INSERT INTO `liquidacion_auto`(`id_liquidacion`, `id_liq`, `num_liquidacion`, `num_orden`, `num_siniestro`, `num_cheque`, `girado`, `num_tran`, `monto`, `monto_letra`, `circun_siniestro`, `f_registro`, `user_liq`) VALUES ('', '$ids', '$num_liqui', '$num_orden', '$num_siniestro', '$num_cheque', '$girado', '$num_tran', '$monto', '$monto_letra', '$circ', '$f_registro', '$user')");

if ($ins) {
     header('Location: ../ver_liquidacion.php');
}else{
	echo "Registro no almacenado";
}