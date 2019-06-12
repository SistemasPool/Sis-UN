<?php
include 'conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];


$cod_cotizacion = $_POST['cod_cotizacion'];
$cod_cliente = $_POST['cod_cliente'];
//$nro_poliza = $_POST['nro_poliza'];
$clase = $_POST['clase'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$color = $_POST['color'];
$modelo = $_POST['modelo'];
$traccion = $_POST['traccion'];
$uso = $_POST['uso'];
$distrito = $_POST['distrito'];
$plazas = $_POST['plazas'];
$chasis = $_POST['chasis'];
$motor = $_POST['motor'];
$marca = $_POST['marca'];
$producto_auto = $_POST['producto'];
$auto_cap_aseg = $_POST['auto_cap_aseg'];
//$prima_total = $auto_cap_aseg*.0212;


$auto = $con ->query("SELECT MAX(id_ce) as idce FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
		          $au_car = $auto -> fetch_assoc();
                  $idau= $au_car['idce']+1;
$prefijo = 'CE';

if($idau<=10){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=100000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=1000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}elseif($idau<=10000000){
    $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);
}

$certificado = $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT);

if($producto_auto=="PRODUCTO A"){
    $porcentaje_reaseguro= 2.0838709677;
}elseif($producto_auto=="PRODUCTO B"){
    $porcentaje_reaseguro= 2.2483870968;
}
elseif($producto_auto=="PRODUCTO C"){
    $porcentaje_reaseguro = 2.5225806452;
}
$prima_total = $auto_cap_aseg*$porcentaje_reaseguro/100;

$pri_credito = ($prima_total*.06)+$prima_total;

$sql = "SELECT * FROM automovil_cotizacion where placa='$placa'";
$result = mysqli_query($connect, $sql);
$rows = mysqli_num_rows($result);
 if($rows == 0)
{
 $ins = $con -> query("INSERT INTO `automovil_cotizacion`(`id_automovil`, `idnum`, `cod_cliente`, `cod_cotizacion`, `nro_poliza`, `certificado`, `id_ce`, `clase`, `placa`, `marca`, `ano`, `color`, `modelo`, `traccion`, `uso`, `distrito`, `plazas`, `chasis`, `motor`, `auto_cap_aseg`, `plan`, `intermediario`, `tasa_prima`, `prima_total`, `prima_credito`) VALUES('', '', '$cod_cliente', '$cod_cotizacion', '', '$certificado', '$idau', '$clase', '$placa', '$marca', '$ano', '$color', '$modelo', '$traccion', '$uso', '$distrito', '$plazas', '$chasis', '$motor', '$auto_cap_aseg', '$producto_auto', '', '$porcentaje_reaseguro', '$prima_total', '$pri_credito')");
     
    header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$cod_cotizacion);
}else
 {
     echo "<script>
            alert('Placa ya Registrada....');
            history.back();
    </script>";        
     
 }
 ?>