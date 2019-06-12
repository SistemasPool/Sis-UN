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
                  //$producto_auto = $auto['plan'];

                    $produc_auto = $con -> query("SELECT * FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
                    $pa = $produc_auto -> fetch_assoc();
                    $producto_au = $pa['plan'];

                    if($producto_au=="PRODUCTO A"){
                       $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE producto_auto='$producto_au' AND cod_cliente='$codigo'");
                        $prod_auto = $prod -> fetch_assoc();
                        $prod_auto['nombre'];
                        $prod_auto['monto'];
                    }elseif($producto_au=="PRODUCTO B"){
                         $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE producto_auto='$producto_au' AND cod_cliente='$codigo'");
                        $prod_auto = $prod -> fetch_assoc();
                        $prod_auto['nombre'];
                        $prod_auto['monto'];
                    }
                    elseif($producto_au=="PRODUCTO C"){
                        $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE producto_auto='$producto_au' AND cod_cliente='$codigo'");
                        $prod_auto = $prod -> fetch_assoc();
                        $prod_auto['nombre'];
                        $prod_auto['monto'];
                    }

                    if($producto_au=="PRODUCTO A"){
                        $porcentaje_reaseguro= 2.0838709677;
                    }elseif($producto_au=="PRODUCTO B"){
                        $porcentaje_reaseguro= 2.2483870968;
                    }
                    elseif($producto_au=="PRODUCTO C"){
                        $porcentaje_reaseguro = 2.5225806452;
                    } //echo $porcentaje_reaseguro;
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
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;">SEGURO DE AUTOMOTORES</td></tr>
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
$beneficiario = $con ->query("SELECT * FROM beneficiario_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
		          $bene = $beneficiario -> fetch_assoc();
                  $nombres = $bene['nombres'] ;
                  $paterno = $bene['paterno'] ;
                  $materno = $bene['materno'] ;
                  $completoma = $nombres." ".$paterno." ".$materno;
?>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td>Datos del Beneficiario</td>
</tr>
    <tr>
    <td width=15%>Beneficiario:</td>
    <td width=40%><?php echo $completoma; ?></td>
    <td width=15%>CI/NIT:</td>
    <td width=30%><?php echo $bene['nit_ci']; ?></td>
</tr>
    <tr>
    <td>Direcci&oacute;n:</td>
    <td style="font-size:7px;"><?php echo $bene['direccion']; ?></td>
    <td>Tel&eacute;fono:</td>
    <td><?php echo $bene['telefono_fijo']; ?></td>
</tr>
</table>
<hr width=90%>
<?php
$suma_capital = $con ->query("SELECT SUM(auto_cap_aseg) AS suma_capital FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
                    $suca= $suma_capital -> fetch_assoc();
                    $valor = $suca['suma_capital'];
$automovil = $con ->query("SELECT * FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
$contador=1;
while($automo= $automovil -> fetch_assoc()){
?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Datos del Veh&iacute;culo</td>
<td>N&uacute;mero <?php echo $contador; ?></td>
</tr>
<tr>
<td width=16%>Clase:</td>
<td width=16%><?php echo $automo['clase']; ?></td>
<td width=16%>Marca:</td>
<td width=16%><?php echo $automo['marca']; ?></td>
<td width=12%>A&ntilde;o:</td>
<td width=20%><?php echo $automo['ano']; ?></td>
</tr>
<tr>
<td>Modelo:</td>
<td><?php echo $automo['modelo']; ?></td>
<td>Plazas:</td>
<td><?php echo $automo['plazas']; ?></td>
<td>Placa:</td>
<td><?php echo $automo['placa']; ?></td>
</tr>
<tr>
<td>Uso:</td>
<td><?php echo $automo['uso']; ?></td>
<td>Tracci&oacute;n:</td>
<td><?php echo $automo['traccion']; ?></td>
<td>Distrito:</td>
<td><?php echo $automo['distrito']; ?></td>
</tr>
<tr>
<td>N&uacute;mero de Chasis:</td>
<td style="font-size:7;"><?php echo $automo['chasis']; ?></td>
<td>N&uacute;mero de Motor</td>
<td style="font-size:7;"><?php echo $automo['motor']; ?></td>
<td>Color:</td>
<td style="font-size:7;"><?php echo $automo['color']; ?></td>

</tr>
<tr>
<td><strong>Capital Asegurado:</strong></td>
<td><strong><?php echo 'USD '.number_format($automo['auto_cap_aseg'],2); ?></strong></td>
<td><strong>Prima Contado:</strong></td>
<td><strong><?php echo 'USD '.number_format($pritot=$automo['auto_cap_aseg']*$tasa_prima/100,2); ?></strong></td>
<td><strong>Prima Cr&eacute;dito:</strong></td>
<td><strong><?php echo 'USD '.number_format(($pritot*.06)+$pritot,2); ?></strong></td>
</tr>
</table>
<hr width=90%>
<?php  
    $contador++;
} ?>

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td width=55% style="font-size:10px; font-weight:bold;">Coberturas (por veh&iacute;culo)</td>
        <td width=15% style="font-size:10px; font-weight:bold;">Coberturas (Sobre valor comercial)</td>
        <td width=15% style="font-size:10px; font-weight:bold;">Suma Asegurada</td>
        <td width=15% style="font-size:10px; font-weight:bold;">Franquicia</td>
        </tr>
</table>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>RESPONSABILIDAD CIVIL</strong></td>
    </tr>
    <tr>
        <?php
        $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE cod_cotizacion='$cod_cotizacion'");
        $prod_auto = $prod -> fetch_assoc();
        $nombre_rc = $prod_auto['nombre'];
        $monto_rc = $prod_auto['monto'];
        ?>   
        <td width=55%><?php echo $nombre_rc; ?></td>
        <td width=15%></td>
        <td width=15%><?php echo 'USD '.number_format($monto_rc,2); ?></td>
        <td width=15%></td>
    </tr>
    <?php
	$sel2 = $con ->query("SELECT * FROM respon_civil_auto_pol WHERE cod_cotizacion='$cod_cotizacion'");
    while($cob_au = $sel2 -> fetch_assoc()){
    ?>   
        <tr>
        <td><?php echo $cob_au['nombre'] ?></td>
        <td></td>
        <td><?php echo 'USD '.number_format($cob_au['suma_asegurada'],2); ?></td>
        </tr>
    <?php } ?>
</table>
<?php
    $riesgo = $con ->query("SELECT * FROM riesgo_cubierto_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
    ?>
<hr width=90%>
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
<hr width=90%>
<?php
    $accid = $con ->query("SELECT * FROM acc_perso_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
    ?>
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
    $clausula = $con ->query("SELECT * FROM clau_adic_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
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
    $beneficios = $con ->query("SELECT * FROM ben_adic_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
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
		          $sewa = $con ->query("SELECT * FROM req_aseg_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($reqaeg = $sewa -> fetch_assoc()) {
     ?>   
    <tr>
    <td width=70%>
        <?php echo " -  ". $reqaeg['nombre'];  ?>
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
		          $nota = $con ->query("SELECT * FROM nota_aclar_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
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
<?php
if($producto_auto=="PRODUCTO A"){
    $porcentaje_reaseguro= 2.0838709677;
}elseif($producto_auto=="PRODUCTO B"){
    $porcentaje_reaseguro= 2.2483870968;
}
elseif($producto_auto=="PRODUCTO C"){
    $porcentaje_reaseguro = 2.5225806452;
} //echo $porcentaje_reaseguro;
?> 
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>Prima Total Contado:</strong></td>
    </tr>
        <tr>
        <td width=60%>USD $ <?php echo number_format($prima_total = $valor *$tasa_prima/100,2); ?></td>
        <td width=20%></td>
        <td width=20%></td>
        </tr>
</table>
<hr width=90%>
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
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Alcance Territorial: ESTADO PLURINACIONAL DE BOLIVIA</td>
    </tr>
</table>
<?php $sqldate=date('d M Y',strtotime($fila['inicio_vigencia']));
$sqldate1=date('d M Y',strtotime($fila['final_vigencia'])); ?>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Vigencia: 1 A&ntilde;o.</td>
    </tr>
</table> 
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Valid&eacute;z de la oferta: 15 d&iacute;as a partir de la fecha.</td>
    </tr>
</table> 
<!-- <hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">SEGURO DE EXTRATERRITORIALIDAD</td>
    </tr>
    <tr>
    <td style="font-size:8px;">PREVIO AVISO A LA COMPA&Ntilde;&Iacute;A EXCLUYENDO BENEFICIO DE AUX&Iacute;LIO MEC&Aacute;NICO, ROBO PARCIAL DE PARTES Y PIEZAS, AUTOREEMPLAZO Y SERVICIO DE GR&Uacute;A, M&Aacute;XIMO 30 D&Iacute;AS POR VIAJE.</td>
    </tr>
</table> -->
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">OBSERVACIONES</td>
    </tr>
    <tr>
    <td style="font-size:8px;">Las coberturas mencionadas como "no cubiertas", no se encuentran aseguradas en la presente p&oacute;liza.</td>
        </tr>
    <tr>
    <td style="font-size:8px;">El asegurado autoriza a la Compa&ntilde;&iacute;a de Seguros a enviar reporte a la Central de Riesgos del mercado de seguros acorde a las normativas reglamentarias de la Autoridad de Fiscalizaci&oacute;n y Control de Pensiones y Seguros - APS.</td>
    </tr>
   <!-- <tr>
    <td style="font-size:8px;">La franquicia para el veh&iacute;culo BMW X6 es de USD 250.00.</td>
    </tr> -->
</table>
<hr width=90%>
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

<hr width=90%>
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