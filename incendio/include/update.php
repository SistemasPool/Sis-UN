<?php 
include '../../verificar_sesion.php';
include 'conexion.php';

	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$ap_casada = $_POST['ap_casada'];
$tipo_doc = $_POST['tipo_doc'];
$num_doc = $_POST['num_doc'];
$ext_ci = $_POST['ext_ci'];
$genero = $_POST['genero'];
$fecha_nac = $_POST['fecha_nac'];
$nacionalidad = $_POST['nacionalidad'];
$estado_civil = $_POST['estado_civil'];
$conyuge = $_POST['conyuge'];
$pais = $_POST['pais'];
$departamento = $_POST['departamento'];
$ciudades = $_POST['ciudades'];
$zona = $_POST['zona'];
$direccion = $_POST['direccion'];
$telefono_fijo = $_POST['telefono_fijo'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$tipo_trabajo = $_POST['tipo_trabajo'];
$profesiones = $_POST['profesiones'];
$act_economica = $_POST['act_economica'];
$actividad_eco = $_POST['actividad_eco'];
$lugar_trabajo = $_POST['lugar_trabajo'];
$dir_laboral = $_POST['dir_laboral'];
$tel_trabajo = $_POST['tel_trabajo'];
$cargo = $_POST['cargo'];
$f_ingreso = $_POST['f_ingreso'];
$sueldo = $_POST['sueldo'];
$nit_natural = $_POST['nit_natural'];
$tipo_referecia = $_POST['tipo_referecia'];
$nom_referencia = $_POST['nom_referencia'];
$tel_refer = $_POST['tel_refer'];
$pep = $_POST['pep'];
$cargo_pep = $_POST['cargo_pep'];
$residencia_usa = $_POST['residencia_usa'];

$up = $con -> query("UPDATE `clientes` SET `nombres`='$nombres',`paterno`='$paterno',`materno`='$materno',`direccion`='$direccion',`nit_ci`='$num_doc',`telefono_fijo`='$telefono_fijo',`celular`='$celular',`email`='$email',`nitf_cif`='$num_doc',`pagador`='$paterno',`distrito`='$departamento',`zona`='$zona',`ap_casada`='$ap_casada',`fecha_nacimiento`='$fecha_nac',`nacionalidad`='$nacionalidad',`pais_residencia`='$pais',`ext_ci`='$ext_ci',`tipo_documento`='$tipo_doc',`nit_natural`='$nit_natural',`estado_civil`='$estado_civil',`nombre_conyuge`='$conyuge',`ciudad`='$ciudades',`direccion_comercial`='$dir_laboral',`profesion`='$profesiones',`act_economica`='$act_economica',`caedec`='$actividad_eco',`lugar_trabajo`='$lugar_trabajo',`telefono_trabajo`='$tel_trabajo',`cargo`='$cargo',`ingresos`='$sueldo',`fecha_ingreso_laboral`='$f_ingreso',`referencia_cat`='$tipo_referecia',`referencia_nombre`='$nom_referencia',`referencia_telefono`='$tel_refer',`pep`='$pep',`genero`='$genero',`cargo_pep`='$cargo_pep',`res_usa`='$residencia_usa',`tipo_trabajo`='$lugar_trabajo' WHERE id_cliente='$id'");

$usuario = $_SESSION["usuario"];
$accion = 'Actualiza Cliente'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");
$cod_cliente = $_POST['cod_cliente'];

$ins_log = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");

if ($up) {
	echo "<script>
	location.href='../index.php';
	</script>";
}else{
	echo "<script>
	location.href='actualizar.php?id=".$id."';
	</script>";
}

 ?>