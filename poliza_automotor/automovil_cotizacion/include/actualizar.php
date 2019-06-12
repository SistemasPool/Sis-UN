<?php 
include "../../../verificar_sesion.php";
include 'conexion.php';
$id = $_REQUEST['id'];
$cod_cotizacion = $_REQUEST['cod_cotizacion'];

$sel = $con -> query("SELECT * FROM automovil_cotizacion WHERE id_automovil='$id' and cod_cotizacion='$cod_cotizacion'");
if ($fila = $sel -> fetch_assoc()) {
}
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

    <title>Editar RC</title>

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
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores</a>
								<ul class="dropdown-menu">
									<li><a href="../../cotizaciones/index.php">Cotización</a></li>
                                    <li><a href="../../polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                                    <li><a href="../../siniestros/index.php">Siniestros</a></li>
                                    <li><a href="../../reportes/include/reportes_automotor.php">Reportes</a></li>
								</ul>
							</li>
                        </ul>
                    </li>
                 <!--    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Link 1</a></li>
                            <li><a href="#">Dropdown Link 2</a></li>
                            <li><a href="#">Dropdown Link 3</a></li>
                            <li class="divider"></li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
								<ul class="dropdown-menu">
									<li><a href="#">Dropdown Submenu Link 4.1</a></li>
									<li><a href="#">Dropdown Submenu Link 4.2</a></li>
									<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li>
								</ul>
							</li>
                           <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
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
									</li>
								</ul>
							</li> -->
                        </ul>
  
                 <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><?php echo $_SESSION["usuario"]; ?></a></li>
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
<BR><BR>
    <div class="container">
<div class="panel panel-default">
          <div class="panel-heading">
            <h6 class="card-subtitle mb-2 text-muted">.:: EDITAR AUTOMOVIL ::.</h6>
          </div>
          <div class="panel-body">
          
	<form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="cod_cotizacion" value="<?php echo $cod_cotizacion; ?>">
                          <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Código del Cliente</label>
                                    <input type="text" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $fila['cod_cliente'] ?>">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Clase</label>
                                <input type="text" class="form-control" id="clase" name="clase" value="<?php echo $fila['clase'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Placa</label>
                                <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $fila['placa'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Año</label>
                                <input type="text" class="form-control" id="ano" name="ano" value="<?php echo $fila['ano'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Color</label>
                                <input type="text" class="form-control" id="color" name="color" value="<?php echo $fila['color'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="form-group">
                                <label for="exampleInputPassword1">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $fila['modelo'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Tracción</label>
                                <input type="text" class="form-control" id="traccion" name="traccion" value="<?php echo $fila['traccion'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Uso</label>
                                  <select class="form-control" id="uso" name="uso">
                                        <option value="0">Seleccione Uso:</option>
                                       <option value="OFICIAL">OFICIAL</option>
                                        <option value="PARTICULAR">PARTICULAR</option>
                                        <option value="PÚBLICO">PÚBLICO</option>
                                      </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Distrito</label>
                                <input type="text" class="form-control" id="distrito" name="distrito" value="<?php echo $fila['distrito'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Plazas</label>
                                <input type="text" class="form-control" id="plazas" name="plazas" value="<?php echo $fila['plazas'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Chasis</label>
                                <input type="text" class="form-control" id="chasis" name="chasis" value="<?php echo $fila['chasis'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Motor</label>
                                <input type="text" class="form-control" id="motor" name="motor" value="<?php echo $fila['motor'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Capital Asegurado</label>
                                <input type="text" class="form-control" id="auto_cap_aseg" name="auto_cap_aseg" value="<?php echo $fila['auto_cap_aseg'] ?>" readonly>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Tasa Prima</label>
                                <input type="text" class="form-control" id="tasa_prima" name="tasa_prima" value="<?php echo $fila['tasa_prima'] ?>">
                                </div>
                            </div> -->
                            <div class="col-md-4">
                                <br>
                                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                            </div>
                        </div>
                    </form>
              </div>
          <div class="panel-footer">.: Sistema UNIBienes :.</div>
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