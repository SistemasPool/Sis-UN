<?php
    require('tcpdf/fpdf.php');
    $num_siniestro = $_REQUEST['num_siniestro'];
    class PDF extends FPDF
    {
    //Pie de página
    function Footer()
    {
    $this->SetY(-10);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }
    //Creación del objeto de la clase heredada
    $pdf=new PDF();
    //$pdf = new PDF(PDF_PAGE_ORIENTATION, PDF_UNIT, $pagelayout, true, 'UTF-8', false);
    $pdf->AddPage();
    $pdf->SetFont('Times','',10);
    #Establecemos los márgenes izquierda, arriba y derecha:
    $pdf->SetMargins(30, 25 , 30);

    #Establecemos el margen inferior:
    $pdf->SetAutoPageBreak(true,25);  
    //Aquí escribimos lo que deseamos mostrar
    mysql_connect("localhost","root","");
    mysql_select_db("unibienes");
    mysql_query("SET NAMES 'utf8'");

    $pdf->Image('img/logo_small.jpg',15,12,33);
    $pdf->Ln(20);
    $pdf->Cell(60,5,utf8_decode('DATOS DEL SINIESTRO'),0,0,'C');
    $consulta = mysql_query("SELECT * FROM siniestros WHERE num_siniestro='$num_siniestro'");
    $resultado = mysql_fetch_array($consulta);
    $pdf->Ln(20);
    $pdf->Cell(70,5,utf8_decode('Número de Siniestro:'),0,0,'R');
    $pdf->Cell(70,5,utf8_decode($resultado['num_siniestro']),0,0,'L');
    $pdf->Ln(3);
    //$pdf->Cell(0,0,'___________________________________________________',0,0,'C');
    $pdf->Ln(20);
    $pdf->Cell(60,5,'Asegurado',0,0,'L');
    $pdf->Cell(60,5,utf8_decode($resultado['asegurado']),0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    $pdf->Ln(10);
    $pdf->Cell(60,5,utf8_decode('Número de Póliza'),0,0,'L');
    $pdf->Cell(60,5,utf8_decode($resultado['num_poliza']),0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    $pdf->Ln(10);
    $pdf->Cell(60,5,utf8_decode('Datos del Vehículo'),0,0,'L');
    $pdf->Ln(5);
    $pdf->Cell(40,5,utf8_decode('Placa'),0,0,'L');
    $pdf->Cell(40,5,utf8_decode('Marca'),0,0,'L');
    $pdf->Cell(40,5,utf8_decode('Clase'),0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(40,5,$resultado['placa_sin'],0,0,'L');
    $pdf->Cell(40,5,$resultado['marca'],0,0,'L');
    $pdf->Cell(40,5,$resultado['clase'],0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    $pdf->Ln(20);
    $pdf->Cell(60,5,utf8_decode('Fecha de Siniestro'),0,0,'L');
    $pdf->Cell(60,5,utf8_decode($resultado['fecha_siniestro']),0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    $pdf->Ln(10);
    $pdf->Cell(60,5,utf8_decode('Fecha de Denuncia'),0,0,'L');
    $pdf->Cell(60,5,utf8_decode($resultado['fecha_denuncia']),0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    
    $pdf->Ln(10);
    $pdf->Cell(60,5,utf8_decode('Coberturas'),0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    //$consu = mysql_query("SELECT * FROM coberturas_siniestros WHERE num_siniestro='$num_siniestro'");
    //while($resul = mysql_fetch_array($consu)){
    $pdf->Ln(5);
    $pdf->Cell(30,5,'',0,0,'L');
    $pdf->Cell(60,5,utf8_decode($resultado['cobertura_aplicar']),0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    //}
    $pdf->Ln(10);
    $pdf->Cell(60,5,utf8_decode('Inspector'),0,0,'L');
    $pdf->Cell(60,5,utf8_decode($resultado['insperctor']),0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    $pdf->Ln(10);
    $pdf->Cell(60,5,utf8_decode('Fecha de Registro'),0,0,'L');
    $pdf->Cell(60,5,utf8_decode($resultado['fecha_registro']),0,0,'L');
    $pdf->Ln(3);
    $pdf->Cell(0,0,'_______________________________________________________________________________________',0,0,'C');
    $pdf->Output();
     
    ?>