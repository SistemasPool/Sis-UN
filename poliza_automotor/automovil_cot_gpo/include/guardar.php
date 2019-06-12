<?php
include 'conexion.php';
include "../../../verificar_sesion.php";

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
$s_distrito = $_SESSION['distrito'];
$plazas = $_POST['plazas'];
$chasis = $_POST['chasis'];
$motor = $_POST['motor'];
$marca = $_POST['marca'];
//$producto_auto = $_POST['producto'];
$auto_cap_aseg = $_POST['auto_cap_aseg'];
$prima_pagar = $_POST['prima_pagar'];
$hoy = date("Y-m-d");
$plaza = $_POST['plaza'];

$tasa_prima =  $prima_pagar/$auto_cap_aseg*100;
$tasa_prima = number_format($tasa_prima,2);


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

$pri_credito = ($prima_pagar*.06)+$prima_pagar;

$sql = "SELECT * FROM automovil_cotizacion where placa='$placa'";
$result = mysqli_query($connect, $sql);
$rows = mysqli_num_rows($result);
 if($rows == 0)
{
     
$inserta = $con -> query("INSERT INTO automovil_cotizacion (id_automovil, cod_cliente, cod_cotizacion, nro_poliza, certificado, id_ce, clase, placa, ano, marca,color, modelo, traccion, uso, distrito, plazas, chasis, motor, auto_cap_aseg, plan, intermediario, tasa_prima, prima_total, prima_credito, plaza, f_registro) VALUES ('', '$cod_cliente', '$cod_cotizacion', '', '$certificado', '$idau', '$clase', '$placa', '$ano', '$marca', '$color', '$modelo', '$traccion', '$uso', '$s_distrito', '$plazas', '$chasis', '$motor', '$auto_cap_aseg', '$producto_auto', '', '$tasa_prima', '$prima_pagar', '$pri_credito','$plaza','$hoy')");
     
 //$ins = $con -> query("INSERT INTO `automovil_cotizacion`(`id_automovil`, `idnum`, `cod_cliente`, `cod_cotizacion`, `nro_poliza`, `certificado`, `id_ce`, `clase`, `placa`, `marca`, `ano`, `color`, `modelo`, `traccion`, `uso`, `distrito`, `plazas`, `chasis`, `motor`, `auto_cap_aseg`, `plan`, `intermediario`, `tasa_prima`, `prima_total`, `prima_credito`) VALUES('', '', '$cod_cliente', '$cod_cotizacion', '', '$certificado', '$idau', '$clase', '$placa', '$marca', '$ano', '$color', '$modelo', '$traccion', '$uso', '$distrito', '$plazas', '$chasis', '$motor', '$auto_cap_aseg', '$producto_auto', '', '$porcentaje_reaseguro', '$prima_total', '$pri_credito')");
     
    header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$cod_cotizacion);
}else
 {
     echo "<script>
            alert('Placa ya Registrada....');
            history.back();
    </script>";        
     
 }
 ?>