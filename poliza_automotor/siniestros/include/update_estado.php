<?php include 'conexion.php';



	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];


$id = $_POST['id'];
$num_siniestro = $_POST['num_siniestro'];
$estado = $_POST['estado'];
$monto = $_POST['monto'];
$hoy = date("Y-m-d H:i:s");


$up = $con -> query("INSERT INTO `datos_act_sin`(`id_datos_act_sin`, `num_siniestro`, `estado`, `monto_reserva`, `fecha_registro`) VALUES ('','$num_siniestro','$estado','$monto','$hoy')");

$upsin = $con -> query("UPDATE `siniestros` SET ,`estado`='$estado' WHERE `id_siniestro`='$id'");


if ($up) {
	echo "<script>
	location.href='actualizar_estado.php=?id=".$num_siniestro."';
	</script>";
}else{
	echo "<script>
	location.href='actualizar_estado.php?id=".$id."';
	</script>";
}

 ?>