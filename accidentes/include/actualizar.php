<?php
include "../../verificar_sesion.php";
include '../include/conexion.php';
$id = $_REQUEST['id'];
$cod_cliente = $_REQUEST['cod_cliente'];

$sel = $con -> query("SELECT * FROM beneficiarios_ap WHERE id_ben_ap='$id' ");
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

    <title>.: Sistema UNIBienes :.</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <style>
        .marginBottom-0 {margin-bottom:0;}
        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu:hover>a:after{border-left-color:#555;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

      
    </style>
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
                            <li><a href="../../clientes/index.php">Clientes</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../poliza_automotor/automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores</a>
								<ul class="dropdown-menu">
									<li><a href="../../poliza_automotor/cotizaciones/index.php">Cotización</a></li>
                                    <li><a href="../../poliza_automotor/polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                                    <li><a href="../../poliza_automotor/siniestros/index.php">Siniestros</a></li>
                                    <li><a href="../../poliza_automotor/reportes/include/reportes_automotor.php">Reportes</a></li>
								</ul>
							</li>
                        </ul>
                    </li>
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

    <div class="container">
        <h2>Editar Registro</h2>
      <form action="update.php" enctype="multipart/form-data" method="post">
                        <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $fila['id_ben_ap']; ?>">
                            <input type="hidden" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $fila['cod_cliente']; ?>">
                            <input type="hidden" class="form-control" id="cod_cotizacion" name="cod_cotizacion" value="<?php echo $fila['cod_cotizacion']; ?>">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre Completo</label>
                                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="<?php echo $fila['nombre_completo']; ?>">
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Muerte Accidental</label>
                                <input type="text" class="form-control" id="muerte" name="muerte" value="<?php echo $fila['muerte_accidental']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Invalidez</label>
                                <input type="text" class="form-control" id="invalidez" name="invalidez" value="<?php echo $fila['invalidez']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Gastos Médicos</label>
                                <input type="text" class="form-control" id="gastos" name="gastos" value="<?php echo $fila['gastos']; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                            <?php 
                    date_default_timezone_set("America/La_Paz");
                    $date = date('Y-m-d'); ?>
                    <input type="hidden" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $date; ?>">
                            </div>
                        </div>
                    </form>
              </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
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