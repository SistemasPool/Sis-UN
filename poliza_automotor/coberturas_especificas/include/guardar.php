<?php
include '../include/conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];

$nombre_cob_au = $_POST['nombre_cob_au'];
$valor_aseg_au = $_POST['valor_aseg_au'];
$fran_au = $_POST['fran_au'];
$coaseg_au = $_POST['coaseg_au'];



$ins = $con -> query("INSERT INTO cob_adic_au (id_cob_ad_au, nombre_cob_au, valor_aseg_au, fran_au, coaseg_au) VALUES ('','$nombre_cob_au','$valor_aseg_au','$fran_au','$coaseg_au')");
if ($ins) {
	header('Location: ../index.php');
}else{
	echo "Registro no almacenado";
}

 ?>
