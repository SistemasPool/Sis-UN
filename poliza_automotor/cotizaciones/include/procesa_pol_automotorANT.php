<?php
include 'conexion.php';

$cod_cotizacion = $_REQUEST['cod_cotizacion'];

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
$cod_cliente = $_POST['cod_cliente'];
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
$fecha_vencimiento = strtotime ( '+20 day' , strtotime ( $fecha_ven) ) ;
$fecha_vencimiento = date ('Y-m-j' , $fecha_vencimiento );
 

$se = $con ->query("SELECT MAX(idnum) as idpoliza FROM automovil");
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
}


//$ins = $con -> query("INSERT INTO clientes (id_cliente, fecha_vencimiento_pago, cod_cliente, idnumero, idnum, nombres, paterno, materno, direccion, nit_ci, telefono_fijo, celular, email, nitf_cif, pagador, tipo_pago, inicio_vigencia, final_vigencia, fecha_registro, cod_cotizacion) VALUES ('', '$fecha_vencimiento', '$cod_cliente', '$ids', '$idau', '$nombres', '$paterno', '$materno', '$direccion', '$nit_ci', '$telefono_fijo', '$celular', '$email', '$nitf_cif' , '$pagador', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_registro', '$cod_cotizacion')");


$nro_poliza = $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
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


