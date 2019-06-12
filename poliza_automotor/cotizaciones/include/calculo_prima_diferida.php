<?php
include "../../../verificar_sesion.php";
 if(isset($_POST['enviar']))
  {
//Inicio de fechas

$inicio_vigencia = $_POST['f_vigencia'];
$final_vigencia = $_POST['f_fin_vigencia'];
$fecha1= new DateTime($inicio_vigencia);
$fecha2= new DateTime($final_vigencia);
$diff = $fecha1->diff($fecha2);

$conteo_dias = $diff->days . ' dias';
$anos = $conteo_dias/365;
$decimales = explode(".",$anos);
$decimales[0];
$decimal = '.'.$decimales[1];

$prima_total = $_POST['prima_cobrar'];
$prima_residuo = $decimal;
$prima_anual = $prima_total-$prima_residuo;

if($decimales[1]>=0){
$anos =$decimales[0]+1;
for ($i = 1; $i <= $anos; $i++) {
    if($decimales[0]>=$i){

$distrito = $_SESSION['distrito'];
$tipo_pago = $_POST['tipo_pago'];
$terremoto = $_POST['terremoto'];
$terrorismo = $_POST['terrorismo'];
$prima_total = $prima_anual/$decimales[0];
if($distrito == 'LA PAZ'){
if($tipo_pago=='CREDITO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    
    $valor_asegurado = $_POST['valor'];
    $cod_cliente = $_POST['cod_cliente'];
    $num_poliza = $_POST['num_poliza'];
    $porcentaje_credito = 6;
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
    echo $ramo = $_POST['ramo'];
    echo $broker = $_POST['intermediario'];
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
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
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
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 58.199967798277;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
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
   
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `modalidad`, `ramo`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`)     VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$modalidad','$ramo', '$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
}elseif($tipo_pago=='CONTADO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    $valor_asegurado = $_POST['valor'];
    $prima_total = $_POST['prima_cobrar'];
    $cod_cliente = $_POST['cod_cliente'];
    $num_poliza = $_POST['num_poliza'];
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
    $broker = $_POST['intermediario'];
    $ramo = $_POST['ramo'];
    
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
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
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
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 58.199967798277;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
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
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `modalidad`, `ramo`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`) 
    VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$modalidad','$ramo', '$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
   // if(mysqli_query($con, $insertar)){
    //header('Location: ../index.php');
//    echo "Records inserted successfully.";
//} else{
//    echo "ERROR: Could not able to execute $insertar. " . mysqli_error($con);
}
    
}
    }else{

        $prima_total = $decimal;
        if($distrito == 'LA PAZ'){
if($tipo_pago=='CREDITO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    
    $valor_asegurado = $_POST['valor'];
    $cod_cliente = $_POST['cod_cliente'];
    $num_poliza = $_POST['num_poliza'];
    $porcentaje_credito = 6;
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
    $ramo = $_POST['ramo'];
    $broker = $_POST['intermediario'];
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
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
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
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 58.199967798277;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
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
   
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `modalidad`, `ramo`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`)     VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$modalidad','$ramo', '$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
}elseif($tipo_pago=='CONTADO'){
    
    $con = new mysqli('localhost','root','','unibienes');
    $valor_asegurado = $_POST['valor'];
    $prima_total = $_POST['prima_cobrar'];
    $cod_cliente = $_POST['cod_cliente'];
    $num_poliza = $_POST['num_poliza'];
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
    $broker = $_POST['intermediario'];
    $ramo = $_POST['ramo'];
    
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
    }
    elseif($ramo=='ROBO' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
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
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=16;
        $porcentaje_prima_riesgo = 58.199967798277;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AUTOMOTORES' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=12.5;
        $porcentaje_prima_riesgo = 60.76489789572;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='BROKER'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.051225722697;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
    }
    elseif($ramo=='AERONAVEGACION' and $tipo_inter=='AGENTE'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 62.05122572270;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
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
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `modalidad`, `ramo`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`) 
    VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$modalidad','$ramo', '$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','0.00','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
   // if(mysqli_query($con, $insertar)){
    //header('Location: ../index.php');
//    echo "Records inserted successfully.";
//} else{
//    echo "ERROR: Could not able to execute $insertar. " . mysqli_error($con);
}
    
}
    }

    
}}
     
     //fin de fechas
 }

