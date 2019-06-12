<?php include 'clientes/include/conexion.php';

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$nit_ci = $_POST['nit_ci'];
$direccion = $_POST['direccion'];
$telefono_fijo = $_POST['telefono_fijo'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$nitf_cif = $_POST['nitf_cif'];
$pagador = $_POST['pagador'];


$cod_cotizacion = 'COAU00000017';
//$cod_cot = 'COAU00000017';
//$produc_auto = $con -> query("SELECT count(cod_cotizacion) as cant_cod FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
//$pa = $produc_auto -> fetch_assoc();
//$producto_au = $pa['cant_cod'];

//$c = count($producto_au);
//if ($c > 0) {
//for ($i=0; $i<$c; $i++) {
$upauto = $con -> query("UPDATE automovil SET nro_poliza='AULP00000004', cod_cliente='CUB00000004' WHERE cod_cotizacion='$cod_cotizacion'");
//$up = $con -> query("UPDATE automovil_cotizacion SET cod_cotizacion='$cod_cot' WHERE cod_cotizacion='$cod_cotizacion'");
//$query=mysql_query("update aulas_profesores set notas='$nota' WHERE matricula='$matri' ",$link);
//}}

//INSERT INTO tabla1 SELECT *FROM tabla2 WHERE condicion;

//$up = $con -> query("INSERT INTO clienteS_tomador SELECT * FROM clientes_tomador_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");

//$upauto = $con -> query("UPDATE automovil SET nro_poliza='AULP00000003' WHERE cod_cliente='CUB00000004'");
//$upcli = $con -> query("UPDATE clientes SET nro_poliza='AULP00000003' WHERE cod_cliente='CUB00000004'");



?>
