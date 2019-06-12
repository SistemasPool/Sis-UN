<?php
include "../../verificar_sesion.php";
$con = new mysqli('localhost','root','','unibienes');

$numcre = $con ->query("SELECT MAX(id_tarcre) as idcredito FROM tarjeta_credito");
		          $num_credito = $numcre -> fetch_assoc();
                  $ids= $num_credito['idcredito']+1;
$prefijo = 'TCLP';

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

$ins = $con -> query("INSERT INTO `tarjeta_credito`(`codigo`, `id_tarcre`, `nro_poliza`, `cod_cliente`, `tomador`, `asegurados`, `distrito`, `usuario`, `f_registro`) VALUES('','$ids','$nro_poliza','$cod_cliente','$tomador','$asegurados','$distrito','$usuario','$fecha_registro')");
    
//$ins = $con -> query("INSERT INTO `tarjeta_debito`(`id_tarjeta_debito`, `codigo`, `id_tardeb`, `nro_poliza`, `tomador`, `asegurados`, `beneficiarios`, `vig_cob`, `cob_asegurado`, `obj_asegurado`, `cob_garantias`, `rep_mensuales`, `prima_total`, `primas`, `forma_pago`, `definicion`, `cob_robo`, `cob_asalto`, `cob_medico`, `cob_secuestro`, `cob_muerte`, `cob_gastos`, `plazo_indem`, `errores`, `moneda`, `aviso`, `cla_arbitral`, `discrepancias`, `evidencias`, `hurto_tarjeta`, `casos_clonacion`, `casos_robo`, `aplicacion`, `caso_muerte`, `internet`, `pronunciamiento`, `cla_benef`, `observaciones`, `distrito`, `usuario`, `f_registro`) VALUES('','','$ids','$nro_poliza','$tomador','$asegurados','$beneficiarios','$vig_cob','$cob_asegurado','$obj_asegurado','$cob_garantias','$rep_mensuales','$prima_total','$primas','$forma_pago','$definicion','$cob_robo','$cob_asalto','$cob_medico','$cob_secuestro','$cob_muerte','$cob_gastos','$plazo_indem','$errores','$moneda','$aviso','$cla_arbitral','$discrepancias','$evidencias','$hurto_tarjeta','$casos_clonacion','$casos_robo','$aplicacion','$caso_muerte','$internet','$pronunciamiento','$cla_benef','$observaciones','$distrito','$usuario','$fecha_registro')");

if ($ins) {
	header('Location:index.php');
}else{
	echo "Registro no almacenado";
}
 ?>