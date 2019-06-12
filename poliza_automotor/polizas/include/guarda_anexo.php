<?php
include 'conexion.php';

$sele = $con ->query("SELECT MAX(id_ane) as id_anexo FROM anexo_automotor");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['id_anexo']+1;
$prefijo = '';

if($ids<=10){
    $prefijo.str_pad($ids, 6, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 6, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 6, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 6, "0", STR_PAD_LEFT);
}


$num_anexo = $prefijo.str_pad($ids, 6, "0", STR_PAD_LEFT);
$año = date ("Y"); 

$nro_anexo =$num_anexo."/".$año;
$cod_cliente = $_POST['cod_cliente'];
$nro_poliza = $_POST['num_poliza'];
$txt_anexo = $_POST['txt_anexo'];
$tipo_prima = $_POST['tipo_prima'];
$prima = $_POST['prima'];
$condiciones = $_POST['condiciones'];
$placa = $_POST['placa'];

$ins = $con -> query("INSERT INTO `anexo_automotor`(`id_anexo_auto`, `num_poliza`, `cod_cliente`, `num_anexo`, `placa`, `id_ane`, `tipo_prima`, `prima`, `txt_anexo`, `condiciones`) VALUES ('', '$nro_poliza', '$cod_cliente', '$nro_anexo', '$placa', '$ids', '$tipo_prima', '$prima', '$txt_anexo', '$condiciones')");

if ($ins) {
     header('Location: ../ver_anexos.php');
}else{
	echo "Registro no almacenado";
}