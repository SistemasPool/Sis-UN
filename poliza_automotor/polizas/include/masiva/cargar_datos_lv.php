<?php
$con = new mysqli('localhost','root','','masiva');
$con->query("SET NAMES 'utf8'");

                  
                  $sel = $con ->query("SELECT * FROM clientes");
                  $contador = 1;
		          while ($fila = $sel -> fetch_assoc()) {
                  require_once('codcontrol/CodigoControlV7.php');
                  
                  $fecha_factura = date("Y-m-d");
                  $fecha = date("d/m/Y");
                  $s_distrito = 'LA PAZ';
                  $pagador = $fila['nombre_completo'];  
                  $documento = $fila['carnet'];
                  $monto_compra = $fila['monto'];
                  $estado = 'V';
                  $numero_autorizacion = '428401800014765';
                  $numero_factura = $contador;
                  $fecha_compra = '20180913';
                  //$monto_compra = '8';
                  $imp_fiscal = $monto_compra*.13;
                  $concepto = 'PAGO TARJETA DE DEBITO';
                  $clave = 'RjMmHg#z\BdG(5a[2==WeU4-E5-3#SdQRNAuAYIi[6b%qJBp\yK=rMQn%\wjMm4)';
                  
            $codigo_control = CodigoControlV7::generar($numero_autorizacion, $numero_factura, $documento, $fecha_compra, $monto_compra, $clave); 
            
                      
           $insertar = $con -> query("INSERT INTO `libro_ventas`(`id_lv`, `fecha_factura`, `fecha`, `num_factura`, `idnum`, `autorizacion`, `estado`, `ci_nit`, `nombre_razon`, `importe_venta`, `importe_tasas`, `exp_oper_ext`, `ventas_grav`, `sub_total`, `desc_bon`, `imp_deb_fiscal`, `debito_fiscal`, `codigo_control`, `concepto`, `num_poliza`, `cod_cliente`, `f_registro`, `distrito`) VALUES ('','$fecha_factura','$facha','$contador','$contador','$numero_autorizacion','$estado','$documento','$pagador','$monto_compra','0','0','0','$monto_compra','0','$monto_compra','$imp_fiscal','$codigo_control','$concepto','','','$fecha_factura','$s_distrito')"); 
           $contador++;
           }

?>