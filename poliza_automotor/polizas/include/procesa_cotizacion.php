<?php
include "../../../verificar_sesion.php";
include 'conexion.php';

$cod_cotizacion = $_REQUEST['cod_cotizacion'];
//$cod_cotizacion = $_POST['carnet'];
//$codigo = $_REQUEST['carnet'];
 
 $cod_cliente = $_POST['cod_cliente'];    
 $nombres = $_POST['nombres'];
 $paterno = $_POST['paterno'];
 $materno = $_POST['materno'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono_fijo'];
 $nit_ci = $_POST['nit_ci'];
 $clase = $_POST['clase'];
 $ano = $_POST['ano'];
 $marca = $_POST['marca'];
 $pasajeros = $_POST['pasajeros'];
 $modelo = $_POST['modelo'];
 $valor_por_auto = $_POST['valor'];
 $placa = $_POST['placa'];
 $producto_auto = $_POST['producto_auto'];
 $intermediario= $_POST['intermediario'];
 $s_distrito = $_SESSION["distrito"];
 //$tasa_prima = $_POST["prima_cobrar"];
 $prima_cobrar = $_POST["prima_cobrar"];

 $tasa_prima =  $prima_cobrar/$valor_por_auto*100;
 $tasa_prima = number_format($tasa_prima,2);
 
 $plaza = $_POST["plaza"];

$connect = mysqli_connect("localhost", "root", "", "unibienes");
$con->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM clientes_cotizacion where cod_cotizacion='$cod_cotizacion'";  
$result = mysqli_query($connect, $sql);
$rows = mysqli_num_rows($result);
if($rows != 0)  
{  

     
}
elseif($s_distrito=='LA PAZ') 
{
    
$cod_cot = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idcliente']+1;
$prefijo='COAULP';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}}
elseif($s_distrito=='SANTA CRUZ') 
{
    
$cod_cot = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idcliente']+1;
$prefijo = 'COAUSC';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}}
elseif($s_distrito=='COCHABAMBA') 
{
    
$cod_cot = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idcliente']+1;
$prefijo = 'COAUCB';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}}
elseif($s_distrito=='POTOSI') 
{
    
$cod_cot = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idcliente']+1;
$prefijo = 'COAUPT';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}}

elseif($s_distrito=='SUCRE') 
{
    
$cod_cot = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idcliente']+1;
$prefijo = 'COAUCH';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}}

elseif($s_distrito=='TARIJA') 
{
    
$cod_cot = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idcliente']+1;
$prefijo = 'COAUTA';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}}

elseif($s_distrito=='BENI') 
{
    
$cod_cot = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idcliente']+1;
$prefijo = 'COAUBE';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}}

elseif($s_distrito=='PANDO') 
{
    
$cod_cot = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idcliente']+1;
$prefijo = 'COAUPD';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}}

elseif($s_distrito=='ORURO') 
{
    
$cod_cot = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes_cotizacion WHERE distrito='$s_distrito'");
		          $codigo_cot = $cod_cot -> fetch_assoc();
                  $ids= $codigo_cot['idcliente']+1;
$prefijo = 'COAUOR';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}}

$cod_cotizacion = $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);

