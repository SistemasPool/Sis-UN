<html>
<head></head>
<body>
<?php
    $con = new mysqli('localhost','root','','unibienes');
    $tipo_pago = "CONTADO";
    
    if($tipo_pago=="CREDITO"){
        
    echo "CREDITO";
    $valor_asegurado = 11000;
    $porcentaje_credito=6;
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
    
    $prima_riesgo = $valor_asegurado*$porcentaje_reaseguro/100;
    $intermediario = $prima_riesgo*$porcentaje_intermediario/100;
    $gastos_adm = $prima_riesgo*$porcentaje_gastos_adm/100;
    $aps = $prima_riesgo*$porcentaje_aps/100;
    $fpa = $prima_riesgo*$porcentaje_fpa/100;
    $remesas_exterior = $prima_riesgo*$porcentaje_remext/100;
    $utilidad = $prima_riesgo*$porcentaje_utilidad/100;
    $prima_total = ($prima_riesgo+$intermediario+$gastos_adm+$aps+$fpa+$remesas_exterior+$utilidad)/.837;
    $iva = $prima_total*$porcentaje_iva/100;
    $it = $prima_total*$porcentaje_it/100;
    $itf = $prima_total*$porcentaje_itf/100;
    $pri_credito= ($prima_total*$porcentaje_credito/100)+$prima_total;
    $prima_tecnica= $prima_riesgo+$intermediario+$aps+$fpa;
    $porcentaje_prima_tecnica= $prima_tecnica/$pri_credito*100;
    $prima_adicional= $pri_credito-$prima_tecnica;
    $porcentaje_prima_adicional=100-$porcentaje_prima_tecnica;

    $date = date("d-m-Y");
    //Incrementando 2 dias
    $mod_date = strtotime($date."+ 5 days");
    $fecha_cuota_inicial = date("d-m-Y",$mod_date) . "\n";
    
    $cuota_cliente = 50;
    $ncuotas_cliente = $cuota_cliente*4;
    $total_cuotas_cliente= $pri_credito-$ncuotas_cliente;
    $porcentaje=$total_cuotas_cliente*100/$pri_credito;
    $cuo_tec_inic= $total_cuotas_cliente*$porcentaje_prima_tecnica/100;
    
        
    $inserta = $con -> query("INSERT INTO cuota_inicial(id_cuo_ini, monto, fecha_cuotas, prima_tecnica, prima_adicional, cod_cliente, num_poliza, estado) 
    VALUES ('', '$total_cuotas_cliente', '$fecha_cuota_inicial', '$porcentaje_prima_tecnica', '$porcentaje_prima_adicional', 'CUB00000001', 'AULP00000001', 'NO PAGADO')");
        
    $insert = $con -> query("INSERT INTO calculo_prima(id_calculo_prima, modalidad, ramo, cod_cliente, nro_poliza, prima_riesgo, intermediario, gastos_admon, aps, fpa, remesas_exterior, utilidad, iva, it, itf, prima_total, prima_tecnica, prima_adiciona, tipo_pago) VALUES ('', '91', '05', 'CUB00000001', 'AULP00000001', '$prima_riesgo', '$intermediario', '$gastos_adm', '$aps', '$fpa', '$remesas_exterior', '$utilidad', '$iva', '$it', '$itf', '$pri_credito', '$prima_tecnica', '$prima_adicional', 'CREDITO')");
        
    if($porcentaje>=30){
         $cuotas= $ncuotas_cliente;
                $cuota = 4;
                $contador = 2;
                for($ii = 1; $ii <= $cuota; $ii++)
                     {
                        $mes    =    date('m')    +    $ii;
                        if( $mes    <=    9    ) 
                        {
                            $vencimiento    =    date('d-')    .    '0'    .    $mes    .date('-Y');
                        }elseif(    $mes    ==    13    )
                        {
                            $vencimiento    =    date('d-')    .    '01'    .date('-Y');
                        }else{
                            $vencimiento    =    date('d-')    .    $mes    .date('-Y');
                        }
                    $decimales = explode(".",$cuotas/4);
                    $prim_tecnica = $decimales[0]*$porcentaje_prima_tecnica/100;
                    $prim_adicional = $decimales[0]*$porcentaje_prima_adicional/100;
                    
        $ins = $con -> query("INSERT INTO cuotas(id_cuotas, monto, fecha_cuotas, prima_tecnica, prima_adicional, cod_cliente, num_poliza, estado) 
        VALUES ('', '$decimales[0]', '$vencimiento', '$prim_tecnica', '$prim_adicional', 'CUB00000001', 'AULP00000001', 'NO PAGADO')");
                    //$decimal = (int) $decimales[1];
                }
    }else
    {
        echo "El monto de la cuota menor al 30 %";
    }
    }
    ///Final credito
    else
    {
    echo "CONTADO";
    $valor_asegurado = 15000;
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
    
    $prima_riesgo = $valor_asegurado*$porcentaje_reaseguro/100;
    $intermediario = $prima_riesgo*$porcentaje_intermediario/100;
    $gastos_adm = $prima_riesgo*$porcentaje_gastos_adm/100;
    $aps = $prima_riesgo*$porcentaje_aps/100;
    $fpa = $prima_riesgo*$porcentaje_fpa/100;
    $remesas_exterior = $prima_riesgo*$porcentaje_remext/100;
    $utilidad = $prima_riesgo*$porcentaje_utilidad/100;
    $prima_total = ($prima_riesgo+$intermediario+$gastos_adm+$aps+$fpa+$remesas_exterior+$utilidad)/.837;
    $iva = $prima_total*$porcentaje_iva/100;
    $it = $prima_total*$porcentaje_it/100;
    $itf = $prima_total*$porcentaje_itf/100;
    echo $prima_tecnica= $prima_riesgo+$intermediario+$aps+$fpa;
    $prima_adicional= $prima_total-$prima_tecnica;
    
    $ins = $con -> query("INSERT INTO calculo_prima(id_calculo_prima, modalidad, ramo, cod_cliente, nro_poliza, prima_riesgo, intermediario, gastos_admon, aps, fpa, remesas_exterior, utilidad, iva, it, itf, prima_total, prima_tecnica, prima_adiciona, tipo_pago) VALUES ('', '91', '05', 'CUB00000002', 'AULP00000002', $prima_riesgo, $intermediario, $gastos_adm, $aps, $fpa, $remesas_exterior, $utilidad, $iva, $it, $itf, $prima_total, $prima_tecnica, $prima_adicional, 'CONTADO')");
    }
    ?>
</body></html>