<?php
include "../../verificar_sesion.php";
$con = new mysqli('localhost','root','','unibienes');

$numau = $con ->query("SELECT MAX(idnum) as idauto FROM automovil");
		          $num_auto = $numau -> fetch_assoc();
                  $ids= $num_auto['idauto']+1;
$prefijo = 'AULP';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}


$codigo = $_POST["codigo"];
$nro_poliza = $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
$tomador = 'BANCO UNION S.A.';
$asegurados = $_POST["asegurados"];
$distrito = $_SESSION["distrito"];
$usuario = $_SESSION["usuario"];
$fecha_registro = date("Y-m-d");
$cod_cliente = 'CUBLP00000020';

$ins = $con -> query("INSERT INTO `automotores_bu`(`codigo`, `id_automo`, `nro_poliza`, `cod_cliente`, `tomador`, `asegurados`, `distrito`, `usuario`, `f_registro`) VALUES('','$ids','$nro_poliza', '$cod_cliente','$tomador','$asegurados','$distrito','$usuario','$fecha_registro')");
    
$ins = $con -> query("INSERT INTO `automovil`(`id_automovil`, `idnum`, `cod_cliente`, `nro_poliza`, `fecha_registro`) VALUES ('','$ids','$cod_cliente','$nro_poliza','$fecha_registro')");

if ($ins) {
	header('Location:index.php');
}else{
	echo "Registro no almacenado";
}
 ?>