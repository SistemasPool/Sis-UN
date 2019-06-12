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

    <title>Registrar Automovil</title>

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
          <a class="navbar-brand" href="#">Automovil</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br>
        <h4>Registrar Siniestro de Automotor</h4>
        <?php 
        $poliza = $_REQUEST['nro_poliza'];
        $cod_cliente = $_REQUEST['cod_cliente'];
        $id_automovil = $_REQUEST['id_automovil'];
        
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes where cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno'];
                  $direccion = $fila['direccion'];
                  $telefono_fijo = $fila['telefono_fijo'];
                  $email = $fila['email'];
                  $cod_cotizacion = $fila['cod_cotizacion'];
                  $completo = $nombres." ".$paterno." ".$materno;
        
                   $sel1 = $con ->query("SELECT * FROM automovil WHERE id_automovil='$id_automovil'");
		           $auto= $sel1 -> fetch_assoc();
                    $cod_cliente = $auto['cod_cliente'] ;
                    $nro_poliza = $auto['nro_poliza'] ;
                    $clase = $auto['clase'] ;
                    $placa = $auto['placa'] ;
                    $ano = $auto['ano'] ;
                    $color = $auto['color'] ;
                    $modelo = $auto['modelo'] ;
                    $traccion = $auto['traccion'] ;
                    $uso = $auto['uso'] ;
                    $distrito = $auto['distrito'] ;
                    $pasajeros = $auto['plazas'] ;
                    $chasis = $auto['chasis'] ;
                    $motor = $auto['motor'] ;
                    $marca = $auto['marca'] ;
                    $valor = $auto['auto_cap_aseg'];
                    $prima_total = $auto['prima_total'];
        ?>
	 <form action="guardar.php" method="post" enctype="multipart/form-data">
                     <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Datos del Asegurado</strong>
                        <input type="hidden" id="cod_cliente" name="cod_cliente" value="<?php echo $cod_cliente; ?>">
                        <input type="hidden" id="num_poliza" name="num_poliza" value="<?php echo $poliza; ?>">
                        <input type="hidden" id="nombres" name="nombres" value="<?php echo $nombres; ?>">
                        <input type="hidden" id="paterno" name="paterno" value="<?php echo $paterno; ?>">
                        <input type="hidden" id="materno" name="materno" value="<?php echo $materno; ?>">
                        <input type="hidden" id="direccion" name="direccion" value="<?php echo $direccion; ?>">
                        <input type="hidden" id="telefono_fijo" name="telefono_fijo" value="<?php echo $telefono_fijo; ?>">
                        <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">

                        <br>
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">Asegurado: <?php echo $completo; ?></div>
                            <div class="col-md-4">Código del Cliente: <?php echo $cod_cliente ?></div>
                            <div class="col-md-4">Número de Póliza: <?php echo $poliza ?></div>
                            <div class="col-md-4">Dirección Legal: <?php echo $direccion; ?></div>
                            <div class="col-md-4">Teléfono: <?php echo $telefono_fijo; ?></div>
                            <div class="col-md-4">Correo Electrónico: <?php echo $email; ?></div>
                            </div>
                            </div>
         </div>
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Datos del Vehículo</strong>
                        <input type="hidden" id="marca" name="marca" value="<?php echo $auto['marca']; ?>">
                        <input type="hidden" id="placa" name="placa" value="<?php echo $auto['placa']; ?>">
                        <input type="hidden" id="clase" name="clase" value="<?php echo $auto['clase']; ?>">
                        <input type="hidden" id="uso" name="uso" value="<?php echo $auto['uso']; ?>">
                        <br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-4">Marca: <?php echo $auto['marca']; ?></div>
                            <div class="col-md-4">Placa: <?php echo $auto['placa']; ?></div>
                            <div class="col-md-4">Clase: <?php echo $auto['clase']; ?></div>
                            <div class="col-md-4">Uso: <?php echo $auto['uso']; ?></div>
                            </div>
                        </div>
                        </div>
         
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Cobertura y Monto de Reserva</strong>
                        <br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-4"><div class="form-group">
                                      <label for="sel1">Tipo de Cobertura:</label>
                                      <select class="form-control" id="cobertura_aplicar" name="cobertura_aplicar">
                                        <option>Cobertura a Aplicar</option>
                                        <option>DAÑOS PROPIOS</option>
                                        <option>ROBO PARCIAL</option>
                                        <option>PERDIDA TOTAL POR ACCIDENTE</option>
                                        <option>PERDIDA TOTAL POR ROBO</option>
                                        <option>RC</option>
                                        <option>AP</option>
                                      </select>
                                    </div> </div>
                            <div class="col-md-4"><div class="form-group">
                                    <label for="example">Monto de Reserva</label>
                                    <input type="text" class="form-control" id="reserva" name="reserva">
                                </div></div>
                            <div class="col-md-4"></div>
                            </div>
                        </div>
                        </div>
         
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Datos del Asegurado y del Conductor</strong>
                        <br><br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Nombre del Conductor</label>
                                    <input type="text" class="form-control" id="nombre_conductor" name="nombre_conductor">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Licencia No:</label>
                                    <input type="text" class="form-control" id="num_licencia" name="num_licencia">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Categoria:</label>
                                    <input type="text" class="form-control" id="categoria" name="categoria">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Fecha de Emisión:</label>
                                    <input type="text" class="form-control" id="fecha_emision" name="fecha_emision">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Domicilio:</label>
                                    <input type="text" class="form-control" id="domicilio" name="domicilio">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Teléfono:</label>
                                    <input type="text" class="form-control" id="telefonos" name="telefonos">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Relación con el Asegurado:</label>
                                    <input type="text" class="form-control" id="relacion" name="relacion">
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Circuntancias del Hecho</strong>
                        <br><br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Fecha del Incidente:</label>
                                    <input type="text" class="form-control" id="fecha_incidente" name="fecha_incidente">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Hora del Incidente:</label>
                                    <input type="text" class="form-control" id="hora_incidente" name="hora_incidente">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Lugar del Incidente:</label>
                                    <input type="text" class="form-control" id="lugar_incidente" name="lugar_incidente">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Fecha de Reclamo:</label>
                                    <input type="text" class="form-control" id="fecha_reclamo" name="fecha_reclamo">
                                </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="form-group">
                                      <label for="sel1">Estado del Vehículo:</label>
                                      <select class="form-control" id="estado_vehiculo" name="estado_vehiculo">
                                          <option>Seleccione el Estado</option>
                                        <option>Vehículo en Movimiento</option>
                                        <option>Vehículo Estatico</option>
                                      </select>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Velocidad del Vehículo (K/H)</label>
                                    <input type="text" class="form-control" id="velocidad" name="velocidad">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Autoridad que Intervino:</label>
                                    <input type="text" class="form-control" id="autoridad_intervino" name="autoridad_intervino">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Número de Caso:</label>
                                    <input type="text" class="form-control" id="num_caso" name="num_caso">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Oficial Asignado al Caso:</label>
                                    <input type="text" class="form-control" id="oficial_caso" name="oficial_caso">
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="file-field">
                                    <div class="btn btn-default btn-sm float-left">
                                        <span>Copia Legalizada de Transito</span>
                                    </div>
                                       <input class="" id="transito" name="transito" type="file">
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="file-field">
                                    <div class="btn btn-default btn-sm float-left">
                                        <span>Prueba de Alcoholemia</span>
                                    </div>
                                       <input class="" id="alcoholemia" name="alcoholemia" type="file">
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="file-field">
                                    <div class="btn btn-default btn-sm float-left">
                                        <span>Comprobante de Pago de Franquicia:</span>
                                    </div>
                                       <input class="" type="file" id="pago_franquicia" name="pago_franquicia" >
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
         
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Breve Narración del Hecho</strong>
                        <br><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                 <div class="form-group">
                                  <label for="comment">Narración:</label>
                                  <textarea class="form-control" rows="5" id="narracion_hecho" name="narracion_hecho"></textarea>
                                </div> 
                                </div>
                            </div>
                        </div>
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Detalle de Daño en el Vehículo Asegurado</strong>
                        <br><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                 <div class="form-group">
                                  <label for="comment">Detalle:</label>
                                  <textarea class="form-control" rows="5" id="detalle_dano" name="detalle_dano"></textarea>
                                </div> 
                                </div>
                            </div>
                        </div>
         
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Responsabilidad Civil de Daños y Bienes</strong>
                        <br><br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Propietario:</label>
                                    <input type="text" class="form-control" id="propietario_res" name="propietario_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion_res" name="direccion_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Detalle de los Daños:</label>
                                    <input type="text" class="form-control" id="detalle_res" name="detalle_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Fecha de Emisión:</label>
                                    <input type="text" class="form-control" id="fecha_emision_res" name="fecha_emision_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Tipo de Vehículo:</label>
                                    <input type="text" class="form-control" id="tipo_res" name="tipo_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Marca:</label>
                                    <input type="text" class="form-control" id="marca_res" name="marca_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Placa:</label>
                                    <input type="text" class="form-control" id="placa_res" name="placa_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Nombre del Conductor:</label>
                                    <input type="text" class="form-control" id="conductor_res" name="conductor_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Teléfono:</label>
                                    <input type="text" class="form-control" id="telefono_res" name="telefono_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Domicilio:</label>
                                    <input type="text" class="form-control" id="domicilio_res" name="domicilio_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Número de Licencia:</label>
                                    <input type="text" class="form-control" id="licencia_res" name="licencia_res">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Categoria:</label>
                                    <input type="text" class="form-control" id="categoria_res" name="categoria_res">
                                </div>
                                </div>
                                <div class="col-md-12">
                                 <div class="form-group">
                                  <label for="comment">Detalle de Daños:</label>
                                  <textarea class="form-control" rows="5" id="detalle_danos_res" name="detalle_danos_res"></textarea>
                                </div> 
                                </div>
                                </div>
                            </div>
         </div>
                                <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Daños a Personas</strong>
                        <a href="../../automovil/include/registrar.php?codigo=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>"><button style="color:white;" class="btn btn-success pull-right" type="submit">Agregar Persona</button></a>
                        <br><br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                     <div class="form-group">
                                      <label for="sel1">Persona:</label>
                                      <select class="form-control" id="tipo_persona" name="tipo_persona">
                                          <option>Seleccione Tipo de Persona</option>
                                        <option>PASAJERO</option>
                                        <option>PEATON</option>
                                        <option>OCUPANTE</option>
                                      </select>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre_per" name="nombre_per">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Edad:</label>
                                    <input type="text" class="form-control" id="edad_per" name="edad_per">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion_per" name="direccion_per">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Telefono:</label>
                                    <input type="text" class="form-control" id="telefono_per" name="telefono_per">
                                </div>
                                </div>
                                
                                <div class="col-md-12">
                                 <div class="form-group">
                                  <label for="comment">Lesiones:</label>
                                  <textarea class="form-control" rows="5" id="com_lesiones" name="com_lesiones"></textarea>
                                </div> 
                                </div>
                                <div class="col-md-12">
                                 <div class="form-group">
                                  <label for="comment">Comentario Adicional:</label>
                                  <textarea class="form-control" rows="5" id="com_adicional" id="com_adicional"></textarea>
                                </div> 
                                </div>
                                <div class="col-md-6">
                                <br>
                                <button type="submit" name="Enviar" class="btn btn-primary" value="Enviar">Registrar Siniestro</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
<!-- /.container -->

                            


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