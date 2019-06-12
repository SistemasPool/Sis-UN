<?php
include 'conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];


$carnet = $_POST['carnet'];
$direccion = $_POST['direccion'];
$prestatario = $_POST['prestatario'];
$carnet = $_POST['carnet'];
$cod_cliente = $_POST['cod_cliente'];
$nro_poliza = $_POST['nro_poliza'];
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
$hoy = date("Y-m-d H:i:s");
//$prima_total = $auto_cap_aseg*.0212;

$auto = $con ->query("SELECT MAX(id_num) as idce FROM certi_bunion");
		          $au_car = $auto -> fetch_assoc();
                  $idau= $au_car['idce']+1;
$prefijo = 'AUSNLP';

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


//$sql = "SELECT * FROM automovil_cotizacion where placa='$placa'";
//$result = mysqli_query($connect, $sql);
//$rows = mysqli_num_rows($result);
 //if($rows == 0)


 $ins = $con -> query("INSERT INTO `certi_bunion`(`id_ceun`, `id_num`, `num_cert`, `nro_poliza`, `cod_cliente`, `prestatario`, `carnet`, `direccion`, `clase`, `placa`, `marca`, `ano`, `color`, `modelo`, `distrito`, `plazas`, `chasis`, `motor`, `f_registro`) VALUES ('','$idau','$certificado','$nro_poliza','$cod_cliente', '$prestatario', $carnet','$direccion','$clase', '$placa', '$marca', '$ano', '$color', '$modelo', '$distrito', '$plazas', '$chasis', '$motor','$hoy')");
if($ins)
{
    header("Location: ../../verpolizaauto.php?nro_poliza=$nro_poliza&cod_cliente=$cod_cliente");
}else
 {
     echo "<script>
            alert('Placa ya Registrada....');
            history.back();
    </script>";        
     
 }
 ?>