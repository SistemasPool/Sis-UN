<?php
//include "../../../verificar_sesion.php"; 
$con = new mysqli('localhost','root','','unibienes');

$consulta = $con ->query("SELECT * FROM produccion_ciclo");
while($consul = $consulta -> fetch_assoc()){
$valor_asegurado = $consul['valor_asegurado'];
$distrito = $consul['distrito'];
$tipo_pago = $consul['tipo_pago'];
$desc_ramo = $consul['ramo'];
$asegurado = $consul['asegurado'];
$final_vigencia= $consul['final_vigencia'];
$inicio_vigencia = $consul['inicio_vigencia'];

    
if($distrito == 'LA PAZ'){
if($tipo_pago=='CREDITO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    $valor_asegurado = $consul['valor_asegurado'];
    $f_emision = $consul['f_emision'];
    $cod_cliente = $consul['cod_cliente'];
    $num_poliza = $consul['num_poliza'];
    $porcentaje_credito = 6;
    $prima_total = $consul['prima_total'];
   // $prima_total = ($prima_total*$porcentaje_credito/100)+$prima_total;
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
    $porcentaje_comision_compania = 10.9;
    $porcentaje_secion = .70;
    $porcentaje_seguridad = .59;
    
    
    //parmetrizar por post
    if($terremoto =='SI'){
        $porcentaje_reaseguro = .275;
        $m_terremoto = $_POST['m_terremoto'];
    }elseif($terremoto =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    if($terrorismo =='SI'){
        $porcentaje_reaseguro = .0;
        $m_terrorismo = $_POST['m_terrorismo'];
    }elseif($terrorismo =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    
    //traer de la base de datos
    $ramo = $consul['ramo'];
    $broker = $consul['intermediario'];
    $inter = $con ->query("SELECT * FROM intermediarios WHERE intermediario='$broker'");
		          $interme = $inter -> fetch_assoc();
                  $tipo_inter = $interme['tipo'];
    
    //$porcentaje_comision_inter = $_POST['com_inter'];
    $com_cobranza_1 = 0;
    $com_cobranza_2 = 0;
    $factor_impuesto = 1.14942528736;
    $tipo_cambio = 6.86;
    $compania = '116';
    //$distrito = 'LA PAZ';
    $fecha_hoy = date('Y-m-d');
    
    if($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=20;
        $porcentaje_prima_riesgo = 54.4902300948479;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        
    }
    elseif($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.0024292204243;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=17;
        $porcentaje_prima_riesgo = 56.758528783208;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.51462834599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='BROKER'){
    //    $porcentaje_comision_inter=17;
    //    $porcentaje_prima_riesgo = ;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='AGENTE'){
    //    $porcentaje_comision_inter=16;
    //    $porcentaje_prima_riesgo = 56.0024292204243;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    elseif($ramo=='ROBO' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=13;
        $porcentaje_prima_riesgo = 59.78292703434;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=0;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 58.199967798277;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12;
        $porcentaje_prima_riesgo = 60.53902659713;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.27072790878;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.514628334599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='CARTERA DIRECTA'){
        $porcentaje_comision_compania = 21.8;
        $porcentaje_prima_riesgo = 61.37073611619;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    
    if($ramo=='INCENDIO Y ALIADOS'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRDP'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='MULTIRIESGO'){
    $modalidad = '91';
    $ramo = '09';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ROBO'){
    $modalidad = '91';
    $ramo = '02';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRANSPORTE'){
    $modalidad = '91';
    $ramo = '03';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='NAVES O EMBARCACIONES'){
    $modalidad = '91';
    $ramo = '04';
    $porcentaje_factor_tasa_tecnica = 1.3008194516267;
    }elseif($ramo=='AUTOMOTORES'){
    $modalidad = '91';
    $ramo = '05';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='AERONAVEGACION'){
    $modalidad = '91';
    $ramo = '06';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RAMOS TECNICOS'){
    $modalidad = '91';
    $ramo = '07';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RESPONSABILIDAD CIVIL'){
    $modalidad = '91';
    $ramo = '08';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ACCIDENTES PERSONALES'){
    $modalidad = '91';
    $ramo = '12';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIANZAS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIDELIDAD DE EMPLEADOS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='DELITOS FINANCIEROS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='3D'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='BBB'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    
    $com_inter = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_inter)/100;
    $com_comp = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_compania)/100;
    $itf = $prima_total*$porcentaje_itf/100;
    $it = $prima_total*$porcentaje_it/100;
    $iva = $prima_total*$porcentaje_iva/100;
    $aba = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aba)/100;
    $fpa = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_fpa)/100;
    $aps = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aps)/100;
    $prima_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    //$prima_riesgo = $prima_directa-$com_inter-$com_comp-$com_cobranza_1-$com_cobranza_2;
    $itf_remesas = $porcentaje_itf_remesas*$prima_riesgo/100;
    $com_inter_fact = ($com_inter*$factor_impuesto);
    $uie_remesas = $porcentaje_iue_remesas*$prima_riesgo/100;
    $com_bancaria = $porcentaje_comision_bancaria*$prima_riesgo/100;
    $prima_directa_bs = $prima_directa*$tipo_cambio;
    $prima_neta_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    $prima_neta_directa_bs = $prima_directa*$tipo_cambio;
    $prima_adicional = ($prima_total-$iva)-$prima_directa;
    $prima_ced_reaseg = $porcentaje_secion*$porcentaje_seguridad*$prima_riesgo;
    //$prima_ced_reaseg = $porcentaje_secion*$porcentaje_seguridad*$prima_riesgo;
    ///////////
    $prima_ced_reaseg_bs = $prima_ced_reaseg*$tipo_cambio;
    $com_reaseguro = $prima_ced_reaseg*$porcentaje_reaseguro;
   
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `fecha_emision`, `inicio_vigencia`, `final_vigencia`, `modalidad`, `ramo`,  `desc_ramo`, `asegurado`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`)     VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$f_emision','$inicio_vigencia','$final_vigencia','$modalidad','$ramo', '$desc_ramo', '$asegurado','$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
}elseif($tipo_pago=='CONTADO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    
    $prima_total = $consul['prima_total'];
    $f_emision = $consul['f_emision'];
    $cod_cliente = $consul['cod_cliente'];
    $num_poliza = $consul['num_poliza'];
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
    $porcentaje_comision_compania = 21.8;
    //$porcentaje_factor_tasa_tecnica = 1.26079803962626;
    $porcentaje_secion = .70;
    $porcentaje_seguridad = .59;
    $porcentaje_reaseguro = .20;
    //traer de la base de datos
    $com_cobranza_1 = 0;
    $com_cobranza_2 = 0;
    $factor_impuesto = 1.14942528736;
    $tipo_cambio = 6.86;
    $compania = '116';
    //$distrito = 'LA PAZ';
    $fecha_hoy = date('Y-m-d');
    //$modalidad = '91';
    //$ramo = '05';
    $broker = $consul['intermediario'];
    $ramo = $consul['ramo'];
    
    //parmetrizar por post
    if($terremoto =='SI'){
        $porcentaje_reaseguro = .275;
    }elseif($terremoto =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    if($terrorismo =='SI'){
        $porcentaje_reaseguro = .0;
    }elseif($terrorismo =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    
    //$porcentaje_comision_inter = $_POST['com_inter'];
    $inter = $con ->query("SELECT * FROM intermediarios WHERE intermediario='$broker'");
		          $interme = $inter -> fetch_assoc();
                  $tipo_inter = $interme['tipo'];
    
     if($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=20;
        $porcentaje_prima_riesgo = 54.4902300948479;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.0024292204243;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=17;
        $porcentaje_prima_riesgo = 56.758528783208;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.51462834599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
   // elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='BROKER'){
//        $porcentaje_comision_inter=17;
//        $porcentaje_prima_riesgo = ;
//        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
//    }
//    elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='AGENTE'){
//        $porcentaje_comision_inter=16;
//        $porcentaje_prima_riesgo = 56.0024292204243;
//        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
//    }
    elseif($ramo=='ROBO' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=13;
        $porcentaje_prima_riesgo = 59.78292703434;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=0;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 58.199967798277;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12;
        $porcentaje_prima_riesgo = 60.53902659713;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.27072790878;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.514628334599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='CARTERA DIRECTA'){
        $porcentaje_comision_compania = 21.8;
        $porcentaje_prima_riesgo = 61.37073611619;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    
    
    if($ramo=='INCENDIO Y ALIADOS'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRDP'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='MULTIRIESGO'){
    $modalidad = '91';
    $ramo = '09';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ROBO'){
    $modalidad = '91';
    $ramo = '02';
    $porcentaje_factor_tasa_tecnica = 1.3008194516267;
    }elseif($ramo=='TRANSPORTE'){
    $modalidad = '91';
    $ramo = '03';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='NAVES O EMBARCACIONES'){
    $modalidad = '91';
    $ramo = '04';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='AUTOMOTORES'){
    $modalidad = '91';
    $ramo = '05';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='AERONAVEGACION'){
    $modalidad = '91';
    $ramo = '06';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RAMOS TECNICOS'){
    $modalidad = '91';
    $ramo = '07';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RESPONSABILIDAD CIVIL'){
    $modalidad = '91';
    $ramo = '08';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ACCIDENTES PERSONALES'){
    $modalidad = '91';
    $ramo = '12';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIANZAS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIDELIDAD DE EMPLEADOS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='DELITOS FINANCIEROS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='3D'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='BBB'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    
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
    $com_reaseguro = $prima_ced_reaseg*$porcentaje_reaseguro;
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `fecha_emision`, `inicio_vigencia`, `final_vigencia`, `modalidad`, `ramo`,  `desc_ramo`, `asegurado`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`) 
    VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$f_emision','$inicio_vigencia','$final_vigencia','$modalidad','$ramo','$desc_ramo','$asegurado','$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
   // if(mysqli_query($con, $insertar)){
    //header('Location: ../index.php');
//    echo "Records inserted successfully.";
//} else{
//    echo "ERROR: Could not able to execute $insertar. " . mysqli_error($con);
}
    
}
elseif($distrito == 'SANTA CRUZ'){
    if($tipo_pago=='CREDITO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    
    $valor_asegurado = $consul['valor_asegurado'];
    $cod_cliente = $consul['cod_cliente'];
    $num_poliza = $consul['num_poliza'];
    $porcentaje_credito = 6;
    $prima_total = $consul['prima_total'];
    //$prima_total = ($prima_total*$porcentaje_credito/100)+$prima_total;
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
    $porcentaje_comision_compania = 10.9;
    $porcentaje_secion = .70;
    $porcentaje_seguridad = .59;
    
    
    //parmetrizar por post
    if($terremoto =='SI'){
        $porcentaje_reaseguro = .275;
    }elseif($terremoto =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    if($terrorismo =='SI'){
        $porcentaje_reaseguro = .0;
    }elseif($terrorismo =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    
    //traer de la base de datos
    $ramo = $consul['ramo'];
    $broker = $consul['intermediario'];
    $inter = $con ->query("SELECT * FROM intermediarios WHERE intermediario='$broker'");
		          $interme = $inter -> fetch_assoc();
                  $tipo_inter = $interme['tipo'];
    
    //$porcentaje_comision_inter = $_POST['com_inter'];
    $com_cobranza_1 = 0;
    $com_cobranza_2 = 0;
    $factor_impuesto = 1.14942528736;
    $tipo_cambio = 6.86;
    $compania = '116';
    //$distrito = 'LA PAZ';
    $fecha_hoy = date('Y-m-d');
    
    if($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=20;
        $porcentaje_prima_riesgo = 54.4902300948;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.0024292204243;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=17;
        $porcentaje_prima_riesgo = 56.758528783208;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.51462834599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='BROKER'){
    //    $porcentaje_comision_inter=17;
    //    $porcentaje_prima_riesgo = ;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='AGENTE'){
    //    $porcentaje_comision_inter=16;
    //    $porcentaje_prima_riesgo = 56.0024292204243;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    elseif($ramo=='ROBO' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=13;
        $porcentaje_prima_riesgo = 59.78292703434;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
         if($broker=='Estrategica S.R.L. Corredores y Asesores de Seguros y Riesgos.'){
            $porcentaje_comision_inter=17.5;
        }elseif($broker=='Interseguros S.A. Corrredores y Asesores.'){
            $porcentaje_comision_inter=18.5;
        }elseif($broker=='A.E.C. Fides Brokers Ltda. Asesores de Seguros.'){
            $porcentaje_comision_inter=18;
        }elseif($broker=='H.K.A. Corredores y Asesores de Seguros S.R.L.'){
            $porcentaje_comision_inter=16.20;
        }else{
        $porcentaje_comision_inter=16;
        }
        $porcentaje_prima_riesgo = 58.199967798277;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.5146283460;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12;
        $porcentaje_prima_riesgo = 60.53902659713;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.27072790878;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.514628334599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='CARTERA DIRECTA'){
        $porcentaje_comision_compania = 21.8;
        $porcentaje_prima_riesgo = 61.37073611619;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    
    if($ramo=='INCENDIO Y ALIADOS'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRDP'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='MULTIRIESGO'){
    $modalidad = '91';
    $ramo = '09';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ROBO'){
    $modalidad = '91';
    $ramo = '02';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRANSPORTE'){
    $modalidad = '91';
    $ramo = '03';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='NAVES O EMBARCACIONES'){
    $modalidad = '91';
    $ramo = '04';
    $porcentaje_factor_tasa_tecnica = 1.3008194516267;
    }elseif($ramo=='AUTOMOTORES'){
    $modalidad = '91';
    $ramo = '05';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='AERONAVEGACION'){
    $modalidad = '91';
    $ramo = '06';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RAMOS TECNICOS'){
    $modalidad = '91';
    $ramo = '07';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RESPONSABILIDAD CIVIL'){
    $modalidad = '91';
    $ramo = '08';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ACCIDENTES PERSONALES'){
    $modalidad = '91';
    $ramo = '12';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIANZAS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIDELIDAD DE EMPLEADOS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='DELITOS FINANCIEROS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='3D'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='BBB'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    
    $com_inter = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_inter)/100;
    $com_comp = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_compania)/100;
    $itf = $prima_total*$porcentaje_itf/100;
    $it = $prima_total*$porcentaje_it/100;
    $iva = $prima_total*$porcentaje_iva/100;
    $aba = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aba)/100;
    $fpa = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_fpa)/100;
    $aps = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aps)/100;
    $prima_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    //$prima_riesgo = $prima_directa-$com_inter-$com_comp-$com_cobranza_1-$com_cobranza_2;
    $itf_remesas = $porcentaje_itf_remesas*$prima_riesgo/100;
    $com_inter_fact = ($com_inter*$factor_impuesto);
    $uie_remesas = $porcentaje_iue_remesas*$prima_riesgo/100;
    $com_bancaria = $porcentaje_comision_bancaria*$prima_riesgo/100;
    $prima_directa_bs = $prima_directa*$tipo_cambio;
    $prima_neta_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    $prima_neta_directa_bs = $prima_directa*$tipo_cambio;
    $prima_adicional = ($prima_total-$iva)-$prima_directa;
    //$prima_ced_reaseg = $porcentaje_secion*$porcentaje_seguridad*$prima_riesgo;
    $prima_ced_reaseg = $porcentaje_secion*$porcentaje_seguridad*$prima_riesgo;
    ///////////
    $prima_ced_reaseg_bs = $prima_ced_reaseg*$tipo_cambio;
    $com_reaseguro = $prima_ced_reaseg*$porcentaje_reaseguro;
   
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `fecha_emision`, `inicio_vigencia`, `final_vigencia`, `modalidad`, `ramo`,  `desc_ramo`, `asegurado`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`)     VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$f_emision','$inicio_vigencia','$final_vigencia','$modalidad','$ramo','$desc_ramo', '$asegurado','$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
}elseif($tipo_pago=='CONTADO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    $valor_asegurado = $consul['valor_asegurado'];
    $prima_total = $consul['prima_total'];
    $cod_cliente = $consul['cod_cliente'];
    $num_poliza = $consul['num_poliza'];
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
    $porcentaje_comision_compania = 21.8;
    //$porcentaje_factor_tasa_tecnica = 1.26079803962626;
    $porcentaje_secion = .70;
    $porcentaje_seguridad = .59;
    $porcentaje_reaseguro = .20;
    //traer de la base de datos
    $com_cobranza_1 = 0;
    $com_cobranza_2 = 0;
    $factor_impuesto = 1.14942528736;
    $tipo_cambio = 6.86;
    $compania = '116';
    //$distrito = 'LA PAZ';
    $fecha_hoy = date('Y-m-d');
    //$modalidad = '91';
    //$ramo = '05';
    $broker = $consul['intermediario'];
    $ramo = $consul['ramo'];
        
    //parmetrizar por post
    if($terremoto =='SI'){
        $porcentaje_reaseguro = .275;
    }elseif($terremoto =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    if($terrorismo =='SI'){
        $porcentaje_reaseguro = .0;
    }elseif($terrorismo =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    //$porcentaje_comision_inter = $_POST['com_inter'];
    $inter = $con ->query("SELECT * FROM intermediarios WHERE intermediario='$broker'");
		          $interme = $inter -> fetch_assoc();
                  $tipo_inter = $interme['tipo'];
    
    if($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=20;
        $porcentaje_prima_riesgo = 54.4902300948;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        
    }
    elseif($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.0024292204243;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=17;
        $porcentaje_prima_riesgo = 56.758528783208;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.51462834599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='BROKER'){
    //    $porcentaje_comision_inter=17;
    //    $porcentaje_prima_riesgo = ;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='AGENTE'){
    //    $porcentaje_comision_inter=16;
    //    $porcentaje_prima_riesgo = 56.0024292204243;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    elseif($ramo=='ROBO' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=13;
        $porcentaje_prima_riesgo = 59.78292703434;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;$porcentaje_secion = 0;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
        if($broker=='Estrategica S.R.L. Corredores y Asesores de Seguros y Riesgos.'){
            $porcentaje_comision_inter=17.5;
        }elseif($broker=='Interseguros S.A. Corrredores y Asesores.'){
            $porcentaje_comision_inter=18.5;
        }elseif($broker=='A.E.C. Fides Brokers Ltda. Asesores de Seguros.'){
            $porcentaje_comision_inter=18;
        }elseif($broker=='H.K.A. Corredores y Asesores de Seguros S.R.L.'){
            $porcentaje_comision_inter=16.20;
        }else{
        $porcentaje_comision_inter=16;
        }
        $porcentaje_prima_riesgo = 58.199967798277;
        $porcentaje_secion = 0;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.5146283460;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;

    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12;
        $porcentaje_prima_riesgo = 60.53902659713;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.27072790878;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.514628334599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='CARTERA DIRECTA'){
        $porcentaje_comision_compania = 21.8;
        $porcentaje_prima_riesgo = 61.37073611619;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    
    if($ramo=='INCENDIO Y ALIADOS'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRDP'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='MULTIRIESGO'){
    $modalidad = '91';
    $ramo = '09';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ROBO'){
    $modalidad = '91';
    $ramo = '02';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRANSPORTE'){
    $modalidad = '91';
    $ramo = '03';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='NAVES O EMBARCACIONES'){
    $modalidad = '91';
    $ramo = '04';
    $porcentaje_factor_tasa_tecnica = 1.3008194516267;
    }elseif($ramo=='AUTOMOTORES'){
    $modalidad = '91';
    $ramo = '05';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='AERONAVEGACION'){
    $modalidad = '91';
    $ramo = '06';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RAMOS TECNICOS'){
    $modalidad = '91';
    $ramo = '07';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RESPONSABILIDAD CIVIL'){
    $modalidad = '91';
    $ramo = '08';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ACCIDENTES PERSONALES'){
    $modalidad = '91';
    $ramo = '12';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIANZAS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIDELIDAD DE EMPLEADOS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='DELITOS FINANCIEROS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='3D'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='BBB'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    
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
    $com_reaseguro = $prima_ced_reaseg*$porcentaje_reaseguro;
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `fecha_emision`, `inicio_vigencia`, `final_vigencia`, `modalidad`, `ramo`, `desc_ramo`, `asegurado`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`) 
    VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$f_emision','$inicio_vigencia','$final_vigencia','$modalidad','$ramo','$desc_ramo','$asegurado','$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
   // if(mysqli_query($con, $insertar)){
    //header('Location: ../index.php');
