<?php include 'conexion.php';



	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];


$id = $_POST['id'];
$cod_cotizacion = $_POST['cod_cotizacion'];
$nombres = $_POST['nombres'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$direccion = $_POST['direccion'];
$nit_ci = $_POST['nit_ci'];

$up = $con -> query("UPDATE beneficiario_cotizacion SET nombres='$nombres', paterno='$paterno', materno='$materno', direccion='$direccion', nit_ci='$nit_ci' WHERE id_cliente='$id'");
if ($up) {
	header('Location: ../../polizas/include/verpoliza.php?cod_cotizacion='.$cod_cotizacion.'&id_cliente='.$id);
}else{
	echo "<script>
	location.href='actualizar.php?id=".$id."';
	</script>";
}
 ?>