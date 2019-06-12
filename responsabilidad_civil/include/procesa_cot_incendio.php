<?php
include "../../verificar_sesion.php";
include 'conexion.php';
$s_distrito = $_SESSION["distrito"]; 

$connect = mysqli_connect("localhost", "root", "", "unibienes");

if($s_distrito=='LA PAZ') 
{
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idincendio FROM incendio_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idincendio']+1;
$prefijo='COINLP';

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
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idincendio FROM incendio_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idincendio']+1;
$prefijo = 'COINSC';

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
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idincendio FROM incendio_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idincendio']+1;
$prefijo = 'COINCB';

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
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idincendio FROM incendio_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idincendio']+1;
$prefijo = 'COINPT';

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
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idincendio FROM incendio_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idincendio']+1;
$prefijo = 'COINCH';

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
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idincendio FROM incendio_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idincendio']+1;
$prefijo = 'COINTA';

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
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idincendio FROM incendio_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idincendio']+1;
$prefijo = 'COINBE';

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
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idincendio FROM incendio_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idincendio']+1;
$prefijo = 'COINPD';

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
    
$cod_cot = $con ->query("SELECT MAX(id_num) as idincendio FROM incendio_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idincendio']+1;
$prefijo = 'COINOR';

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
 $nombres = $_POST['nombres'];
 $paterno = $_POST['paterno'];
 $materno = $_POST['materno'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono_fijo'];
 $nit_ci = $_POST['nit_ci'];
 $valor_asegurado = $_POST['valor'];
 $intermediario= $_POST['intermediario'];
 $ubicacion= $_POST['ubicacion'];
 $dir_aseg= $_POST['dir_aseg'];
 $materia= $_POST['materia'];
 $tipo_pago= $_POST['tipo_pago'];
 $comision_inter= $_POST['inter_comision'];
 $s_distrito = $_SESSION["distrito"];
 $tasa_prima = $_POST["tasa_prima"];
 $inicio_vigencia = $_POST["inicio_vigencia"];
 $final_vigencia = strtotime ( '+1 year' , strtotime($inicio_vigencia));
 $final_vigencia = date ( 'Y-m-j' ,$final_vigencia);
 $prima_total = $valor_asegurado*$tasa_prima/100;
 $prima_credi = $prima_total*.06;
 $prima_credito = $prima_credi+$prima_total;
 $f_registro = date("Y-m-d");

$ins_incendio = $con -> query("INSERT INTO `incendio_cotizacion`(`id_incendio`, `cod_cliente`, `cod_cotizacion`, `num_poliza`, `id_num`, `ubicacion_riesgo`, `direccion_asegurada`, `materia_seguro`, `valor_asegurado`, `tasa_prima`, `prima_contado`, `prima_credito`, `inicio_vigencia`, `final_vigencia`, `f_registro`, `distrito`, `tipo_pago`, `intermediario`, `comision_inter`) VALUES ('','$cod_cliente','$cod_cotizacion','','$ids','$ubicacion','$dir_aseg','$materia','$valor_asegurado','$tasa_prima','$prima_total','$prima_credito','$inicio_vigencia','$final_vigencia','$f_registro', '$s_distrito','$tipo_pago','$intermediario','$comision_inter')");

$ins = $con -> query("INSERT INTO clientes_cotizacion(id_cliente, nro_poliza, cod_cliente, cod_cotizacion, idnumero, nombres, paterno, materno, imagen, direccion, distrito ,nit_ci, telefono_fijo, celular, email, nitf_cif, pagador) 
VALUES ('', '', '$cod_cliente', '$cod_cotizacion', '$ids', '$nombres', '$paterno', '$materno', '', '$direccion', '$s_distrito', '$nit_ci', '$telefono', '', '', '', '')");

$ins_tom_cot = $con -> query("INSERT INTO clientes_tomador_cotizacion(id_cliente_tomador, nro_poliza, cod_cliente, cod_cotizacion, idnumero, idnum, nombres, paterno, materno, direccion, distrito, nit_ci, telefono_fijo, celular, email, nitf_cif)VALUES('','','$cod_cliente', '$cod_cotizacion', '', '', '$nombres', '$paterno', '$materno', '$direccion', '$s_distrito', '$nit_ci', '$telefono', '', '', '')");

$inserta_coberturas = $con -> query("INSERT INTO coberturas_incendio_pol(`glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT coberturas_incendio.glosa, 'INCENDIO', '$cod_cliente', '', '$cod_cotizacion' FROM coberturas_incendio");

$inserta_clau = $con -> query("INSERT INTO clau_adic_incendio_pol(`glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT clau_adic_incendio.glosa, 'INCENDIO', '$cod_cliente', '', '$cod_cotizacion' FROM clau_adic_incendio");

$inserta_franquicia = $con -> query("INSERT INTO franquicia_incendio_pol(`grosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT franquicia_incendio.grosa, 'INCENDIO', '$cod_cliente', '', '$cod_cotizacion' FROM franquicia_incendio");

$inserta_riesgo = $con -> query("INSERT INTO primer_riesgo_pol(`glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT primer_riesgo.glosa, 'INCENDIO', '$cod_cliente', '', '$cod_cotizacion' FROM primer_riesgo");

$inserta_exclu = $con -> query("INSERT INTO exclusiones_incendio_pol(`glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT exclusiones_incendio.glosa, 'INCENDIO', '$cod_cliente', '', '$cod_cotizacion' FROM exclusiones_incendio");

$inserta_cond = $con -> query("INSERT INTO cond_part_inc_pol(`glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT cond_part_inc.glosa, 'INCENDIO', '$cod_cliente', '', '$cod_cotizacion' FROM cond_part_inc");

$inserta_nota = $con -> query("INSERT INTO notas_especiales_incendio_pol(`glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT notas_especiales_incendio.glosa, 'INCENDIO', '$cod_cliente', '', '$cod_cotizacion' FROM notas_especiales_incendio");

$inserta_obs = $con -> query("INSERT INTO observaciones_incendio_pol(`glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT observaciones_incendio.glosa, 'INCENDIO', '$cod_cliente', '', '$cod_cotizacion' FROM observaciones_incendio");

$inserta_notas = $con -> query("INSERT INTO nota_especial_incendio_pol(`glosa`, `ramo`, `cod_cliente`, `num_poliza`, `cod_cotizacion`) SELECT nota_especial_incendio.glosa, 'INCENDIO', '$cod_cliente', '', '$cod_cotizacion' FROM nota_especial_incendio");

if ($ins_incendio) {
	header('Location: ../index.php');
}else{
	echo "Registro no almacenado";
}

?>