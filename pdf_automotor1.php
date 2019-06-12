<?php ob_start(); ?>

                  <?php
                  $id = $_REQUEST['id'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes where cod_cliente='$id'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'] ;
                  $paterno = $fila['paterno'] ;
                  $materno = $fila['materno'] ;                 
                  $completo = $nombres." ".$paterno." ".$materno;
		          ?>
<br><br>
<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;">SEGURO DE AUTOMOTORES - INDIVIDUAL</td></tr>
    <tr><td style="font-size:10px; text-align:center;">CONDICIONES PARTICULARES</td></tr>
</table>
<br>
<table width=90% style="font-size:10px; font-weight:bold;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>N&uacute;mero de P&oacute;liza</td>
    </tr>
    <tr>
    <td><?php echo $fila['nro_poliza']; ?></td>
    </tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px; font-weight:bold;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Datos del Cliente</td>
    </tr>
</table>

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=15%>Asegurado:</td>
<td width=35%><?php echo $completo; ?></td>
<td width=15%>Tel&eacute;fono:</td>
<td width=35%><?php echo $fila['telefono_fijo']; ?></td>
</tr>
<tr>
<td>Direcci&oacute;n:</td>
<td><?php echo $fila['direccion']; ?></td>
<td>Correo Electr&oacute;nico:</td>
<td><?php echo $fila['email']; ?></td>
</tr>
<tr>
<td>NIT/CI:</td>
<td><?php echo $fila['nit_ci']; ?></td>
<td>Celular:</td>
<td><?php echo $fila['celular']; ?></td>
</tr>
</table>

<?php
                  $id = $_GET['id'];
		          $automovil = $con ->query("SELECT * FROM automovil where cod_cliente='$id'");
		          $auto = $automovil -> fetch_assoc();
                   $cod_cliente = $auto['cod_cliente'] ;
                      $nro_poliza = $auto['nro_poliza'] ;
                      $clase = $auto['clase'] ;
                      $placa = $auto['placa'] ;
                      $ano = $auto['ano'] ;
                      $color = $auto['color'] ;
                      $modelo = $auto['modelo'] ;
                      $traccion = $auto['traccion'] ;
                      $uso = $auto['uso'] ;
                      $distrito = $auto['distrito'] ;
                      $plazas = $auto['plazas'] ;
                      $chasis = $auto['chasis'] ;
                      $motor = $auto['motor'] ;
                      $auto_cap_aseg = $auto['auto_cap_aseg'];
		          ?>

<hr width=90%>
<table width=90% style="font-size:9px; font-weight:bold;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Datos del Automovil</td>
    </tr>
</table>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=15%>Modelo:</td>
<td width=35%><?php echo $modelo; ?></td>
<td width=15%>Placa:</td>
<td width=35%><?php echo $placa; ?></td>
</tr>
<tr>
<td>Uso:</td>
<td><?php echo $uso; ?></td>
<td>Clase:</td>
<td><?php echo $clase; ?></td>
</tr>
<tr>
<td>Color:</td>
<td><?php echo $color; ?></td>
<td>A&ntilde;o:</td>
<td><?php echo $ano; ?></td>
</tr>
<tr>
<td>Tracci&oacute;n:</td>
<td><?php echo $traccion; ?></td>
<td>Plazas:</td>
<td><?php echo $plazas; ?></td>
</tr>
<tr>
<td>N&uacute;mero de Motor:</td>
<td><?php echo $motor; ?></td>
<td>Chasis:</td>
<td><?php echo $chasis; ?></td>
</tr>
<tr>
<td>Distrito:</td>
<td><?php echo $distrito; ?></td>
<td></td>
<td></td>
</tr>
</table>
<br>
                <?php
                $sel2 = $con ->query("SELECT * FROM cob_adic_au_pol where codigo_cliente='$id'");
                ?>
<hr width=90%>
<table width=90% style="font-size:9px; font-weight:bold;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Coberturas</td>
    </tr>
</table>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td width=25%>Coberturas</td>
        <td width=25%>Valor Asegurado</td>
        <td width=25%>Franquicia</td>
        <td width=25%>Coaseguro</td>
        </tr>
    <?php
		    while ($cob_au = $sel2 -> fetch_assoc()) {
		    ?>   
        <tr>
        <td><?php echo $cob_au['nombre_cob_au'] ?></td>
        <td><?php echo $cob_au['valor_aseg_au'] ?></td>
        <td><?php echo "$".$cob_au['fran_au'] ?></td>
        <td><?php echo $cob_au['coaseg_au']. "%"; ?></td>
        </tr>
    <?php } ?>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-size:9px; font-weight:bold;">Prima Total</td>
    </tr>
    <tr>
        <td>Contado: $ 500.00</td>
    </tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Vigencia</td>
    </tr>
    
    <?php
     //definimos el area geografica del cual deseamos la fecha actual
     date_default_timezone_set("America/La_Paz");
     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     ?>
    <tr>
    <td>Inicio:  Desde las 12:01 p.m. del <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></td>
    </tr>
    <tr>
    <td>Termino: Hasta las 12:00 p.m. del <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ". " 2019"; ?></td>
    </tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Notas Especiales</td>
    </tr>
    <tr>
    <td>ANEXO EXTRATERRITORIAL</td>
    </tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Beneficios Adicionales</td>
    </tr>
    <tr>
    <td></td>
    </tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Subrogaci&oacute;n de Derechos</td>
    </tr>
    <tr>
    <td></td>
    </tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">OBSERVACIONES:</td>
    </tr>
    <tr>
    <td>Las coberturas mencionadas como "no cubiertas", no se encuentran aseguradas en la presente P&oacute;liza.</td>
    </tr>
    <tr>
    <td></td>
    </tr>
    <tr>
    <td>El Asegurado autoriza a la Compaia de Seguros a enviar reporte a la Central de Riesgos del mercado de seguros acorde a las normativas reglamentarias de la Autoridad de Fiscalizaci&oacute;n Pensiones y Seguros.</td>
    </tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Lugar y Fecha:</td>
    </tr>
    <tr>
    <td><?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></td>
    </tr>
</table>
<br><br><br>
<table width=100% style="font-size:13px; text-align:center; font-weight:bold;" cellspacing=0 cellpadding=0>
    <tr><td>Unibienes Seguros y Reaseguros Patrimoniales S.A.</td></tr>
</table>
<br><br><br>
<table width=100% style="font-size:9px;" cellspacing=0 cellpadding=0>
    <tr><td align=center>Gerente Nacional de Suscripci&oacute;n</td><td align=center>Gerente Nacional de Suscripci&oacute;n</td></tr>
</table>
<br><br>
<table width=100% style="font-size:11px;" cellspacing=0 cellpadding=0>
    <tr><td align=center>Firmas Autorizadas</td></tr>
</table>
<?php
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = $fila['nro_poliza'].'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>