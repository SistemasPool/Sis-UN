<?php ob_start();?>
<?php
$codigo = $_REQUEST['num_poliza'];
$cod_cliente = $_REQUEST['cod_cliente'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes where cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno']; 
                  $cod_cotizacion = $fila['cod_cotizacion'];
                  $completo = $nombres." ".$paterno." ".$materno;
		          ?>
<style>
    @page { margin: 40px 20px; }
table{
    border-collapse: collapse;
    border: none;
    
}
td{
    text-align: justify;
    text-justify:auto;
}
    
</style>
<br><br><br>
<?php
$select = $con ->query("SELECT count(nombre_completo) as cuantos FROM beneficiarios_ap where cod_cliente='$cod_cliente' and num_poliza='$codigo'");
		          $f = $select -> fetch_assoc();
                  $cuantos_hay = $f['cuantos'];
if($cuantos_hay>=1){
?>
<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:12px; text-align:center;">P&Oacute;LIZA DE SEGURO DE ACCIDENTES PERSONALES - GRUPO</td></tr>
    <tr><td style="font-size:10px; font-weight:bold; text-align:center;">CONDICIONES PARTICULARES</td></tr>
</table>
<?php
}
else{
?>
<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:12px; text-align:center;">P&Oacute;LIZA DE SEGURO DE ACCIDENTES PERSONALES - INDIVIDUAL</td></tr>
    <tr><td style="font-size:10px; font-weight:bold; text-align:center;">CONDICIONES PARTICULARES</td></tr>
</table>
<?php
}
?>
<br>
<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:10px; font-weight:bold; text-align:center;">C&Oacute;DIGO: 116-911239-2018 07 009</td></tr>
    <tr><td style="font-size:10px; font-weight:bold; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 1005/2018 del 2 de Agosto de 2018</td></tr>
</table>
<br><br>
<table width=90% cellspacing=0 cellpadding=0 style="font-size:8px; text-align: justify;
  text-justify: inter-word;" align="center">
<tr>

    <td width=85%><p>En virtud a la solicitud escrita presentada por el interesado, las declaraciones del mismo, las condiciones generales y anexos y/o clausula adicionales que forman parte integrante e inseparable de la presente p&oacute;liza, y en m&eacute;rito a haberse convenido el monto y la forma de pago de la prima correspondiente, UNIBIENES Seguros y Reaseguros Patrimoniales S.A. (en adelante "La Aseguradora"), garantiza el pago de las indemnizaciones acordadas en las condiciones particulares de la presente P&oacute;liza a:</p></td>
</tr>
</table>
<br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr><td><strong>N&uacute;mero de P&oacute;liza: <?php echo $codigo; ?></strong></td>
</tr>
</table>
<?php
$tomador = $con ->query("SELECT * FROM clientes_tomador WHERE nro_poliza='$codigo'");
		          $toma = $tomador -> fetch_assoc();
                  $nombres = $toma['nombres'];
                  $paterno = $toma['paterno'];
                  $materno = $toma['materno'];
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
$incendio = $con ->query("SELECT * FROM acc_perso_poliza WHERE num_poliza='$codigo'");
		          $ince = $incendio -> fetch_assoc();
?>
<hr width=90%>
<table width=90% cellspacing=0 cellpadding=0 style="font-size:8.5px;" align="center">
<tr>

    <td width=30%><h3>Asegurados:</h3></td>
    <td width=70%></td>
</tr>
</table>
<table width=90% cellspacing=0 cellpadding=0 style="font-size:8.5px;" align="center">
<?php 
$cob2 = $con -> query("SELECT * FROM beneficiarios_ap WHERE num_poliza='$codigo'");
while($cobe2 = $cob2 -> fetch_assoc()){  
?>
    <tr>
    <td width=30%></td>
    <td><?php echo utf8_decode(strtoupper($cobe2['nombre_completo']));?></td>
    </tr>
<?php
    }
    ?>
</table>

<hr width=90%>
<table width=90% cellspacing=0 cellpadding=0 style="font-size:10px;" align="center">
<tr>
    <td><strong>Datos de la P&oacute;liza</strong></td>
</tr>
<tr>
<?php
setlocale(LC_TIME, "spanish");
$mi_fecha = $ince['inicio_vigencia'];;
$mi_fecha = str_replace("/", "-", $mi_fecha); 
$Nueva_Fecha = date("d-m-Y", strtotime($mi_fecha)); 
$Mes_Anyo = strftime("%d de %B de %Y", strtotime($Nueva_Fecha));
    
$mifecha = $ince['final_vigencia'];;
$mifecha = str_replace("/", "-", $mifecha); 
$NuevaFe = date("d-m-Y", strtotime($mifecha)); 
$Mes_Ano = strftime("%d de %B de %Y", strtotime($NuevaFe));
?>
    <td width=30%>Inicio de Vigencia:</td>
    <td width=70%><?php echo $Mes_Anyo; ?></td>
</tr>
<tr>
    <td width=30%>Final de Vigecia:</td>
    <td width=70%><?php echo $Mes_Ano; ?></td>
</tr>
<tr>
    <td width=30%>Suma Asegurada:</td>
    <td width=70%><?php echo "USD ".number_format($ince['suma_asegurada'],2)." DE ACUERDO A DETALLE"; ?></td>
</tr>
<tr>
    <td width=30%>Forma de Pago:</td>
    <td width=70%><?php echo $ince['tipo_pago']; ?></td>
</tr>
<tr>
    <td width=30%>Prima Total:</td>
    <td width=70%><?php echo "USD ".number_format($ince['prima_total'],2); ?></td>
</tr>
<tr>
    <td width=30%>Fecha Vencimieto de Pago:</td>
    <td width=70%><?php echo $ince['vencimiento']; ?></td>
</tr>
</table>
<br>
<hr width=90%>
<table width=90% cellspacing=0 cellpadding=0 style="font-size:10px;" align="center">
<tr>
                <td><h5 style="font-weight: bold;">COBERTURAS Y CAPITALES ASEGURADOS TOTALES</h5></td>
            </tr>
</table>
<table width=90% cellspacing=0 cellpadding=0 style="font-size:7px; text-align:center;" align="center">
            <tr>
                <td width=35%></td>
                <td width=20% style="font-weight: bold;">MUERTE ACCIDENTAL</td>
                <td width=20% style="font-weight: bold;">INVALIDEZ TOTAL Y/O PARCIAL PERMANENTE</td>
                <td width=20% style="font-weight: bold;">GASTOS M&Eacute;DICOS</td>
            </tr>
            <?php 
            $cob = $con -> query("SELECT * FROM beneficiarios_ap WHERE num_poliza='$codigo'");
            while($cobe = $cob -> fetch_assoc()){
            ?>  
            <tr>
                <td width=35%><?php echo utf8_decode(strtoupper($cobe['nombre_completo']));?></td>
                <td width=20%><?php echo "USD ".number_format($cobe['muerte_accidental'],2);?></td>
                <td width=20%><?php echo "USD ".number_format($cobe['invalidez'],2);?></td>
                <td width=20%><?php echo "USD ".number_format($cobe['gastos'],2);?></td>
            </tr>
            <?php 
            }
            ?>
            </table>
<br>
<hr width=90%>
<br>
    <table width=90% cellspacing=0 cellpadding=0 style="font-size:8px; text-align:center;" align="center">
    <tr>
    <td style="font-weight: bold;">L&Iacute;MITE DE EDADES</td>
    </tr>
</table>
    <table width=90% cellspacing=0 cellpadding=0 style="font-size:9px; text-align:center;" align="center">
        <tr>
        <td width=40%>Cobertura B&aacute;sica:</td>
        <td width=30%>70 a&ntilde;os y 364 d&iacute;as</td>
        <td width=30%>A cumplir los 75 a&ntilde;os</td>
        </tr>
        <tr>
        <td>Invalidez Total y/o Parcial Permanente</td>
        <td>64 a&ntilde;os y 364 d&iacute;as</td>
        <td>A cumplir los 70 a&ntilde;os</td>
        </tr>
        <tr>
        <td>Gastos M&eacute;dico</td>
        <td>64 a&ntilde;os y 364 d&iacute;as</td>
        <td>A cumplir los 65 a&ntilde;os</td>
        </tr>
</table>
<br>
<hr width=90%>
<br>
<table width=90% cellspacing=0 cellpadding=0 style="font-size:9px; text-align:center;" align="center">
    <tr>
    <td><strong>CL&Aacute;USULAS O ANEXOS ADICIONALES</strong></td>
    </tr>
</table>
<?php
    $accid = $con ->query("SELECT * FROM `clau_adic_incendio_pol` WHERE num_poliza='$codigo'");
    ?>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
            <?php 
            $coberturas = $con -> query("SELECT * FROM clau_accidentes_pol WHERE num_poliza='$codigo'");
            while($cob = $coberturas -> fetch_assoc()){
            ?>  <tr>
                <td><?php echo "* ".$cob['glosa'];?></td>
                <td></td>
            </tr>
            <?php 
            }
            ?>
            </table>
<br>
<hr width=90%>
<br>


<table width=90% cellspacing=0 cellpadding=0 style="font-size:9.5px; text-align: justify; text-justify: inter-word;" align="center">
<tr>

    <td width=85%><p>El Asegurado autoriza a La Aseguradora su repone a la Central de Riesgos del Mercado de Seguros, acorde las normativas reglamentarias de la Autoridad de Fiscalizaci&oacute;n y control de Pensiones y seguros - APS. </p></td>
</tr>
</table>
<br>
<table width=90% cellspacing=0 cellpadding=0 style="font-size:9.5px; text-align: justify; text-justify: inter-word;" align="center">
<tr>

    <td width=85%><p>El Asegurado autoriza a la Aseguradora, su reporte a la central de riesgos del mercado de seguros, de acuerdo a la normativa reglamentaria de la Autoridad de Supervisi&oacute;n del Sistema Financieros (ASFI).</p></td>
</tr>
</table>
<br>
<table width=90% cellspacing=0 cellpadding=0 style="font-size:9.5px; text-align: justify; text-justify: inter-word;" align="center">
<tr>

    <td width=85%><p>Se considera aceptadas las estipulaciones de la presente p&oacute;liza, si dentro de los quince (15) d&iacute;as siguientes a su recepci&oacute;n el Asegurado no formula cualquier modificaci&oacute;n por escrito, tal como se establece el Art. 1013 del C&oacute;digo de Comercio.</p></td>
</tr>
</table>
<?php $sqldate=date('d M Y',strtotime($fila['inicio_vigencia']));
$sqldate1=date('d M Y',strtotime($fila['final_vigencia'])); ?>

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
<?php
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = $codigo.'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);?>