$ins_tom_clien = $con -> query("INSERT INTO clientes_tomador(id_cliente_tomador, nro_poliza, cod_cliente, idnumero, idnum, nombres, paterno, materno, imagen, direccion, nit_ci, telefono_fijo, celular, email, nitf_cif, pagador, tipo_pago, inicio_vigencia, final_vigencia, fecha_registro, distrito, zona) 
VALUES ('', '$nro_poliza', '$cod_cliente', '', '', '$nombres', '$paterno', '$materno', '', '$direccion', '$nit_ci', '$telefono_fijo', '$celular', '$email', '$nitf_cif' , '$pagador', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_registro', 'LA PAZ', '$zona')");

$ins_tom_clien = $con -> query("INSERT INTO `beneficiario`(`id_cliente`, `nro_poliza`, `prima_contado`, `fecha_vencimiento_pago`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`)VALUES ('', '$nro_poliza', '', '', '$cod_cliente', '', '', '$nombres', '$paterno', '$materno', '', '$direccion', '$nit_ci', '$telefono_fijo', '$celular', '$email',  '$nitf_cif' , '$pagador', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_registro', 'LA PAZ', '$zona')");

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
$prima_credito=$row['prima_credito'];
$cuota_inicial_au=$row['cuota_inicial_au'];
$multi_cuota_inicial = $prima_credito-($cuota_inicial_au*4);
$por_credito= ($multi_cuota_inicial*100)/$prima_credito;
    
    $producto_au="PRODUCTO A";
    //$producto_au=$_POST['producto_auto'];

    if($producto_au=="PRODUCTO A"){
                        $porcentaje_reaseguro= 1.14;
                    }elseif($producto_au=="PRODUCTO B"){
                        $porcentaje_reaseguro= 1.23;
                    }
                    elseif($producto_au=="PRODUCTO C"){
                        $porcentaje_reaseguro = 1.38;
                    }
                    echo $porcentaje_reaseguro;
    //$valor_asegurado = 10000;
    $porcentaje_credito=6;
    //$porcentaje_reaseguro= 1.14;
    //$porcentaje_intermediario=18;
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
    $date = date("d-m-Y");
    $f_registro = date("Y-m-d");
    //Incrementando 2 dias
    $mod_date = strtotime($date."+ 5 days");
    $fecha_cuota_inicial = date("Y-m-d",$mod_date);
    
    //ok funciona
    $inser_auto=$con -> query("INSERT INTO automovil(idnum, cod_cliente, nro_poliza, certificado, id_ce, clase, placa, ano, marca, color,  modelo, traccion, uso, distrito, plazas, chasis, motor, auto_cap_aseg, plan, intermediario, tasa_prima, prima_total, tipo_pago, inicio_vigencia, final_vigencia, fechavencimiento) VALUES ('$idau', '$cod_cliente', '$nro_poliza', '$certificado','$id_ce','$clase', '$placa', '$ano', '$marca','$color', '$modelo', '$traccion', '$uso', '$distrito', '$plazas', '$chasis', '$motor', '$auto_cap_aseg', '$plan', '$intermediario', '$tasa_prima', '$pri_credito', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_vencimiento')");
    
    // ok funciona
    $inser = $con -> query("INSERT INTO cuota_inicial(id_cuo_ini, monto, fecha_cuotas, cod_cliente, num_poliza, estado, certificado)VALUES ('', '$multi_cuota_inicial', '$fecha_cuota_inicial', '$cod_cliente', '$nro_poliza', 'NO PAGADO', '$certificado')");
    
    $ins_prima = $con -> query("INSERT INTO `calculo_prima`(`id_calculo_prima`, `modalidad`, `ramo`, `cod_cliente`, `nro_poliza`, `nombre_cliente`, `valor_asegurado`, `distrito`, `prima_riesgo`, `intermediario`, `gastos_admon`, `aps`, `fpa`, `remesas_exterior`, `utilidad`, `iva`, `it`, `itf`, `prima_total`, `prima_tecnica`, `prima_adiciona`, `tipo_pago`, `intermediario_prima`, `fecha_registro`, `certificado`, `estado`)
    VALUES ('', '91', '05', '$cod_cliente', '$nro_poliza', '$completo', '$auto_cap_aseg', '$distrito', '$prima_riesgo', '$interme', '$gastos_adm', '$aps', '$fpa', '$remesas_exterior', '$utilidad', '$iva', '$it', '$itf', '$prima_tota', '$prima_tecnica', '$prima_adicional', '$tipopago', '$intermediario', '$f_registro', '$certificado', 'NO PAGADO')");
    //$cuota_cliente = 50;
    //$ncuotas_cliente = $cuota_cliente*4;
    //$total_cuotas_cliente= $pri_credito-$ncuotas_cliente;
    //$porcentaje=$total_cuotas_cliente*100/$pri_credito;
    //$cuo_tec_inic= $total_cuotas_cliente*$porcentaje_prima_tecnica/100;
    
    //if($por_credito>=30){
        $cuotas= $cuota_inicial_au*4;
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
                    $decimales = explode(".",($cuotas/4));
                    $decimales[0];
                    $prim_tecnica = $decimales[0]*$porcentaje_prima_tecnica/100;
                    $prim_adicional = $decimales[0]*$porcentaje_prima_adicional/100;
                    $fecha_cuotas = date('Y-m-d', strtotime($vencimiento));
                    
                    //ok, si guarda
                    $ins = $con -> query("INSERT INTO cuotas(id_cuotas, monto, fecha_cuotas, prima_tecnica, prima_adicional, cod_cliente, num_poliza, estado, certificado) VALUES ('', '$decimales[0]', '$fecha_cuotas', '$prim_tecnica', '$prim_adicional', '$cod_cliente', '$nro_poliza', 'NO PAGADO', '$certificado')");
                }
   // }
    
            } //$decimal = (int) $decimales[1];
    
$fechas_cuotas = $con ->query("SELECT SUM(monto) as monto_cuotas_1 FROM cuotas WHERE num_poliza='$nro_poliza'");
$fecuo = $fechas_cuotas -> fetch_assoc();
$fechas = $con ->query("SELECT fecha_cuotas FROM cuotas WHERE num_poliza='$nro_poliza'");
$fe = $fechas -> fetch_assoc();
$cuotas_1 = $fecuo['monto_cuotas_1']/4;

                $cuota_1 = 4;
                $contador_1 = 2;
                for($ii = 1; $ii <= $cuota_1; $ii++)
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
                    $cuotas_1;
                    setlocale(LC_TIME, 'es_ES.UTF-8');
                    setlocale(LC_TIME, 'spanish');
                    $fecha_cuotas = date('Y-m-d', strtotime($vencimiento));
                    //ok, si guarda
                   $ins_1 = $con -> query("INSERT INTO temp_fecha_cuotas(id_fecha_cuotas, monto, fecha_cuotas, num_poliza) VALUES ('', '$cuotas_1', '$fecha_cuotas', '$nro_poliza')");
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
$distrito= 'LA PAZ';
$f_registro = date("Y-m-d");
  
//$producto_au=$_POST['producto_auto'];

if($plan=="PRODUCTO A"){
                        $porcentaje_reaseguro= 1.14;
                    }elseif($producto_au=="PRODUCTO B"){
                        $porcentaje_reaseguro= 1.23;
                    }
                    elseif($producto_au=="PRODUCTO C"){
                        $porcentaje_reaseguro = 1.38;
                    }
                     $porcentaje_reaseguro;
    
    //$valor = 15000;
    $porcentaje_credito=0;
    //$porcentaje_reaseguro= 1.14;
    $porcentaje_intermediario=$_POST['comision_intermediario'];
    $porcentaje_intermediario=18;
    $porcentaje_gastos_adm = 20;
    $porcentaje_aps=2;
    $porcentaje_fpa=.5;
    $porcentaje_remext=2.5;
    $porcentaje_utilidad=10;
    $porcentaje_iva=13;
    $porcentaje_it=3;
    $porcentaje_itf=.3;
    

    $prima_riesgo = $auto_cap_aseg*$porcentaje_reaseguro/100;
    $interme = $prima_riesgo*$porcentaje_intermediario/100;
    $gastos_adm = $prima_riesgo*$porcentaje_gastos_adm/100;
    $aps = $prima_riesgo*$porcentaje_aps/100;
    $fpa = $prima_riesgo*$porcentaje_fpa/100;
    $remesas_exterior = $prima_riesgo*$porcentaje_remext/100;
    $utilidad = $prima_riesgo*$porcentaje_utilidad/100;
    $prima_tota = ($prima_riesgo+$interme+$gastos_adm+$aps+$fpa+$remesas_exterior+$utilidad)/.837;
    $iva = $prima_tota*$porcentaje_iva/100;
    $it = $prima_tota*$porcentaje_it/100;
    $itf = $prima_tota*$porcentaje_itf/100;
    $prima_tecnica= $prima_riesgo+$interme+$aps+$fpa;
    $prima_adicional= $prima_tota-$prima_tecnica;
    
    
    $ins_prima = $con -> query("INSERT INTO `calculo_prima`(`id_calculo_prima`, `modalidad`, `ramo`, `cod_cliente`, `nro_poliza`, `nombre_cliente`, `valor_asegurado`, `distrito`, `prima_riesgo`, `intermediario`, `gastos_admon`, `aps`, `fpa`, `remesas_exterior`, `utilidad`, `iva`, `it`, `itf`, `prima_total`, `prima_tecnica`, `prima_adiciona`, `tipo_pago`, `intermediario_prima`, `fecha_registro`, `certificado`, `estado`)
    VALUES ('', '91', '05', '$cod_cliente', '$nro_poliza', '$completo', '$auto_cap_aseg', '$distrito', '$prima_riesgo', '$interme', '$gastos_adm', '$aps', '$fpa', '$remesas_exterior', '$utilidad', '$iva', '$it', '$itf', '$prima_tota', '$prima_tecnica', '$prima_adicional', '$tipopago', '$intermediario', '$f_registro', '$certificado', 'NO PAGADO')");
    
    //ok funciona
    $inser_auto=$con -> query("INSERT INTO automovil(idnum, cod_cliente, nro_poliza, certificado, id_ce, clase, placa, ano, marca, color,  modelo, traccion, uso, distrito, plazas, chasis, motor, auto_cap_aseg, plan, intermediario, tasa_prima, prima_total, tipo_pago, inicio_vigencia, final_vigencia, fechavencimiento) VALUES ('$idau', '$cod_cliente', '$nro_poliza', '$certificado', '$id_ce', '$clase', '$placa', '$ano', '$marca','$color', '$modelo', '$traccion', '$uso', '$distrito', '$plazas', '$chasis', '$motor', '$auto_cap_aseg', '$plan', '$intermediario', '$tasa_prima', '$prima_tota', '$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_vencimiento')");
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
