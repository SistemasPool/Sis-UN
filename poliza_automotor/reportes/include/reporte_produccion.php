<?php
include "conexion.php";
	$mysqli=new mysqli("localhost","root","","unibienes"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	//Incluimos librería y archivo de conexión
	require '../Classes/PHPExcel.php';

    $fecha_inicio = $_POST['inicio_produccion'];
    $fecha_final = $_POST['final_produccion'];
	//Consulta
	$sql = "SELECT * FROM n_produccion WHERE fecha_emision BETWEEN '$fecha_inicio' and '$fecha_final'";
	$resultado = $mysqli->query($sql);
	$fila = 2; //Establecemos en que fila inciara a imprimir los datos
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("UNIBIENES")->setDescription("Reporte de Producción");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Produccion");
	
	$estiloInformacion = new PHPExcel_Style();
	
	//$objPHPExcel->getActiveSheet()->getStyle('A1:E4')->applyFromArray($estiloTituloReporte);
	//$objPHPExcel->getActiveSheet()->getStyle('A6:E6')->applyFromArray($estiloTituloColumnas);
	
	//$objPHPExcel->getActiveSheet()->setCellValue('B3', 'REPORTE DE PRODUCTOS');
	//$objPHPExcel->getActiveSheet()->mergeCells('B3:D3');
	

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'CIA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRE CIA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('C1', 'CODIGO PARTE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('D1', 'OFICINA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('E1', 'COD SECTOR');
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('F1', 'COD MONEDA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('G1', 'FECHA INFORMACION');
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('H1', 'MODALIDAD');
    //NUEVOS
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('I1', 'RAMO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('J1', 'DESC RAMO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('K1', 'ASEGURADO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('L1', 'CODIGO CLIENTE');
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('M1', 'NUMERO POLIZA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('N1', 'TIPO PAGO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('O1', 'VALOR EN RIESGO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('P1', 'VALOR ASEGURADO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'TERRORISMO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('R1', 'TERREMOTO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('S1', 'TIPO ASEGURAMIENTO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('T1', 'NUM POLIZAS EMITIDAD');
    $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('U1', 'NUM POLIZAS RENOVADAS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('V1', 'NUM CERTIFICADO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('W1', 'TIPO REASEGURO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('X1', 'PRIMA COMERCIAL');
    $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('Y1', 'ITF');
    $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('Z1', 'IT');
    

    $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AA1', 'IVA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AB1', 'ABA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AC1', 'FPA');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AD1', 'APS');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AE1', 'ITF REMESAS');
	$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AF1', 'INTERMEDIARIO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AG1', 'COM INTER');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AH1', 'COM INTER FACT');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AI1', 'IUE REMESAS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AJ1', 'COM BANCARIA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AK1', 'COM COMPANIA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AL1', 'COM COBRANZA 1');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AM1', 'COM COBRANZA 2');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AN1', 'NOMB INTER');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AO1', 'PRIMA RIESGO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AP1', 'PRIMA DIRECTA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AQ1', 'PRIMA DIRECTA BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AR1', 'PRIMA RENOVADAS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AS')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AS1', 'PRIMA RENOVADAS BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AT')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AT1', 'PRIMA ACEPT COASEGURO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AU')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AU1', 'PRIMA ACEPT COASEGURO BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AV')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AV1', 'VALOR ASEGURADO ANULADO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AW')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AW1', 'NRO POL ANULADAS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AX')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AX1', 'PRIMA ANULADA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AY')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AY1', 'PRIMA ANULADA BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('AZ')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('AZ1', 'PRIMA RENOV ANU');

    $objPHPExcel->getActiveSheet()->getColumnDimension('BA')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BA1', 'PRIMA RENOV ANU BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BB')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BB1', 'PRIMA COASEG ANU');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BC')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BC1', 'NRO POLIZAS NETAS');
	$objPHPExcel->getActiveSheet()->getColumnDimension('BD')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BD1', 'VALOR ASEGURADO CEDIDO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('BE')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BE1', 'VALOR ASEGURADO CEDIDO ANU');
	$objPHPExcel->getActiveSheet()->getColumnDimension('BF')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BF1', 'PRIMA NETA DIRECTA');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BG')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BG1', 'PRIMA NETA DIRECTA BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BH')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BH1', 'PRIMA NETA ACEP REASEG NAL');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BI')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BI1', 'PRIMA NETA ASCEP REASEG NAL BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BJ')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BJ1', 'PRIMA ACEP ANU REASEG NAL');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BK')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BK1', 'PRIMA ACEP ANU REASEG NAL BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BL')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BL1', 'PRIMA ACEP REASEG EXT');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BM')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BM1', 'PRIMA ACEP REASEG EXT BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BN')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BN1', 'PRIMA ANU ACEP REASEG EXT');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BO')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BO1', 'PRIMA ANU ACEP REASEG EXT BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BP')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BP1', 'PRIMA CEDIDA REASEGURO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BQ')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BQ1', 'PRIMA CEDIDA REASEGURO BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BR')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BR1', 'COM REASEGURO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BS')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BS1', 'COM REASEGURO ANU');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BT')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BT1', 'ANU PRIMA CEDIDA REASEG');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BU')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BU1', 'ANU PRIMA CEDIDA REASEG BS');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BV')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BV1', 'DISTRITO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BW')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BW1', 'F REGISTRO');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BX')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BX1', '');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BY')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BY1', '');
    $objPHPExcel->getActiveSheet()->getColumnDimension('BZ')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('BZ1', '');
    $objPHPExcel->getActiveSheet()->getColumnDimension('CA')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('CA1', '');
    $objPHPExcel->getActiveSheet()->getColumnDimension('CB')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('CB1', '');
	//$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
	//$objPHPExcel->getActiveSheet()->setCellValue('E6', 'TOTAL');
	

	//Recorremos los resultados de la consulta y loAs imprimimos
	while($rows = $resultado->fetch_assoc()){
		
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['cia']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['nombre_cia']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['cod_parte']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['oficina']);
        $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, utf8_encode($rows['cod_sector']));
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['cod_moneda']);
        $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $rows['fecha_informacion']);
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $rows['modalidad']);
        $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $rows['ramo']);
        //NUEVOS
        $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $rows['desc_ramo']);
        $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $rows['asegurado']);
        
        $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $rows['cod_cliente']);
        $objPHPExcel->getActiveSheet()->setCellValue('M'.$fila, $rows['cod_poliza']);
        $objPHPExcel->getActiveSheet()->setCellValue('N'.$fila, $rows['tipo_pago']);
        $objPHPExcel->getActiveSheet()->setCellValue('O'.$fila, $rows['valor_en_riesgo']);
        $objPHPExcel->getActiveSheet()->setCellValue('P'.$fila, $rows['valor_asegurado']);
        $objPHPExcel->getActiveSheet()->setCellValue('Q'.$fila, $rows['terrorismo_riesgo']);
        $objPHPExcel->getActiveSheet()->setCellValue('R'.$fila, $rows['terremoto']);
        $objPHPExcel->getActiveSheet()->setCellValue('S'.$fila, $rows['tipo_aseguramiento']);
        $objPHPExcel->getActiveSheet()->setCellValue('T'.$fila, $rows['nro_polizas_emitidas']);
        $objPHPExcel->getActiveSheet()->setCellValue('U'.$fila, $rows['nro_polizas_renovadas']);
        $objPHPExcel->getActiveSheet()->setCellValue('V'.$fila, $rows['nro_certificado']);
        $objPHPExcel->getActiveSheet()->setCellValue('W'.$fila, $rows['tipo_de_reaseguro']);
        $objPHPExcel->getActiveSheet()->setCellValue('X'.$fila, $rows['prima_comercial']);
        $objPHPExcel->getActiveSheet()->setCellValue('Y'.$fila, $rows['itf']);
        $objPHPExcel->getActiveSheet()->setCellValue('Z'.$fila, $rows['it']);
        
        $objPHPExcel->getActiveSheet()->setCellValue('AA'.$fila, $rows['iva']);
        $objPHPExcel->getActiveSheet()->setCellValue('AB'.$fila, $rows['aba']);
        $objPHPExcel->getActiveSheet()->setCellValue('AC'.$fila, $rows['fpa']);
		$objPHPExcel->getActiveSheet()->setCellValue('AD'.$fila, $rows['aps']);
		$objPHPExcel->getActiveSheet()->setCellValue('AE'.$fila, $rows['itf_remesas']);
		$objPHPExcel->getActiveSheet()->setCellValue('AF'.$fila, utf8_encode($rows['nom_intermediario']));
        $objPHPExcel->getActiveSheet()->setCellValue('AG'.$fila, $rows['com_inter']);
		$objPHPExcel->getActiveSheet()->setCellValue('AH'.$fila, $rows['com_fac_inter']);
        $objPHPExcel->getActiveSheet()->setCellValue('AI'.$fila, $rows['iue_remesas']);
        $objPHPExcel->getActiveSheet()->setCellValue('AJ'.$fila, $rows['com_bancaria']);
        $objPHPExcel->getActiveSheet()->setCellValue('AK'.$fila, $rows['com_compania']);
        $objPHPExcel->getActiveSheet()->setCellValue('AL'.$fila, $rows['com_cobranza_uno']);
        $objPHPExcel->getActiveSheet()->setCellValue('AM'.$fila, $rows['com_cobranza_dos']);
        $objPHPExcel->getActiveSheet()->setCellValue('AN'.$fila, $rows['nombre_inter']);
        $objPHPExcel->getActiveSheet()->setCellValue('AO'.$fila, $rows['prima_riesgo']);
        $objPHPExcel->getActiveSheet()->setCellValue('AP'.$fila, $rows['prima_directa']);
        $objPHPExcel->getActiveSheet()->setCellValue('AQ'.$fila, $rows['prima_directa_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('AR'.$fila, $rows['prima_renovadas']);
        $objPHPExcel->getActiveSheet()->setCellValue('AS'.$fila, $rows['prima_renovadas_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('AT'.$fila, $rows['prima_acep_coaseguro']);
        $objPHPExcel->getActiveSheet()->setCellValue('AU'.$fila, $rows['prima_acep_coaseguro_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('AV'.$fila, $rows['valor_aseg_anulado']);
        $objPHPExcel->getActiveSheet()->setCellValue('AW'.$fila, $rows['nro_pol_anuladas']);
        $objPHPExcel->getActiveSheet()->setCellValue('AX'.$fila, $rows['prima_anulada']);
        $objPHPExcel->getActiveSheet()->setCellValue('AY'.$fila, $rows['prima_anulada_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('AZ'.$fila, $rows['prima_renov_anu']);
        
        $objPHPExcel->getActiveSheet()->setCellValue('BA'.$fila, $rows['prima_renov_anu_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('BB'.$fila, $rows['prima_coaseg_anu']);
        $objPHPExcel->getActiveSheet()->setCellValue('BC'.$fila, $rows['nro_polizas_netas']);
		$objPHPExcel->getActiveSheet()->setCellValue('BD'.$fila, $rows['valor_aseg_cedido']);
		$objPHPExcel->getActiveSheet()->setCellValue('BE'.$fila, $rows['valor_aseg_cedido_anu']);
		$objPHPExcel->getActiveSheet()->setCellValue('BF'.$fila, $rows['prima_neta_directa']);
        $objPHPExcel->getActiveSheet()->setCellValue('BG'.$fila, $rows['prima_neta_directa_bs']);
		$objPHPExcel->getActiveSheet()->setCellValue('BH'.$fila, $rows['prima_acep_reaseg_nal']);
        $objPHPExcel->getActiveSheet()->setCellValue('BI'.$fila, $rows['prima_acep_reaseg_nal_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('BJ'.$fila, $rows['pri_acep_anu_reaseg_nal']);
        $objPHPExcel->getActiveSheet()->setCellValue('BK'.$fila, $rows['pri_acep_anu_reaseg_nal_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('BL'.$fila, $rows['pri_acep_reaseg_ext']);
        $objPHPExcel->getActiveSheet()->setCellValue('BM'.$fila, $rows['pri_acep_reaseg_ext_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('BN'.$fila, $rows['pri_acep_anu_reaseg_ext']);
        $objPHPExcel->getActiveSheet()->setCellValue('BO'.$fila, $rows['pri_acep_anu_reaseg_ext_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('BP'.$fila, $rows['pri_cedidas_reaseg']);
        $objPHPExcel->getActiveSheet()->setCellValue('BQ'.$fila, $rows['pri_cedidas_reaseg_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('BR'.$fila, $rows['comi_reaseg']);
        $objPHPExcel->getActiveSheet()->setCellValue('BS'.$fila, $rows['comi_reaseg_anu']);
        $objPHPExcel->getActiveSheet()->setCellValue('BT'.$fila, $rows['anu_primas_cedidas_reaseg']);
        $objPHPExcel->getActiveSheet()->setCellValue('BU'.$fila, $rows['anu_primas_cedidas_reaseg_bs']);
        $objPHPExcel->getActiveSheet()->setCellValue('BV'.$fila, $rows['distrito']);
        $objPHPExcel->getActiveSheet()->setCellValue('BW'.$fila, $rows['f_registro']);
        
        $objPHPExcel->getActiveSheet()->setCellValue('BX'.$fila, $rows['']);
        $objPHPExcel->getActiveSheet()->setCellValue('BY'.$fila, $rows['']);
        $objPHPExcel->getActiveSheet()->setCellValue('BZ'.$fila, $rows['']);
        $objPHPExcel->getActiveSheet()->setCellValue('CA'.$fila, $rows['']);
        $objPHPExcel->getActiveSheet()->setCellValue('CB'.$fila, $rows['']);
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

