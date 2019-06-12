<?php include("../../../verificar_sesion.php"); ?>
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

    <title>Actualizar Siniestro</title>

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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <style>
        .marginBottom-0 {margin-bottom:0;}
        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu:hover>a:after{border-left-color:#555;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
    </style>
    <title>.:Sistema Unibienes:.</title>
  </head>
  <body>
   <nav class="navbar navbar navbar-default navbar-static-top marginBottom-0" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="#" target="_blank">UNIBienes</a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Personas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../../clientes/index.php">Clientes</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                  <!--  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores</a>
								<ul class="dropdown-menu">
									<li><a href="poliza_automotor/cotizaciones/index.php">Cotización</a></li>
                                    <li><a href="poliza_automotor/polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                                    <li><a href="poliza_automotor/siniestros/index.php">Siniestros</a></li>
                                    <li><a href="poliza_automotor/reportes/include/reportes_automotor.php">Reportes</a></li>
								</ul>
							</li>
                        </ul>
                    </li> -->
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../cotizaciones/index.php">Cotización</a></li>
                            <li><a href="../../polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="../../reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="poliza_automotor/siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="../../siniestros/index.php">Siniestros</a></li>
                                    <li><a href="../../polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../../siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../../siniestros/ver_liquidacion.php">Liquidaciones</a></li>
								<!--	<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
								</ul>
							</li>
                        <!--   <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
								<ul class="dropdown-menu">
									<li><a href="#">Dropdown Submenu Link 5.1</a></li>
									<li><a href="#">Dropdown Submenu Link 5.2</a></li>
									<li><a href="#">Dropdown Submenu Link 5.3</a></li>
									<li class="divider"></li>
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
										<ul class="dropdown-menu">
											<li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
											<li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
											<li class="divider"></li>
											<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.3</a>
												<ul class="dropdown-menu">
													<li><a href="#">Dropdown Submenu Link 5.4.3.1</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.3.2</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.3.3</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.3.4</a></li>
												</ul>
											</li>
											<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.4</a>
												<ul class="dropdown-menu">
													<li><a href="#">Dropdown Submenu Link 5.4.4.1</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.4.2</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.4.3</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.4.4</a></li>
												</ul>
											</li>
										</ul>
									</li>-->
								</ul>
							</li> 
                </ul>
  
        <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><?php echo $_SESSION["usuario"]; ?></a></li>
            <li><a href="../../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    <br>
        <?php 
        $poliza = $_REQUEST['nro_poliza'];
        $cod_cliente = $_REQUEST['cod_cliente'];
        $id_automovil = $_REQUEST['id_automovil'];
        $num_siniestro = $_REQUEST['num_siniestro'];
      
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes where cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
    
                  $sin = $con ->query("SELECT * FROM siniestros where num_siniestro='$num_siniestro'");
		          $sini = $sin -> fetch_assoc();
        ?>
      
      <div class="container">
          <h4>Actualizar Siniestro de Automotor</h4>
	 <form action="update_siniestro.php" method="post" enctype="multipart/form-data">
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
        <input type="hidden" class="form-control" id="num_siniestro" name="num_siniestro" value="<?php echo $num_siniestro; ?>">         
                        <strong>Cobertura y Monto de Reserva</strong>
                        <br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-4"><div class="form-group">
                                      <label for="sel1">Tipo de Cobertura:</label>
                                      <select class="form-control" id="cobertura_aplicar" name="cobertura_aplicar">
                                        <option><?php echo $sini['cobertura_aplicar']; ?></option>
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
                                    <input type="text" class="form-control" id="reserva" name="reserva" value="<?php echo $sini['monto_reserva']; ?>">
                                </div></div>
                            <div class="col-md-4"><div class="form-group">
                                    <label for="example">Inspector:</label> 
                                    <input type="text" class="form-control" id="inspector" name="inspector" value="<?php echo $sini['insperctor']; ?>">
                                </div></div>
                            <div class="col-md-4"><div class="form-group">
                                    <label for="example">Fecha de Denuncia:</label>
                                    <input type="text" class="form-control" id="f_denuncia" name="f_denuncia" value="<?php echo $sini['fecha_denuncia']; ?>">
                                </div></div>
                            <div class="col-md-4"><div class="form-group">
                                    <label for="example">Fecha de Siniestro:</label>
                                    <input type="text" class="form-control" id="f_siniestro" name="f_siniestro" value="<?php echo $sini['fecha_siniestro']; ?>">
                                </div></div>
                        </div>
                        </div>
         
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Datos del Asegurado y del Conductor</strong>
                        <br><br>
                        <?php
                        $aseg_cond = $con ->query("SELECT * FROM asegurado_conductor where num_siniestro='$num_siniestro'");
		                $asegcond = $aseg_cond -> fetch_assoc();
                        ?>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Nombre del Conductor</label>
                                    <input type="text" class="form-control" id="nombre_conductor" name="nombre_conductor" value="<?php echo $asegcond['nombre_conductor']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                            <label for="example">Licencia No:</label>
            <input type="text" class="form-control" id="num_licencia" name="num_licencia" value="<?php echo $asegcond['no_licencia_cond']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Categoria:</label>
                                    <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $asegcond['categoria_cond']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Fecha de Emisión:</label>
                                    <input type="text" class="form-control" id="fecha_emision" name="fecha_emision" value="<?php echo $asegcond['fecha_emision_lic_cond']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Domicilio:</label>
                                    <input type="text" class="form-control" id="domicilio" name="domicilio" value="<?php echo $asegcond['domicilio_cond']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Teléfono:</label>
                                    <input type="text" class="form-control" id="telefonos" name="telefonos" value="<?php echo $asegcond['telefono_cond']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Relación con el Asegurado:</label>
                                    <input type="text" class="form-control" id="relacion" name="relacion" value="<?php echo $asegcond['relacion_cond']; ?>">
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                            
                        <?php
                        $circ_sini = $con ->query("SELECT * FROM circun_siniestro where num_siniestro='$num_siniestro'");
		                $circsini = $circ_sini -> fetch_assoc();
                        ?>
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Circuntancias del Hecho</strong>
                        <br><br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Fecha del Incidente:</label>
                                    <input type="text" class="form-control" id="fecha_incidente" name="fecha_incidente" value="<?php echo $circsini['fecha_incidente']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Hora del Incidente:</label>
                                    <input type="text" class="form-control" id="hora_incidente" name="hora_incidente" value="<?php echo $circsini['hora_incidente']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Lugar del Incidente:</label>
                                    <input type="text" class="form-control" id="lugar_incidente" name="lugar_incidente" value="<?php echo $circsini['lugar_incidente']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Fecha de Reclamo:</label>
                                    <input type="text" class="form-control" id="fecha_reclamo" name="fecha_reclamo" value="<?php echo $circsini['fecha_reclamo']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="form-group">
                                      <label for="sel1">Estado del Vehículo:</label>
                                      <select class="form-control" id="estado_vehiculo" name="estado_vehiculo" >
                                          <option><?php echo $circsini['estado_vehiculo']; ?></option>
                                        <option>Vehículo en Movimiento</option>
                                        <option>Vehículo Estatico</option>
                                      </select>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Velocidad del Vehículo (K/H)</label>
                                    <input type="text" class="form-control" id="velocidad" name="velocidad" value="<?php echo $circsini['velocidad']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Autoridad que Intervino:</label>
                                    <input type="text" class="form-control" id="autoridad_intervino" name="autoridad_intervino" value="<?php echo $circsini['autoridad_intervino']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Número de Caso:</label>
                                    <input type="text" class="form-control" id="num_caso" name="num_caso" value="<?php echo $circsini['num_caso']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Oficial Asignado al Caso:</label>
                                    <input type="text" class="form-control" id="oficial_caso" name="oficial_caso" value="<?php echo $circsini['oficial_caso']; ?>">
                                </div>
                                </div>
                               <!-- <div class="col-md-4">
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
                                -->
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
                                  <textarea class="form-control" rows="5" id="narracion_hecho" name="narracion_hecho"><?php echo $circsini['narracion_hecho']; ?></textarea>
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
                                  <textarea class="form-control" rows="5" id="detalle_dano" name="detalle_dano"><?php echo $circsini['datalle_dano']; ?></textarea>
                                </div> 
                                </div>
                            </div>
                        </div>
                        <?php
                        $respo_civ = $con ->query("SELECT * FROM resp_civil_siniestro where num_siniestro='$num_siniestro'");
		                $respociv = $respo_civ -> fetch_assoc();
                        ?>
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Responsabilidad Civil de Daños y Bienes</strong>
                        <br><br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Propietario:</label>
                                    <input type="text" class="form-control" id="propietario_res" name="propietario_res" value="<?php echo $respociv['propietario_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion_res" name="direccion_res" value="<?php echo $respociv['direccion_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Detalle de los Daños:</label>
                                    <input type="text" class="form-control" id="detalle_res" name="detalle_res" value="<?php echo $respociv['detalle_danos_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Fecha de Emisión:</label>
                                    <input type="text" class="form-control" id="fecha_emision_res" name="fecha_emision_res" value="<?php echo $respociv['fecha_emis_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Tipo de Vehículo:</label>
                                    <input type="text" class="form-control" id="tipo_res" name="tipo_res" value="<?php echo $respociv['tipo_vehiculo_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Marca:</label>
                                    <input type="text" class="form-control" id="marca_res" name="marca_res" value="<?php echo $respociv['marca_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Placa:</label>
                                    <input type="text" class="form-control" id="placa_res" name="placa_res" value="<?php echo $respociv['placa_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Nombre del Conductor:</label>
                                    <input type="text" class="form-control" id="conductor_res" name="conductor_res" value="<?php echo $respociv['nom_cond_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Teléfono:</label>
                                    <input type="text" class="form-control" id="telefono_res" name="telefono_res" value="<?php echo $respociv['tel_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Domicilio:</label>
                                    <input type="text" class="form-control" id="domicilio_res" name="domicilio_res" value="<?php echo $respociv['dom_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Número de Licencia:</label>
                                    <input type="text" class="form-control" id="licencia_res" name="licencia_res" value="<?php echo $respociv['num_licencia_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Categoria:</label>
                                    <input type="text" class="form-control" id="categoria_res" name="categoria_res" value="<?php echo $respociv['cat_lic_civ_sin']; ?>">
                                </div>
                                </div>
                                <div class="col-md-12">
                                 <div class="form-group">
                                  <label for="comment">Detalle de Daños:</label>
                                  <textarea class="form-control" rows="5" id="detalle_danos_res" name="detalle_danos_res"><?php echo $respociv['comentario_civ_sin']; ?></textarea>
                                </div> 
                                </div>
                                </div>
                            </div>
         </div>         
                        <?php
                        $dan_per = $con ->query("SELECT * FROM danos_persona where num_siniestro='$num_siniestro'");
		                $danper = $dan_per -> fetch_assoc();
                        ?>
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Daños a Personas</strong>
                       <!-- <a href="../../automovil/include/registrar.php?codigo=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>"><button style="color:white;" class="btn btn-success pull-right" type="submit">Agregar Persona</button></a> -->
                        <br><br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                     <div class="form-group">
                                      <label for="sel1">Persona:</label>
                                      <select class="form-control" id="tipo_persona" name="tipo_persona">
                                          <option><?php echo $danper['tipo_persona']; ?></option>
                                        <option>PASAJERO</option>
                                        <option>PEATON</option>
                                        <option>OCUPANTE</option>
                                      </select>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre_per" name="nombre_per" value="<?php echo $danper['nombre_persona']; ?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Edad:</label>
                                    <input type="text" class="form-control" id="edad_per" name="edad_per" value="<?php echo $danper['edad_persona'];?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion_per" name="direccion_per" value="<?php echo $danper['direccion_persona'];?>">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Telefono:</label>
                                    <input type="text" class="form-control" id="telefono_per" name="telefono_per" value="<?php echo $danper['telefono_persona'];?>">
                                </div>
                                </div>
                                
                                <div class="col-md-12">
                                 <div class="form-group">
                                  <label for="comment">Lesiones:</label>
                                  <textarea class="form-control" rows="5" id="com_lesiones" name="com_lesiones"><?php echo $danper['comentario_lesiones_persona'];?></textarea>
                                </div> 
                                </div>
                                <div class="col-md-12">
                                 <div class="form-group">
                                  <label for="comment">Comentario Adicional:</label>
                                  <textarea class="form-control" rows="5" id="com_adicional" id="com_adicional"><?php echo $danper['comentario_adicional_persona'];?></textarea>
                                </div> 
                                </div>
                                <div class="col-md-6">
                                <br>
                                <button type="submit" name="Enviar" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
                            </div>
                            </div>
                        </div>
                            </div></div>
                    </form>
<!-- /.container -->
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script>
          (function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
      </script>

  </body>
</html>