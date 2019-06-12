<?php ob_start(); ?>

                  <?php
                  $num_orden = $_REQUEST['num_orden'];
                  $num_siniestro= $_REQUEST['num_siniestro'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM orden_pago where num_orden='$num_orden'");
		          $fila = $sel -> fetch_assoc();
                
                  $sol = $con ->query("SELECT * FROM liquidacion_auto where num_orden='$num_orden'");
		          $f = $sol -> fetch_assoc();
                  
                  $se = $con ->query("SELECT * FROM siniestros where num_siniestro='$num_siniestro'");
		          $fi = $se -> fetch_assoc();
                  $num_poliza = $fi['num_poliza'];
                  $num_cliente = $fi['cod_cliente'];
?>
  <style>
    @page { margin: 38px 20px; }
  </style>
<br><br>
<table width=90% align=center cellspacing=0 cellpadding=0 style="border:border-collapse: collapse;">
<tr><td style="font-size:16px; text-align:center;">LIQUIDACI&Oacute;N DE SINIESTRO</td></tr>
</table>
<br><br><br>
<hr width=90%>

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td><strong>N&Uacute;MERO DE ORDEN:</strong></td>
<td><?php echo $fila['num_orden']; ?></td>
</tr>
<tr>
<td><strong>N&Uacute;MERO DE P&Oacute;LIZA:</strong></td>
<td><?php echo $num_poliza; ?></td>
</tr>
<tr>
<td><strong>N&Uacute;MERO DE CLIENTE:</strong></td>
<td><?php echo $num_cliente; ?></td>
</tr>
<tr>
<td><strong>RAMO:</strong></td>
<td><?php echo $fila['ramo']; ?></td>
</tr>
<tr>
<td><strong>COBERTURA:</strong></td>
<td><?php echo $fila['cobertura_afectada']; ?></td>
</tr>
<tr>
<td><strong>N&Uacute;MERO DE SINIESTRO:</strong></td>
<td><?php echo $fila['num_siniestro']; ?></td>
</tr>
<tr>
<td><strong>PAGO TOTAL:</strong></td>
<td><?php echo 'USD '.$fila['pago_total_bs']; ?></td>
</tr>
</table>
<br>

<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td><strong>CIRCUNSTANCIAS DEL SINIESTRO</strong></td>
</tr>
<tr>
<td>
    <textarea id="" rows="3" cols="200"><?php echo $f['circun_siniestro']; ?></textarea>
</td>
</tr>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>CUENTA</td>
    </tr>
<tr>
<td width=20%>Num. Cheque:</td>
<td width=20%><?php echo $f['num_cheque']; ?></td>
<td>Girado a:</td>
<td><?php echo $f['girado']; ?></td>
<td>Num. Transacci&oacute;n:</td>
<td><?php echo $f['num_tran']; ?></td>
</tr>
</table>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Monto:</td>
<td><?php echo 'USD '.$f['monto']; ?></td>
<td>Monto el Letra:</td>
<td><?php echo $f['monto_letra']; ?></td>
</tr>
</table>
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

<br><br>
 <?php
                   //definimos el area geografica del cual deseamos la fecha actual
                    date_default_timezone_set("America/La_Paz");
                    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            ?>

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
<hr width=90%>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td align="center" width=50%>_______________________________</td>
    <td align="center" width=50%>_______________________________</td>
    </tr>
    <tr>
    <td align="center">FIRMAS AUTORIZADAS</td>
    <td align="center">ASEGURADO Y/O BENEFICIARIO</td>
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