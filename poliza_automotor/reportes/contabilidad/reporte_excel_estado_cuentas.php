<?php
$tipo_pago = $_POST['tipo_pago'];

if($tipo_pago=='CONTADO'){
    

	$mysqli=new mysqli("localhost","root","","unibienes"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	//Incluimos librería y archivo de conexión
	require '../Classes/PHPExcel.php';

    
	//Consulta
	$sql = "SELECT SUM(prima_total) as prima_contado,nro_poliza,cod_cliente,nro_factura,estado FROM calculo_prima WHERE tipo_pago='$tipo_pago' group by nro_poliza";
    $resultado = $mysqli->query($sql);
    
	$fila = 4; //Establecemos en que fila inciara a imprimir los datos
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("UNIBIENES")->setDescription("Estado de Cuentas");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Primas al Contado");
	
	$estiloInformacion = new PHPExcel_Style();
	
	//$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
	//$objPHPExcel->getActiveSheet()->getStyle('A6:E6')->applyFromArray($estiloTituloColumnas);
	
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'REPORTE DE PRIMAS AL CONTADO');
	$objPHPExcel->getActiveSheet()->mergeCells('A1:H1');
	
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('A3', 'Num Póliza');
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('B3', 'Cod Cliente');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('C3', 'Prima Total');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('D3', 'Num Factura');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('E3', 'Estado');
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
    $objPHPExcel->getActiveSheet()->setCellValue('F3', 'Vencimiento');
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
    $objPHPExcel->getActiveSheet()->setCellValue('G3', 'Tipo Póliza');
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
    $objPHPExcel->getActiveSheet()->setCellValue('H3', 'Dias en Mora');
	
	
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
	//$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TOTAL');
	
    $contador=1;
	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){
        $poliza = $rows['nro_poliza'];
        $sql1 = "SELECT `fechavencimiento`, `estado` FROM `automovil` WHERE `nro_poliza`='$poliza'";
	    $resulta = $mysqli->query($sql1);
        $row = $resulta->fetch_assoc();

		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['nro_poliza']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['cod_cliente']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['prima_contado']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['nro_factura']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['estado']);
        $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['fechavencimiento']);
        $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['estado']);
        if($rows['estado']=='NO PAGADO'){
        $hoy = date("Y-m-d");
        $fecha = $row['fechavencimiento'];
            
        $consul = "SELECT TIMESTAMPDIFF(DAY, '$fecha', '$hoy') AS dias FROM `automovil` WHERE `nro_poliza`='$poliza'";
        $resu = $mysqli->query($consul);
        $ro = $resu->fetch_assoc();
        if($ro['dias']>1){
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $ro['dias']);
        }
        }
		
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
	header('Content-Disposition: attachment;filename="Contado.xlsx"');
	header('Cache-Control: max-age=0');
	
	$writer->save('php://output');
    
    }elseif($tipo_pago=='CREDITO INICIAL'){
        

	$mysqli=new mysqli("localhost","root","","unibienes"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	//Incluimos librería y archivo de conexión
	require '../Classes/PHPExcel.php';
 
	//Consulta
	$sql = "SELECT SUM(monto) as monto_inicial, num_poliza,cod_cliente,nro_factura,estado,fecha_cuotas FROM cuota_inicial group by num_poliza";
    $resultado = $mysqli->query($sql);
    
	$fila = 4; //Establecemos en que fila inciara a imprimir los datos
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("UNIBIENES")->setDescription("Estado de Cuentas");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Pagos Cuota Inicial");
	
	$estiloInformacion = new PHPExcel_Style();
	
	//$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
	//$objPHPExcel->getActiveSheet()->getStyle('A6:E6')->applyFromArray($estiloTituloColumnas);
	
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'REPORTE DE CUOTAS INICIALES');
	$objPHPExcel->getActiveSheet()->mergeCells('A1:H1');
	
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('A3', 'Num Póliza');
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('B3', 'Cod Cliente');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('C3', 'Prima Total');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('D3', 'Num Factura');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('E3', 'Estado');
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
    $objPHPExcel->getActiveSheet()->setCellValue('F3', 'Vencimiento');
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
    $objPHPExcel->getActiveSheet()->setCellValue('G3', 'Tipo Póliza');
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
    $objPHPExcel->getActiveSheet()->setCellValue('H3', 'Dias en Mora');
	
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
	//$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TOTAL');
	
    $contador=1;
	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){
        $poliza = $rows['num_poliza'];
        
        $sql1 = "SELECT `estado` FROM `automovil` WHERE `nro_poliza`='$poliza'";
	    $resulta = $mysqli->query($sql1);
        $row = $resulta->fetch_assoc();
        
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['num_poliza']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['cod_cliente']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['monto_inicial']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['nro_factura']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['estado']);
        $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['fecha_cuotas']);
        $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['estado']);
		if($rows['estado']=='NO PAGADO'){
        $hoy = date("Y-m-d");
        $fecha = $rows['fecha_cuotas'];
            
        $consul = "SELECT TIMESTAMPDIFF(DAY, '$fecha', '$hoy') AS dias FROM cuota_inicial WHERE num_poliza='$poliza'";
        $resu = $mysqli->query($consul);
        $ro = $resu->fetch_assoc();
        if($ro['dias']>1){
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $ro['dias']);
        }
        }
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
	header('Content-Disposition: attachment;filename="Credito Cuota Inicial.xlsx"');
	header('Cache-Control: max-age=0');
	
	$writer->save('php://output');
}
    elseif($tipo_pago=='CREDITO CUOTAS'){
        

	$mysqli=new mysqli("localhost","root","","unibienes"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	//Incluimos librería y archivo de conexión
	require '../Classes/PHPExcel.php';

	//Consulta
	$sql = "SELECT SUM(monto) as monto_cuotas,num_poliza,cod_cliente,nro_factura,estado,fecha_cuotas FROM cuotas group by fecha_cuotas order by num_poliza, fecha_cuotas";
    $resultado = $mysqli->query($sql);
    
	$fila = 4; //Establecemos en que fila inciara a imprimir los datos
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("UNIBIENES")->setDescription("Estado de Cuentas");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Pagos En Cuotas");
	
	$estiloInformacion = new PHPExcel_Style();
	
	//$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
	//$objPHPExcel->getActiveSheet()->getStyle('A6:E6')->applyFromArray($estiloTituloColumnas);
	
	//$objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE DE PRODUCTOS');
	//$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');
    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'REPORTE DE CUOTAS A CREDITO');
	$objPHPExcel->getActiveSheet()->mergeCells('A1:H1');
	
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('A3', 'Num Póliza');
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('B3', 'Cod Cliente');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('C3', 'Prima Total');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('D3', 'Num Factura');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('E3', 'Estado');
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
    $objPHPExcel->getActiveSheet()->setCellValue('F3', 'Vencimiento');
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
    $objPHPExcel->getActiveSheet()->setCellValue('G3', 'Tipo Póliza');
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
    $objPHPExcel->getActiveSheet()->setCellValue('H3', 'Dias en Mora');
	
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
	//$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TOTAL');
	
    $contador=1;
	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){
        $poliza = $rows['num_poliza'];
        
        $sql1 = "SELECT `estado` FROM `automovil` WHERE `nro_poliza`='$poliza'";
	    $resulta = $mysqli->query($sql1);
        $row = $resulta->fetch_assoc();
        
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['num_poliza']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['cod_cliente']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['monto_cuotas']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['nro_factura']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['estado']);
        $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['fecha_cuotas']);
        $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['estado']);
		if($rows['estado']=='NO PAGADO'){
        $hoy = date("Y-m-d");
        $fecha = $rows['fecha_cuotas'];
            
        $consul = "SELECT TIMESTAMPDIFF(DAY, '$fecha', '$hoy') AS dias FROM cuotas WHERE num_poliza='$poliza'";
        $resu = $mysqli->query($consul);
        $ro = $resu->fetch_assoc();
        if($ro['dias']>1){
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $ro['dias']);
        }
        }
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
	header('Content-Disposition: attachment;filename="Credito Cuotas.xlsx"');
	header('Cache-Control: max-age=0');
	
	$writer->save('php://output');
}
?>
