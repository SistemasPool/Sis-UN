<?php ob_start(); ?>

                  <?php
                  $codigo = $_REQUEST['codigo'];
                  $nro_poliza = $_REQUEST['nro_poliza'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes where cod_cliente='$codigo' and nro_poliza='$nro_poliza'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'] ;
                  $paterno = $fila['paterno'] ;
                  $materno = $fila['materno'] ;
                  $tipo_pago = $fila['tipo_pago'] ; 
                  $completo = $nombres." ".$paterno." ".$materno;
		          ?>
  <style>
    @page { margin: 45px 20px; }
  </style>
<br><br>
<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;">SEGURO DE AUTOMOTORES - GRUPAL</td></tr>
    <tr><td style="font-size:10px; text-align:center;">CONDICIONES PARTICULARES</td></tr>
    <tr><td style="font-size:10px; text-align:center;">APROBADO MEDIANTE RESOLUCION ADMINISTRATIVA APS/DS/No 165/2018</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&oacute;digo de Autorizaci&oacute;n: 116-910551-2018 02 002</td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>N&uacute;mero de P&oacute;liza: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Datos del Cliente</td>
</tr>
<tr>
<td width=15%>Asegurado:</td>
<td width=35%><?php echo $completo; ?></td>
<td width=15%>C&oacute;digo del Cliente</td>
<td width=35%><?php echo $fila['cod_cliente']; ?></td>
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
<td><?php echo $fila['email']; ?></td>
</tr>
<tr>
<td width=15%>Direcci&oacute;n:</td>
<td width=35%><?php echo $fila['direccion']; ?></td>
</tr>
</table>
<hr width=90%>
<?php
                  $codigo = $_REQUEST['codigo'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $se = $con ->query("SELECT * FROM automovil where cod_cliente='$codigo' and nro_poliza='$nro_poliza'");
		          while($auto = $se -> fetch_assoc()) {
                  $clase = $auto['clase'];
                  $marca = $auto['marca'];
                  $ano = $auto['ano'];
                  $modelo = $auto['modelo'];
                  $plazas = $auto['plazas'];
                  $placa = $auto['placa'];
                  $uso = $auto['uso'];
                  $traccion = $auto['traccion'];
                  $distrito = $auto['distrito'];
                  $chasis = $auto['chasis'];
                  $motor = $auto['motor'];
                  $auto_cap_aseg = $auto['auto_cap_aseg'];
                  $prima_total = $auto['prima_total'];
		          ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Datos del Veh&iacute;culo</td>
</tr>
<tr>
<td>Clase:</td>
<td><?php echo $clase; ?></td>
<td>Marca:</td>
<td><?php echo $marca; ?></td>
<td>A&ntilde;o:</td>
<td><?php echo $ano; ?></td>
</tr>
<tr>
<td>Modelo:</td>
<td><?php echo $modelo; ?></td>
<td>Plazas:</td>
<td><?php echo $plazas; ?></td>
<td>Placa:</td>
<td><?php echo $placa; ?></td>
</tr>
<tr>
<td>Uso:</td>
<td><?php echo $uso; ?></td>
<td>Tracci&oacute;n:</td>
<td><?php echo $traccion; ?></td>
<td>Distrito:</td>
<td><?php echo $distrito; ?></td>
</tr>
<tr>
<td>N&uacute;mero de Chasis:</td>
<td><?php echo $chasis; ?></td>
<td>N&uacute;mero de Motor</td>
<td><?php echo $motor; ?></td>
<td>Capital Asegurado:</td>
<td><?php echo '$ '.number_format($auto_cap_aseg); ?></td>
</tr>
<tr>
<td>Prima Total:</td>
<td><?php echo '$ '.number_format($prima_total); ?></td>
</tr>
</table>
<hr width=90%>
<?php } ?>
    <?php
    $civil = $con ->query("SELECT * FROM respon_civil_auto_pol where cod_cliente='$codigo' and num_poliza='$nro_poliza'");
    ?>

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>

    <tr>
        <td width=55% style="font-size:10px; font-weight:bold;">Coberturas (Por Aut&oacute;movil)</td>
        <td width=15% style="font-size:10px; font-weight:bold;">Coberturas (Sobre valor comercial)</td>
        <td width=15% style="font-size:10px; font-weight:bold;">Suma Asegurada</td>
        <td width=15% style="font-size:10px; font-weight:bold;">Franquicia</td>

        </tr>
    <tr>
        <td><strong>RESPONSABILIDAD CIVIL</strong></td>
    </tr>
    <?php
	while ($ci = $civil -> fetch_assoc()) {
    ?>   
        <tr>
        <td><?php echo $ci['nombre'] ?></td>
        <td></td>
        <td><?php echo '$ '.number_format($ci['suma_asegurada']); ?></td>
        </tr>
    <?php } ?>
</table>

 <?php
    $riesgo = $con ->query("SELECT * FROM riesgo_cubierto_au_pol where cod_cliente='$codigo' and num_poliza='$nro_poliza'");
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
<hr width=90%>
<?php
    $accid = $con ->query("SELECT * FROM acc_perso_au_pol where cod_cliente='$codigo' and num_poliza='$nro_poliza'");
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
        <td width=15%><?php echo '$ '.number_format($ac['suma_asegurada']);?></td>
        </tr>
    <?php } ?>
</table>
<hr width=90%>
<?php
    $clausula = $con ->query("SELECT * FROM clau_adic_au_pol where cod_cliente='$codigo' and num_poliza='$nro_poliza'");
    ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>CLAUSULAS ADICIONALES</strong></td>
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
    $beneficios = $con ->query("SELECT * FROM ben_adic_au_pol where cod_cliente='$codigo' and num_poliza='$nro_poliza'");
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
    <td style="font-weight:bold;">REQUSITOS DE ASEGURABILIDAD</td>
    </tr>
    
    <?php
		          $sewa = $con ->query("SELECT * FROM req_aseg_au_pol where cod_cliente='$codigo' and num_poliza='$nro_poliza'");
		          while ($reqaeg = $sewa -> fetch_assoc()) {
     ?>   
    <tr>
    <td width=70%>
        <?php echo $reqaeg['nombre'];  ?>
        </td>
    </tr>
    <?php } ?>
</table> 

<hr width=90%>

            <?php

            $capital_asegurado = $con->query("SELECT SUM(auto_cap_aseg) as suma_capital FROM automovil where cod_cliente='$codigo' and nro_poliza='$nro_poliza'");
            $scapital = $capital_asegurado -> fetch_assoc();
            $sucap = $scapital['suma_capital'];

        if($tipo_pago=='CONTADO'){
            ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>Prima Total Contado</strong></td>
    </tr>
        <tr>
        <td width=60%><?php echo "$ ".$prima_total = number_format($sucap *.0212);?></td>
        <td width=20%></td>
        <td width=20%></td>
        </tr>
</table>
 <?php  } else { ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr><?php $prima_total = ($auto_cap_aseg *.0212);?>
        <td><strong>Cr&eacute;dito: USD $ <?php echo $credito = ($prima_total *.06+($prima_total)); ?></strong></td>
    </tr>
        <tr>
        <td width=20%><?php echo "Cuota n&uacute;mero 1: USD $ ".number_format($primera = $credito*.3,2); ?></td> 
        <td width=20%><?php echo date("d-m-Y", strtotime('1 month')); ?></td>
        <td width=20%></td>
        </tr>
    
        
            <?php
                $cuotas= $credito*.7;
                $cuota = 5;
                $contador = 2;
                for($ii = 1; $ii <= $cuota; $ii++)
                     {
                        $mes    =    date('m', strtotime('1 month'))    +    $ii;
                        if( $mes    <=    9    ) 
                        {
                            $vencimiento    =    date('d-')    .    '0'    .    $mes    .date('-Y');
                        }elseif(    $mes    ==    13    )
                        {
                            $vencimiento    =    date('d-')    .    '01'    .date('-Y');
                        }else{
                            $vencimiento    =    date('d-')    .    $mes    .date('-Y');
                        }
                    echo "<tr>";
                    echo "<td>";
                    echo "Cuota n&uacute;mero ".$contador++.": USD $  ".number_format($cuotas/5,2);
                    echo "</td>";
                    echo "<td>";
                    echo $vencimiento;
                    echo "</td>";
                    echo "<td>";
                    echo "</td>";
                    echo "</tr>";
                                           // echo "<br>";
                }
                ?>
           
</table>
<?php  } ?>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Alcance Territorial: ESTADO PLURINACIONAL DE BOLIVIA</td>
    </tr>
</table>
<hr width=90%>
<?php $sqldate=date('d M Y',strtotime($fila['inicio_vigencia']));
$sqldate1=date('d M Y',strtotime($fila['final_vigencia'])); ?>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Vigencia: </td>
    </tr>
    <tr>
    <td>Inicio:  Desde las 12:01 p.m. del <?php echo $sqldate; ?></td>
    </tr>
    <tr>
    <td>Termino: Hasta las 12:00 p.m. del <?php echo $sqldate1; ?></td>
    </tr>
</table> 
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">SEGURO DE EXTRATERRITORIALIDAD</td>
    </tr>
    <tr>
    <td style="font-size:8px;">PREVIO AVISO A LA COMPA&Ntilde;IA EXCLUYENDO BENEFICIO DE AUXILIO MEC&Aacute;NICO, ROBO PARCIAL DE PARTES Y PIEZAS, AUTOREEMPLAZO Y SERVICIO DE GR&Uacute;A, MAXIMO 30 DIAS POR VIAJE.</td>
    </tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">OBSERVACIONES</td>
    </tr>
    <tr>
    <td style="font-size:8px;">Las coberturas mencionadas como "no cubiertas", no se encuentran aseguradas en la presente P&oacute;liza.</td>
    </tr>
    <tr>
    <td style="font-size:8px;">El Asegurado autoriza a la Compa&ntilde;ia de Seguros a enviar reporte a la Central de Riesgos del mercado de seguros acorde a las normativas reglamentarias de la Autoridad de Fiscalizaci&oacute;n Pensiones y Seguros.</td>
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
<br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Lugar y Fecha:</td>
    </tr>
    <tr>
    <td>La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
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