include("../../../verificar_sesion.php"); 
?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <script src="script.js"></script>
    <title>.: Sistema UNIBienes :.</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <style>
        .marginBottom-0 {margin-bottom:0;}
        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu:hover>a:after{border-left-color:#555;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
      
    </style>
  </head>
  <body>
<nav class="navbar navbar navbar-default navbar-static-top marginBottom-0" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="#" target="_blank">UNIBienes</a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Personas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../../clientes/index.php">Clientes</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                    
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../cotizaciones/index.php">Cotización</a></li>
                            <li><a href="../../polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="../../reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="../../siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="../../polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../../siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../../siniestros/ver_liquidacion.php">Liquidaciones</a></li>
								<!--	<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
								</ul>
							</li>
                    
                </ul>
                    </li>
                </ul>
  
        <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="#"><?php echo $_SESSION["usuario"]; ?></a></li>
            <li><a href="../../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
         </div><!-- /.navbar-collapse -->
        </nav>
    <div class="container">
        <h2>Modulo de Producción</h2>
        <br>
	 <form action="" method="post">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Código Cliente</label>
                                    <input type="text" class="form-control" id="cod_cliente" name="cod_cliente">
                                  </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Número de Póliza</label>
                                <input type="text" class="form-control" id="num_poliza" name="num_poliza">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Valor Asegurado</label>
                                <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Prima a Cobrar</label>
                                <input type="text" class="form-control" id="prima_cobrar" name="prima_cobrar" placeholder="Prima a Cobrar" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Intermediario</label>
                                <?php
                                  $mysqli = new mysqli('localhost', 'root', '', 'unibienes');
                                ?>
                                  <select class="form-control" id="intermediario" name="intermediario">
                                        <option value="0">Seleccione Intermediario:</option>
                                        <?php
                                          $query = $mysqli -> query ("SELECT * FROM intermediarios order by intermediario");
                                          while ($interm = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$interm['intermediario'].'">'.$interm['intermediario'].'</option>';
                                          }
                                        ?>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha Inicio de Vigencia</label>
                                <input type="text" class="form-control" id="f_vigencia" name="f_vigencia" placeholder="0000-00-00" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha Inicio de Vigencia</label>
                                <input type="text" class="form-control" id="f_fin_vigencia" name="f_fin_vigencia" placeholder="0000-00-00" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Tipo Pago</label>
                                <select type="text" class="form-control" id="tipo_pago" name="tipo_pago">
                                <option></option>
                                <option value='CREDITO'>CREDITO</option>
                                <option value='CONTADO'>CONTADO</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Terremoto</label>
                                <select type="text" class="form-control" id="terremoto" name="terremoto">
                                <option></option>
                                <option value='SI'>SI</option>
                                <option value='NO'>NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Terrorismo</label>
                                <select type="text" class="form-control" id="terrorismo" name="terrorismo">
                                <option></option>
                                <option value='SI'>SI</option>
                                <option value='NO'>NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Ramo</label>
                                <select type="text" class="form-control" id="ramo" name="ramo">
                                <option></option>
                                <option value='INCENDIO Y ALIADOS'>INCENDIO Y ALIADOS</option>
                                <option value='TRDP'>TRDP</option>
                                <option value='MULTIRIESGO'>MULTIRIESGO</option>
                                <option value='ROBO'>ROBO</option>
                                <option value='TRANSPORTE'>TRANSPORTE</option>
                                <option value='NAVES O EMBARCACIONES'>NAVES O EMBARCACIONES</option>
                                <option value='AUTOMOTORES'>AUTOMOTORES</option>
                                <option value='AERONAVEGACION'>AERONAVEGACION</option>
                                <option value='RAMOS TECNICOS'>RAMOS TECNICOS</option>
                                <option value='RESPONSABILIDAD CIVIL'>RESPONSABILIDAD CIVIL</option>
                                <option value='ACCIDENTES PERSONALES'>ACCIDENTES PERSONALES</option>
                                <option value='FIANZAS'>FIANZAS</option>
                                <option value='FIDELIDAD DE EMPLEADOS'>FIDELIDAD DE EMPLEADOS</option>
                                <option value='DELITOS FINANCIEROS'>DELITOS FINANCIEROS</option>
                                <option value='3D'>3D</option>
                                <option value='BBB'>BBB</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <br>
                                 <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
</div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script>
          (function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
      </script>
  </body>
</html>