<?php
    $auto_cap_aseg = 17000;
    $porcentaje_credito=6;
    
    $porcentaje_reaseguro= 1.14;
    $porcentaje_intermediario=12.5;
    $porcentaje_gastos_adm = 20;
    $porcentaje_aps=2;
    $porcentaje_fpa=.5;
    $porcentaje_remext=0;
    $porcentaje_utilidad=10;
    $porcentaje_iva=13;
    $porcentaje_it=3;
    $porcentaje_itf=.3;
    $porcentaje_assist_card=.63;
    $porcentaje_fee_assist_card=.53;
    $porcentaje_american_assist=.64;
    $porcentaje_fee_american_assist=.53;
    

    echo "<br>Prima Riesgo: ".$prima_riesgo = $auto_cap_aseg*$porcentaje_reaseguro/100;
    echo "<br>Gastos: ".$gastos_adm = $prima_riesgo*$porcentaje_gastos_adm/100;
    echo "<br>Aps: ".$aps = $prima_riesgo*$porcentaje_aps/100;
    echo "<br>Fpa: ".$fpa = $prima_riesgo*$porcentaje_fpa/100;
    echo "<br>Remesas: ".$remesas_exterior = $prima_riesgo*$porcentaje_remext/100;
    echo "<br>Tecnica: ".$prima_tecnica= $prima_riesgo+$aps+$fpa+$gastos_adm;
    echo "<br>Utilidad: ".$utilidad = $prima_tecnica*$porcentaje_utilidad/100;
    echo "<br>Intermediario: ".$interme = $prima_tecnica*$porcentaje_intermediario/100;
    echo "<br>Assist Card: ".$assist_card= $prima_tecnica*$porcentaje_assist_card/100;
    echo "<br>Fee Assist Card: ".$fee_assist_card= $prima_tecnica*$porcentaje_fee_assist_card/100;
    echo "<br>American Assist: ".$american_assist= $prima_tecnica*$porcentaje_american_assist/100;
    echo "<br>Fee American Assist: ".$fee_american_assist= $prima_tecnica*$porcentaje_fee_american_assist/100;
    echo "<br>Total: ".$prima_total = ($prima_tecnica+$interme+$assist_card+$fee_assist_card+$american_assist+$fee_american_assist+$utilidad)/.837;
    echo "<br>Prima Credito : ".$pri_credito= ($prima_total*$porcentaje_credito/100)+$prima_total;
    echo "<br>Adicional :".$prima_adicional= $pri_credito-$prima_tecnica;
    echo "<br>Iva: ".$iva = $prima_total*$porcentaje_iva/100;
    echo "<br>It: ".$it = $prima_total*$porcentaje_it/100;
    echo "<br>Itf: ".$itf = $prima_total*$porcentaje_itf/100;
?>

//$valor_asegurado = 10000;
    $porcentaje_credito=6;
    $porcentaje_reaseguro= 1.14;
    $porcentaje_intermediario=18;
    $porcentaje_intermediario=$_POST['comision_intermediario'];
    $porcentaje_gastos_adm = 20;
    $porcentaje_aps=2;
    $porcentaje_fpa=.5;
    $porcentaje_remext=2.5;
    $porcentaje_utilidad=10;
    $porcentaje_iva=13;
    $porcentaje_it=3;
    $porcentaje_itf=.3;
    //echo $auto_cap_aseg=10000;
    $prima_riesgo = $auto_cap_aseg*$porcentaje_reaseguro/100;
    $con_intermediario = $prima_riesgo*$porcentaje_intermediario/100;
    $gastos_adm = $prima_riesgo*$porcentaje_gastos_adm/100;
    $aps = $prima_riesgo*$porcentaje_aps/100;
    $fpa = $prima_riesgo*$porcentaje_fpa/100;
    $remesas_exterior = $prima_riesgo*$porcentaje_remext/100;
    $utilidad = $prima_riesgo*$porcentaje_utilidad/100;
    $prima_tota = ($prima_riesgo+$con_intermediario+$gastos_adm+$aps+$fpa+$remesas_exterior+$utilidad)/.837;
    $iva = $prima_tota*$porcentaje_iva/100;
    $it = $prima_tota*$porcentaje_it/100;
    $itf = $prima_tota*$porcentaje_itf/100;
    $pri_credito= ($prima_tota*$porcentaje_credito/100)+$prima_tota;
    $prima_tecnica= $prima_riesgo+$con_intermediario+$aps+$fpa;
    $porcentaje_prima_tecnica= $prima_tecnica/$pri_credito*100;
    $prima_adicional= $pri_credito-$prima_tecnica;
    $porcentaje_prima_adicional=100-$porcentaje_prima_tecnica;