<?php
include "conexion.php";
	$mysqli=new mysqli("localhost","root","","unibienes"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	//Incluimos librería y archivo de conexión
	require '../Classes/PHPExcel.php';

    $fecha_inicio = $_POST['inicio_siniestro'];
    $fecha_final = $_POST['final_siniestro'];
	//Consulta
	$sql = "SELECT * FROM siniestros WHERE fecha_registro BETWEEN '$fecha_inicio' and '$fecha_final'";
	$resultado = $mysqli->query($sql);

	$fila = 2; //Establecemos en que fila inciara a imprimir los datos
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("UNIBIENES")->setDescription("Reporte de Siniestros");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Siniestros");
	
	$estiloInformacion = new PHPExcel_Style();
	
	//$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
	//$objPHPExcel->getActiveSheet()->getStyle('A6:E6')->applyFromArray($estiloTituloColumnas);
	
	//$objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE DE PRODUCTOS');
	//$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');
	

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'NUM. SINIESTRO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('B1', 'ASEGURADO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('C1', 'FECHA DE SINIESTRO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('D1', 'FECHA DE DENUNCIA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('E1', 'RAMO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('F1', 'NUM. POLIZA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('G1', 'VALOR ASEGURADO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('H1', 'MARCA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('I1', 'PLACA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('J1', 'RESUMEN');
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('K1', 'COBERTURA A APLICAR');
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('L1', 'MONTO DE RESERVA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('M1', 'MONTO PAGADO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('N1', 'ESTADO');
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
	//$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TOTAL');
	

	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){
        $num_poliza = $rows['num_poliza'];
        $num_siniestro = $rows['num_siniestro'];
		$auto = "SELECT * FROM automovil WHERE nro_poliza='$num_poliza'";
	    $res_auto = $mysqli->query($auto);
        $row = $res_auto->fetch_assoc();
        $sin= "SELECT * FROM `circun_siniestro` where num_siniestro='$num_siniestro'";
	    $res_sin = $mysqli->query($sin);
        $row_sin = $res_sin->fetch_assoc();
         
        ///$valor_asegurado = $row['auto_cap_aseg'];
        
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['num_siniestro']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['asegurado']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['fecha_siniestro']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['fecha_denuncia']);
        $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, 'AUTOMOTOR');
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['num_poliza']);
        $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['auto_cap_aseg']);
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $row['marca']);
        $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $row['placa']);
        $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, utf8_encode($row_sin['narracion_hecho']));
        $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, utf8_encode($rows['cobertura_aplicar']));
        $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $rows['monto_reserva']);
        $objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $rows['monto_pagado']);
        $objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, $rows['estado']);
		//$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, '=C'.$fila.'*D'.$fila);
		
		$fila++; //Sumamos 1 para pasar a la siguiente fila
	}
	
	$fila = $fila-1;
	
	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A7:E".$fila);
	
	$filaGrafica = $fila+2;
	
	// definir origen de los valores
	$values = new PHPExcel_Chart_DataSeriesValues('Number', 'Productos!$D$7:$D$'.$fila);
	
	// definir origen de los rotulos
	//$categories = new PHPExcel_Chart_DataSeriesValues('String', 'Productos!$B$7:$B$'.$fila);
	
	// definir  gráfico
	$series = new PHPExcel_Chart_DataSeries(
	PHPExcel_Chart_DataSeries::TYPE_BARCHART, // tipo de gráfico
	PHPExcel_Chart_DataSeries::GROUPING_CLUSTERED,
	array(0),
	array(),
	array($categories), // rótulos das columnas
	array($values) // valores
	);
	$series->setPlotDirection(PHPExcel_Chart_DataSeries::DIRECTION_COL);
	
	// inicializar gráfico
	$layout = new PHPExcel_Chart_Layout();
	$plotarea = new PHPExcel_Chart_PlotArea($layout, array($series));
	
	// inicializar o gráfico
	//$chart = new PHPExcel_Chart('exemplo', null, null, $plotarea);
	
	// definir título do gráfico
	//$title = new PHPExcel_Chart_Title(null, $layout);
	//$title->setCaption('Gráfico PHPExcel Chart Class');
	
	// definir posiciondo gráfico y título
	//$chart->setTopLeftPosition('B'.$filaGrafica);
	//$filaFinal = $filaGrafica + 10;
	//$chart->setBottomRightPosition('E'.$filaFinal);
	//$chart->setTitle($title);
	
	// adicionar o gráfico à folha
	//$objPHPExcel->getActiveSheet()->addChart($chart);
	
	$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	
	// incluir gráfico
	$writer->setIncludeCharts(TRUE);
	
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="Reporte de Produccion.xlsx"');
	header('Cache-Control: max-age=0');
	
	$writer->save('php://output');
?>

