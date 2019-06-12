<?php include 'conexion.php';



	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];


$id = $_POST['id'];
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

$up = $con -> query("UPDATE clientes SET nombres='$nombres', paterno='$paterno', materno='$materno', nit_ci='$nit_ci', direccion='$direccion', telefono_fijo='$telefono_fijo', celular='$celular', email='$email', nitf_cif='$nitf_cif', pagador='$pagador' WHERE id_cliente='$id'");
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