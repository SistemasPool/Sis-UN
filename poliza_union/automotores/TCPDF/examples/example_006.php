<?php 
	require_once('../tcpdf.php');
    $id=$_REQUEST['id'];
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

	$pdf->SetCreator(PDF_CREATOR);
	//$pdf->SetAuthor('Miguel Caro');
	$pdf->SetTitle($_POST['reporte_name']);

	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Times', '', 8);
	$pdf->addPage();

    //Aquí escribimos lo que deseamos mostrar
    mysql_connect("localhost","root","");
    mysql_select_db("unibienes");
    mysql_query("SET NAMES 'utf8'");

    $consulta = mysql_query("SELECT * FROM automotores_bu WHERE id_automotores='$id'");
    $resultado = mysql_fetch_array($consulta);
    $html='<table align="center">
        <tr>
          <td style="font-size:9px;"><strong>PÓLIZA DE SEGURO DE AUTOMOTORES</strong></td>
        </tr>
        <tr>
          <td style="font-size:9px;"><strong>CONDICIONES PARTICULARES</strong></td>
        </tr>
        <tr>
          <td style="font-size:9px;"><strong>CÓDIGO:</strong></td>
        </tr>
        <tr>
          <td style="font-size:9px;"><strong>Aprobado por Resolución Administrativa APS/DS/No:</strong></td>
        </tr>
        <tr>
          <td><strong>Número de Póliza :'.$resultado['nro_poliza'].'</strong></td>
        </tr>
        </table>';
    $pdf->WriteHTML($html);
    $poliza = $resultado['asegurados'];
    $pdf->Ln(3);

	$content = '<p align="justify">'.$poliza.'</p>';
    
	$pdf->writeHTML($content, true, 0, true, 0);
    date_default_timezone_set("America/La_Paz");
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $firmas ='
    <table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Lugar y Fecha:</td>
    </tr>
    <tr>
    <!-- <td>La Paz, 18 de Abril de 2018</td> -->
     <td>La Paz, '.$dias=date('d').' de '.$meses[date('n')-1].' de '.date('Y').' </td> 
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
    </table>';
    $pdf->WriteHTML($firmas);
	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
?>