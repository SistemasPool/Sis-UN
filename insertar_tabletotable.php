<?php 
    
    $auto_cap_aseg = 11000;
    $porcentaje_credito=0;
    $porcentaje_reaseguro= 1.14;
    $porcentaje_intermediario=18;
    $porcentaje_gastos_adm = 20;
    $porcentaje_aps=2;
    $porcentaje_fpa=.5;
    $porcentaje_remext=2.5;
    $porcentaje_utilidad=10;
    $porcentaje_iva=13;
    $porcentaje_it=3;
    $porcentaje_itf=.3;
    

    echo "prima riesgo".$prima_riesgo = $auto_cap_aseg*$porcentaje_reaseguro/100; echo "<br>";
    echo "intermediario".$intermediario = $prima_riesgo*$porcentaje_intermediario/100;echo "<br>";
    echo "gastos".$gastos_adm = $prima_riesgo*$porcentaje_gastos_adm/100;echo "<br>";
    echo "aps".$aps = $prima_riesgo*$porcentaje_aps/100;echo "<br>";
    echo "fpa".$fpa = $prima_riesgo*$porcentaje_fpa/100;echo "<br>";
    echo "remesas".$remesas_exterior = $prima_riesgo*$porcentaje_remext/100;echo "<br>";
    echo "utilidad".$utilidad = $prima_riesgo*$porcentaje_utilidad/100;echo "<br>";
    echo "prima total".$prima_tota = ($prima_riesgo+$intermediario+$gastos_adm+$aps+$fpa+$remesas_exterior+$utilidad)/.837;echo "<br>";
    echo "iva".$iva = $prima_tota*$porcentaje_iva/100;echo "<br>";
    echo "it".$it = $prima_tota*$porcentaje_it/100;echo "<br>";
    echo "itf".$itf = $prima_tota*$porcentaje_itf/100;echo "<br>";
    echo "prima tecnica".$prima_tecnica= $prima_riesgo+$intermediario+$aps+$fpa;echo "<br>";
    echo "prima adicional".$prima_adicional= $prima_tota-$prima_tecnica;echo "<br>";
    
$ins_prima = $con -> query("INSERT INTO calculo_prima(id_calculo_prima, modalidad, ramo, cod_cliente, nro_poliza, prima_riesgo, intermediario, gastos_admon, aps, fpa, remesas_exterior, utilidad, iva, it, itf, prima_total, prima_tecnica, prima_adiciona, tipo_pago) VALUES ('', '91', '05', '$cod_cliente', '$nro_poliza', $prima_riesgo, $intermediario, $gastos_adm, $aps, $fpa, $remesas_exterior, $utilidad, $iva, $it, $itf, $prima_tota, $prima_tecnica, $prima_adicional, 'CONTADO')");
 
?>
