<?php
ob_start();
?>
<style type="text/css">
<!--
.saltos{
    margin-top:-0.5px; 
    }
.salto{
    margin-top:2px; 
    }
.total{
    width:100%;
}
.caja{
border-style:solid;
border:1px;
border-color:#000;
    }
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
.midnight-blue{
	background:#2c3e50;
	padding: 4px 4px 4px;
	color:white;
	font-weight:bold;
	font-size:12px;
}
.silver{
	background:white;
	padding: 3px 4px 3px;
}
.clouds{
	background:#ecf0f1;
	padding: 3px 4px 3px;
}
.border-top{
	border-top: solid 1px #bdc3c7;
	
}
.border-left{
	border-left: solid 1px #bdc3c7;
}
.border-right{
	border-right: solid 1px #bdc3c7;
}
.border-bottom{
	border-bottom: solid 1px #bdc3c7;
}
table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
}
</style>
<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm">
    
<?php 
$con = new mysqli('localhost','root','','unibienes');
$id = $_REQUEST['id_certificado'];    

$certi = $con ->query("SELECT * FROM certi_bunion WHERE id_ceun='$id'");
		          $cer = $certi -> fetch_assoc();
                  $prestatario= utf8_encode($cer['prestatario']);

?>    
    <br>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 14px;">
        <tr>
            <td style="text-align:center;">CERTIFICADO DE COBERTURA</td>
        </tr>
        <tr>
            <td style="text-align:center;">PÒLIZA DE SEGURO DE AUTOMOTORES</td>
        </tr>
        <tr>
            <td style="width: 100%;"></td>
        </tr>
    </table>
    </div>
    <br>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 10px;">
        <tr>
            <td style="text-align:center;">Còdigo: 116-910556-2018 08 022 4001</td>
        </tr>
        <tr>
            <td style="text-align:center;">Aprobada Mediante Resoluciòn Administrativa APS/DS/No 1127/2018 del 24 de Agosto de 2018 </td>
        </tr>
        <tr>
            <td style="width: 100%;"></td>
        </tr>
    </table>
    </div>
    <br>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td width="20%"><?php echo "<strong>N&Uacute;MERO DE P&Oacute;LIZA : </strong>".$cer['nro_poliza'] ?></td>
            <td><?php echo  "<strong>N&Uacute;MERO DE CERTIFICADO : </strong>".$cer['num_cert'];?></td>
        </tr>
        <tr>
            <td style="width: 50%;"></td>
        </tr>
    </table>
    </div>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td><?php echo "<strong>PRESTARARIO : </strong>".$prestatario; ?></td>
            <td><?php echo  "<strong>CARNET : </strong>".$cer['carnet'];?></td>
        </tr>
        <tr>
            <td style="width: 80%;"><?php echo  "<strong>DIRECCI&Oacute;N : </strong>".$cer['direccion']; ?></td>
        </tr>
    </table>
    </div>
    <br>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="width: 20%;"><strong>MATERIA DEL SEGURO</strong></td>
        </tr>
        </table>
    </div>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="width: 33%;"><?php echo "<strong>MARCA : </strong>".$cer['marca']; ?></td>
            <td style="width: 33%;"><?php echo  "<strong>COLOR : </strong>".$cer['color'];?></td>
            <td style="width: 33%;"><?php echo  "<strong>PLACA : </strong>".$cer['placa'];?></td>
        </tr>
     <tr>
            <td style="width: 33%;"><?php echo "<strong>NUM. MOTOR : </strong>".$cer['motor']; ?></td>
            <td style="width: 33%;"><?php echo  "<strong>CHASIS : </strong>".$cer['chasis'];?></td>
            <td style="width: 33%;"><?php echo  "<strong>CLASE : </strong>".$cer['clase'];?></td>
        </tr>
    <tr>
        <td style="width: 33%;"><?php echo "<strong>AÑO : </strong>".$cer['ano']; ?></td>
        </tr>
    </table>
    </div>
    <hr>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="width: 20%;"><strong>LIMITES ASEGURABLES</strong></td>
        </tr>
        </table>
    </div>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="width: 20%;">Clasificaci&oacute;n I</td>
            <td style="width: 50%;">Camiones</td>
            <td style="width: 30%;">Hasta USD 130,000.00</td>
        </tr>
     <tr>
            <td style="width: 20%;">Clasificaci&oacute;n II</td>
            <td style="width: 50%;">Veh&iacute;culos Livianos Particulares</td>
            <td style="width: 30%;">Hasta USD 100,000.00</td>
        </tr>
     <tr>
            <td style="width: 20%;">Clasificaci&oacute;n III</td>
            <td style="width: 50%;">&Oacute;mnibus de Servicio P&Uacute;blico con capacidad Maxima de 50 asientos</td>
            <td style="width: 30%;">Hasta USD 130,000.00</td>
        </tr>
    <tr>
            <td style="width: 20%;">Clasificaci&oacute;n IV</td>
            <td style="width: 50%;">Veh&iacute;culos Livianos de Servicio P&Uacute;plico (Incluyendo Microbuses) </td>
            <td style="width: 30%;">Hasta USD 100,000.00</td>
        </tr>
    <tr>
            <td style="width: 20%;">Clasificaci&oacute;n V</td>
            <td style="width: 50%;">Motocicletas de cualquier tipo y de uso particular</td>
            <td style="width: 30%;">Hasta USD 30,000.00</td>
        </tr>
    </table>
    </div>
    <hr>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="width: 40%;"><strong>COBERTURAS</strong></td>
            <td style="width: 60%;"><strong>SUMA ASEGURADA</strong></td>
        </tr>
        <tr>
            <td style="width: 40%;">Responsabilidad Civil Frente a Terceros</td>
            <td style="width: 60%;">Hasta USD 30,000.00</td>
        </tr>
     <tr>
            <td style="width: 40%;">Pérdida Total por Accidente al 100%</td>
            <td style="width: 60%;">Valor Comercial Declarado por el Tomador</td>
        </tr>
     <tr>
            <td style="width: 40%;">Pérdida Total por Robo</td>
            <td style="width: 60%;">Valor Comercial Declarado por el Tomador</td>
        </tr>
    <tr>
            <td style="width: 50%;">(Al 100% Para la Clasificación II)</td>
            <td style="width: 60%;">Valor Comercial Declarado por el Tomador</td>
        </tr>
    <tr>
            <td style="width: 50%;">(Al 80% Para las otras Clasificación)</td>
            <td style="width: 60%;">Valor Comercial Declarado por el Tomador</td>
        </tr>
        <tr>
            <td style="width: 50%;">Daños Propios (con Franquicia Según Escala)</td>
            <td style="width: 60%;">Valor Comercial Declarado por el Tomador</td>
        </tr>
        <tr>
            <td style="width: 50%;">Robo Parcial al (80%) Aplicable únicamente a la Clasificación II</td>
            <td style="width: 60%;">Valor Comercial Declarado por el Tomador</td>
        </tr>
        <tr>
            <td style="width: 50%;">Riesgos de la Naturaleza</td>
            <td style="width: 60%;">Valor Comercial Declarado por el Tomador</td>
        </tr>
    </table>
    </div>
    <hr>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr><td>
            <strong>COBERTURA AUTOMATICA ADICIONAL INCLUIDA</strong></td>
        </tr>
        <tr>
            <td>Se deja expresa constancia, que la cobertura de la póliza se extiende a cubrir al conductor de cada uno de los vehículos incorporados o que se incorporen durante la vigencia en cualquiera de sus clasificaciones contra los riesgos de y hasta los límites que se detallan a continuación, mientras se hallen como conductores de los vehículos asegurados o en el acto de bajar o subir de los mismos para tal objeto cuando se encuentren detenidos.</td>
        </tr>
    </table>
    </div>
    <br>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="width: 40%;"><strong>COBERTURAS</strong></td>
            <td style="width: 60%;"><strong>SUMA ASEGURADA</strong></td>
        </tr>
        <tr>
            <td style="width: 40%;">Muerte Accidental</td>
            <td style="width: 60%;"></td>
        </tr>
     <tr>
            <td style="width: 40%;">Clasificación III y IV</td>
            <td style="width: 60%;">Hasta USD 3,000.00</td>
        </tr>
     <tr>
            <td style="width: 40%;">Clasificación II</td>
            <td style="width: 60%;">Hasta USD 5,000.00</td>
        </tr>
    <tr>
            <td style="width: 50%;">Invalidez Total y/o Parcial Permanente</td>
            <td style="width: 60%;"></td>
        </tr>
    <tr>
            <td style="width: 40%;">Clasificación III y IV</td>
            <td style="width: 60%;">Hasta USD 3,000.00</td>
        </tr>
        <tr>
             <td style="width: 40%;">Clasificación II</td>
            <td style="width: 60%;">Hasta USD 5,000.00</td>
        </tr>
        <tr>
            <td style="width: 50%;">Gastos Médicos por Accidente ( )</td>
            <td style="width: 60%;"></td>
        </tr>
        <tr>
            <td style="width: 40%;">Clasificación III y IV</td>
            <td style="width: 60%;">Hasta USD 600.00</td>
        </tr>
        <tr>
             <td style="width: 40%;">Clasificación II</td>
            <td style="width: 60%;">Hasta USD 1,000.00</td>
        </tr>
    </table>
    </div>
    <br>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
            <tr>
            <td>(*) La cobertura de Gastos Médicos y Responsabilidad Civil para estas coberturas funcionara en exceso de los valores asegurados en el SEGURO OBLIGATORIO DE ACCIDENTES DE TRANSITO (SOAT)</td>
        </tr>
    </table>
    </div>
    <hr>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="width: 40%;"><strong>FRANQUICIAS (Escala)</strong></td>
            <td style="width: 60%;"><strong></strong></td>
        </tr>
        </table>
    </div>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
    <tr>
            <td style="width: 100%;">Aplicable a las clasificaciones I y III, está establecida de acuerdo a los valores declarados y asegurados por el tomador.</td>
        </tr>
        </table>
    </div>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        
     <tr>
            <td style="width: 40%;">VALORES ASEGURADOS</td>
            <td style="width: 60%;">FRANQUICIA</td>
        </tr>
     <tr>
            <td style="width: 40%;">Hasta USD 25,000.00</td>
            <td style="width: 60%;"></td>
        </tr>
    <tr>
            <td style="width: 50%;">De USD 25,000.00 Hasta USD 50,000.00</td>
            <td style="width: 60%;">USD 250.00</td>
        </tr>
    <tr>
            <td style="width: 50%;">De USD 50,000.00 Hasta USD 130,000.00</td>
            <td style="width: 60%;">USD 500.00</td>
        </tr>
        
        </table>
    </div>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        
        <tr>
            <td style="width: 100%;">Aplicable a la secciones II,IV y V.</td>
        </tr>
         </table>
    </div>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="width: 40%;">Clasificación II</td>
            <td style="width: 60%;"></td>
        </tr>
        <tr>
            <td style="width: 40%;"></td>
            <td style="width: 60%;">Para Santa Cruz USD. 100</td>
        </tr>
        <tr>
             <td style="width: 40%;"></td>
            <td style="width: 60%;">Resto del Pais USD. 50</td>
        </tr>
        <tr>
            <td style="width: 50%;">Clasificación IV</td>
            <td style="width: 50%;">USD. 100</td>
        </tr>
        <tr>
            <td style="width: 50%;">Clasificación V</td>
            <td style="width: 50%;">USD. 50</td>
        </tr>
    </table>
    </div>
    <hr>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="text-align:center; width: 100%;">"UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A."</td>
        </tr>
    </table>
    </div>
    <div style="border-style: solid;">
    <table cellspacing="0" style="font-size: 9px;">
        <tr>
            <td style="width: 40%; text-align:center;"><img src="img/sellomauricio.jpg" width="120" height="120"></td>
            <td style="width: 60%; text-align:center;"><img src="img/sellojavier.jpg" width="100" height="120"></td>
        </tr>
    </table>
    </div>
</page>
<?php 
    $content = ob_get_clean();
    include_once("html/html2pdf.class.php");
    $pdf = new HTML2PDF('P','A4','ES','UTF-8');
    $pdf->writeHTML($content);
    //$pdf->pdf->IncludeJS('print(TRUE)');
    $pdf->output('lista.pdf');
?>