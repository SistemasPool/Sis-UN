<?php
include "conexion.php";
$id = mysqli_real_escape_string($con,  $_POST['id']);
$estado_pago = mysqli_real_escape_string($con,  $_POST['estado_pago']);
$cod_cliente = $_POST['cod_cliente'];
$num_poliza = $_POST['num_poliza'];
$tipo_pago = $_POST['tipo_pago'];
$nro_factura = $_POST['nro_factura'];

$up = $con -> query("UPDATE calculo_prima SET estado='$estado_pago', nro_factura='$nro_factura' WHERE id_calculo_prima='$id'");
if ($up) {
	echo "<script>
	location.href='estado_cuenta.php?cod_cliente=".$cod_cliente."&nro_poliza=".$num_poliza."&tipo_pago=".$tipo_pago."';
	</script>";
    
}else{
	echo "<script>
	location.href='index.php?id=".$id."';
	</script>";
}
?>