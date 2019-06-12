<?php 
include "../../../verificar_sesion.php";
include "conexion.php";
$num_orden = $_REQUEST['num_orden'];
$num_siniestro = $_REQUEST['num_siniestro']; 
$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
       <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
      <!-- Editor Tiny -->
      <script src="../../polizas/tinymce/js/tinymce/tinymce.min.js"></script>
      <script>tinymce.init({ selector:'textarea' });</script>
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
                            <li><a href="poliza_automotor/automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                    
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../cotizaciones/index.php">Cotización</a></li>
                            <li><a href="../../polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="../../reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="../../siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="../../polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../../siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../../poliza_automotor/siniestros/ver_liquidacion.php">Liquidaciones</a></li>
								<!--	<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
								</ul>
							</li>
                    
                    
                        </ul>
  
                 <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><?php echo $user = $_SESSION["usuario"]; ?></a></li>
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
      
      <br><br>
      <div class="container">
          <h4>Cuenta</h4>
          <form action="guarda_liquidacion.php" method="post">
          <input type="hidden" value="<?php echo $num_orden; ?>" name="num_orden" id="num_orden">
          <input type="hidden" value="<?php echo $user; ?>" name="user" id="user">
          <input type="hidden" value="<?php echo $num_siniestro; ?>" name="num_siniestro" id="num_siniestro">
          <div class="row">
              <div class="col-md-12">
            <div class="col-md-4">
          <div class="form-group">
            <label for="condiciones">N&uacute;mero de Cheque:</label>
            <input type="text" class="form-control" id="num_cheque" name="num_cheque">
              </div>
            </div>
            <div class="col-md-4">
          <div class="form-group">
            <label for="condiciones">Girado a:</label>
            <input type="text" class="form-control" id="girado" name="girado">
              </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
            <label for="condiciones">N&uacute;mero de Transacci&oacute;n:</label>
            <input type="text" class="form-control" id="num_tran" name="num_tran">
              </div>
          </div>
          </div>
            
              <div class="col-md-12">
            <div class="col-md-3">
          <div class="form-group">
            <label for="condiciones">Monto:</label>
            <input type="text" class="form-control" id="monto" name="monto">
              </div>
            </div>
            <div class="col-md-6">
          <div class="form-group">
            <label for="condiciones">Monto con Letra:</label>
            <input type="text" class="form-control" id="monto_letra" name="monto_letra">
              </div>
            </div>
            <br>
              <div class="col-md-3"><button type="submit" class="btn btn-primary">Guardar Cambios</button></div>
          </div>
          </div>
          </form>
           </div>
  
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
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