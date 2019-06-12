<?php include 'conexion.php';



	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];


$id = $_POST['id'];
$cod_cliente = $_POST['cod_cliente'];
$nro_poliza= $_POST['nro_poliza'];
$nombres = $_POST['nombres'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$direccion = $_POST['direccion'];
$zona = $_POST['zona'];
$nit_ci = $_POST['nit_ci'];
$celular = $_POST['celular'];
$email = $_POST['email'];

$up = $con -> query("UPDATE clientes_tomador SET nombres='$nombres', paterno='$paterno', materno='$materno', direccion='$direccion', zona='$zona', nit_ci='$nit_ci', celular='$celular', email='$email' WHERE id_cliente_tomador='$id'");
if ($up) {
	header('Location: ../../polizas/include/verpolizaauto.php?cod_cliente='.$cod_cliente.'&nro_poliza='.$nro_poliza);
}else{
	echo "<script>
	location.href='actualizar.php?id=".$id."';
	</script>";
}
 ?>