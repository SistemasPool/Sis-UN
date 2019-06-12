<?php
$con = new mysqli('localhost','root','','unibienes');
$con->query("SET NAMES 'utf8'");
$num_poliza = $_POST['num_poliza'];
$cod_cliente = $_POST['cod_cliente'];
$prima = $_POST['prima'];
$cuota = $_POST['cuota'];

$up = $con -> query("UPDATE `automovil` SET `prima_total`='$prima' WHERE nro_poliza='$num_poliza' and cod_cliente='$cod_cliente'");
$cp = $con -> query("UPDATE `calculo_prima` SET `prima_total`='$prima' WHERE nro_poliza='$num_poliza' and cod_cliente='$cod_cliente'");
$ci = $con -> query("UPDATE `cuota_inicial` SET `monto`='$cuota' WHERE num_poliza='$num_poliza' and cod_cliente='$cod_cliente'");

if ($up) {
	echo "<script>
     alert('La Modificacion ha sido realizada');
	location.href='index.php';
	</script>";
}else{
	echo "<script>
    alert('Datos erroneos, favor de verificar');
	location.href='index.php';
	</script>";
}
?>