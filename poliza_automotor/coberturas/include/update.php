<?php include 'conexion.php';



	//$ruta = "../img/imagen/";
      //  opendir($ruta);
        //$destino = $ruta.$_FILES['imagen']['name'];
       // copy($_FILES['imagen']['tmp_name'],$destino);
      //  $imagen=$_FILES['imagen']['name'];


$id = $_POST['id'];
$nombre_cob_au = $_POST['nombre_cob_au'];
$valor_aseg_au = $_POST['valor_aseg_au'];
$fran_au = $_POST['fran_au'];
$coaseg_au = $_POST['coaseg_au'];


$up = $con -> query("UPDATE cob_adic_au SET nombre_cob_au='$nombre_cob_au', valor_aseg_au='$valor_aseg_au', fran_au='$fran_au', coaseg_au='$coaseg_au' WHERE id_cob_ad_au='$id'");
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