<?php
include '../include/conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];

$nota_automotor = $_POST['nota_automotor'];


$ins = $con -> query("INSERT INTO notas_automotor(id_nota_auto,nota_automotor) VALUES ('','$nota_automotor')");
if ($ins) {
	header('Location: ../index.php');
}else{
	echo "Registro no almacenado";
}

 ?>