$ins = $con -> query("INSERT INTO clientes_cotizacion(id_cliente, nro_poliza, cod_cliente, cod_cotizacion, idnumero, nombres, paterno, materno, imagen, direccion, distrito ,nit_ci, telefono_fijo, celular, email, nitf_cif, pagador) 
VALUES ('', '', '$cod_cliente', '$cod_cotizacion', '$ids', '$nombres', '$paterno', '$materno', '', '$direccion', '$s_distrito', '$nit_ci', '$telefono', '', '', '', '')");

$ins_tom_cot = $con -> query("INSERT INTO clientes_tomador_cotizacion(id_cliente_tomador, nro_poliza, cod_cliente, cod_cotizacion, idnumero, idnum, nombres, paterno, materno, direccion, distrito, nit_ci, telefono_fijo, celular, email, nitf_cif)VALUES('','','$cod_cliente', '$cod_cotizacion', '', '', '$nombres', '$paterno', '$materno', '$direccion', '$s_distrito', '$nit_ci', '$telefono', '', '', '')");

$ins_benef_cot = $con -> query("INSERT INTO beneficiario_cotizacion(id_cliente, nro_poliza, cod_cliente, cod_cotizacion, idnumero, nombres, paterno, materno, direccion, distrito,  nit_ci, telefono_fijo, celular, email, nitf_cif)VALUES('','','$cod_cliente', '$cod_cotizacion', '', '$nombres', '$paterno', '$materno', '$direccion', '$s_distrito', '$nit_ci', '$telefono', '', '', '')");

$prima_total = $prima_cobrar;
    
//$valor_por_auto*$tasa_prima/100;

$prima_credi = $prima_total*.06;
$prima_credito = $prima_credi+$prima_total;
    
$hoy = date("Y-m-d");    
$certificado = 'CE00000001';
$id_ce = 1;

$inserta = $con -> query("INSERT INTO automovil_cotizacion (id_automovil, cod_cliente, cod_cotizacion, nro_poliza, certificado, id_ce, clase, placa, ano, marca,color, modelo, traccion, uso, distrito, plazas, chasis, motor, auto_cap_aseg, plan, intermediario, tasa_prima, prima_total, prima_credito, plaza, f_registro) VALUES ('', '$cod_cliente', '$cod_cotizacion', '', '$certificado', '$id_ce', '$clase', '$placa', '$ano', '$marca','', '$modelo', '', '', '$s_distrito', '$pasajeros', '', '', '$valor_por_auto', '$producto_auto', '$intermediario', '$tasa_prima', '$prima_total', '$prima_credito','$plaza','$hoy')");

$inserta_accidentes = $con -> query("INSERT INTO acc_perso_au_pol (nombre, cubre, suma_asegurada, cod_cliente, num_poliza, cod_cotizacion) SELECT acc_perso_au.nombre, acc_perso_au.cubre, acc_perso_au.suma_asegurada, '$cod_cliente', '', '$cod_cotizacion' FROM acc_perso_au");

$produc_auto_monto = $con -> query("SELECT * FROM producto_automotores WHERE producto_auto='$producto_auto'");
$pamonto = $produc_auto_monto -> fetch_assoc();
$producto_auto_monto = $pamonto['monto'];
    
$inserta_rc = $con -> query("INSERT INTO producto_automotores_pol(nombre, monto, producto_auto, cod_cotizacion, cod_cliente, nro_poliza) SELECT producto_automotores.nombre, '$producto_auto_monto', '$producto_auto', '$cod_cotizacion', '', '' FROM producto_automotores");

$inserta_beneficios = $con -> query("INSERT INTO ben_adic_au_pol (nombre, suma_asegurada, cubre, cod_cliente, num_poliza, cod_cotizacion) SELECT ben_adic_au.nombre, ben_adic_au.suma_asegurada, ben_adic_au.cubre, '$cod_cliente', '', '$cod_cotizacion' FROM ben_adic_au");

$inserta_clau_adic = $con -> query("INSERT INTO clau_adic_au_pol (nombre, cubre, cod_cliente, num_poliza, cod_cotizacion) SELECT clau_adic_au.nombre, clau_adic_au.cubre, '$cod_cliente', '', '$cod_cotizacion' FROM clau_adic_au");

$inserta_nota_acla = $con -> query("INSERT INTO nota_aclar_au_pol(nombre, cod_cliente, num_poliza, cod_cotizacion) SELECT nota_aclar_au.nombre, '$cod_cliente', '', '$cod_cotizacion'  FROM nota_aclar_au");

$inserta_requerimiento = $con -> query("INSERT INTO req_aseg_au_pol(nombre, cod_cliente, num_poliza, cod_cotizacion) SELECT req_aseg_au.nombre, '$cod_cliente', '', '$cod_cotizacion'  FROM req_aseg_au");

$inserta_civil= $con -> query("INSERT INTO respon_civil_auto_pol(nombre, suma_asegurada, cod_cliente, num_poliza, estado, cod_cotizacion) SELECT respon_civil_auto.nombre, respon_civil_auto.suma_asegurada, '$cod_cliente', '', 'CUBRE', '$cod_cotizacion' FROM respon_civil_auto");

$inserta_riesgo = $con -> query("INSERT INTO riesgo_cubierto_au_pol(nombre, porcentaje, cod_cliente, num_poliza, franquicia, cod_cotizacion) SELECT riesgo_cubierto_au.nombre, riesgo_cubierto_au.porcentaje, '$cod_cliente', '', riesgo_cubierto_au.franquicia, '$cod_cotizacion' FROM  riesgo_cubierto_au");

if ($inserta_riesgo) {
	header('Location: ../../cotizaciones/index.php');
    echo '<script language="javascript">alert("El Número de Cotización es: '.$cod_cotizacion.'");</script>'; 
}else{
	echo "Registro no almacenado";
}

?>