<?php ob_start(); ?>

                  <?php
                  $nro_poliza = $_REQUEST['nro_poliza'];
                  $cod_cliente = $_REQUEST['cod_cliente'];
                  $num_anexo = $_REQUEST['num_anexo'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes where cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno'];
                  $completo = $nombres." ".$paterno." ".$materno;

                  $sel_ane = $con ->query("SELECT * FROM anexo_automotor WHERE num_anexo='$num_anexo'");
		          $anexo = $sel_ane -> fetch_assoc(); 
?>
  <style>
    @page { margin: 38px 20px; }
  </style>
<br><br>
<table width=90% align=center cellspacing=0 cellpadding=0 style="border:border-collapse: collapse;">
    
<tr><td style="font-size:16px; text-align:center;">ANEXO : <?php echo $num_anexo; ?></td></tr>
</table>
<br>
<hr width=90%>
<?php
		          $tomador = $con ->query("SELECT * FROM clientes_tomador where nro_poliza='$nro_poliza'");
		          $tom = $tomador -> fetch_assoc();
                  $nombres = $tom['nombres'];
                  $paterno = $tom['paterno'];
                  $materno = $tom['materno'];
                  $complet = $nombres." ".$paterno." ".$materno;

		          $beneficiario = $con ->query("SELECT * FROM clientes_tomador where nro_poliza='$nro_poliza'");
		          $ben = $beneficiario -> fetch_assoc();
                  $nombres = $ben['nombres'];
                  $paterno = $ben['paterno'];
                  $materno = $ben['materno'];
                  $comple = $nombres." ".$paterno." ".$materno;
		          ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>SEGURO DE AUTOMOTORES:</td>
</tr>
<tr>
<td>N&Uacute;MERO DE P&Oacute;LIZA:</td>
<td><?php echo $nro_poliza; ?></td>
</tr>
<tr>
<td>TOMADOR:</td>
<td><?php echo $complet; ?></td>
</tr>
<tr>
<td>CLIENTE:</td>
<td><?php echo $completo; ?></td>
</tr>
<tr>
<td>BENEFICIARIO:</td>
<td><?php echo $comple ?></td>
</tr>
</table>
<br>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>
    <textarea id="" rows="3" cols="200"><?php echo $anexo['condiciones']; ?></textarea>
</td>
</tr>
</table>
    <?php
    $sele_automo = $con ->query("SELECT * FROM automovil WHERE nro_poliza='$nro_poliza'");
    $autogpo = $sele_automo -> fetch_assoc();

    $sel_auto = $con ->query("SELECT * FROM automovil WHERE nro_poliza='$nro_poliza'");
    $auto_gpo = $sel_auto -> fetch_assoc();{
		      ?> 
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-size:10px;">Datos del Veh&iacute;culo</td>
<td style="font-size:10px;"><?php echo $contador; ?></td>
</tr>
<tr>
<td>Clase:</td>
<td><?php echo $auto_gpo['clase']; ?></td>
<td>Marca:</td>
<td><?php echo $auto_gpo['marca']; ?></td>
<td>A&ntilde;o:</td>
<td><?php echo $auto_gpo['ano']; ?></td>
</tr>
<tr>
<td>Modelo:</td>
<td><?php echo $auto_gpo['modelo']; ?></td>
<td>Plazas:</td>
<td><?php echo $auto_gpo['plazas']; ?></td>
<td>Placa:</td>
<td><?php echo $auto_gpo['placa']; ?></td>
</tr>
<tr>
<td>Uso:</td>
<td><?php echo $auto_gpo['uso']; ?></td>
<td>Tracci&oacute;n:</td>
<td><?php echo $auto_gpo['traccion']; ?></td>
<td>Distrito:</td>
<td><?php echo $auto_gpo['distrito']; ?></td>
</tr>
<tr>
<td>N&uacute;mero de Chasis:</td>
<td><?php echo $auto_gpo['chasis']; ?></td>
<td>N&uacute;mero de Motor</td>
<td><?php echo $auto_gpo['motor']; ?></td>
<td>Color:</td>
<td><?php echo $auto_gpo['color']; ?></td>
</tr>
</table>
<?php 
$contador++;
        } ?>

<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>
    <label>CONDICIONES</label></td>
</tr>
<tr>
<td>
    <?php echo $anexo['txt_anexo']; ?>
</td>
</tr>
</table>
<hr width=90%>
<br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Prima: <?php echo "USD ".number_format($anexo['prima']); ?></td>
    </tr>
</table>
<hr width=90%>
<br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Dicha modificac&oacute;n entra en vigencia desde el inicio de vigencia de la primera p&oacute;liza.</td>
    </tr>
</table>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Todos los dem&aacute;s t&eacute;rminos y condiciones permanecen sin modificaci&oacute;n.</td>
    </tr>
</table>
<br><br><br>
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
<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
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
$filename = $num_anexo.'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);?>