//    echo "Records inserted successfully.";
//} else{
//    echo "ERROR: Could not able to execute $insertar. " . mysqli_error($con);
}
    
}

elseif($distrito == 'COCHABAMBA'){
    if($tipo_pago=='CREDITO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    
    $valor_asegurado = $consul['valor_asegurado'];
    $cod_cliente = $consul['cod_cliente'];
    $num_poliza = $consul['num_poliza'];
    $porcentaje_credito = 6;
    $prima_total = $consul['prima_total'];
    //$prima_total = ($prima_total*$porcentaje_credito/100)+$prima_total;
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
    $porcentaje_comision_compania = 10.9;
    $porcentaje_secion = .70;
    $porcentaje_seguridad = .59;
    
    
    //parmetrizar por post
    if($terremoto =='SI'){
        $porcentaje_reaseguro = .275;
    }elseif($terremoto =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    if($terrorismo =='SI'){
        $porcentaje_reaseguro = .0;
    }elseif($terrorismo =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    
    //traer de la base de datos
    $ramo = $consul['ramo'];
    $broker = $consul['intermediario'];
    $inter = $con ->query("SELECT * FROM intermediarios WHERE intermediario='$broker'");
		          $interme = $inter -> fetch_assoc();
                  $tipo_inter = $interme['tipo'];
    
    //$porcentaje_comision_inter = $_POST['com_inter'];
    $com_cobranza_1 = 0;
    $com_cobranza_2 = 0;
    $factor_impuesto = 1.14942528736;
    $tipo_cambio = 6.86;
    $compania = '116';
    //$distrito = 'LA PAZ';
    $fecha_hoy = date('Y-m-d');
    
    if($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=20;
        $porcentaje_prima_riesgo = 54.4902300948;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        
    }
    elseif($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.0024292204243;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=17;
        $porcentaje_prima_riesgo = 56.758528783208;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.51462834599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='BROKER'){
    //    $porcentaje_comision_inter=17;
    //    $porcentaje_prima_riesgo = ;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='AGENTE'){
    //    $porcentaje_comision_inter=16;
    //    $porcentaje_prima_riesgo = 56.0024292204243;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    elseif($ramo=='ROBO' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=17;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=13;
        $porcentaje_prima_riesgo = 59.78292703434;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
        if($broker=='Sudamenricana S.R.L. Corredores de Seguros.'){
            $porcentaje_comision_inter=18;
        }elseif($broker=='IBA Corredores y Asesores de Seguros S.R.L.'){
            $porcentaje_comision_inter=17;
        }elseif($broker=='Consultores de Seguros S.A.'){
            $porcentaje_comision_inter=17.65;
        }else{
        $porcentaje_comision_inter=18.65;
        }
        $porcentaje_prima_riesgo = 58.199967798277;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12;
        $porcentaje_prima_riesgo = 60.53902659713;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.27072790878;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.514628334599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='CARTERA DIRECTA'){
        $porcentaje_comision_compania = 21.8;
        $porcentaje_prima_riesgo = 61.37073611619;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    
    if($ramo=='INCENDIO Y ALIADOS'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRDP'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='MULTIRIESGO'){
    $modalidad = '91';
    $ramo = '09';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ROBO'){
    $modalidad = '91';
    $ramo = '02';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRANSPORTE'){
    $modalidad = '91';
    $ramo = '03';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='NAVES O EMBARCACIONES'){
    $modalidad = '91';
    $ramo = '04';
    $porcentaje_factor_tasa_tecnica = 1.3008194516267;
    }elseif($ramo=='AUTOMOTORES'){
    $modalidad = '91';
    $ramo = '05';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='AERONAVEGACION'){
    $modalidad = '91';
    $ramo = '06';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RAMOS TECNICOS'){
    $modalidad = '91';
    $ramo = '07';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RESPONSABILIDAD CIVIL'){
    $modalidad = '91';
    $ramo = '08';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ACCIDENTES PERSONALES'){
    $modalidad = '91';
    $ramo = '12';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIANZAS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIDELIDAD DE EMPLEADOS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='DELITOS FINANCIEROS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='3D'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='BBB'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    
    $com_inter = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_inter)/100;
    $com_comp = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_compania)/100;
    $itf = $prima_total*$porcentaje_itf/100;
    $it = $prima_total*$porcentaje_it/100;
    $iva = $prima_total*$porcentaje_iva/100;
    $aba = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aba)/100;
    $fpa = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_fpa)/100;
    $aps = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_aps)/100;
    $prima_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    //$prima_riesgo = $prima_directa-$com_inter-$com_comp-$com_cobranza_1-$com_cobranza_2;
    $itf_remesas = $porcentaje_itf_remesas*$prima_riesgo/100;
    $com_inter_fact = ($com_inter*$factor_impuesto);
    $uie_remesas = $porcentaje_iue_remesas*$prima_riesgo/100;
    $com_bancaria = $porcentaje_comision_bancaria*$prima_riesgo/100;
    $prima_directa_bs = $prima_directa*$tipo_cambio;
    $prima_neta_directa = $prima_total/$porcentaje_factor_tasa_tecnica;
    $prima_neta_directa_bs = $prima_directa*$tipo_cambio;
    $prima_adicional = ($prima_total-$iva)-$prima_directa;
    $prima_ced_reaseg = $porcentaje_secion*$porcentaje_seguridad*$prima_riesgo;
    ///////////
    $prima_ced_reaseg_bs = $prima_ced_reaseg*$tipo_cambio;
    $com_reaseguro = $prima_ced_reaseg*$porcentaje_reaseguro;
   
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `fecha_emision`, `inicio_vigencia`, `final_vigencia`, `modalidad`, `ramo`,  `desc_ramo`, `asegurado`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`)     VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$f_emision','$inicio_vigencia','$final_vigencia','$modalidad','$ramo','$desc_ramo', '$asegurado','$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
}elseif($tipo_pago=='CONTADO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    $valor_asegurado = $consul['valor_asegurado'];
    $prima_total = $consul['prima_total'];
    $cod_cliente = $consul['cod_cliente'];
    $num_poliza = $consul['num_poliza'];
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
    $porcentaje_comision_compania = 21.8;
    //$porcentaje_factor_tasa_tecnica = 1.26079803962626;
    $porcentaje_secion = .70;
    $porcentaje_seguridad = .59;
    $porcentaje_reaseguro = .20;
    //traer de la base de datos
    $com_cobranza_1 = 0;
    $com_cobranza_2 = 0;
    $factor_impuesto = 1.14942528736;
    $tipo_cambio = 6.86;
    $compania = '116';
    //$distrito = 'LA PAZ';
    $fecha_hoy = date('Y-m-d');
    //$modalidad = '91';
    //$ramo = '05';
    $broker = $consul['intermediario'];
    $ramo = $consul['ramo'];
        
    //parmetrizar por post
    if($terremoto =='SI'){
        $porcentaje_reaseguro = .275;
    }elseif($terremoto =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    if($terrorismo =='SI'){
        $porcentaje_reaseguro = .0;
    }elseif($terrorismo =='NO')
    {
        $porcentaje_reaseguro = .20;
    }
    //$porcentaje_comision_inter = $_POST['com_inter'];
    $inter = $con ->query("SELECT * FROM intermediarios WHERE intermediario='$broker'");
		          $interme = $inter -> fetch_assoc();
                  $tipo_inter = $interme['tipo'];
    
    if($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=20;
        $porcentaje_prima_riesgo = 54.4902300948;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        
    }
    elseif($ramo=='INCENDIO Y ALIADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.0024292204243;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=17;
        $porcentaje_prima_riesgo = 56.758528783208;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRDP' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.51462834599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='BROKER'){
    //    $porcentaje_comision_inter=17;
    //    $porcentaje_prima_riesgo = ;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    //elseif($ramo=='MULTIRIESGOI' and $tipo_inter=='AGENTE'){
    //    $porcentaje_comision_inter=16;
    //    $porcentaje_prima_riesgo = 56.0024292204243;
    //    $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    //}
    elseif($ramo=='ROBO' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='TRANSPORTE' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=13;
        $porcentaje_prima_riesgo = 59.78292703434;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='NAVES O EMBARCACIONES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
        if($broker=='Sudamenricana S.R.L. Corredores de Seguros.'){
            $porcentaje_comision_inter=18;
        }elseif($broker=='IBA Corredores y Asesores de Seguros S.R.L.'){
            $porcentaje_comision_inter=17;
        }elseif($broker=='Consultores de Seguros S.A.'){
            $porcentaje_comision_inter=17.65;
        }else{
        $porcentaje_comision_inter=18.65;
        }
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $porcentaje_secion = 0;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.270727908777;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RAMOS TECNICOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12;
        $porcentaje_prima_riesgo = 60.53902659713;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='RESPONSABILIDAD CIVIL' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 58.27072790878;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=18;
        $porcentaje_prima_riesgo = 56.002429220424;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='ACCIDENTES PERSONALES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 57.514628334599;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIANZAS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='FIDELIDAD DE EMPLEADOS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='DELITOS FINANCIEROS' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='3D' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='BBB' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='CARTERA DIRECTA'){
        $porcentaje_comision_compania = 21.8;
        $porcentaje_prima_riesgo = 61.37073611619;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    
    if($ramo=='INCENDIO Y ALIADOS'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRDP'){
    $modalidad = '91';
    $ramo = '01';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='MULTIRIESGO'){
    $modalidad = '91';
    $ramo = '09';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ROBO'){
    $modalidad = '91';
    $ramo = '02';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='TRANSPORTE'){
    $modalidad = '91';
    $ramo = '03';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='NAVES O EMBARCACIONES'){
    $modalidad = '91';
    $ramo = '04';
    $porcentaje_factor_tasa_tecnica = 1.3008194516267;
    }elseif($ramo=='AUTOMOTORES'){
    $modalidad = '91';
    $ramo = '05';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='AERONAVEGACION'){
    $modalidad = '91';
    $ramo = '06';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RAMOS TECNICOS'){
    $modalidad = '91';
    $ramo = '07';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='RESPONSABILIDAD CIVIL'){
    $modalidad = '91';
    $ramo = '08';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='ACCIDENTES PERSONALES'){
    $modalidad = '91';
    $ramo = '12';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIANZAS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='FIDELIDAD DE EMPLEADOS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;
    }elseif($ramo=='DELITOS FINANCIEROS'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='3D'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    elseif($ramo=='BBB'){
    $modalidad = '92';
    $ramo = '27';
    $porcentaje_factor_tasa_tecnica = 1.26079803962626;}
    
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
    $com_reaseguro = $prima_ced_reaseg*$porcentaje_reaseguro;
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `fecha_emision`, `inicio_vigencia`, `final_vigencia`, `modalidad`, `ramo`,  `desc_ramo`, `asegurado`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`) 
    VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$f_emision','$inicio_vigencia','$final_vigencia','$modalidad','$ramo','$desc_ramo','$asegurado','$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
   // if(mysqli_query($con, $insertar)){
    //header('Location: ../index.php');
//    echo "Records inserted successfully.";
//} else{
//    echo "ERROR: Could not able to execute $insertar. " . mysqli_error($con);
}
}
}
?>
