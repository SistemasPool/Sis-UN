<?php
include 'conexion.php';
include '../../../verificar_sesion.php';
$s_distrito = $_SESSION["distrito"];
 
if($s_distrito=='LA PAZ'){
$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'AULP';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}}
elseif($s_distrito=='SANTA CRUZ'){
$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'AUSC';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}}
if($s_distrito=='COCHABAMBA'){
$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'AUCB';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}}
if($s_distrito=='ORURO'){
$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'AUOR';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}}
if($s_distrito=='POTOSI'){
$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'AUPT';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}}
if($s_distrito=='SUCRE'){
$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'AUCH';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}}
if($s_distrito=='TARIJA'){
$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'AUTA';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}}
if($s_distrito=='PANDO'){
$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'AUPD';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}}if($s_distrito=='BENI'){
$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'AUBE';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}}


//$ins = $con -> query("INSERT INTO clientes (id_cliente, fecha_vencimiento_pago, cod_cliente, idnumero, idnum, nombres, paterno, materno, direccion, nit_ci, telefono_fijo, celular, email, nitf_cif, pagador, tipo_pago, inicio_vigencia, final_vigencia, fecha_registro, cod_cotizacion) VALUES ('', '$fecha_vencimiento', '$cod_cliente', '$ids', '$idau', '$nombres', '$paterno', '$materno', '$direccion', '$nit_ci', '$telefono_fijo', '$celular', '$email', '$nitf_cif' , '$pagador', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_registro', '$cod_cotizacion')");


echo $nro_poliza = $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);

?>