<?php
include 'conexion.php';

 $num_siniestro = $_POST['num_siniestro'];
 $select = $con ->query("SELECT * FROM siniestros WHERE num_siniestro='$num_siniestro'");
 $fila = $select -> fetch_assoc();
 $reserva = $fila['monto_reserva'];
 
 $tipo_cambio = 6.96;
 $importe = $_POST['importe_factura'];

 $moneda = $_POST['moneda'];
if($moneda = 'BS'){
    $importe = $importe / $tipo_cambio;
}else{
    $importe = $_POST['importe_factura'];
}
$importe;

if($reserva < $importe){
      echo'<script type="text/javascript">
      alert("El importe de reserva es mayor.");
      history.go(-1);
     </script>';
 }
else{
    $sele = $con ->query("SELECT MAX(id_op) as id_ordpago FROM orden_pago");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['id_ordpago']+1;
$prefijo = 'OP';

if($ids<=10){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);
}


$num_orden_pago = $prefijo.str_pad($ids, 7, "0", STR_PAD_LEFT);

$cod_cliente = $_POST['cod_cliente'];
$nro_poliza = $_POST['num_poliza'];
$asegurado = $_POST['asegurado'];
$receptor = $_POST['receptor'];
$nit_receptor = $_POST['nit_receptor'];
$concepto = $_POST['concepto'];
$importe = $_POST['importe'];
$retencion = $_POST['retencion'];
$pago_total = $_POST['pago_total'];
$cobertura = $_POST['cobertura'];
$indemnizacion = $_POST['indemnizacion'];
$importedls = $importe / $tipo_cambio;
$retenciondls = $retencion / $tipo_cambio;
$pago_totaldls = $pago_total / $tipo_cambio;
$doc_descargo = $_POST['descargo'];
$indemni = $_POST['indem_si_no'];
$f_registro = date("Y-m-d");
$user = $_POST['user'];
$ramo = 'AUTOMOTORES';

//datos factura
$num_factura = $_POST['num_factura'];
$cod_factura = $_POST['cod_factura'];
$autorizacion = $_POST['autorizacion'];
$nit_factura = $_POST['nit_factura'];
$importe_factura = $_POST['importe_factura'];
$fecha_factura = $_POST['fecha_factura'];

$ins = $con -> query("INSERT INTO `orden_pago`(`id_orden_pago`, `id_op`, `num_orden`, `num_siniestro`, `num_poliza`, `num_cliente`, `asegurado`, `ramo`, `user_reclamo`, `receptor`, `nit_receptor`, `concepto`, `importe_bs`, `retencion_bs`, `pago_total_bs`, `importe_dls`, `retencion_dls`, `pago_total_dls`, `cobertura_afectada`, `f_registro`, `f_indemnizacion`, `doc_descargo`, `indemnizacion`) VALUES ('', '$ids', '$num_orden_pago', '$num_siniestro', '$nro_poliza', '$cod_cliente', '$asegurado', '$ramo', '$user', '$receptor', '$nit_receptor', '$concepto', '$importe' , '$retencion', '$importe', '$importedls', '$retenciondls', '$importedls', '$cobertura', '$f_registro', '$indemnizacion', '$doc_descargo', '$indemni')");

$insert = $con -> query("INSERT INTO `factura_opago`(`id_fac_opago`, `num_orden_pago`, `num_factura`, `codigo_factura`, `autorizacion_factura`, `nit_factura`, `importe_factura`, `fecha_factura`, `f_registro`) VALUES ('' , '$num_orden_pago', '$num_factura', '$cod_factura', '$autorizacion', '$nit_factura', '$importe_factura', '$fecha_factura', '$f_registro')");

if ($ins) {
     header('Location: ../ver_orden_pago.php');
}else{
	echo "Registro no almacenado";
}
    
//}
}
?>
