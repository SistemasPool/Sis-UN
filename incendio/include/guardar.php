<?php
include "../../verificar_sesion.php";
include 'conexion.php';
echo "hola";
	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];
$cod_cliente = $_POST['cod_cliente'];
$nombres = $_POST['nombres'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$ap_casada = $_POST['ap_casada'];
$tipo_doc = $_POST['tipo_doc'];
$num_doc = $_POST['num_doc'];
$ext_ci = $_POST['ext_ci'];
$genero = $_POST['genero'];
$fecha_nac = $_POST['fecha_nac'];
$distrito = $_SESSION["distrito"];


////////$ins = $con -> query("INSERT INTO `clientes`(`id_cliente`, `nro_poliza`, `prima_contado`, `fecha_vencimiento_pago`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`, `ap_casada`, `fecha_nacimiento`, `nacionalidad`, `pais_residencia`, `ext_ci`, `tipo_documento`, `nit_natural`, `estado_civil`, `nombre_conyuge`, `ciudad`, `direccion_comercial`, `profesion`, `act_economica`, `caedec`, `lugar_trabajo`, `telefono_trabajo`, `cargo`, `ingresos`, `fecha_ingreso_laboral`, `referencia_cat`, `referencia_nombre`, `referencia_telefono`, `pep`, `genero`, `cargo_pep`, `res_usa`, `tipo_trabajo`) VALUES ('','','','','$cod_cliente','$ids','$idau','$nombres','$paterno','$materno','','$direccion','$num_doc','$telefono_fijo','$celular','$email','$num_doc','$paterno','','','','$fecha_registro','$distrito','$zona','$ap_casada','$fecha_nac','$nacionalidad','$pais','$ext_ci','$tipo_doc','$nit_natural','$estado_civil','$conyuge','$ciudades','$dir_laboral','$profesiones','$act_economica', '$actividad_eco', '$lugar_trabajo', '$tel_trabajo', '$cargo', '$sueldo', '$f_ingreso', '$tipo_referecia', '$nom_referencia', '$tel_refer', '$pep','$genero','$cargo_pep','$residencia_usa', '$tipo_trabajo')");


$usuario = $_SESSION["usuario"];
$accion = 'Registro Cliente'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

/////$ins = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");
///if ($ins) {
///	header('Location: ../index.php');
///}else{
///	echo "Registro no almacenado";
///}

 ?>