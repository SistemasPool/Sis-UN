<?php
include 'conexion.php';
include '../../../verificar_sesion.php';
$cod_cotizacion = $_REQUEST['cod_cotizacion'];
$cod_cliente = $_POST['cod_cliente'];

//valida comision intermediario
$com_inter = $_POST['comision_intermediario'];
//if ($com_inter < 0 || $com_inter > 18) {
//	echo "<script>
//    alert('La comision del intermediario debe ser mayor a cero y menor a 18%');
//	location.href='crea_poliza.php?cod_cotizacion=".$cod_cotizacion."&cod_cliente=".$cod_cliente."';
//	</script>";
//}

//echo $cuota_inicial=$_POST['cuota_inicial'];
$c = count($_POST['cuota_inicial']);
for($i=0; $i<$c; $i++){
    $cuota_inicial = $_POST['cuota_inicial'][$i];
    $id_auto = $_POST['id_auto'][$i];
$upcuo = $con -> query("UPDATE automovil_cotizacion SET cuota_inicial_au=".$cuota_inicial." WHERE id_automovil='$id_auto'");
}


//$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes");
//		          $filas = $sele -> fetch_assoc();
//                  $ids= $filas['idcliente']+1;
//$prefijo = 'CUB';

//if($ids<=10){
//    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
//}elseif($ids<=100){
//    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
//}elseif($ids<=1000){
//    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
//}elseif($ids<=10000){
//    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
//}elseif($ids<=100000){
//    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
//}elseif($ids<=1000000){
//    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
//}elseif($ids<=10000000){
//    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
//}


