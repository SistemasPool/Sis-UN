<?php
	$mysqli=new mysqli("localhost","root","","unibienes"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	//Incluimos librería y archivo de conexión
	require '../Classes/PHPExcel.php';

    $fecha_inicio = $_POST['f_inicial'];
    $fecha_final = $_POST['f_final'];
	//Consulta
	$sql = "SELECT * FROM libro_ventas WHERE f_registro BETWEEN '$fecha_inicio' and '$fecha_final'";
	$resultado = $mysqli->query($sql);
	$fila = 2; //Establecemos en que fila inciara a imprimir los datos
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("UNIBIENES")->setDescription("Libro de Ventas");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Contabilidad");
	
	$estiloInformacion = new PHPExcel_Style();
	
	//$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
	//$objPHPExcel->getActiveSheet()->getStyle('A6:E6')->applyFromArray($estiloTituloColumnas);
	
	//$objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE DE PRODUCTOS');
	//$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');
	
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ESPECIFICACION');
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NUMERO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('C1', 'FECHA DE FACTURA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('D1', 'NUMERO DE FACTURA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('E1', 'AUTORIZACION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('F1', 'ESTADO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('G1', 'CI NIT');
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('H1', 'NOMBRE RAZON');
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('I1', 'IMPORTE VENTA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
	$objPHPExcel->getActiveSheet()->setCellValue('J1', 'IMPORTE TASAS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(15);
	$objPHPExcel->getActiveSheet()->setCellValue('K1', 'EXP OPER EXT');
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
	$objPHPExcel->getActiveSheet()->setCellValue('L1', 'VENTAS GRAV');
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(15);
	$objPHPExcel->getActiveSheet()->setCellValue('M1', 'SUB TOTAL');
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
	$objPHPExcel->getActiveSheet()->setCellValue('N1', 'DESC BON');
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(15);
	$objPHPExcel->getActiveSheet()->setCellValue('O1', 'DESC BON');
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('P1', 'IMP DEBITO FISCAL');
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'CODIGO CONTROL');
	
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
	//$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TOTAL');
	
    $contador=1;
	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, '3');
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $contador);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['fecha']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['num_factura']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['autorizacion']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['estado']);
        $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['ci_nit']);
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, utf8_encode($rows['nombre_razon']));
        $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['importe_venta']);
        $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['importe_tasas']);
        $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $rows['exp_oper_ext']);
        $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $rows['ventas_grav']);
        $objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $rows['sub_total']);
        $objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, $rows['desc_bon']);
        $objPHPExcel->getActiveSheet()->setCellValue('O'.$fila, $rows['imp_deb_fiscal']);
        $objPHPExcel->getActiveSheet()->setCellValue('P'.$fila, $rows['debito_fiscal']);
        $objPHPExcel->getActiveSheet()->setCellValue('Q'.$fila, $rows['codigo_control']);
		//$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, '=C'.$fila.'*D'.$fila);
		
		$fila++; //Sumamos 1 para pasar a la siguiente fila
        $contador++;
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
	header('Content-Disposition: attachment;filename="Libro de Ventas.xlsx"');
	header('Cache-Control: max-age=0');
	
	$writer->save('php://output');
?>
