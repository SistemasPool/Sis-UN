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
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;">SEGURO DE ACCIDENTES PERSONALES</td></tr>
</table>
<br><br><br><br><br><br>
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
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>COBERTURAS y CAPITALES ASEGURADOS TOTALES.</strong></td>
    </tr>
</table>
<?php
        $cober = $con ->query("SELECT * FROM beneficiarios_ap WHERE cod_cotizacion='$cod_cotizacion'");
        while($cobe = $cober -> fetch_assoc()){
        $glosa = $cobe['nombre_completo'];
        ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
        <tr>
        <td width=40%>Nombre Completo:</td>
        <td width=60%><?php echo strtoupper($glosa); ?></td>
        </tr>
        <tr>
        <td>Muerte Accidental</td>
        <td><?php echo $cobe['muerte_accidental']; ?></td>
        </tr>
        <tr>
        <td>Invalidez Total y/o Parcial Permanente</td>
        <td><?php echo $cobe['invalidez']; ?></td>
        </tr>
        <tr>
        <td>Gastos M&eacute;dico</td>
        <td><?php echo $cobe['gastos']; ?></td>
        </tr>
</table>
<?php } ?>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>LIMITE DE EDADES</strong></td>
    </tr>
    <tr>
        <td width=30%></td>
        <td width=30%><strong>M&aacute;xima de Ingreso</strong></td>
        <td width=30%><strong>M&aacute;xima de Permanencia</strong></td>
        </tr>
</table>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
        <tr>
        <td width=30%>Cobertura B&aacute;sica:</td>
        <td width=30%>70 a&ntilde;os y 364 d&iacute;as</td>
        <td width=30%>A cumplir los 75 a&ntilde;os</td>
        </tr>
        <tr>
        <td>Invalidez Total y/o Parcial Permanente</td>
        <td width=30%>64 a&ntilde;os y 364 d&iacute;as</td>
        <td width=30%>A cumplir los 70 a&ntilde;os</td>
        </tr>
        <tr>
        <td>Gastos M&eacute;dico</td>
        <td width=30%>64 a&ntilde;os y 364 d&iacute;as</td>
        <td width=30%>A cumplir los 65 a&ntilde;os</td>
        </tr>
</table>

<?php    $riesgo = $con ->query("SELECT * FROM clau_accidentes_pol WHERE cod_cotizacion='$cod_cotizacion'");
    ?>
<br>
<hr width=90%>
<br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>CLAUSULAS O ANEXOS ADICIONALES</strong></td>
    </tr>
    <?php
	while ($ri = $riesgo -> fetch_assoc()) {
    ?>   
        <tr>
        <td width=90%><?php echo "* ".strtoupper($ri['glosa']); ?></td>
        </tr>
    <?php } ?>
</table>
<br>
<hr width=90%>
<br>
<?php
		          $prima = $con ->query("SELECT * FROM `acc_perso_cotizacion` WHERE cod_cotizacion='$cod_cotizacion'");
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
        <td width=15%><?php echo $primas['intermediario'];?></td>
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