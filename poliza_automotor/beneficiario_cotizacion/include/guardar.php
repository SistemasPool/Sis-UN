<?php
include 'conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];

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
$auto_cap_aseg = $_POST['auto_cap_aseg'];
$prima_total = $auto_cap_aseg*.0212;

$sql = "SELECT * FROM automovil where placa='$placa'";  
$result = mysqli_query($connect, $sql);
$rows = mysqli_num_rows($result);
 if($rows != 0)  
{
   $ins = $con -> query("INSERT INTO automovil (id_automovil, cod_cliente, nro_poliza, clase, placa, ano, color, modelo, traccion, uso, distrito, plazas, chasis, motor, auto_cap_aseg, prima_total) VALUES ('', '$cod_cliente', '$nro_poliza', '$clase', '$placa', '$ano', '$color', '$modelo', '$traccion', '$uso', '$distrito', '$plazas', '$chasis', '$motor', '$auto_cap_aseg', '$prima_total')");
     
    header('Location: ../../polizas/include/verpolizaautomotor.php?cod_cliente='.$cod_cliente.'&numero_poliza='.$nro_poliza);
}else
 {

     echo "<script>
            alert('Placa ya Registrada....');
            history.back();
    </script>";        
     
 }
 ?>