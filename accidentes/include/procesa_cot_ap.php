<?php
include "../../verificar_sesion.php";
include 'conexion.php';
$s_distrito = $_SESSION["distrito"]; 

$connect = mysqli_connect("localhost", "root", "", "unibienes");

if($s_distrito=='LA PAZ') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idap FROM acc_perso_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idap']+1;
$prefijo='COAPLP';

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
}}
elseif($s_distrito=='SANTA CRUZ') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idap FROM acc_perso_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idap']+1;
$prefijo = 'COAPSC';

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
}}
elseif($s_distrito=='COCHABAMBA') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idap FROM acc_perso_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idap']+1;
$prefijo = 'COAPCB';

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
}}
elseif($s_distrito=='POTOSI') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idap FROM acc_perso_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idap']+1;
$prefijo = 'COAPPT';

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
}}

elseif($s_distrito=='SUCRE') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idap FROM acc_perso_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idap']+1;
$prefijo = 'COAPCH';

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
}}

elseif($s_distrito=='TARIJA') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idap FROM acc_perso_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idap']+1;
$prefijo = 'COAPTA';

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
}}

elseif($s_distrito=='BENI') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idap FROM acc_perso_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idap']+1;
$prefijo = 'COAPBE';

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
}}

elseif($s_distrito=='PANDO') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idap FROM acc_perso_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idap']+1;
$prefijo = 'COAPPD';

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
}}

elseif($s_distrito=='ORURO') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idap FROM acc_perso_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idap']+1;
$prefijo = 'COAPOR';

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
}}

$cod_cotizacion = $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);

 $cod_cliente = $_POST['cod_cliente'];

 $clientes = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
		          $cliente = $clientes -> fetch_assoc();

 
 $nombres = $cliente['nombres'];
 $paterno = $cliente['paterno'];
 $materno = $cliente['materno'];

 $completo = $nombres." ".$paterno." ".$materno;
 $direccion = $cliente['direccion'];
 $telefono = $cliente['telefono_fijo'];
 $nit_ci = $cliente['nit_ci'];
 $suma_a = $_POST['suma_a'];
 $intermediario= $_POST['intermediario'];
 $tipo_pago= $_POST['tipo_pago'];
 $comision_inter= $_POST['comision'];
 $s_distrito = $_SESSION["distrito"];
 $inicio_vigencia = $_POST["inicio_vigencia"];
 $final = strtotime ( '+1 year' , strtotime($inicio_vigencia));
 $final_vigencia = date ('Y-m-j' ,$final);
 $prima_total = $_POST['prima_total'];
 $prima_credi = $prima_total*.06;
 $prima_credito = $prima_credi+$prima_total;
 $comision_inter = $_POST['inter_comision'];
 $f_registro = date("Y-m-d");

$ins_ap = $con -> query("INSERT INTO `acc_perso_cotizacion`(`id_cot_ap`, `cod_cliente`, `num_poliza`, `id_num`, `nombre_completo`, `cod_cotizacion`, `suma_asegurada`, `prima_total`, `prima_credito`, `inicio_vigencia`, `final_vigencia`, `com_inter`, `intermediario`, `tipo_pago`, `f_registro`, `distrito`, `vencimiento`) VALUES ('', '$cod_cliente', '', '$ids', '$completo', '$cod_cotizacion', '$suma_a', '$prima_total', '$prima_credito', '$inicio_vigencia', '$final_vigencia', '$comision_inter', '$intermediario', '$tipo_pago', '$f_registro', '$s_distrito', '$vencimiento')");


$ins = $con -> query("INSERT INTO clientes_cotizacion(id_cliente, nro_poliza, cod_cliente, cod_cotizacion, idnumero, nombres, paterno, materno, imagen, direccion, distrito ,nit_ci, telefono_fijo, celular, email, nitf_cif, pagador) 
VALUES ('', '', '$cod_cliente', '$cod_cotizacion', '$ids', '$nombres', '$paterno', '$materno', '', '$direccion', '$s_distrito', '$nit_ci', '$telefono', '', '', '', '')");

$ins_tom_cot = $con -> query("INSERT INTO clientes_tomador_cotizacion(id_cliente_tomador, nro_poliza, cod_cliente, cod_cotizacion, idnumero, idnum, nombres, paterno, materno, direccion, distrito, nit_ci, telefono_fijo, celular, email, nitf_cif)VALUES('','','$cod_cliente', '$cod_cotizacion', '', '', '$nombres', '$paterno', '$materno', '$direccion', '$s_distrito', '$nit_ci', '$telefono', '', '', '')");

$inserta_coberturas = $con -> query("INSERT INTO clau_accidentes_pol(`id_accid_pol`, `glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT '', clau_accidentes.glosa, 'ACCIDENTES PERSONALES', '$cod_cliente', '', '$cod_cotizacion' FROM clau_accidentes");

if ($ins_ap) {
	header('Location: ../index.php');
}else{
	echo "Registro no almacenado";
}

?>