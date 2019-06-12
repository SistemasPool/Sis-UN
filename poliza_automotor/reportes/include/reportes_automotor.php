<?php
include "../../../verificar_sesion.php";
include 'conexion.php'; 
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

    <title>.: Sistema de UNIBienes :.</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../starter-template.css" rel="stylesheet">
    
    <link href="../css/jquery.dataTables.min.css" rel="stylesheet">
    
    <!-- datapicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>
      <script src="../js/funcion.js"></script>
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
                
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../cotizaciones/index.php">Cotización</a></li>
                            <li><a href="../../polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="../../reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="../../siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="../../siniestros/index.php">Siniestros</a></li>
                                    <li><a href="../../polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../../siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../../siniestros/ver_liquidacion.php">Liquidaciones</a></li>
								<!--	<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
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
            <li><a href="../../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    <br><br>
   <div class="container">
          <div class="panel panel-default">
            <div class="panel-heading">Reportes Automotor</div>
          <div class="panel-body">
                <h4>Reporte Producción</h4>
<form action="reporte_produccion.php" method="post">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="col-md-3">
        <div class="form-group">
            <label for="inicio_produccion">Fecha Inicio</label>
            <input type="text" class="form-control" name="inicio_produccion" id="inicio_produccion">
          </div>            
        </div>
        <div class="col-md-3">
        <div class="form-group">
            <label for="final_produccion">Fecha Final</label>
            <input type="text" class="form-control" name="final_produccion" id="final_produccion">
          </div>            
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <br>
            <label for="exampleFormControlInput1"></label>
            <input type="submit" class="btn btn-default btn-sm" name="generar_reporte">
            </div>
        </div>
    </div>
            </div></div>
</form>
          </div>
              
            <!--
    <div class="container">
<br><br>
    <h4>Reporte Siniestros</h4>
<form action="reporte_siniestros.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="col-md-3">
            <input type="text" class="form-control" id="inicio_siniestro" name="inicio_siniestro"></div>
        <div class="col-md-3">
            <input type="text" class="form-control" id="final_siniestro" name="final_siniestro"></div>
        <div class="col-md-3">
                <input type="submit" class="btn btn-default btn-sm" name="generar_repo">
        </div>
        </div>
    </div>
        </div>
</form>   <br><br>         
          
          <div class="panel-footer">Sistema .: UNIBienes :.</div>
        </div>
      </div> 
      </div>  -->

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      
    <script src="http://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#inicio_produccion").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#inicio_produccion").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        
        $(function() {
            $("#final_produccion").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#final_produccion").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        
         $(function() {
            $("#inicio_siniestro").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#inicio_siniestro").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        
        $(function() {
            $("#final_siniestro").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#final_siniestro").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        
    </script>
          
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