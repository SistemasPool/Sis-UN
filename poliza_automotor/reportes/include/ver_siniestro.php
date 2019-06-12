
<?php include 'conexion.php';
$num_siniestro = $_REQUEST['num_siniestro'];
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Datos Del Siniestro</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">
    
    <link href="../css/jquery.dataTables.min.css"starter-template.css"" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="padding:50px;">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Datos del Automovil</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../index.php">Inicio</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 <br><br>
    <div class="container" style="font-size:12px;">
         <h4>Datos del Siniestro</h4>
        <div class="row">
            
            <?php
            $siniestro = $con ->query("SELECT * FROM siniestros WHERE num_siniestro='$num_siniestro'");
            while($sini= $siniestro -> fetch_assoc()){
            ?>
            <div class="col-md-12">
            <div class="col-md-6">Asegurado: <?php echo $sini['asegurado']; ?></div>
            <div class="col-md-6">Número de Póliza: <?php echo $sini['num_poliza']; ?></div>
            <div class="col-md-6">Código de Cliente: <?php echo $sini['cod_cliente']; ?></div>
            <div class="col-md-6">Dirección Legal: <?php echo $sini['direccion']; ?></div>
            <div class="col-md-6">Teléfono: <?php echo $sini['telefono_fijo']; ?></div>
            <div class="col-md-6">Email: <?php echo $sini['email']; ?></div>
            <a href="../../automovil_cotizacion/include/actualizar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a>
            <a href="../../automovil_cotizacion/include/borrar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs pull-right" type="submit"></button></a>
            </div>
            <?php  } ?>
        </div>
    </div>
              <hr style="background-color: #FFF100; height: 2px; border: 0;">
    <div class="container" style="font-size:12px;">
         <h4>Datos del Automovil</h4>
        <div class="row">
            <?php
            $siniestro = $con ->query("SELECT * FROM siniestros WHERE num_siniestro='$num_siniestro'");
            while($sini= $siniestro -> fetch_assoc()){
            ?>
            <div class="col-md-12">
            <div class="col-md-6">Placa: <?php echo $sini['placa_sin']; ?></div>
            <div class="col-md-6">Clase: <?php echo $sini['clase']; ?></div>
            <div class="col-md-6">Uso: <?php echo $sini['uso']; ?></div>
            <div class="col-md-6">Marca: <?php echo $sini['marca']; ?></div>
            <a href="../../automovil_cotizacion/include/actualizar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a>
            <a href="../../automovil_cotizacion/include/borrar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs pull-right" type="submit"></button></a>
            </div>
            <?php } ?>
        </div>
    </div>
            <hr style="background-color: #FFF100; height: 2px; border: 0;">
    <div class="container" style="font-size:12px;">
         <h4>Cobertura y Monto de Reserva</h4>
        <div class="row">
            <?php
            $siniestro = $con ->query("SELECT * FROM siniestros WHERE num_siniestro='$num_siniestro'");
            while($sini= $siniestro -> fetch_assoc()){
            ?>
            <div class="col-md-12">
            <div class="col-md-6">Cobertura a Aplicar: <?php echo $sini['cobertura_aplicar']; ?></div>
            <div class="col-md-6">Monto Reserva: <?php echo $sini['monto_reserva']; ?></div>
            <a href="../../automovil_cotizacion/include/actualizar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a>
            <a href="../../automovil_cotizacion/include/borrar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs pull-right" type="submit"></button></a>
            </div>
            <?php } ?>
        </div>
    </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
    <div class="container" style="font-size:12px;">
         <h4> Datos del Asegurado y del Conductor</h4>
        <div class="row">
            <?php
            $aseg_cond = $con ->query("SELECT * FROM asegurado_conductor WHERE num_siniestro='$num_siniestro'");
            while($asco= $aseg_cond -> fetch_assoc()){
            ?>
            <div class="col-md-12">
            <div class="col-md-6">Nombre del Conductor: <?php echo $asco['nombre_conductor']; ?></div>
            <div class="col-md-6">No de Licencia del Conductor: <?php echo $asco['no_licencia_cond']; ?></div>
            <div class="col-md-6">Categoria: <?php echo $asco['categoria_cond']; ?></div>
            <div class="col-md-6">Fecha de Emisión: <?php echo $asco['fecha_emision_lic_cond']; ?></div>
            <div class="col-md-6">Domicilio: <?php echo $asco['domicilio_cond']; ?></div>
            <div class="col-md-6">Teléfono: <?php echo $asco['telefono_cond']; ?></div>
            <div class="col-md-6">Relación con el Conductor: <?php echo $asco['relacion_cond']; ?></div>
            <a href="../../automovil_cotizacion/include/actualizar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a>
            <a href="../../automovil_cotizacion/include/borrar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs pull-right" type="submit"></button></a>
            </div>
            <?php } ?>
        </div>
    </div>
            <hr style="background-color: #FFF100; height: 2px; border: 0;">
      
      <div class="container" style="font-size:12px;">
         <h4> Datos del Asegurado y del Conductor</h4>
        <div class="row">
            <?php
            $circ_sini = $con ->query("SELECT * FROM circun_siniestro WHERE num_siniestro='$num_siniestro'");
            while($cisi= $circ_sini -> fetch_assoc()){
            ?>
            <div class="col-md-12">
            <div class="col-md-6">Fecha del Incidente: <?php echo $cisi['fecha_incidente']; ?></div>
            <div class="col-md-6">Hora del Incidente: <?php echo $cisi['hora_incidente']; ?></div>
            <div class="col-md-6">Lugar del Incidente: <?php echo $cisi['lugar_incidente']; ?></div>
            <div class="col-md-6">Fecha del Reclamo: <?php echo $cisi['fecha_reclamo']; ?></div>
            <div class="col-md-6">Estado del Vehículo: <?php echo $cisi['estado_vehiculo']; ?></div>
            <div class="col-md-6">Velocidad: <?php echo $cisi['velocidad']; ?></div>
            <div class="col-md-6">Autoridad que Intervino: <?php echo $cisi['autoridad_intervino']; ?></div>
            <div class="col-md-6">Número del Caso: <?php echo $cisi['num_caso']; ?></div>
            <div class="col-md-6">Oficial del Caso: <?php echo $cisi['oficial_caso']; ?></div>
            <div class="col-md-12"> 
            <div class="form-group">
              <label for="comment">Narración del Hecho:</label>
              <textarea class="form-control" rows="3" id="comment" value=""><?php echo $cisi['narracion_hecho']; ?></textarea>
            </div>
            </div>
            <div class="col-md-12"> 
            <div class="form-group">
              <label for="comment">Detalle del Daño:</label>
              <textarea class="form-control" rows="3" id="comment" value=""><?php echo $cisi['datalle_dano']; ?></textarea>
            </div>
            </div>
            <div class="col-md-4">Pago de Franquicia:<img src="pago_franquicia/<?php echo $cisi['pago_franquicia']; ?>" width="50" height="50"></div>
            <div class="col-md-4">Certificado de Transito:<img src="transito/<?php echo $cisi['transito_circ']; ?>" width="50" height="50"></div>
            <div class="col-md-4">Certificado de Alcoholemia:<img src="alcoholemia/<?php echo $cisi['alcoholemia_circ']; ?>" width="50" height="50"></div>
            <a href="../../automovil_cotizacion/include/actualizar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a>
            <a href="../../automovil_cotizacion/include/borrar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs pull-right" type="submit"></button></a>
            </div>
            <?php } ?>
        </div>
    </div>
     <hr style="background-color: #FFF100; height: 2px; border: 0;">
      <div class="container" style="font-size:12px;">
         <h4> Datos del Asegurado y del Conductor</h4>
        <div class="row">
            <?php
            $resp_sini = $con ->query("SELECT * FROM resp_civil_siniestro WHERE num_siniestro='$num_siniestro'");
            while($resi= $resp_sini -> fetch_assoc()){
            ?>
            <div class="col-md-12">
            <div class="col-md-6">Propietario: <?php echo $resi['propietario_civ_sin']; ?></div>
            <div class="col-md-6">Dirección: <?php echo $resi['direccion_civ_sin']; ?></div>
            <div class="col-md-6">Fecha de Emisión: <?php echo $resi['fecha_emis_civ_sin']; ?></div>
            <div class="col-md-6">Tipo de Vehículo: <?php echo $resi['tipo_vehiculo_civ_sin']; ?></div>
            <div class="col-md-6">Marca: <?php echo $resi['marca_civ_sin']; ?></div>
            <div class="col-md-6">Placa: <?php echo $resi['placa_civ_sin']; ?></div>
            <div class="col-md-6">Nombre del Conductor: <?php echo $resi['nom_cond_civ_sin']; ?></div>
            <div class="col-md-6">Teléfono: <?php echo $resi['tel_civ_sin']; ?></div>
            <div class="col-md-6">Domicilio: <?php echo $resi['dom_civ_sin']; ?></div>
            <div class="col-md-6">Número de Licencia: <?php echo $resi['num_licencia_civ_sin']; ?></div>
            <div class="col-md-6">Categoria: <?php echo $resi['cat_lic_civ_sin']; ?></div>
            <div class="col-md-12"> 
            <div class="form-group">
              <label for="comment">Detalle de Daños:</label>
              <textarea class="form-control" rows="3" id="comment" value=""><?php echo $resi['detalle_danos_civ_sin']; ?></textarea>
            </div></div>
            <div class="col-md-12"> 
            <div class="form-group">
              <label for="comment">Comentarios:</label>
              <textarea class="form-control" rows="3" id="comment" value=""><?php echo $resi['comentario_civ_sin']; ?></textarea>
            </div></div>
            <a href="../../automovil_cotizacion/include/actualizar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a>
            <a href="../../automovil_cotizacion/include/borrar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs pull-right" type="submit"></button></a>
            </div>
            <?php } ?>
        </div>
    </div>
            <hr style="background-color: #FFF100; height: 2px; border: 0;">
      <div class="container" style="font-size:12px;">
         <h4>Daños a Personas</h4>
        <div class="row">
            <?php
            $dan_per = $con ->query("SELECT * FROM danos_persona WHERE num_siniestro='$num_siniestro'");
            while($danper= $dan_per -> fetch_assoc()){
            ?>
            <div class="col-md-12">
            <div class="col-md-6">Tipo Persona: <?php echo $danper['tipo_persona']; ?></div>
            <div class="col-md-6">Nombre: <?php echo $danper['nombre_persona']; ?></div>
            <div class="col-md-6">Edad: <?php echo $danper['edad_persona']; ?></div>
            <div class="col-md-6">Dirección: <?php echo $danper['direccion_persona']; ?></div>
            <div class="col-md-6">Teléfono: <?php echo $danper['telefono_persona']; ?></div>
            <div class="col-md-12"> 
            <div class="form-group">
              <label for="comment">Lesiones:</label>
              <textarea class="form-control" rows="3" id="comment" value=""><?php echo $danper['comentario_lesiones_persona']; ?></textarea>
            </div></div>
            <div class="col-md-12"> 
            <div class="form-group">
              <label for="comment">Comentario Adicional:</label>
              <textarea class="form-control" rows="3" id="comment" value=""><?php echo $resi['comentario_adicional_persona']; ?></textarea>
            </div></div>

            <a href="../../automovil_cotizacion/include/actualizar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a>
            <a href="../../automovil_cotizacion/include/borrar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs pull-right" type="submit"></button></a>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/datatablejs.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
        

  </body>
</html>      