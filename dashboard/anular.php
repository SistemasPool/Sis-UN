<?php
$con = new mysqli('localhost','root','','unibienes');
$con->query("SET NAMES 'utf8'");
$num_factura = $_POST['num_fac'];
$autorizacion = $_POST['autorizacion'];

$up = $con -> query("UPDATE `libro_ventas` SET `estado`='A',`ci_nit`='0',`nombre_razon`='ANULADA',`importe_venta`=0, `sub_total`=0,`imp_deb_fiscal`=0,`debito_fiscal`=0 WHERE num_factura='$num_factura' and autorizacion='$autorizacion'");
if ($up) {
	echo "<script>
     alert('Factura número ha sido anulada');
	location.href='index.php';
	</script>";
}else{
	echo "<script>
    alert('Datos erroneos');
	location.href='index.php';
	</script>";
}
?>