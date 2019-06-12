<?php include 'conexion.php';



	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];


$id = $_POST['id'];
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

$up = $con -> query("UPDATE automovil SET cod_cliente='$cod_cliente', nro_poliza='$nro_poliza', clase='$clase', placa='$placa', ano='$ano', color='$color', modelo='$modelo', traccion='$traccion', uso='$uso', distrito='$distrito', plazas='$plazas', chasis='$chasis', motor='$motor', auto_cap_aseg='$auto_cap_aseg' WHERE id_automovil='$id'");
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