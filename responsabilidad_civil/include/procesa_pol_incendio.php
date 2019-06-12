<?php
include 'conexion.php';
include '../../verificar_sesion.php';
$cod_cotizacion = $_REQUEST['cod_cotizacion'];
$cod_cliente = $_REQUEST['cod_cliente'];
$tipo_pago = $_REQUEST['tipo_pago'];

$prima_a_favor = $_POST['prima_a_favor'];
$a_favor = $_POST['a_favor'];

//valida comision intermediario
$com_inter = $_POST['comision_intermediario'];
if ($com_inter < 0 || $com_inter > 20) {
	echo "<script>
    alert('La comision del intermediario debe ser mayor a cero y menor a 20%');
	location.href='crea_poliza.php?cod_cotizacion=".$cod_cotizacion."&cod_cliente=".$cod_cliente."';
	</script>";
}

//echo $cuota_inicial=$_POST['cuota_inicial'];
$c = count($_POST['cuota_inicial']);
for($i=0; $i<$c; $i++){
    $cuota_inicial = $_POST['cuota_inicial'][$i];
    $id_auto = $_POST['id_auto'][$i];
$upcuo = $con -> query("UPDATE automovil_cotizacion SET cuota_inicial_au=".$cuota_inicial." WHERE id_automovil='$id_auto'");
}

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
//$tipo_pago = $_POST['tipo_pago'];
//fecha mas 20 dias
$fecha_ven = date('Y-m-j');
$fecha_vencimiento = strtotime ( '+30 day' , strtotime ( $fecha_ven) ) ;
$fecha_vencimiento = date ('Y-m-j' , $fecha_vencimiento );
$s_distrito = $_SESSION["distrito"];
 
