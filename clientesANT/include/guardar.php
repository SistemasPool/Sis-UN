<?php
include "../../verificar_sesion.php";
include 'conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];
$cod_cliente = $_POST['cod_cliente'];
// $nro_poliza = $_POST['nro_poliza'];
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
$zona = $_POST['zona'];
$tipo_pago = $_POST['tipo_pago'];
$fecha_registro = $_POST['fecha_registro'];
$inicio_vigencia= $_POST['inicio_vigencia'];
$final_vigencia = strtotime ( '+1 year' , strtotime ( $inicio_vigencia ) ) ;
$final_vigencia = date ( 'Y-m-j' , $final_vigencia );
$ids = $_POST['ids'];
$idau = $_POST['idau'];
$distrito = $_SESSION["distrito"];

$ins = $con -> query("INSERT INTO clientes (id_cliente, nro_poliza, cod_cliente, idnumero, idnum, nombres, paterno, materno, direccion, nit_ci, telefono_fijo, celular, email, nitf_cif, pagador, tipo_pago, inicio_vigencia, final_vigencia, fecha_registro, distrito, zona) VALUES ('', '', '$cod_cliente','$ids', '$idau', '$nombres','$paterno','$materno','$direccion','$nit_ci', '$telefono_fijo', '$celular', '$email', '$nitf_cif', '$pagador','$tipo_pago', '$inicio_vigencia', '$final_vigencia', '$fecha_registro', '$distrito', '$zona')");

$usuario = $_SESSION["usuario"];
$accion = 'Registro Cliente'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins_log = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");
if ($ins) {
	header('Location: ../index.php');
}else{
	echo "Registro no almacenado";
}

 ?>