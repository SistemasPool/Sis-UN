<?php
include 'conexion.php';

$sele = $con ->query("SELECT MAX(id_sin) as id_siniestro FROM siniestros");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['id_siniestro']+1;
$prefijo = 'SIAU';

if($ids<=10){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);
}


$num_siniestro = $prefijo.str_pad($ids, 8, "0", STR_PAD_LEFT);

	//$ruta = "../img/imagen/";
     //   opendir($ruta);
     //   $destino = $ruta.$_FILES['imagen']['name'];
     //   copy($_FILES['imagen']['tmp_name'],$destino);
     //   $imagen=$_FILES['imagen']['name'];

//Asegurado
$cod_cliente = $_POST['cod_cliente'];
$num_poliza = $_POST['num_poliza'];
$nombres = $_POST['nombres'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$direccion = $_POST['direccion'];
$telefono_fijo = $_POST['telefono_fijo'];
$email = $_POST['email'];
$completo = $nombres." ".$paterno." ".$materno;
//Automovil
$clase = $_POST['clase'];
$placa = $_POST['placa'];
$uso = $_POST['uso'];
$marca = $_POST['marca'];


//tipo de cobertura y reserva
$cobertura_aplicar = $_POST['cobertura_aplicar'];
$reserva = $_POST['reserva'];

 $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes where cod_cliente='$cod_cliente' and nro_poliza='$num_poliza'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno'];
                  $inicio_vigencia = $fila['inicio_vigencia'];
                  $final_vigencia = $fila['final_vigencia'];


//asegurado o conductor
$nombre_conductor = $_POST['nombre_conductor'];
$num_licencia = $_POST['num_licencia'];
$categoria = $_POST['categoria'];
$fecha_emision = $_POST['fecha_emision'];
$domicilio = $_POST['domicilio'];
$telefonos = $_POST['telefonos'];
$relacion = $_POST['relacion'];


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

//Daños a Personas
$tipo_persona = $_POST['tipo_persona'];
$nombre_per = $_POST['nombre_per'];
$edad_per = $_POST['edad_per'];
$direccion_per = $_POST['direccion_per'];
$telefono_per = $_POST['telefono_per'];
$com_lesiones = $_POST['com_lesiones'];
$com_adicional = $_POST['com_adicional'];

$fecha_de_registro = date("Y-m-d");

//$sql = "SELECT * FROM automovil where placa='$placa'";  
//$result = mysqli_query($connect, $sql);
//$rows = mysqli_num_rows($result);
 //if($rows != 0)  
//{
    
    $ins_datos = $con -> query("INSERT INTO `datos_act_sin`(`id_datos_act_sin`, `num_siniestro`, `estado`, `monto_reserva`, `fecha_registro`) VALUES ('', '$num_siniestro', 'PENDIENTE', '$reserva', '$fecha_de_registro')");
    //ok
    $ins_aseg_cond = $con -> query("INSERT INTO `asegurado_conductor`(`id_aseg_cond`, `nombre_conductor`, `no_licencia_cond`, `categoria_cond`, `fecha_emision_lic_cond`, `domicilio_cond`, `telefono_cond`, `relacion_cond`, `fecha_registro`, `num_poliza`, `num_siniestro`, `cod_cliente`) VALUES ('', '$nombre_conductor', '$num_licencia', '$categoria', '$fecha_emision', '$domicilio', '$telefonos', '$relacion', '$fecha_de_registro', '$num_poliza', '$num_siniestro', '$cod_cliente')"); 
    
    //ok
    $ins_circun_sin = $con -> query("INSERT INTO `circun_siniestro`(`id_circunstancia`, `fecha_incidente`, `hora_incidente`, `lugar_incidente`, `fecha_reclamo`, `estado_vehiculo`, `velocidad`, `autoridad_intervino`, `num_caso`, `oficial_caso`, `fecha_registro`, `num_poliza`, `num_siniestro`, `cod_cliente`, `narracion_hecho`, `datalle_dano`, `pago_franquicia`, `transito_circ`, `alcoholemia_circ`) VALUES ('', '$fecha_incidente', '$hora_incidente', '$lugar_incidente', '$fecha_reclamo', '$estado_vehiculo', '$velocidad', '$autoridad_intervino', '$num_caso', '$oficial_caso', '$fecha_de_registro', '$num_poliza', '$num_siniestro', '$cod_cliente', '$narracion_hecho', '$detalle_dano', '$nombre_pago_franquicia', '$nombre_transito', '$nombre_alcoholemia')");
        
    //ok
    $ins_dan_per = $con -> query("INSERT INTO `danos_persona`(`id_danos_personas`, `tipo_persona`, `nombre_persona`, `edad_persona`, `direccion_persona`, `telefono_persona`, `comentario_lesiones_persona`, `comentario_adicional_persona`, `fecha_registro`, `num_poliza`, `cod_cliente`, `num_siniestro`) VALUES ('', '$tipo_persona', '$nombre_per', '$edad_per', '$direccion_per', '$telefono_per', '$com_lesiones', '$com_adicional', $fecha_de_registro, '$num_poliza', '$cod_cliente', '$num_siniestro')");
    
    //no guarda
    $ins_resp_sin = $con -> query("INSERT INTO `resp_civil_siniestro`(`int_resp_civ_sin`, `propietario_civ_sin`, `direccion_civ_sin`, `detalle_danos_civ_sin`, `fecha_emis_civ_sin`, `tipo_vehiculo_civ_sin`, `marca_civ_sin`, `placa_civ_sin`, `nom_cond_civ_sin`, `tel_civ_sin`, `dom_civ_sin`, `num_licencia_civ_sin`, `cat_lic_civ_sin`, `comentario_civ_sin`, `num_poliza`, `num_siniestro`, `cod_cliente`, `fecha_registro`) VALUES ('', '$propietario_res', '$direccion_res', '$detalle_danos_res', '$fecha_emision_res', '$tipo_res', '$marca_res', '$placa_res', '$conductor_res', '$telefono_res', '$domicilio_res', '$licencia_res', '$categoria_res', '$detalle_danos_res', '$num_poliza', '$num_siniestro', '$cod_cliente', '$fecha_de_registro')");
        

    //ok
    $ins_sin = $con -> query("INSERT INTO `siniestros`(`id_siniestro`, `id_sin`, `num_siniestro`, `asegurado`, `direccion`, `telefono_fijo`, `email`,`fecha_denuncia`, `fecha_siniestro`, `num_poliza`, `cod_cliente`, `cobertura_aplicar`, `placa_sin`, `marca`, `uso`, `clase`, `detalle_sin`, `estado`, `fecha_respuesta`, `fran_coaseg_sin`, `monto_reclamado`, `monto_pagado`, `observaciones`, `fecha_registro`, `inicio_vigencia`, `final_vigencia`) VALUES ('', $ids, '$num_siniestro', '$completo', '$direccion', '$telefono_fijo', '$email', '', '', '$num_poliza', '$cod_cliente', '', '$placa', '$marca', '$uso', '$clase', '', '', '', '', '', '', '', '$fecha_de_registro', '$inicio_vigencia', '$final_vigencia')");
  // $ins = $con -> query("INSERT INTO automovil (id_automovil, cod_cliente, nro_poliza, clase, placa, ano, color, modelo, traccion, uso, distrito, plazas, chasis, motor, auto_cap_aseg, prima_total) VALUES ('', '$cod_cliente', '$nro_poliza', '$clase', '$placa', '$ano', '$color', '$modelo', '$traccion', '$uso', '$distrito', '$plazas', '$chasis', '$motor', '$auto_cap_aseg', '$prima_total')");
//if($ins_sin){    
//    header('Location: ../../siniestros/index.php');
//    }else
//    {
//    echo "<script>
//          alert('Placa ya Registrada....');
//          history.back();
//          </script>";        
//}
 ?>
