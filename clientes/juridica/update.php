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
$abreviado = $_POST['abreviado'];
$act_economica = $_POST['act_economica'];
$actividad_eco = $_POST['actividad_eco'];
$num_doc = $_POST['num_doc'];
$matricula = $_POST['matricula'];
$constitucion = $_POST['constitucion'];
$nom_representante = $_POST['nom_representante'];
$ap_representante = $_POST['ap_representante'];
$nom_seguros = $_POST['nom_seguros'];
$cargo_seguros = $_POST['cargo_seguros'];
$tipo_persona = $_POST['tipo_persona'];
$capital = $_POST['capital'];
$pais = $_POST['pais'];
$departamento = $_POST['departamento'];
$ciudades = $_POST['ciudades'];
$zona = $_POST['zona'];
$direccion = $_POST['direccion'];
$telefono_fijo = $_POST['telefono_fijo'];
$pagina = $_POST['pagina'];
$email = $_POST['email'];
$tipo_referecia = $_POST['tipo_referecia'];
$nom_referencia = $_POST['nom_referencia'];
$tel_refer = $_POST['tel_refer'];

$up = $con -> query("UPDATE clientes SET nombres='$nombres',abreviado='$abreviado',act_economica='$act_economica',caedec='$actividad_eco',nit_ci='$num_doc', matricula
='$matricula',constitucion='$constitucion',nom_representante='$nom_representante',ap_representante='$ap_representante',nom_seguros='$nom_seguros',cargo_seguros='$cargo_seguros',tipo_persona='$tipo_persona',capital='$capital',pais_residencia='$pais',telefono_fijo='$telefono_fijo',email='$email',nitf_cif='$num_doc',zona='$zona',ciudad='$ciudades',referencia_cat='$tipo_referecia',referencia_nombre='$nom_referencia',referencia_telefono='$tel_refer',direccion='$direccion',pagina='$pagina' WHERE id_cliente='$id'");

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