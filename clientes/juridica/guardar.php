<?php
include "../../verificar_sesion.php";
include 'conexion.php';

if(isset($_POST['guardar_cliente'])){
$num_doc = $_POST['num_doc'];

$sq = "SELECT * FROM clientes where nit_ci=='$num_doc'";  
$resul = mysqli_query($con, $sq);
$ro = mysqli_num_rows($resul);
if($ro != 0)
{  
echo'<script type="text/javascript">
        alert("El Número de Carnet ya esta registrado, por favor usar otro número.");
        window.history.back(1);
        </script>';
}
else 
{
$s_distrito = $_SESSION["distrito"];
if($s_distrito=='LA PAZ'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBLP';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='SANTA CRUZ'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBSC';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='COCHABAMBA'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBCB';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='SUCRE'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBCH';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
      elseif($s_distrito=='POTOSI'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBPT';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='TARIJA'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBTA';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='PANDO'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBPD';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='BENI'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBBE';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='ORURO'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBOR';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];
$cod_cliente = $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
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
$fecha_registro = $_POST['fecha_registro'];
//$ids = $_POST['ids'];
//$idau = $_POST['idau'];
$distrito = $_SESSION["distrito"];


$insertar = $con -> query("INSERT INTO `clientes`(`id_cliente`, `nro_poliza`, `prima_contado`, `fecha_vencimiento_pago`, `cod_cliente`, `idnumero`, `idnum`, `nombres`, `paterno`, `materno`, `imagen`, `direccion`, `nit_ci`, `telefono_fijo`, `celular`, `email`, `nitf_cif`, `pagador`, `tipo_pago`, `inicio_vigencia`, `final_vigencia`, `fecha_registro`, `distrito`, `zona`, `ap_casada`, `fecha_nacimiento`, `nacionalidad`, `pais_residencia`, `ext_ci`, `tipo_documento`, `nit_natural`, `estado_civil`, `nombre_conyuge`, `ciudad`, `direccion_comercial`, `profesion`, `act_economica`, `caedec`, `lugar_trabajo`, `telefono_trabajo`, `cargo`, `ingresos`, `fecha_ingreso_laboral`, `referencia_cat`, `referencia_nombre`, `referencia_telefono`, `pep`, `genero`, `cargo_pep`, `res_usa`, `tipo_trabajo`,`abreviado`, `matricula`, `constitucion`, `nom_representante`, `ap_representante`, `nom_seguros`, `cargo_seguros`, `tipo_persona`, `capital`, `pagina`,`persona`) VALUES ('', '', '', '', 
'$cod_cliente', '$ids', '$idau', '$nombres', '', '', '', '$direccion', '$num_doc', '$telefono_fijo', '', 
'$email', '$num_doc', '', '', '', '', '$fecha_registro', '$distrito', '$zona', '', 
'', '', '$pais', '', '', '', '', '', 
'', '', '', '$act_economica', '$actividad_eco', '', '', '', '', 
'', '$tipo_referencia', '$nom_referencia', '$tel_refer', '', '', '', '', 
'', '$abreviado', '$matricula', '$constitucion', '$nom_representante', '$ap_representante', '$nom_seguros', '$cargo_seguros', '$tipo_persona', '$capital', '$pagina','JURIDICA')");


$usuario = $_SESSION["usuario"];
$accion = 'Registro Cliente'; 
$nombre_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$formulario = $_SERVER['PHP_SELF'];
date_default_timezone_set('America/La_Paz');
$actual = date("Y-m-d H:i:s");

$ins = $con -> query("INSERT INTO historial(`id_log`, `usuario`, `accion`, `cod_cliente`, `num_poliza`, `nombre_pc`, `fecha`, `formulario`) VALUES ('', '$usuario', '$accion', '$cod_cliente', '', '$nombre_host', '$actual', '$formulario')");
if ($insertar) {
	header('Location: ../index.php');
}else{
	echo "Registro no almacenado";
}}}
?>