<?php ob_start(); ?>

                  <?php
                  $nro_poliza = $_REQUEST['nro_poliza'];
                  $cod_cliente = $_REQUEST['cod_cliente'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes where cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno'];
                  $completo = $nombres." ".$paterno." ".$materno;
?>
  <style>
    @page { margin: 37px 20px; }
    table{
    border-collapse: collapse;
    border: none;
}
td{
    padding: 0;
}
  </style>
<br><br><br>
<table width=90% align=center cellspacing=0 cellpadding=0 border="0" style="border:border-collapse: collapse;">
    
    <?php
      $sql = $con ->query("SELECT * FROM automovil where nro_poliza='$nro_poliza'");  
        $valida = $sql -> fetch_assoc();
        $rows = mysqli_num_rows($sql);
         if($rows > 1)  
        {  
            ?>
            <tr><td style="font-size:12px; font-weight:bold; text-align:center;">SEGURO DE AUTOMOTORES - GRUPAL</td></tr>
            <?php
        }else
         {
             ?>
             <tr><td style="font-size:12px; font-weight:bold; text-align:center;">SEGURO DE AUTOMOTORES - INDIVIDUAL</td></tr>
             <?php
         }
          ?>  
    
    
    <tr><td style="font-size:9px; text-align:center;">CONDICIONES PARTICULARES</td></tr>
    <tr><td style="font-size:9px; text-align:center;">APROBADO MEDIANTE RESOLUCI&Oacute;N ADMINISTRATIVA APS/DS/No 165/2018</td></tr>
    <tr><td style="font-size:9px; text-align:center;">C&oacute;digo de Autorizaci&oacute;n: 116-910551-2018 02 002</td></tr>
</table>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>N&uacute;mero de P&oacute;liza: <?php echo $nro_poliza; ?> </td>
<td><?php echo $_REQUEST['producto']; ?> </td>
</tr>
</table>
<hr width=90%>
<?php
		          $tomador = $con ->query("SELECT * FROM clientes_tomador where nro_poliza='$nro_poliza'");
		          $tom = $tomador -> fetch_assoc();
                  $nombres = $tom['nombres'];
                  $paterno = $tom['paterno'];
                  $materno = $tom['materno'];
                  $complet = $nombres." ".$paterno." ".$materno;
		          ?>
<table width=90% style="font-size:8px;" border="0" align="center">
<tr>
<td width="10%" style="font-size:9px;">Tomador</td>
<td width="45%"></td>
<td width="15%"></td>
<td width="30%"></td>
</tr>
<tr>
<td>Nombre:</td>
<td><?php echo $complet; ?></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Direcci&oacute;n:</td>
<td style="font-size:7px;"><?php echo $tom['direccion']; ?></td>
<td>Zona:</td>
<td><?php echo $tom['zona']; ?></td>
</tr>
<tr>
<td>NIT/CI:</td>
<td><?php echo $tom['nit_ci']; ?></td>
<td>Tel&eacute;fono:</td>
<td><?php echo $tom['telefono_fijo']; ?></td>
</tr>
<tr>
<td>Celular:</td>
<td><?php echo $tom['celular']; ?></td>
<td>Email:</td>
<td style="font-size:7px;"><?php echo $tom['email']; ?></td>
</tr>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width="10%" style="font-size:9px;">Cliente</td>
<td width="45%"></td>
<td width="15%"></td>
<td width="30%"></td>
</tr>
<tr>
<td>Nombre:</td>
<td><?php echo $completo; ?></td>
<td>C&oacute;digo del Cliente</td>
<td><?php echo $fila['cod_cliente']; ?></td>
</tr>
<tr>
<td>Direcci&oacute;n:</td>
<td style="font-size:7px;"><?php echo $fila['direccion']; ?></td>
<td>Zona:</td>
<td><?php echo $fila['zona']; ?></td>
</tr>
<tr>
<td>NIT/CI:</td>
<td><?php echo $fila['nit_ci']; ?></td>
<td>Tel&eacute;fono:</td>
<td><?php echo $fila['telefono_fijo']; ?></td>
</tr>
<tr>
<td>Celular:</td>
<td><?php echo $fila['celular']; ?></td>
<td>Email:</td>
<td style="font-size:7px;"><?php echo $fila['email']; ?></td>
</tr>
</table>
<hr width=90%>
<?php
		          $beneficiario = $con ->query("SELECT * FROM beneficiario where nro_poliza='$nro_poliza'");
		          $ben = $beneficiario -> fetch_assoc();
                  $nombres = $ben['nombres'];
                  $paterno = $ben['paterno'];
                  $materno = $ben['materno'];
                  $comple = $nombres." ".$paterno." ".$materno;
		          ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width="10%" style="font-size:9px;">Beneficiario</td>
<td width="45%"></td>
<td width="15%"></td>
<td width="30%"></td>
</tr>
<tr>
<td>Nombre:</td>
<td><?php echo $comple; ?></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Direcci&oacute;n:</td>
<td style="font-size:7px;"><?php echo $ben['direccion']; ?></td>
<td>Zona:</td>
<td><?php echo $ben['zona']; ?></td>
</tr>
<tr>
<td>NIT/CI:</td>
<td><?php echo $ben['nit_ci']; ?></td>
<td>Tel&eacute;fono:</td>
<td><?php echo $ben['telefono_fijo']; ?></td>
</tr>
<tr>
<td>Celular:</td>
<td><?php echo $ben['celular']; ?></td>
<td>Email:</td>
<td style="font-size:7px;"><?php echo $ben['email']; ?></td>
</tr>
<tr>
</table>
<?php 
    $suma_ind = $con ->query("SELECT prima_total FROM calculo_prima WHERE nro_poliza='$nro_poliza'");
    $suind= $suma_ind -> fetch_assoc();
    $valorind = $suind['prima_total'];
    $contador = 1;
    
    $sele_automo = $con ->query("SELECT * FROM automovil WHERE nro_poliza='$nro_poliza'");
    $autogpo = $sele_automo -> fetch_assoc();
    $tipo_pago = $autogpo['tipo_pago'];

    $sel_auto = $con ->query("SELECT * FROM automovil WHERE nro_poliza='$nro_poliza'");
        while ($auto_gpo = $sel_auto -> fetch_assoc()) {
		      ?> 
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-size:9px;">Datos del Veh&iacute;culo</td>
<td style="font-size:9px;"><?php echo $contador; ?></td>
</tr>
<tr>
<td width=15%>Certificado:</td>
<td><?php echo $auto_gpo['certificado']; ?></td>
<td width=15%>Clase:</td>
<td><?php echo $auto_gpo['clase']; ?></td>
<td width=15%>Marca:</td>
<td><?php echo $auto_gpo['marca']; ?></td>
</tr>
<tr>
<td>Modelo:</td>
<td><?php echo $auto_gpo['modelo']; ?></td>
<td>Plazas:</td>
<td><?php echo $auto_gpo['plazas']; ?></td>
<td>A&ntilde;o:</td>
<td><?php echo $auto_gpo['ano']; ?></td>
</tr>
<tr>
<td>Uso:</td>
<td><?php echo $auto_gpo['uso']; ?></td>
<td>Tracci&oacute;n:</td>
<td><?php echo $auto_gpo['traccion']; ?></td>
<td>Placa:</td>
<td><?php echo $auto_gpo['placa']; ?></td>
</tr>
<tr>
<td>N&uacute;mero de Chasis:</td>
<td><?php echo $auto_gpo['chasis']; ?></td>
<td>N&uacute;mero de Motor</td>
<td><?php echo $auto_gpo['motor']; ?></td>
<td>Distrito:</td>
<td><?php echo $auto_gpo['distrito']; ?></td>
</tr>
<tr>
<td>Color:</td>
<td><?php echo $auto_gpo['color']; ?></td>
<td style="font-size:8px; font-weight:bold; text-decoration: underline">Valor del Veh&iacute;culo:</td>
<td style="font-size:8px; font-weight:bold; text-decoration: underline;"><?php echo 'USD '.number_format($auto_gpo['auto_cap_aseg'],2); ?></td>
<td style="font-size:8px; font-weight:bold; text-decoration: underline">Prima Total:</td>
<td style="font-size:8px; font-weight:bold; text-decoration: underline"><?php echo 'USD '.number_format($auto_gpo['prima_total'],2); ?></td>
</tr>
</table>
<?php 
$contador++;
        } ?>
    <?php
    $civil = $con ->query("SELECT * FROM respon_civil_auto_pol where num_poliza='$nro_poliza'");
    ?>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>

    <tr>
        <td width=55% style="font-size:9px; font-weight:bold;">Coberturas (por veh&iacute;culo)</td>
        <td width=15% style="font-size:9px; font-weight:bold;">Coberturas (Sobre valor comercial)</td>
        <td width=15% style="font-size:9px; font-weight:bold;">Suma Asegurada</td>
        <td width=15% style="font-size:9px; font-weight:bold;">Franquicia</td>
    </tr>
    <tr>
        <td><strong>RESPONSABILIDAD CIVIL</strong></td>
    </tr>
    
        <?php
        if($producto_auto=="PRODUCTO A"){
                       $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE nro_poliza='$nro_poliza'");
                        $prod_auto = $prod -> fetch_assoc();
                        $prod_auto['nombre'];
                        $prod_auto['monto'];
                    }elseif($producto_auto=="PRODUCTO B"){
                         $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE nro_poliza='$nro_poliza'");
                        $prod_auto = $prod -> fetch_assoc();
                        $prod_auto['nombre'];
                        $prod_auto['monto'];
                    }
                    elseif($producto_auto=="PRODUCTO C"){
                        $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE nro_poliza='$nro_poliza'");
                        $prod_auto = $prod -> fetch_assoc();
                        $prod_auto['nombre'];
                        $prod_auto['monto'];
                    }
        $sel_resp = $con ->query("SELECT DISTINCT nombre, monto FROM producto_automotores_pol WHERE nro_poliza='$nro_poliza'");
        while($resp_rc = $sel_resp -> fetch_assoc()){
        ?>  
        <tr>
        <td width=55%><?php echo $resp_rc['nombre'] ?></td>
        <td width=15%></td>
        <td width=15%><?php echo 'USD '.number_format($resp_rc['monto'],2); ?></td>
        <td width=15%></td>
         <?php } ?>
    </tr>
    
    <?php
	while ($ci = $civil -> fetch_assoc()) {
    ?>   
        <tr>
        <td><?php echo $ci['nombre'] ?></td>
        <td></td>
        <td><?php echo 'USD '.number_format($ci['suma_asegurada'],2); ?></td>
        </tr>
    <?php } ?>
</table>
<hr width=90%>
 <?php
    $riesgo = $con ->query("SELECT * FROM riesgo_cubierto_au_pol WHERE num_poliza='$nro_poliza'");
    ?>

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>RIESGOS CUBIERTOS</strong></td>
    </tr>
    <?php
	while ($ri = $riesgo -> fetch_assoc()) {
    ?>   
        <tr>
        <td width=55%><?php echo $ri['nombre'];?></td>
        <td width=10%><?php echo "Al ".$ri['porcentaje']." %";?></td>
        <td width=15%></td>
        <td width=20%><?php echo $ri['franquicia'];?></td>
        </tr>
    <?php } ?>
</table>

<!-- <div style="page-break-after:always;"></div> -->
<?php
    $accid = $con ->query("SELECT * FROM acc_perso_au_pol WHERE num_poliza='$nro_poliza'");
    ?>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>ACCIDENTES PERSONALES</strong></td>
    </tr>
    <?php
	while ($ac = $accid -> fetch_assoc()) {
    ?>   
        <tr>
        <td width=55%><?php echo $ac['nombre'];?></td>
        <td width=10%></td>
        <td width=15%><?php echo 'USD '.number_format($ac['suma_asegurada'],2);?></td>
        </tr>
    <?php } ?>
</table>
<hr width=90%>
<?php
    $clausula = $con ->query("SELECT * FROM clau_adic_au_pol WHERE num_poliza='$nro_poliza'");
    ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>CL&Aacute;USULAS ADICIONALES</strong></td>
    </tr>
    <?php
	while ($cla = $clausula -> fetch_assoc()) {
    ?>   
        <tr>
        <td width=80%><?php echo $cla['nombre'];?></td>
        <td width=5%></td>
        <td width=15%><?php echo $cla['cubre'];?></td>
        </tr>
    <?php } ?>
</table>
<hr width=90%>
<?php
    $beneficios = $con ->query("SELECT * FROM ben_adic_au_pol WHERE num_poliza='$nro_poliza'");
    ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>BENEFICIOS ADICIONALES</strong></td>
    </tr>
    <?php
	while ($bene = $beneficios -> fetch_assoc()) {
    ?>   
        <tr>
        <td width=85%><?php echo $bene['nombre'];?></td>
        <td width=15%><?php echo $bene['cubre'];?></td>
        </tr>
    <?php } ?>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">REQUISITOS DE ASEGURABILIDAD</td>
    </tr>
    <tr>
    <td>ES REQUISITO INDISPENSABLE PARA QUE SURTAN EFECTO LAS COBERTURAS DE ESTA P&Oacute;LIZA:</td>
    </tr>
    <?php
		          $sewa = $con ->query("SELECT * FROM req_aseg_au_pol WHERE num_poliza='$nro_poliza'");
		          while ($reqaeg = $sewa -> fetch_assoc()) {
     ?>   
    <tr>
    <td width=70%>
        <?php echo " -  ".$reqaeg['nombre'];  ?>
        </td> 
    </tr>
    <?php } ?>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">NOTA ACLARATORIA</td>
    </tr>
    <?php
		          $nota = $con ->query("SELECT * FROM nota_aclar_au_pol WHERE num_poliza='$nro_poliza'");
		          while ($notacla = $nota -> fetch_assoc()) {
     ?>   
    <tr>
    <td width=70%>
        <?php echo " -  ". $notacla['nombre'];  ?>
        </td>
    </tr>
    <?php } ?>
</table> 
<hr width=90%>
<!--  INICIO PAGOS -->    
<?php
    $fecha_vto_pago = $autogpo['fechavencimiento'];
    setlocale(LC_TIME, 'es_ES.UTF-8');
    setlocale(LC_TIME, 'spanish');
    $datevto = strftime("%d de %B del %Y", strtotime($fecha_vto_pago));

    $suma_capital = $con ->query("SELECT SUM(prima_total) AS suma_capital FROM calculo_prima WHERE nro_poliza='$nro_poliza'");
    $suca= $suma_capital -> fetch_assoc();
    $valor = $suca['suma_capital'];
    if($tipo_pago=='CONTADO'){
    ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>Prima Total Contado</strong></td>
        <td><strong>Fecha de Vencimiento</strong></td>
    </tr>
        <tr>
        <td width=60%><?php 
        //$prima_contado = $fila['prima_contado'];
        //$prima_total = $auto_cap_aseg *.0183873333;
        echo "USD ".number_format($valor,2);?></td>
        <td width=20%><?php echo $datevto; ?></td>
        </tr>
</table>
 <?php  }
else { ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">FORMA DE PAGO</td>
    </tr>
    <tr>
    <td style="font-weight:bold;">Cr&eacute;dito</td>
    <td style="font-weight:bold;">Monto a Pagar</td>
    <td style="font-weight:bold;">Fecha de Vencimiento</td>
    <!-- <td width=30%><?php //secho "USD $ 137.60"   ?></td> --> 
    </tr>
    <?php
    $cuota_inicial = $con ->query("SELECT SUM(monto) as monto_inicial, fecha_cuotas FROM cuota_inicial WHERE num_poliza='$nro_poliza'");
    $cuo_ini = $cuota_inicial -> fetch_assoc();
     setlocale(LC_TIME, 'es_ES.UTF-8');
    setlocale(LC_TIME, 'spanish');
    $midate = $cuo_ini['fecha_cuotas'];
    $cuodate = strftime("%d de %B del %Y", strtotime($midate));
    ?>
    <tr>
    <td width=30%><?php echo "Cuota inicial ";  ?></td> 
    <td width=30%><?php echo "USD ".$cuo_ini['monto_inicial'];  ?></td> 
    <td width=30%><?php echo $cuodate; ?></td>
    </tr>
    <?php 
    $contador = 1;
    $cuotas = $con ->query("SELECT SUM(monto) as monto_cuotas, fecha_cuotas FROM cuotas WHERE num_poliza='$nro_poliza' order by fecha_cuotas");
    setlocale(LC_TIME, 'es_ES.UTF-8');
    setlocale(LC_TIME, 'spanish');
    
    $suma_credito = $con ->query("SELECT SUM(prima_total) as pri_cre FROM automovil WHERE nro_poliza='$nro_poliza'");
    $sucre = $suma_credito -> fetch_assoc();
    
    
    $fe_cuota = $con ->query("SELECT * FROM temp_fecha_cuotas WHERE num_poliza='$nro_poliza'");
    
    
    
    while($fecuo = $fe_cuota -> fetch_assoc()){
    $nueva_cuota = $fecuo['monto'];
    $mifecha = $fecuo['fecha_cuotas'];
    $in = strftime("%d de %B del %Y", strtotime($mifecha));
    ?>   
    <tr>
    <td width=30%><?php echo "Cuota n&uacute;mero ".$contador;  ?></td>
    <td width=30%><?php echo "USD ".$nueva_cuota; ?>
    <td width=30%><?php echo $in; ?></td>
    </tr>    
    <?php 
        $contador++;
    } 
    ?>
    <tr>
    <td width=30%><?php echo 'Total Prima Cr&eacute;dito: '; ?></td>
    <td width=30%><?php echo 'USD '.number_format($sucre['pri_cre'],2); ?></td> 
    <td width=30%></td>
    </tr>
</table> 
 <?php
     }
?>
<!-- FINAL PAGOS 
<div style="page-break-after: always;"></div>-->
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Alcance Territorial: ESTADO PLURINACIONAL DE BOLIVIA</td>
    </tr>
</table>
<hr width=90%>
<?php 
setlocale(LC_TIME, 'es_ES.UTF-8');
setlocale(LC_TIME, 'spanish');
$inivi = $autogpo['inicio_vigencia'];
$finvi = $autogpo['final_vigencia'];
$inic = strftime("%d de %B del %Y", strtotime($inivi));
$fina = strftime("%d de %B del %Y", strtotime($finvi));
//$sqldate=date('d M Y',strtotime());
//$sqldate1=date('d M Y',strtotime()); ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td><strong>Vigencia: </strong></td>
    </tr>
    <tr>
    <td>Inicio:  Desde las 12:01 p.m. del <?php echo $inic; ?></td>
    <td>Termino: Hasta las 12:00 p.m. del <?php echo $fina; ?></td>
    </tr>
</table>
<hr width=90%>
<!-- <table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">SEGURO DE EXTRATERRITORIALIDAD</td>
    </tr>
    <tr>
    <td style="font-size:8px;">PREVIO AVISO A LA COMPA&Ntilde;&Iacute;A EXCLUYENDO BENEFICIO DE AUX&Iacute;LIO MEC&Aacute;NICO, ROBO PARCIAL DE PARTES Y PIEZAS, AUTOREEMPLAZO Y SERVICIO DE GR&Uacute;A, M&Aacute;XIMO 30 D&Iacute;AS POR VIAJE.</td>
    </tr>
</table> 
<hr width=90%> -->
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">OBSERVACIONES</td>
    </tr>
    <tr>
    <td style="font-size:8px;">Las coberturas mencionadas como "no cubiertas", no se encuentran aseguradas en la presente p&oacute;liza.</td>
    </tr>
    <tr>
    <td style="font-size:8px;">El asegurado autoriza a la Compa&ntilde;&iacute;a de Seguros a enviar reporte a la Central de Riesgos del mercado de seguros acorde a las normativas reglamentarias de la Autoridad de Fiscalizaci&oacute;n y Control de Pensiones y Seguros - APS.</td>
    </tr>
</table>
<?php
    $inter = $con ->query("SELECT DISTINCT intermediario_prima FROM calculo_prima WHERE nro_poliza='$nro_poliza'");
    ?>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">INTERMEDIARIO</td>
    </tr>   
    <?php 
    while ($int = $inter -> fetch_assoc()) {
    ?>   
        <tr>
        <td width=85%><?php echo $int['intermediario_prima'];?></td>
        </tr>
    <?php } ?>
</table>
<hr width="90%">
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <?php setlocale(LC_ALL,"es_ES");
    $mes=strftime("%B"); ?>
    <tr>
    <td style="font-weight:bold;">Lugar y Fecha:</td>
    <!-- <td>La Paz, 20 de Abril de 2018</td> --> 
    <td>La Paz, <?php echo " ". date("d") . " de " . $mes . " del " . date("Y"); ?></td>  
    </tr>
</table>
<br><br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<?php
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = $nro_poliza.'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);?>