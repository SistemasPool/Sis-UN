<?php include 'conexion.php';


$contador =1;
    for($i=1; $i <= count($_POST['monto']); $i++){ 

    echo $a = $_POST['monto'][$i];
    echo "<br>";
        echo $contador." ".$a;
    
    $contador++;
    }
    //$up = $mysqli -> query ("UPDATE `usuarios` SET `estado`='CONTESTADO' WHERE usuario='$usuar'");
     //echo "<script>
    //    alert('Gracias por su participación');
    //    window.location.href='salir.php';
      //  </script>";

//echo $id = $_REQUEST['id'];
//echo $monto = $_POST['monto'];
//echo $fecha_cuotas = $_POST['fecha_cuotas'];


//$up = $con -> query("UPDATE automovil SET cod_cliente='$cod_cliente', nro_poliza='$nro_poliza', clase='$clase', placa='$placa', ano='$ano', color='$color', modelo='$modelo', traccion='$traccion', uso='$uso', distrito='$distrito', plazas='$plazas', chasis='$chasis', motor='$motor', auto_cap_aseg='$auto_cap_aseg' WHERE id_automovil='$id'");
//if ($up) {
//	echo "<script>
//	location.href='../index.php';
//	</script>";
//}else{
//	echo "<script>
//	location.href='actualizar.php?id=".$id."';
//	</script>";
//}

 ?>