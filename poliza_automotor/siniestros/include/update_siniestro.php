<?php
include 'conexion.php';
$num_siniestro = $_POST['num_siniestro'];
	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];

//tipo de cobertura y reserva
$cobertura_aplicar = $_POST['cobertura_aplicar'];
$reserva = $_POST['reserva'];
$inspector = $_POST['inspector'];
$f_denuncia = $_POST['f_denuncia'];
$f_siniestro = $_POST['$f_siniestro'];

 $update_siniestros = $con -> query("UPDATE `siniestros` SET `fecha_denuncia`='$f_denuncia', `fecha_siniestro`='$f_siniestro', `cobertura_aplicar`='$cobertura_aplicar', `monto_reserva`='$reserva', `insperctor`='$inspector' WHERE num_siniestro='$num_siniestro'");


//asegurado o conductor
$nombre_conductor = $_POST['nombre_conductor'];
$num_licencia = $_POST['num_licencia'];
$categoria = $_POST['categoria'];
$fecha_emision = $_POST['fecha_emision'];
$domicilio = $_POST['domicilio'];
$telefonos = $_POST['telefonos'];
$relacion = $_POST['relacion'];

  $update_nomb_cond = $con -> query("UPDATE `asegurado_conductor` SET `nombre_conductor`='$nombre_conductor',`no_licencia_cond`='$num_licencia', `categoria_cond`='$categoria', `fecha_emision_lic_cond`='$fecha_emision', `domicilio_cond`='$domicilio', `telefono_cond`='$telefonos', `relacion_cond`='$relacion' WHERE num_siniestro='$num_siniestro'");

//circuntancias del hecho
$fecha_incidente = $_POST['fecha_incidente'];
$hora_incidente = $_POST['hora_incidente'];
$lugar_incidente = $_POST['lugar_incidente'];
$fecha_emision = $_POST['fecha_emision'];
$fecha_reclamo = $_POST['fecha_reclamo'];
$estado_vehiculo = $_POST['estado_vehiculo'];
$velocidad = $_POST['velocidad'];
$autoridad_intervino = $_POST['autoridad_intervino'];
$num_caso = $_POST['num_caso'];
$oficial_caso = $_POST['oficial_caso'];
//$transito = $_POST['transito'];
//$alcoholemia = $_POST['alcoholemia'];
//$pago_franquicia = $_POST['pago_franquicia'];
$narracion_hecho = $_POST['narracion_hecho'];
$detalle_dano = $_POST['detalle_dano'];

$update_circ = $con -> query("UPDATE `circun_siniestro` SET `fecha_incidente`='$fecha_incidente', `hora_incidente`='$hora_incidente', `lugar_incidente`='$lugar_incidente', `fecha_reclamo`='$fecha_reclamo', `estado_vehiculo`='$estado_vehiculo', `velocidad`='$velocidad', `autoridad_intervino`='$autoridad_intervino',`num_caso`='$num_caso',`oficial_caso`='$oficial_caso', `narracion_hecho`='$narracion_hecho', `datalle_dano`='$detalle_dano' WHERE num_siniestro='$num_siniestro'");

        $nombre_transito = $_FILES['transito']['name'];
        //$tipo = $_FILES['archivo']['type'];
        //$tamano = $_FILES['archivo']['size'];
        $ruta_transito = $_FILES['transito']['tmp_name'];
        //insertar a base de datos
        $destino_transito = "transito/".$nombre_transito;
        copy($ruta_transito,$destino_transito);


	    $nombre_alcoholemia = $_FILES['alcoholemia']['name'];
        //$tipo = $_FILES['archivo']['type'];
        //$tamano = $_FILES['archivo']['size'] ;
        $ruta_alcoholemia = $_FILES['alcoholemia']['tmp_name'];
        //insertar a base de datos
        $destino_alcoholemia = "alcoholemia/".$nombre_alcoholemia;
        copy($ruta_alcoholemia,$destino_alcoholemia);

        $nombre_pago_franquicia = $_FILES['pago_franquicia']['name'];
        //$tipo = $_FILES['archivo']['type'];
        //$tamano = $_FILES['archivo']['size'] ;
        $ruta_pago_franquicia = $_FILES['pago_franquicia']['tmp_name'];
        //insertar a base de datos
        $destino_pago_franquicia = "pago_franquicia/".$nombre_pago_franquicia;
        copy($ruta_pago_franquicia,$destino_pago_franquicia);


//Responsabilidad Civil de Daños y Bienes
$propietario_res = $_POST['propietario_res'];
$direccion_res = $_POST['direccion_res'];
$detalle_res = $_POST['detalle_res'];
$fecha_emision_res = $_POST['fecha_emision_res'];
$tipo_res = $_POST['tipo_res'];
$marca_res = $_POST['marca_res'];
$placa_res = $_POST['placa_res'];
$conductor_res = $_POST['conductor_res'];
$telefono_res = $_POST['telefono_res'];
$domicilio_res = $_POST['domicilio_res'];
$licencia_res = $_POST['licencia_res'];
$categoria_res = $_POST['categoria_res'];
$detalle_danos_res = $_POST['detalle_danos_res'];

$update_resp_civ_dan = $con -> query("UPDATE `resp_civil_siniestro` SET `propietario_civ_sin`='$propietario_res', `direccion_civ_sin`='$direccion_res', `detalle_danos_civ_sin`='$detalle_res', `fecha_emis_civ_sin`='$fecha_emision_res', `tipo_vehiculo_civ_sin`='$tipo_res', `marca_civ_sin`='$marca_res', `placa_civ_sin`='$placa_res', `nom_cond_civ_sin`='$conductor_res', `tel_civ_sin`='$telefono_res', `dom_civ_sin`='$domicilio_res', `num_licencia_civ_sin`='$domicilio_res', `cat_lic_civ_sin`='$categoria_res', `comentario_civ_sin`='$detalle_danos_res' WHERE num_siniestro='$num_siniestro'");


//Daños a Personas
$tipo_persona = $_POST['tipo_persona'];
$nombre_per = $_POST['nombre_per'];
$edad_per = $_POST['edad_per'];
$direccion_per = $_POST['direccion_per'];
$telefono_per = $_POST['telefono_per'];
$com_lesiones = $_POST['com_lesiones'];
$com_adicional = $_POST['com_adicional'];

$update_danos = $con -> query("UPDATE `danos_persona` SET `tipo_persona`='$tipo_persona', `nombre_persona`='$nombre_per', `edad_persona`='$edad_per', `direccion_persona`='$direccion_per', `telefono_persona`='$telefono_per', `comentario_lesiones_persona`='$com_lesiones', `comentario_adicional_persona`='$com_adicional' WHERE num_siniestro='$num_siniestro'");

//$sql = "SELECT * FROM automovil where placa='$placa'";  
//$result = mysqli_query($connect, $sql);
//$rows = mysqli_num_rows($result);
 //if($rows != 0)  
//{
    
if($update_danos){    
    header('Location: ../../siniestros/index.php');
    }else
    {
    echo "<script>
          alert('Placa ya Registrada....');
          history.back();
          </script>";        
}
 ?>