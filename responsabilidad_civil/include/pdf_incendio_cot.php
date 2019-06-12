<?php ob_start();?>
<?php
$codigo = $_REQUEST['cod_cotizacion'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes_cotizacion where cod_cotizacion='$codigo'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno']; 
                  $cod_cotizacion = $fila['cod_cotizacion'];
                  $completo = $nombres." ".$paterno." ".$materno;
                  $codigo = $_REQUEST['codigo'];
                  
                  $con = new mysqli('localhost','root','','unibienes');
		          $se = $con ->query("SELECT * FROM automovil_cotizacion where cod_cotizacion='$cod_cotizacion'");
		          $auto = $se -> fetch_assoc();
                  $clase = $auto['clase'];
                  $marca = $auto['marca'];
                  $ano = $auto['ano'];
                  $modelo = $auto['modelo'];
                  $plazas = $auto['plazas'];
                  $placa = $auto['placa'];
                  $tasa_prima = $auto['tasa_prima'];
                  $uso = $auto['uso'];
                  $traccion = $auto['traccion'];
                  $distrito = $auto['distrito'];
                  $chasis = $auto['chasis'];
                  $motor = $auto['motor'];
                  //$auto_cap_aseg = $auto['auto_cap_aseg'];
                  $intermediario = $auto['intermediario'];
		          ?>
<style>
    @page { margin: 40px 20px; }
table{
    border-collapse: collapse;
    border: none;
}
td{
    padding: 0;
}
    
</style>
<br><br>
<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; text-align:center;">SLIP DE COTIZACI&Oacute;N</td></tr>
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;">SEGURO DE INCENDIO</td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr><td>C&oacute;digo de Cotizaci&oacute;n: <?php echo $cod_cotizacion; ?></td>
<td><?php echo $producto_auto; ?></td></tr>
</table>
<?php
$tomador = $con ->query("SELECT * FROM clientes_tomador_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
		          $toma = $tomador -> fetch_assoc();
                  $nombres = $toma['nombres'] ;
                  $paterno = $toma['paterno'] ;
                  $materno = $toma['materno'] ;
                  $completoma = $nombres." ".$paterno." ".$materno;
?>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td>Datos del Tomador</td>
</tr>
    <tr>
    <td width=15%>Tomador:</td>
    <td width=40%><?php echo $completoma; ?></td>
    <td width=15%>CI/NIT:</td>
    <td width=30%><?php echo $toma['nit_ci']; ?></td>
</tr>
    <tr>
    <td>Direcci&oacute;n:</td>
    <td style="font-size:7px;"><?php echo $toma['direccion']; ?></td>
    <td>Tel&eacute;fono:</td>
    <td><?php echo $toma['telefono_fijo']; ?></td>
</tr>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td>Datos del Cliente</td>
</tr>
    <tr>
    <td width=15%>Asegurado:</td>
    <td width=40%><?php echo $completo; ?></td>
    <td width=15%>CI/NIT:</td>
    <td width=30%><?php echo $fila['nit_ci']; ?></td>
</tr>
    <tr>
    <td>Direcci&oacute;n:</td>
    <td style="font-size:7px;"><?php echo $fila['direccion']; ?></td>
    <td>Tel&eacute;fono:</td>
    <td><?php echo $fila['telefono_fijo']; ?></td>
</tr>
</table>

<?php
$incendio = $con ->query("SELECT * FROM `pol_incendio` WHERE cod_cotizacion='$cod_cotizacion'");
		          $ince = $incendio -> fetch_assoc();
                  $completoma = $nombres." ".$paterno." ".$materno;
?>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td>Datos de la P&oacute;liza</td>
</tr>
    <tr>
    <td width=30%>Asegurado:</td>
    <td width=70%><?php echo $completoma; ?></td>
</tr>
 <tr>
    <td width=30%>Ubicaci&oacute;n del Riesgo:</td>
    <td width=70%><?php echo $ince['ubicacion']; ?></td>
</tr>
<tr>
    <td width=30%>Direcci&oacute;n Asegurada:</td>
    <td width=70%><?php echo $ince['direccion_aseg']; ?></td>
</tr>
<tr>
    <td width=30%>Materia del Seguro:</td>
    <td width=70%><?php echo $ince['materia_seguro']; ?></td>
</tr>
<tr>
    <td width=30%>Valor Asegurado:</td>
    <td width=70%><?php echo "USD ".number_format($ince['incendio_cap_aseg'],2); ?></td>
</tr>
<tr>
    <td width=30%>A Favor del</td>
    <td width=70%><?php echo $ince['afavor']." Por USD .- ".number_format($ince['afavor_prima'],2);?></td>
</tr>
</table>
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>COBERTURAS</strong></td>
    </tr>
    
        <?php
        $cober = $con ->query("SELECT * FROM coberturas_incendio_pol WHERE cod_cotizacion='$cod_cotizacion'");
        while($cobe = $cober -> fetch_assoc()){
        $glosa = $cobe['glosa'];
        ?>  
        <tr>
        <td style="text-align: justify;" width=100%><?php echo strtoupper($glosa); ?></td>
        </tr>
            <?php } ?>
</table>
<?php
    $riesgo = $con ->query("SELECT * FROM primer_riesgo_pol  WHERE cod_cotizacion='$cod_cotizacion'");
    ?>
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>A PRIMER RIESGO</strong></td>
    </tr>
    <?php
	while ($ri = $riesgo -> fetch_assoc()) {
    ?>   
        <tr>
        <td style="text-align: justify;" width=100%><?php echo "* ".strtoupper($ri['glosa']); ?></td>
        </tr>
    <?php } ?>
</table>
<br>
<hr width=90%>
<br>
<?php
    $accid = $con ->query("SELECT * FROM `clau_adic_incendio_pol` WHERE cod_cotizacion='$cod_cotizacion'");
    ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>CLAUSULAS ADICIONALES</strong></td>
    </tr>
    <?php
	while ($ac = $accid -> fetch_assoc()) {
    ?>   
        <tr>
        <td style="text-align: justify;" width=100%><?php echo "* ".strtoupper($ac['glosa']);?></td>
        </tr>
    <?php } ?>
</table>
<br>
<hr width=90%>
<br>
<?php
    $clausula = $con ->query("SELECT * FROM `franquicia_incendio_pol`  WHERE cod_cotizacion='$cod_cotizacion'");
    ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>FRANQUICIA DEDUCIBLE</strong></td>
    </tr>
    <?php
	while ($cla = $clausula -> fetch_assoc()) {
    ?>   
        <tr>
        <td style="text-align: justify;" width=100%><?php echo "* ".strtoupper($cla['grosa']);?></td>
        </tr>
    <?php } ?>
</table>
<br>
<hr width=90%>
<br>
<?php
    $beneficios = $con ->query("SELECT * FROM `exclusiones_incendio_pol`  WHERE cod_cotizacion='$cod_cotizacion'");
    ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>EXCLUSIONES</strong></td>
    </tr>
    <?php
	while ($bene = $beneficios -> fetch_assoc()) {
    ?>   
        <tr>
        <td align="justifyx" width=100%><?php echo "* ".strtoupper($bene['glosa']);?></td>
        </tr>
    <?php } ?>
</table>
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">CONDICIONES ESPECIALES</td>
    </tr>
    <?php
		          $sewa = $con ->query("SELECT * FROM `cond_part_inc_pol` WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($reqaeg = $sewa -> fetch_assoc()) {
     ?>   
    <tr>
    <td style="text-align: justify;" width=100%><?php echo "* ".strtoupper($reqaeg['glosa']);?></td>
    </tr>
    <?php } ?>
</table> 
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">NOTAS ESPECIALES</td>
    </tr>
    <?php
		          $nota = $con ->query("SELECT * FROM `notas_especiales_incendio_pol`  WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($notacla = $nota -> fetch_assoc()) {
     ?>   
    <tr>
    <td style="text-align: justify;" width=100%><?php echo "* ".strtoupper($notacla['glosa']);?></td>
    </tr>
    <?php } ?>
</table> 
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">OBSERVACIONES</td>
    </tr>
    <?php
		          $obs = $con ->query("SELECT * FROM `observaciones_incendio_pol`  WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($obse = $obs -> fetch_assoc()) {
     ?>   
    <tr>
    <td style="text-align: justify;" width=100%><?php echo "* ".strtoupper($obse['glosa']);?></td>
    </tr>
    <?php } ?>
</table> 
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">NOTA ESPECIAL</td>
    </tr>
    <?php
		          $noti = $con ->query("SELECT * FROM `nota_especial_incendio_pol`  WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($notis = $noti -> fetch_assoc()) {
     ?>   
    <tr>
    <td style="text-align: justify;" width=100%><?php echo "* ".strtoupper($notis['glosa']);?></td>
    </tr>
    <?php } ?>
</table> 
<br>
<hr width=90%>
<br>
<?php
		          $prima = $con ->query("SELECT * FROM `pol_incendio` WHERE cod_cotizacion='$cod_cotizacion'");
		          $primas = $prima -> fetch_assoc();
                  $prima_total=$primas['prima_total'];
?> 

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>Prima Total Contado:</strong></td>
    </tr>
        <tr>
        <td width=60%>USD $ <?php echo number_format($prima_total); ?></td>
        <td width=20%></td>
        <td width=20%></td>
        </tr>
</table>
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>Prima Total Cr&eacute;dito:</strong></td>
    </tr>
    <tr>
        <td>USD $ <?php echo $credito = number_format($prima_total *.06+($prima_total),2); ?></td>
    </tr> 
    <tr>
        <td><strong>Cuota inicial minimo 30% y cuatro cuotas adicionales.</strong></td>
    </tr>   <?php
            //    $cuotas= $credito*.7;
            //    $cuota = 5;
            //    $contador = 2;
            //    for($ii = 1; $ii <= $cuota; $ii++)
            //         {
            //            $mes    =    date('m')    +    $ii;
            //            if( $mes    <=    9    ) 
            //            {
            //                $vencimiento    =    date('d-')    .    '0'    .    $mes    .date('-Y');
            //            }elseif(    $mes    ==    13    )
            //            {
            //                $vencimiento    =    date('d-')    .    '01'    .date('-Y');
            //            }else{
            //                $vencimiento    =    date('d-')    .    $mes    .date('-Y');
            //            }
            //        echo "<tr>";
            //        echo "<td>";
            //        echo "Cuota n&uacute;mero ".$contador++.": USD  ".number_format($cuotas/5,2);
            //        echo "</td>";
            //        echo "<td>";
            //        echo $encimiento;
            //        echo "</td>";
            //        echo "<td>";
            //        echo "</td>";
            //        echo "</tr>";
                                           // echo "<br>";
            //    }
                ?>
</table>
<br>
<hr width=90%>
<br>
<?php $sqldate=date('d M Y',strtotime($fila['inicio_vigencia']));
$sqldate1=date('d M Y',strtotime($fila['final_vigencia'])); ?>

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>INTERMEDIARIO</strong></td>
    </tr>
    <tr>
        <td width=15%><?php echo $intermediario;?></td>
    </tr>
</table>
<!-- 
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
-->
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Lugar y Fecha:</td>
    </tr>
    <tr>
    <!-- <td>La Paz, 18 de Abril de 2018</td> -->
    <td>La Paz, <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " de ".date('Y'); ?></td> 
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<table width=90% cellspacing=0 cellpadding=0 align="center">
    <tr>
    <td align="center"><img src="img/firmas.jpg" style="width:350px;"></td>
    </tr>
</table>
<?php
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = $cod_cotizacion.'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);?>