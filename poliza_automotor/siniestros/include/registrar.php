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
      
      <div class="container">
          <h4>Registrar Siniestro de Automotor</h4>
	 <form action="guardar.php" method="post" enctype="multipart/form-data">
         
         <?php 
         if($poliza=='AULP00000033'){
             $num_cert=$_REQUEST['id_certificado'];
             $cer = $con ->query("SELECT * FROM certi_bunion where nro_poliza='$poliza' and id_ceun='$num_cert'");
		      $cert = $cer -> fetch_assoc();
             ?> 
            <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Datos del Asegurado</strong>
                        <input type="hidden" id="cod_cliente" name="cod_cliente" value="<?php echo $cert['cod_cliente']; ?>">
                        <input type="hidden" id="num_poliza" name="num_poliza" value="<?php echo $cert['nro_poliza']; ?>">
                        <input type="hidden" id="direccion" name="direccion" value="<?php echo $cert['direccion']; ?>">
                        <input type="hidden" id="prestatario" name="prestatario" value="<?php echo $cert['prestatario']; ?>">
                        <br>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">Prestarario: <?php echo $cert['prestatario']; ?></div>
                            <div class="col-md-4">Código del Cliente: <?php echo $cert['cod_cliente']; ?></div>
                            <div class="col-md-4">Número de Póliza: <?php echo $poliza; ?></div>
                            <div class="col-md-8">Dirección Legal: <?php echo $cert['direccion']; ?></div>
                            <div class="col-md-4">Teléfono: <?php echo $cert['carnet']; ?></div>
                            </div>
                            </div>
                        <hr style="background-color: #FFF100; height: 2px; border: 0;">
                        <strong>Datos del Vehículo</strong>
                        <input type="hidden" id="marca" name="marca" value="<?php echo $cert['marca']; ?>">
                        <input type="hidden" id="placa" name="placa" value="<?php echo $cert['placa']; ?>">
                        <input type="hidden" id="clase" name="clase" value="<?php echo $cert['clase']; ?>">
                        <br>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-4">Marca: <?php echo $cert['marca']; ?></div>
                            <div class="col-md-4">Placa: <?php echo $cert['placa']; ?></div>
                            <div class="col-md-4">Clase: <?php echo $cert['clase']; ?></div>
                            </div>
                        </div>
                        </div>
         
           <?php 
         }else{
         ?>
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
         
         
         <?php 
         }
         ?>
         
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
                                        <option>MUERTE ACCIDENTAL</option>
                                        <option>INVALIDÉZ PERMANENTE TOTAL Y/O PARCIAL</option>
                                        <option>GASTOS MÉDICOS</option>
                                        <option>GASTOS DE SEPELIO</option>
                                        <option>PÉRDIDA TOTAL POR ACCIDENTE</option>
                                        <option>PÉRDIDA TOTAL POR ROBO</option>
                                        <option>DAÑOS PROPIOS</option>
                                        <option>CONMOCIÓN CIVIL, HUELGA, DAÑO MALICIOSO 	</option>
                                        <option>SABOTAJE, VANDALISMO Y TERRORISMO</option>
                                        <option>ROBO PARCIAL</option>
                                      </select>
                                    </div> </div>
                            <div class="col-md-4"><div class="form-group">
                                    <label for="example">Monto de Reserva</label>
                                    <input type="text" class="form-control" id="reserva" name="reserva">
                                </div></div>
                            <div class="col-md-4"><div class="form-group">
                                    <label for="example">Inspector:</label>
                                    <input type="text" class="form-control" id="inspector" name="inspector">
                                </div></div>
                            <div class="col-md-4"><div class="form-group">
                                    <label for="example">Fecha de Denuncia:</label>
                                    <input type="text" class="form-control" id="f_denuncia" name="f_denuncia" placeholder="0000-00-00">
                                </div></div>
                            <div class="col-md-4"><div class="form-group">
                                    <label for="example">Fecha de Siniestro:</label>
                                    <input type="text" class="form-control" id="f_siniestro" name="f_siniestro" placeholder="0000-00-00">
                                </div></div>
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
                                <div class="col-md-4"><div class="form-group">
                                      <label for="sel1">Tipo de Categoria:</label>
                                      <select class="form-control" id="categoria" name="categoria">
                                        <option>Categoria</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>M</option>
                                        <option>P</option>
                                        <option>T</option>
                                      </select>
                                    </div> </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Fecha de Emisión:</label>
                                    <input type="text" class="form-control" id="fecha_emision" name="fecha_emision" placeholder="0000-00-00">
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
                                    <input type="text" class="form-control" id="fecha_incidente" name="fecha_incidente" placeholder="0000-00-00">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Hora del Incidente:</label>
                                    <input type="text" class="form-control" id="hora_incidente" name="hora_incidente" placeholder="00:00">
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
                                    <input type="text" class="form-control" id="fecha_reclamo" name="fecha_reclamo" placeholder="0000-00-00">
                                </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="form-group">
                                      <label for="sel1">Estado del Vehículo:</label>
                                      <select class="form-control" id="estado_vehiculo" name="estado_vehiculo">
                                          <option>Seleccione el Estado</option>
                                        <option>Vehículo en Movimiento</option>
                                        <option>Vehículo Estacionadi</option>
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
                                    <input type="text" class="form-control" id="fecha_emision_res" name="fecha_emision_res" placeholder="0000-00-00">
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
                                <div class="col-md-4"><div class="form-group">
                                      <label for="sel1">Tipo de Categoria:</label>
                                      <select class="form-control" id="categoria_res" name="categoria_res">
                                        <option>Categoria</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>M</option>
                                        <option>P</option>
                                        <option>T</option>
                                      </select>
                                    </div> </div>
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
                       <!-- <a href="../../automovil/include/registrar.php?codigo=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>"><button style="color:white;" class="btn btn-success pull-right" type="submit">Agregar Persona</button></a> -->
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Celular:</label>
                                    <input type="text" class="form-control" id="celular_per" name="celular_per">
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example">Email:</label>
                                    <input type="text" class="form-control" id="email_per" name="email_per">
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
    <script src="../../../js/bootstrap.min.js"></script>
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