//$cod_cliente = $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
$nombres = $_POST['nombres'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$completo = $nombres." ".$paterno." ".$materno;
$nit_ci = $_POST['carnet'];
$direccion = $_POST['direccion'];
$telefono_fijo = $_POST['telefono_fijo'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$nitf_cif = $_POST['cif_nitf'];
$pagador = $_POST['pagador'];
$ids;
$inicio_vigencia = $_POST['inicio_vigencia'];
$final_vigencia = strtotime ( '+1 year' , strtotime ( $inicio_vigencia ) ) ;
$final_vigencia = date ( 'Y-m-j' , $final_vigencia );
$fecha_registro = $_POST['fecha_registro'];
$tipo_pago = $_POST['tipo_pago'];
//fecha mas 20 dias
$fecha_ven = date('Y-m-j');
$fecha_vencimiento = strtotime ( '+30 day' , strtotime ( $fecha_ven) ) ;
$fecha_vencimiento = date ('Y-m-j' , $fecha_vencimiento );
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

$nro_poliza = $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
//$ins = $con -> query("INSERT INTO clientes (id_cliente, fecha_vencimiento_pago, cod_cliente, idnumero, idnum, nombres, paterno, materno, direccion, nit_ci, telefono_fijo, celular, email, nitf_cif, pagador, tipo_pago, inicio_vigencia, final_vigencia, fecha_registro, cod_cotizacion) VALUES ('', '$fecha_vencimiento', '$cod_cliente', '$ids', '$idau', '$nombres', '$paterno', '$materno', '$direccion', '$nit_ci', '$telefono_fijo', '$celular', '$email', '$nitf_cif' , '$pagador', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_registro', '$cod_cotizacion')");

$benef = $con ->query("SELECT * FROM beneficiario_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
$benefi = $benef -> fetch_assoc();
$cod_cliente_b = $benefi['cod_cliente']; 
$cod_cotizacion_b = $benefi['cod_cotizacion'];
$nombres_b = $benefi['nombres'];
//$nro_poliza_b = $benefi['nro_poliza'];
$idnumero_b = $benefi['idnumero'];
$paterno_b = $benefi['paterno'];
$materno_b = $benefi['materno'];
$direccion_b = $benefi['direccion'];
$distrito_b = $benefi['distrito'];
$nit_ci_b = $benefi['nit_ci'];
$telefono_fijo_b = $benefi['telefono_fijo'];
$celular_b = $benefi['celular'];
$email_b = $benefi['email'];
$nitf_cif_b = $benefi['nitf_cif'];
$zona_b = $benefi['zona'];
$pagador_b = $benefi['pagador'];


$ins_benefic = $con -> query("INSERT INTO `beneficiario`(`id_cliente`, `nro_poliza`, `prima_contado`, `fecha_vencimiento_pago`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`) VALUES ('','$nro_poliza','0.00','','$cod_cliente_b','$idnumero_b','','$nombres_b','$paterno_b','$materno_b','','$direccion_b','$nit_ci_b','$telefono_fijo_b','$celular_b','$email_b','$nitf_cif_b','$pagador_b','$tipo_pago','','','','$s_distrito','$zona_b')");

$clientes_tomador = $con ->query("SELECT * FROM clientes_tomador_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
$clientestomador = $clientes_tomador -> fetch_assoc();
$cod_cliente_ct = $clientestomador['cod_cliente']; 
$cod_cotizacion_ct = $clientestomador['cod_cotizacion'];
$nombres_ct = $clientestomador['nombres'];
$nro_poliza_ct = $clientestomador['nro_poliza'];
$idnumero_ct = $clientestomador['idnumero'];
$paterno_ct = $clientestomador['paterno'];
$materno_ct = $clientestomador['materno'];
$direccion_ct = $clientestomador['direccion'];
$distrito_ct = $clientestomador['distrito'];
$nit_ci_ct = $clientestomador['nit_ci'];
$telefono_fijo_ct = $clientestomador['telefono_fijo'];
$celular_ct = $clientestomador['celular'];
$email_ct = $clientestomador['email'];
$nitf_cif_ct = $clientestomador['nitf_cif'];
$pagador_ct = $clientestomador['pagador'];
$zona_ct = $clientestomador['zona'];

$ins_clientes_tomador = $con -> query("INSERT INTO `clientes_tomador`(`id_cliente_tomador`, `nro_poliza`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`) VALUES ('','$nro_poliza','$cod_cliente_ct','$idnumero_ct','','$nombres_ct','$paterno_ct','$materno_ct','','$direccion_ct','$nit_ci_ct','$telefono_fijo_ct','$celular_ct','$email_ct','$nitf_cif_ct','$pagador_ct','$tipo_pago','','','','$s_distrito','$zona_ct')");

$clase = $_POST['clase'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$color = $_POST['color'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$traccion = $_POST['traccion'];
$uso = $_POST['uso'];
$distrito = $_POST['distrito'];
$plazas = $_POST['plazas'];
$chasis = $_POST['chasis'];
$motor = $_POST['motor'];
$zona = $_POST['zona'];
$nit_ci = $_POST['nit_ci'];
$tasa_prima = $_POST['tasa_prima'];


//$ins_tom_clien = $con -> query("INSERT INTO clientes_tomador(id_cliente_tomador, nro_poliza, cod_cliente, idnumero, idnum, nombres, paterno, materno, imagen, direccion, nit_ci, telefono_fijo, celular, email, nitf_cif, pagador, tipo_pago, inicio_vigencia, final_vigencia, fecha_registro, distrito, zona) 
//VALUES ('', '$nro_poliza', '$cod_cliente', '', '', '$nombres', '$paterno', '$materno', '', '$direccion', '$nit_ci', '$telefono_fijo', '$celular', '$email', '$nitf_cif' , '$pagador', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_registro', '$s_distrito', '$zona')");


if($tipo_pago=='CREDITO'){
    //echo $cod_cotizacion = $_POST['cod_cotizacion'];
    
 $incarro = $con -> query("SELECT * FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");

while ($row = $incarro -> fetch_assoc()) {
$cod_clien=$row['cod_cliente'];
$clase=$row['clase'];
$placa=$row['placa'];
$marca=$row['marca'];
$ano=$row['ano'];
$color=$row['color'];
$modelo=$row['modelo'];
$traccion=$row['traccion'];
$uso=$row['uso'];
$distrito=$row['distrito'];
$plaza=$row['plaza'];
$plazas=$row['plazas'];
$id_ce=$row['id_ce'];
$certificado=$row['certificado'];
$chasis=$row['chasis'];
$motor=$row['motor'];
$auto_cap_aseg=$row['auto_cap_aseg'];
$plan=$row['plan'];
$tasa_prima=$row['tasa_prima'];
$prima_credito=$row['prima_credito'];
$cuota_inicial_au=$row['cuota_inicial_au'];
$multi_cuota_inicial = $prima_credito-($cuota_inicial_au*4);
$por_credito= ($multi_cuota_inicial*100)/$prima_credito;
    
    
    //produccion
    $valor_asegurado = $row['auto_cap_aseg'];
    $porcentaje_credito = 6;
    $prima_total=$row['prima_total'];
    $prima_total = ($prima_total*$porcentaje_credito/100)+$prima_total;
    $porcentaje_iva=13;
    $porcentaje_it=3;
    $porcentaje_itf=.3;
    $porcentaje_aba = 0.061263045503;
    $porcentaje_fpa=.5;
    $porcentaje_aps=2;
    $porcentaje_itf_remesas = 0.3;
    $porcentaje_intermediario=16;
    $porcentaje_iue_remesas=2.5;
    $porcentaje_comision_bancaria = 2.10;
    $porcentaje_comision_compania = 10.90;
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    $porcentaje_secion = .70;
    $porcentaje_seguridad = .59;
    //traer de la base de datos
    $porcentaje_comision_inter = 16;
    $com_cobranza_1 = 0;
    $com_cobranza_2 = 0;
    $factor_impuesto = 1.14942528736;
    $tipo_cambio = 6.86;
    $compania = '101';
    $distrito = 'LA PAZ';
    $fecha_hoy = date('Y-m-d');
    $modalidad = '91';
    $ramo = '05';
    $broker = $row['intermediario'];
    
    $com_inter = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_inter)/100;
    $com_comp = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_compania)/100;
    $itf = $prima_total*$porcentaje_itf/100;
    $it = $prima_total*$porcentaje_it/100;
    $iva = $prima_total*$porcentaje_iva/100;
    $aba = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aba)/100;
    $fpa = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_fpa)/100;
    $aps = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aps)/100;
    $prima_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    $prima_riesgo = $prima_directa-$com_inter-$com_comp-$com_cobranza_1-$com_cobranza_2;
    $itf_remesas = $porcentaje_itf_remesas*$prima_riesgo/100;
    $com_inter_fact = ($com_inter*$factor_impuesto);
    $uie_remesas = $porcentaje_iue_remesas*$prima_riesgo/100;
    $com_bancaria = $porcentaje_comision_bancaria*$prima_riesgo/100;
    $prima_directa_bs = $prima_directa*$tipo_cambio;
    $prima_neta_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    $prima_neta_directa_bs = $prima_directa*$tipo_cambio;
    $prima_adicional = ($prima_total-$iva)-$prima_directa;
    $prima_ced_reaseg = $porcentaje_secion*$porcentaje_seguridad*$prima_riesgo;
    $prima_ced_reaseg_bs = $prima_ced_reaseg*$tipo_cambio;
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `modalidad`, `ramo`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`) 
    VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$modalidad','$ramo', '$cod_clien','$nro_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','0.00','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
    
    //fin produccion
    
    $date = date("d-m-Y");
    $f_registro = date("Y-m-d");
    //Incrementando 2 dias
    $mod_date = strtotime($date."+ 30 days");
    $fecha_cuota_inicial = date("Y-m-d",$mod_date);
    
    //ok funciona
    $inser_auto=$con -> query("INSERT INTO automovil(idnum, cod_cliente, nro_poliza, certificado, id_ce, clase, placa, ano, marca, color,  modelo, traccion, uso, distrito, plaza, plazas, chasis, motor, auto_cap_aseg, plan, intermediario, tasa_prima, prima_total, tipo_pago, inicio_vigencia, final_vigencia, fechavencimiento, estado, f_registro) VALUES ('$idau', '$cod_cliente', '$nro_poliza', '$certificado','$id_ce','$clase', '$placa', '$ano', '$marca','$color', '$modelo', '$traccion', '$uso', '$s_distrito', '$plaza','$plazas', '$chasis', '$motor', '$auto_cap_aseg', '$plan', '$intermediario', '$tasa_prima', '$pri_credito', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_vencimiento', 'NUEVO', '$f_registro')");
    
    $inser = $con -> query("INSERT INTO cuota_inicial(id_cuo_ini, monto, fecha_cuotas, cod_cliente, num_poliza, estado, certificado)VALUES ('', '$multi_cuota_inicial', '$fecha_cuota_inicial', '$cod_cliente', '$nro_poliza', 'NO PAGADO', '$certificado')");
    
    
    //$cuota_cliente = 50;
    //$ncuotas_cliente = $cuota_cliente*4;
    //$total_cuotas_cliente= $pri_credito-$ncuotas_cliente;
    //$porcentaje=$total_cuotas_cliente*100/$pri_credito;
    //$cuo_tec_inic= $total_cuotas_cliente*$porcentaje_prima_tecnica/100;
    
    if($por_credito>=30){
        $cuotas= $cuota_inicial_au*4;
                $cuota = 4;
                $contador = 2;
                //$fecha = '2018-10-10';
                        $ini = new DateTime($fecha_cuota_inicial); // formato: aaaa-mm-dd

                        $mas_1D = new DateInterval('P30D');

                    for ($i=0;$i<4;$i++){   
                    $fecha_cuotas = $ini->add($mas_1D)->format('Y-m-d');
                    $decimales = explode(".",($cuotas/4));
                    $decimales[0];
                    $prim_tecnica = $decimales[0]*$porcentaje_prima_tecnica/100;
                    $prim_adicional = $decimales[0]*$porcentaje_prima_adicional/100;
                    //$fecha_cuotas = date('Y-m-d', strtotime($vencimiento));
                    

     $ins = $con -> query("INSERT INTO cuotas(id_cuotas, monto, fecha_cuotas, prima_tecnica, prima_adicional, cod_cliente, num_poliza, estado, certificado) VALUES ('', '$decimales[0]', '$fecha_cuotas', '$prim_tecnica', '$prim_adicional', '$cod_cliente', '$nro_poliza', 'NO PAGADO', '$certificado')");
                }
    }
    
            } //$decimal = (int) $decimales[1];
    
$fechas_cuotas = $con ->query("SELECT SUM(monto) as monto_cuotas_1 FROM cuotas WHERE num_poliza='$nro_poliza'");
$fecuo = $fechas_cuotas -> fetch_assoc();
$fechas = $con ->query("SELECT fecha_cuotas FROM cuotas WHERE num_poliza='$nro_poliza'");
$fe = $fechas -> fetch_assoc();
$cuotas_1 = $fecuo['monto_cuotas_1']/4;

                $cuota_1 = 4;
                $contador_1 = 2;
                //$fecha = '2018-10-10';
                    $ini = new DateTime($fecha_cuota_inicial); // formato: aaaa-mm-dd
                    $mas_1D = new DateInterval('P30D');

                    for ($i=0;$i<4;$i++){   
                    $ini->add($mas_1D)->format('Y-m-d');
                    $cuotas_1;
                    setlocale(LC_TIME, 'es_ES.UTF-8');
                    setlocale(LC_TIME, 'spanish');
                    $fecha_cuotas = date('Y-m-d', strtotime($vencimiento));
                    //ok, si guarda
      //agosto             $ins_1 = $con -> query("INSERT INTO temp_fecha_cuotas(id_fecha_cuotas, monto, fecha_cuotas, num_poliza) VALUES ('', '$cuotas_1', '$fecha_cuotas', '$nro_poliza')");
                }
    
$upauto = $con -> query("UPDATE automovil SET nro_poliza='$nro_poliza', cod_cliente='$cod_cliente' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
$upcli = $con -> query("UPDATE clientes SET nro_poliza='$nro_poliza', cod_cliente='$cod_cliente' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
$upclitom = $con -> query("UPDATE clientes_tomador SET nro_poliza='$nro_poliza', cod_cliente='$cod_cliente' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
$acc = $con -> query("UPDATE acc_perso_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE cod_cotizacion='$cod_cotizacion'");

$propol = $con -> query("UPDATE producto_automotores_pol SET cod_cliente='$cod_cliente', nro_poliza='$nro_poliza' WHERE cod_cotizacion='$cod_cotizacion'");
$ben = $con -> query("UPDATE ben_adic_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE cod_cotizacion='$cod_cotizacion'");
$cla = $con -> query("UPDATE clau_adic_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE  cod_cotizacion='$cod_cotizacion'");
$cob = $con -> query("UPDATE cob_adic_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE  cod_cotizacion='$cod_cotizacion'");
$not = $con -> query("UPDATE nota_aclar_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE  cod_cotizacion='$cod_cotizacion'");
$req = $con -> query("UPDATE req_aseg_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE  cod_cotizacion='$cod_cotizacion'");
$res = $con -> query("UPDATE respon_civil_auto_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE cod_cotizacion='$cod_cotizacion'");
$rie = $con -> query("UPDATE riesgo_cubierto_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE cod_cotizacion='$cod_cotizacion'");

$usuario = $_SESSION["usuario"];
$accion = 'Crea Poliza'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");

if ($upauto) {
	echo "<script>
	location.href='../../polizas/include/ver_poliza_automotor.php';
	</script>";
}else{
	echo "<script>
	location.href='poliza_automotor/cotizaciones?id=".$id."';
	</script>";
}
                }
    ///Final credito
    elseif($tipo_pago=='CONTADO')
    {

$incarro = $con -> query("SELECT * FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");

while ($row = $incarro -> fetch_assoc()) {
$cod_clien=$row['cod_cliente'];
$clase=$row['clase'];
$placa=$row['placa'];
$marca=$row['marca'];
$ano=$row['ano'];
$color=$row['color'];
$modelo=$row['modelo'];
$traccion=$row['traccion'];
$uso=$row['uso'];
$distrito=$row['distrito'];
$plazas=$row['plazas'];
$id_ce=$row['id_ce'];
$certificado=$row['certificado'];
$chasis=$row['chasis'];
$motor=$row['motor'];
$auto_cap_aseg=$row['auto_cap_aseg'];
$plan=$row['plan'];
$intermediario=$row['intermediario'];
$tasa_prima=$row['tasa_prima'];
$prima_total=$row['prima_total'];
$tipopago=$row['tipo_pago'];
$distrito= $row['distrito'];
$plaza = $row['plaza'];
$f_registro = date("Y-m-d");
  
    
    //produccion
    $valor_asegurado = $row['auto_cap_aseg'];
    $prima_total=$row['prima_total'];
    $porcentaje_iva=13;
    $porcentaje_it=3;
    $porcentaje_itf=.3;
    $porcentaje_aba = 0.061263045503;
    $porcentaje_fpa=.5;
    $porcentaje_aps=2;
    $porcentaje_itf_remesas = 0.3;
    $porcentaje_intermediario=16;
    $porcentaje_iue_remesas=2.5;
    $porcentaje_comision_bancaria = 2.10;
    $porcentaje_comision_compania = 10.90;
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    $porcentaje_secion = .70;
    $porcentaje_seguridad = .59;
    //traer de la base de datos
    $porcentaje_comision_inter = 16;
    $com_cobranza_1 = 0;
    $com_cobranza_2 = 0;
    $factor_impuesto = 1.14942528736;
    $tipo_cambio = 6.86;
    $compania = '101';
    //$distrito = 'LA PAZ';
    $fecha_hoy = date('Y-m-d');
    $modalidad = '91';
    $ramo = '05';
    $broker = $row['intermediario'];
    
    $com_inter = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_inter)/100;
    $com_comp = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_compania)/100;
    $itf = $prima_total*$porcentaje_itf/100;
    $it = $prima_total*$porcentaje_it/100;
    $iva = $prima_total*$porcentaje_iva/100;
    $aba = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aba)/100;
    $fpa = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_fpa)/100;
    $aps = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aps)/100;
    $prima_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    $prima_riesgo = $prima_directa-$com_inter-$com_comp-$com_cobranza_1-$com_cobranza_2;
    $itf_remesas = $porcentaje_itf_remesas*$prima_riesgo/100;
    $com_inter_fact = ($com_inter*$factor_impuesto);
    $uie_remesas = $porcentaje_iue_remesas*$prima_riesgo/100;
    $com_bancaria = $porcentaje_comision_bancaria*$prima_riesgo/100;
    $prima_directa_bs = $prima_directa*$tipo_cambio;
    $prima_neta_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    $prima_neta_directa_bs = $prima_directa*$tipo_cambio;
    $prima_adicional = ($prima_total-$iva)-$prima_directa;
    $prima_ced_reaseg = $porcentaje_secion*$porcentaje_seguridad*$prima_riesgo;
    $prima_ced_reaseg_bs = $prima_ced_reaseg*$tipo_cambio;
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `modalidad`, `ramo`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`) 
    VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$modalidad','$ramo', '$cod_clien','$nro_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','0.00','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    //fin produccion
    
    //ok funciona
    $inser_auto=$con -> query("INSERT INTO automovil(idnum, cod_cliente, nro_poliza, certificado, id_ce, clase, placa, ano, marca, color,  modelo, traccion, uso, distrito, plaza, plazas, chasis, motor, auto_cap_aseg, plan, intermediario, tasa_prima, prima_total, tipo_pago, inicio_vigencia, final_vigencia, fechavencimiento, estado, f_registro) VALUES ('$idau', '$cod_cliente', '$nro_poliza', '$certificado', '$id_ce', '$clase', '$placa', '$ano', '$marca','$color', '$modelo', '$traccion', '$uso', '$s_distrito', '$plaza', '$plazas', '$chasis', '$motor', '$auto_cap_aseg', '$plan', '$intermediario', '$tasa_prima', '$primatotal', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_vencimiento','NUEVO', '$f_registro')");
}
        
$upauto = $con -> query("UPDATE automovil SET nro_poliza='$nro_poliza', cod_cliente='$cod_cliente' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
$upcli = $con -> query("UPDATE clientes SET nro_poliza='$nro_poliza', cod_cliente='$cod_cliente' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
$upclitom = $con -> query("UPDATE clientes_tomador SET nro_poliza='$nro_poliza', cod_cliente='$cod_cliente' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
$acc = $con -> query("UPDATE acc_perso_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE cod_cotizacion='$cod_cotizacion'");

$propol = $con -> query("UPDATE producto_automotores_pol SET cod_cliente='$cod_cliente', nro_poliza='$nro_poliza' WHERE cod_cotizacion='$cod_cotizacion'");
$ben = $con -> query("UPDATE ben_adic_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE
cod_cotizacion='$cod_cotizacion'");
$cla = $con -> query("UPDATE clau_adic_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE  cod_cotizacion='$cod_cotizacion'");
$cob = $con -> query("UPDATE cob_adic_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE  cod_cotizacion='$cod_cotizacion'");
$not = $con -> query("UPDATE nota_aclar_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE  cod_cotizacion='$cod_cotizacion'");
$req = $con -> query("UPDATE req_aseg_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE  cod_cotizacion='$cod_cotizacion'");
$res = $con -> query("UPDATE respon_civil_auto_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE cod_cotizacion='$cod_cotizacion'");
$rie = $con -> query("UPDATE riesgo_cubierto_au_pol SET cod_cliente='$cod_cliente', num_poliza='$nro_poliza' WHERE cod_cotizacion='$cod_cotizacion'");

$usuario = $_SESSION["usuario"];
$accion = 'Crea Poliza'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");

if ($upauto) {
	echo "<script>
	location.href='../../polizas/include/ver_poliza_automotor.php';
	</script>";
}else{
	echo "<script>
	location.href='poliza_automotor/cotizaciones?id=".$id."';
	</script>";
}
 }

?>
