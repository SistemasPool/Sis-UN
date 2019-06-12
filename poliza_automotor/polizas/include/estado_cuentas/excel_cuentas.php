<?php
	$mysqli=new mysqli("localhost","root","","unibienes"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	//Incluimos librería y archivo de conexión
	require 'Classes/PHPExcel.php';


    $fecha_inicio = $_POST['f_inicial'];
    $fecha_final = $_POST['f_final'];
    $tipo_pago = $_POST['tipo_pago'];


    if($tipo_pago=='CONTADO'){
	//Consulta
	$sql = "SELECT * FROM automovil WHERE tipo_pago='$tipo_pago' and fechavencimiento BETWEEN '$fecha_inicio' and '$fecha_final'";
	$resultado = $mysqli->query($sql);
	$fila = 2; //Establecemos en que fila inciara a imprimir los datos
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("UNIBIENES")->setDescription("Estado de Cuentas");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Estado de Cuentas");
	
	$estiloInformacion = new PHPExcel_Style();
	
	//$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
	//$objPHPExcel->getActiveSheet()->getStyle('A6:E6')->applyFromArray($estiloTituloColumnas);
	
	//$objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE DE PRODUCTOS');
	//$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');
	
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'NÚMERO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRE DEL CLIENTE');
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('C1', 'NUMERO DE POLIZA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('D1', 'CODIGO DEL CLIENTE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('E1', 'TIPO DE PAGO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('F1', 'PRIMA TOTAL');
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('G1', 'FECHA DE VENCIMIENTO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('H1', 'ESTADO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('I1', 'FECHA DE PAGO');
	
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
	//$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TOTAL');
	
    $contador=1;
	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){
        $cod_cliente = $rows['cod_cliente'];
        $sql_cliente = "SELECT * FROM calculo_prima WHERE cod_cliente='$cod_cliente'";
        $resultado_cliente = $mysqli->query($sql_cliente);
        $ro = $resultado_cliente->fetch_assoc();
        $nombrecompleto = $ro['nombre_cliente'];
        $estado = $ro['estado'];
        
        $sql_factura = "SELECT * FROM libro_ventas WHERE cod_cliente='$cod_cliente'";
        $resultado_fac = $mysqli->query($sql_factura);
        $fa = $resultado_fac->fetch_assoc();
        
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $contador);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $nombrecompleto);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['nro_poliza']);
        $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $cod_cliente);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['tipo_pago']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['prima_total']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['fechavencimiento']);
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $estado);
        $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $fa['fecha_factura']);
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
	
	//inicializar o gráfico
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
	header('Content-Disposition: attachment;filename="Contado.xlsx"');
	header('Cache-Control: max-age=0');
	
	$writer->save('php://output');
    
    }else{
        
    
	$fila = 2; //Establecemos en que fila inciara a imprimir los datos
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("UNIBIENES")->setDescription("Estado de Cuentas");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Estado de Cuentas");
	
	$estiloInformacion = new PHPExcel_Style();
	
	//$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
	//$objPHPExcel->getActiveSheet()->getStyle('A6:E6')->applyFromArray($estiloTituloColumnas);
	
	//$objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE DE PRODUCTOS');
	//$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');
	
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'NÚMERO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRE DEL CLIENTE');
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('C1', 'NUMERO DE POLIZA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('D1', 'CODIGO DEL CLIENTE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('E1', 'TIPO DE PAGO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('F1', 'PRIMA TOTAL');
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('G1', 'FECHA DE VENCIMIENTO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('H1', 'ESTADO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('I1', 'FECHA DE PAGO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('j1', 'TIPO DE CUOTAS');
	
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
	//$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TOTAL');
	$sql = "SELECT * FROM `cuota_inicial` WHERE fecha_cuotas BETWEEN '$fecha_inicio' and '$fecha_final'";
	$resultado = $mysqli->query($sql);
    $contador=1;
	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){
        $cod_cliente = $rows['cod_cliente'];
        
        
        $sql_cliente = "SELECT * FROM calculo_prima WHERE cod_cliente='$cod_cliente'";
        $resultado_cliente = $mysqli->query($sql_cliente);
        $ro = $resultado_cliente->fetch_assoc();
        $nombrecompleto = $ro['nombre_cliente'];
        $estado = $ro['estado'];
        
        $sql_factura = "SELECT * FROM libro_ventas WHERE cod_cliente='$cod_cliente'";
        $resultado_fac = $mysqli->query($sql_factura);
        $fa = $resultado_fac->fetch_assoc();
        
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $contador);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $nombrecompleto);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['num_poliza']);
        $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $cod_cliente);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, 'CREDITO');
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['monto']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['fecha_cuotas']);
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $estado);
        $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $fa['fecha_factura']);
        $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, 'CUOTA INICIAL');
		//$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, '=C'.$fila.'*D'.$fila);
        
        $fila++; //Sumamos 1 para pasar a la siguiente fila
        $contador++;
	  
		
        
        $conta=1;
        $sql_cuotas = "SELECT * FROM cuotas WHERE cod_cliente='$cod_cliente'";
        $resultado_cuotas = $mysqli->query($sql_cuotas);
        while($rw = $resultado_cuotas->fetch_assoc()){
        $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $conta);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $nombrecompleto);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rw['num_poliza']);
        $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $cod_cliente);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, 'CREDITO');
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rw['monto']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rw['fecha_cuotas']);
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rw['estado']);
        $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $fa['fecha_factura']);
        $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, 'CUOTAS');
        $fila++; //Sumamos 1 para pasar a la siguiente fila
        $conta++;
        }
	       
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
	
	//inicializar o gráfico
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
	header('Content-Disposition: attachment;filename="Credito.xlsx"');
	header('Cache-Control: max-age=0');
	
	$writer->save('php://output');
        
    }
?>
