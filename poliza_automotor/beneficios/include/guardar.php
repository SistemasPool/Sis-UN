<?php
include '../include/conexion.php';

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];

$nombres = $_POST['nombres'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$nit_ci = $_POST['nit_ci'];
$direccion = $_POST['direccion'];
$telefono_fijo = $_POST['telefono_fijo'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$nitf_cif = $_POST['nitf_cif'];
$pagador = $_POST['pagador'];


$ins = $con -> query("INSERT INTO clientes (id_cliente,nombres,paterno,materno,direccion,nit_ci,telefono_fijo,celular,email,nitf_cif,pagador) VALUES ('','$nombres','$paterno','$materno','$direccion','$nit_ci', $telefono_fijo, $celular,$email,$nitf_cif,$pagador)");
if ($ins) {
	header('Location: ../index.php');
}else{
	echo "Registro no almacenado";
}

 ?>
