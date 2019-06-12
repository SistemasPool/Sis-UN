<?php

$tipo_pago = 'CONTADO';

if($tipo_pago=='CREDITO'){
    $con = new mysqli('localhost','root','','unibienes');
    $valor_asegurado = '100000';
    $porcentaje_credito = 6;
    $prima_total = 100;
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
    $broker = 'UNIVERSAL BROKERS S.A.';
    
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
    VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$modalidad','$ramo', 'CUBLP00000020','AULP000000200','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','0.00','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
}elseif($tipo_pago=='CONTADO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    $valor_asegurado = '100000';
    $prima_total = 100;
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
    $broker = 'UNIVERSAL BROKERS S.A.';
    $tipo_pago = 'CONTADO';
    
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
    VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$modalidad','$ramo', 'CUBLP00000020','AULP000000200','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','0.00','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
   // if(mysqli_query($con, $insertar)){
    //header('Location: ../index.php');
//    echo "Records inserted successfully.";
//} else{
//    echo "ERROR: Could not able to execute $insertar. " . mysqli_error($con);
//}
    
}
?>