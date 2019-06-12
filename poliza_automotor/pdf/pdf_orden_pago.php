<?php ob_start(); ?>

                  <?php
                  $num_orden = $_REQUEST['num_orden'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM orden_pago where num_orden='$num_orden'");
		          $fila = $sel -> fetch_assoc();
                
?>
  <style>
    @page { margin: 38px 20px; }
  </style>
<br><br><br><br>
<table width=90% align=center cellspacing=0 cellpadding=0 style="border:border-collapse: collapse;">
<tr><td style="font-size:16px; text-align:center;">ORDEN DE PAGO DE SINIESTRO</td></tr>
</table>
<br>
<hr width=90%>

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>N&Uacute;MERO DE ORDEN:</td>
<td><?php echo $fila['num_orden']; ?></td>
</tr>
<tr>
<td>N&Uacute;MERO DE SINIESTRO:</td>
<td><?php echo $fila['num_siniestro']; ?></td>
</tr>
<tr>
<td>N&Uacute;MERO DE P&Oacute;LIZA:</td>
<td><?php echo $fila['num_poliza']; ?></td>
</tr>
<tr>
<td>ASEGURADO:</td>
<td><?php echo $fila['asegurado']; ?></td>
</tr>
<tr>
<td>RAMO:</td>
<td><?php echo $fila['ramo']; ?></td>
</tr>
<tr>
<td>USUARIO:</td>
<td><?php echo $fila['user_reclamo']; ?></td>
</tr>
<tr>
<td>RECEPTOR:</td>
<td><?php echo $fila['receptor']; ?></td>
</tr>
<tr>
<td>NIT RECEPTOR:</td>
<td><?php echo $fila['nit_receptor']; ?></td>
</tr>
<tr>
<td>COBERTURA:</td>
<td><?php echo $fila['cobertura_afectada']; ?></td>
</tr>
<tr>
<td>FECHA INDEMNIZACI&Oacute;N:</td>
<td><?php echo ' '.$fila['f_indemnizacion']; ?></td>
</tr>
</table>
<br>

<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>
    <textarea id="" rows="3" cols="200"><?php echo $fila['concepto']; ?></textarea>
</td>
</tr>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>BOLIVIANOS</td>
    </tr>
<tr>
<td width=20%>IMPORTE:</td>
<td width=20%><?php echo 'BOB '.number_format($fila['importe_bs'],2); ?></td>
<td>RETENCI&Oacute;N:</td>
<td><?php echo 'BOB '.number_format($fila['retencion_bs'],2); ?></td>
<td>PAGO TOTAL:</td>
<td><?php echo 'BOB '.number_format($fila['pago_total_bs'],2); ?></td>
</tr>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>DOLARES</td>
    </tr>
<tr>
<td  width=20%>IMPORTE:</td>
<td  width=20%><?php echo 'USD '.number_format($fila['importe_dls'],2); ?></td>
<td>RETENCI&Oacute;N:</td>
<td><?php echo 'USD '.number_format($fila['retencion_dls'],2); ?></td>
<td>PAGO TOTAL:</td>
<td><?php echo 'USD '.number_format($fila['pago_total_dls'],2); ?></td>
</tr>
</table>
<br>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30%>DESCARGO:</td>
    <td width=30%><?php echo $fila['doc_descargo']; ?>
    </td>
</tr>
</table>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30%>INDEMNIZACI&Oacute;N:</td>
<td width=30%><?php echo ' '.$fila['indemnizacion']; ?></td>
</tr>
</table>
<hr width=90%>
<?php
$se = $con ->query("SELECT * FROM factura_opago where num_orden_pago='$num_orden'");
		         
?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td><h5>FACTURA</h5></td>
</tr>
<tr>
<td width=15%>N&Uacute;MERO:</td>
<td width=15%>C&Oacute;DIGO:</td>
<td width=20%>AUTORIZACI&Oacute;N:</td>
<td width=20%>NIT:</td>
<td width=15%>IMPORTE:</td>
<td width=15%>FECHA:</td>
</tr>
<?php
while($fi = $se -> fetch_assoc()){
?>
<tr>
<td><?php echo $fi['num_factura']; ?></td>
<td><?php echo $fi['codigo_factura']; ?></td>
<td><?php echo $fi['autorizacion_factura']; ?></td>
<td><?php echo $fi['nit_factura']; ?></td>
<td><?php echo 'BOB '.number_format($fi['importe_factura'],2); ?></td>
<td><?php echo $fi['fecha_factura']; ?></td>
</tr>
<?php
}
?>
</table>

 <?php
                   //definimos el area geografica del cual deseamos la fecha actual
                    date_default_timezone_set("America/La_Paz");
                    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            ?>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td align="center"><strong>FINIQUITO</strong></td>
</tr>
<tr>
<td align="justify">
    EN CONSIRERACION AL PAGO, CUYO MONTO ME (NOS) ESTA SIENDO ENTREGADO, A LA FIRMA Y ACEPTACION DEL PRESENTE FINIQUITO, YO (NOSOTROS)
    EXONERO (AMOS) A UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A. DE TODA RESPONSABILIDAD, RECLAMO Y/O DEMANDA PRESENTA Y/O FUTURA
    EN RELACION AL PRESENTE RECLAMO, SEGUN DOCUMENTACION DE DESCARGO QUE FORMAN PARTE DE LA PRESENTE LIQUIDACION DE SINIESTRO.
</td>
</tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Lugar y Fecha:</td>
    </tr>
    <tr>
    <?php setlocale(LC_ALL,"es_ES");
    $mes=strftime("%B"); ?>
    <td>La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></td>      
    </tr>
</table>

<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td  width=25%>__________________________</td>
    <td  width=25%>__________________________</td>
    <td  width=25%>ASEGURADO/BENEFICIARIO</td>
    </tr>
    <tr>
    <td>PROCESADO</td>
    <td>AUTORIZACI&Oacute;N</td>
    <td>NOMBRE_____________________</td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>C.I.____________________________</td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>FECHA_________________________</td>
    </tr>
</table>
<?php
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = $num_orden.'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);?>