if($s_distrito=='LA PAZ'){
$se = $con ->query("SELECT MAX(id_num) as idpoliza FROM incendio_poliza WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'INLP';

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
$se = $con ->query("SELECT MAX(id_num) as idpoliza FROM incendio_poliza WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'INSC';

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
$se = $con ->query("SELECT MAX(id_num) as idpoliza FROM incendio_poliza WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'INCB';

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
$se = $con ->query("SELECT MAX(id_num) as idpoliza FROM incendio_poliza WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'INOR';

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
$se = $con ->query("SELECT MAX(id_num) as idpoliza FROM incendio_poliza WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'INPT';

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
$se = $con ->query("SELECT MAX(id_num) as idpoliza FROM incendio_poliza WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'INCH';

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
$se = $con ->query("SELECT MAX(id_num) as idpoliza FROM incendio_poliza WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'INTA';

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
$se = $con ->query("SELECT MAX(id_num) as idpoliza FROM incendio_poliza WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'INPD';

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
$se = $con ->query("SELECT MAX(id_num) as idpoliza FROM incendio_poliza WHERE distrito='$s_distrito'");
		          $fila = $se -> fetch_assoc();
                  $idau= $fila['idpoliza']+1;
$prefijo = 'INBE';

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

$clientes_tomador = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
$clientestomador = $clientes_tomador -> fetch_assoc();
$cod_cliente_ct = $clientestomador['cod_cliente']; 
$nombres_ct = $clientestomador['nombres'];
$paterno_ct = $clientestomador['paterno'];
$materno_ct = $clientestomador['materno'];
$direccion_ct = $clientestomador['direccion'];
$distrito_ct = $clientestomador['distrito'];
$nit_ci_ct = $clientestomador['nit_ci'];
$telefono_fijo_ct = $clientestomador['telefono_fijo'];
$celular_ct = $clientestomador['celular'];
$email_ct = $clientestomador['email'];
$zona_ct = $clientestomador['zona'];


$ins_clientes_tomador = $con -> query("INSERT INTO `clientes_tomador`(`id_cliente_tomador`, `nro_poliza`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`) VALUES ('','$nro_poliza','$cod_cliente_ct','','','$nombres_ct','$paterno_ct','$materno_ct','','$direccion_ct','$nit_ci_ct','$telefono_fijo_ct','$celular_ct','$email_ct','','','','','','','$s_distrito','$zona_ct')");

if($tipo_pago=='CREDITO'){
    echo $tipo_pago;
    //echo $cod_cotizacion = $_POST['cod_cotizacion'];
    

$inc = $con -> query("SELECT * FROM incendio_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");

while ($row = $inc -> fetch_assoc()) {
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
    
    //$auto_cap_aseg = 17000;
    $porcentaje_credito=6;
    
    $porcentaje_reaseguro=$tasa_prima;
    $porcentaje_intermediario=$_POST['comision_intermediario'];
    $porcentaje_gastos_adm = $_POST['gastos'];
    $porcentaje_aps=$_POST['aps'];
    $porcentaje_fpa=$_POST['fpa'];
    $porcentaje_remext=$_POST['remesas'];
    $porcentaje_utilidad=$_POST['utilidad'];
    $porcentaje_iva=$_POST['iva'];
    $porcentaje_it=$_POST['it'];
    $porcentaje_itf=$_POST['itf'];
    $porcentaje_assist_card=$_POST['assist_card'];
    $porcentaje_fee_assist_card=$_POST['fee_assist_card'];
    $porcentaje_american_assist=$_POST['american'];
    $porcentaje_fee_american_assist=$_POST['fee_american'];
    
    $primatotal = $auto_cap_aseg*$tasa_prima/100;
    $prima_riesgo = $auto_cap_aseg*$porcentaje_reaseguro/100;
    $gastos_adm = $prima_riesgo*$porcentaje_gastos_adm/100;
    $aps = $prima_riesgo*$porcentaje_aps/100;
    $fpa = $prima_riesgo*$porcentaje_fpa/100;
    $remesas_exterior = $prima_riesgo*$porcentaje_remext/100;
    $prima_tecnica= $prima_riesgo+$aps+$fpa+$gastos_adm;
    $utilidad = $prima_tecnica*$porcentaje_utilidad/100;
    $interme = $prima_tecnica*$porcentaje_intermediario/100;
    $assist_card= $prima_tecnica*$porcentaje_assist_card/100;
    $fee_assist_card= $prima_tecnica*$porcentaje_fee_assist_card/100;
    $american_assist= $prima_tecnica*$porcentaje_american_assist/100;
    $fee_american_assist= $prima_tecnica*$porcentaje_fee_american_assist/100;
    $prima_total = ($prima_tecnica+$interme+$assist_card+$fee_assist_card+$american_assist+$fee_american_assist+$utilidad)/.837;
    $pri_credito= ($primatotal*$porcentaje_credito/100)+$primatotal;
    $prima_adicional= $pri_credito-$prima_tecnica;
    $iva = $prima_total*$porcentaje_iva/100;
    $it = $prima_total*$porcentaje_it/100;
    $itf = $prima_total*$porcentaje_itf/100;
    
    $date = date("d-m-Y");
    $f_registro = date("Y-m-d");
    //Incrementando 2 dias
    $mod_date = strtotime($date."+ 30 days");
    $fecha_cuota_inicial = date("Y-m-d",$mod_date);

    
    $inser = $con -> query("INSERT INTO cuota_inicial(id_cuo_ini, monto, fecha_cuotas, cod_cliente, num_poliza, estado, certificado)VALUES ('', '$multi_cuota_inicial', '$fecha_cuota_inicial', '$cod_cliente', '$nro_poliza', 'NO PAGADO', '$certificado')");
    
   $ins_prima = $con -> query("INSERT INTO `calculo_prima`(`id_calculo_prima`, `modalidad`, `ramo`, `cod_cliente`, `nro_poliza`, `nombre_cliente`, `valor_asegurado`, `distrito`, `prima_riesgo`, `intermediario`, `gastos_admon`, `aps`, `fpa`, `remesas_exterior`, `utilidad`, `iva`, `it`, `itf`, `prima_total`, `prima_tecnica`, `prima_adiciona`, `tipo_pago`, `intermediario_prima`, `fecha_registro`, `fecha_registro`, `estado`) VALUES ('', '91', '01', '$cod_cliente', '$nro_poliza', '$completo', '$auto_cap_aseg', '$s_distrito', '$prima_riesgo', '$con_intermediario', '$gastos_adm', '$aps', '$fpa', '$remesas_exterior', '$utilidad', '$iva', '$it', '$itf', '$pri_credito', '$prima_tecnica', '$prima_adicional', 'CREDITO', '$intermediario', '$f_registro', '$certificado', 'NO PAGADO')");
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
    
$pol_incendio = $con -> query("INSERT INTO `incendio_poliza`(`id_incendio`, `cod_cliente`, `cod_cotizacion`, `num_poliza`, `id_num`, `ubicacion_riesgo`, `direccion_asegurada`, `materia_seguro`, `valor_asegurado`, `tasa_prima`, `prima_contado`, `prima_credito`, `inicio_vigencia`, `final_vigencia`, `f_registro`, `distrito`, `intermediario`, `comision_inter`, `afavor`, `afavor_prima`, `tipo_pago`) VALUES ('','$cod_cliente','$cod_cotizacion','$nro_poliza','$idau','$ubicacion_riesgo','$direccion_asegurada','$materia_seguro','$valor_asegurado','$tasa_prima','$prima_contado','$prima_credito','$inicio_vigencia','$final_vigencia','$fecha_registro','$s_distrito','$intermediario','$comision_inter', '$a_favor','$prima_a_favor','CREDITO')");
    
$cobe = $con -> query("UPDATE coberturas_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$primer = $con -> query("UPDATE primer_riesgo_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$cla_adic = $con -> query("UPDATE clau_adic_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$franqui = $con -> query("UPDATE franquicia_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$exclu = $con -> query("UPDATE exclusiones_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$condi = $con -> query("UPDATE cond_part_inc_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$especiales = $con -> query("UPDATE notas_especiales_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$obse = $con -> query("UPDATE observaciones_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");

$nota = $con -> query("UPDATE nota_especial_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");

if ($upauto) {
echo "<script>
location.href='../../polnizas/include/ver_poliza_automotor.php';
</script>";
}else{
echo "<script>	location.href='poliza_automotor/cotizaciones?id=".$id."';
	</script>";
} 
}
    ///Final credito
    elseif($tipo_pago=='CONTADO')
    {
$tipo_pago;
        
$inc = $con -> query("SELECT * FROM incendio_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");

$row = $inc -> fetch_assoc();
$valor_asegurado=$row['valor_asegurado'];
$intermediario=$row['intermediario'];
$distrito= $_SESSION['distrito'];
$f_registro = date("Y-m-d");
  
                    $porcentaje_gastos_adm = 20;
                    $porcentaje_aps=2;
                    $porcentaje_aba=.06;
                    $porcentaje_fpa=.5;
                    $porcentaje_remext=2.5;
                    $porcentaje_utilidad=20;
                    $porcentaje_iva=13;
                    $porcentaje_it=3;
                    $porcentaje_itf=.3;
                    $porcentaje_ameass=18.24;
                    $tipo_cambio=6.96;
                    $k_riesgo = 100+$porcentaje_remext+$porcentaje_gastos_adm+$porcentaje_utilidad;
                    $tipo_cambio = 6.96;
                    $modalidad = '91';
                    $ramo = '01';
                      
                  
                  $tasa_prima = $prima_contado/$valor_asegurado*100;
                  //$porcentaje_utilidad = $fila['por_utilidad'];
                  $porcentaje_utilidad = 12;
                  

                    $iva = $prima_total*$porcentaje_iva/100;
                    $it = $prima_total*$porcentaje_it/100;
                    $itf = $prima_total*$porcentaje_itf/100;
                    $tasa_adicional = $prima_total-$iva-$it-$itf;
                    $prima_neta = $tasa_adicional-$porcentaje_ameass;
                    $imp_bs = $tipo_cambio*$iva;
                    $aps = $prima_neta*$porcentaje_aps/100;
                    $fpa = $prima_neta*$porcentaje_fpa/100;
                    $aba = $prima_neta*$porcentaje_aba/100;
                    $prima_tecnica = $prima_neta-$aps-$fpa-$aba;
                    $prima_adicional = $prima_total-$prima_tecnica;
                    $prima_riesgo = $prima_tecnica/$k_riesgo*100;
                    $rem_ext = $prima_riesgo*$porcentaje_remext/100;
                    $gastos_admon = $prima_riesgo*$porcentaje_gastos_adm/100;
                    $utilidad = $prima_riesgo*$porcentaje_utilidad/100;


$ins = $con ->query("INSERT INTO `calculo_prima`(`id_calculo_prima`, `modalidad`, `ramo`, `cod_cliente`, `nro_poliza`, `nombre_cliente`, `valor_asegurado`, `distrito`, `prima_riesgo`, `intermediario`, `gastos_admon`, `aps`, `fpa`, `remesas_exterior`, `utilidad`, `iva`, `it`, `itf`, `prima_total`, `prima_tecnica`, `prima_adiciona`, `tipo_pago`, `intermediario_prima`, `fecha_registro`, `certificado`, `estado`, `nro_factura`, `moneda`, `american`) VALUES ('','$modalidad','$ramo','$cod_cliente','$num_poliza','$nom_comp','$valor_asegurado','$distrito','$prima_riesgo','','$gastos_admon','$aps','$fpa','$rem_ext','$utilidad','$iva','$it','$itf','$prima_total','$prima_tecnica','$prima_adicional','CONTADO','','$f_registro','','NO PAGADO','','2','$porcentaje_ameass')");
    
$seco = $con ->query("SELECT * FROM incendio_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
		          $deco = $seco -> fetch_assoc();
                  $ubicacion_riesgo= $deco['ubicacion_riesgo'];
                  $direccion_asegurada= $deco['direccion_asegurada'];
                  $materia_seguro= $deco['materia_seguro'];
                  $valor_asegurado= $deco['valor_asegurado'];
                  $tasa_prima= $deco['tasa_prima'];
                    $prima_contado= $deco['prima_contado'];
                    $prima_credito= $deco['prima_credito'];
                    $intermediario= $deco['intermediario'];
                    $comision_inter= $deco['comision_inter'];
        
$pol_incendio = $con -> query("INSERT INTO `incendio_poliza`(`id_incendio`, `cod_cliente`, `cod_cotizacion`, `num_poliza`, `id_num`, `ubicacion_riesgo`, `direccion_asegurada`, `materia_seguro`, `valor_asegurado`, `tasa_prima`, `prima_contado`, `prima_credito`, `inicio_vigencia`, `final_vigencia`, `f_registro`, `distrito`, `intermediario`, `comision_inter`, `afavor`, `afavor_prima`, `tipo_pago`) VALUES ('','$cod_cliente','$cod_cotizacion','$nro_poliza','$idau','$ubicacion_riesgo','$direccion_asegurada','$materia_seguro','$valor_asegurado','$tasa_prima','$prima_contado','$prima_credito','$inicio_vigencia','$final_vigencia','$fecha_registro','$s_distrito','$intermediario','$comision_inter', '$a_favor','$prima_a_favor','CONTADO')");
        
$cobe = $con -> query("UPDATE coberturas_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$primer = $con -> query("UPDATE primer_riesgo_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$cla_adic = $con -> query("UPDATE clau_adic_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$franqui = $con -> query("UPDATE franquicia_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$exclu = $con -> query("UPDATE exclusiones_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$condi = $con -> query("UPDATE cond_part_inc_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$especiales = $con -> query("UPDATE notas_especiales_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");
        
$obse = $con -> query("UPDATE observaciones_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");

$nota = $con -> query("UPDATE nota_especial_incendio_pol SET num_poliza='$nro_poliza' WHERE cod_cliente='$cod_cliente' and cod_cotizacion='$cod_cotizacion'");


}

if ($pol_incendio) {
	header('Location: ../ver_poliza_incendio.php');
}else{
	echo "Registro no almacenado";
}

?>