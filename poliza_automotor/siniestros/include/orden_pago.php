<?php 
include "../../../verificar_sesion.php";
include "conexion.php";
$num_siniestro = $_REQUEST['num_siniestro'];
$cod_cliente = $_REQUEST['cod_cliente']; 
$num_poliza = $_REQUEST['num_poliza'];
$asegurado = $_REQUEST['asegurado'];
//$placa = $_REQUEST['placa'];
$ramo = 'AUTOMOTORES';
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
									<li><a href="../..poliza_automotor/siniestros/ver_liquidacion.php">Liquidaciones</a></li>
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
            <li><a href="#"><?php echo $user = $_SESSION["usuario"]; ?></a></li>
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
      
      <br><br>
      <div class="container">
          <form action="guarda_orden_pago.php" method="post">
          <input type="hidden" value="<?php echo $cod_cliente; ?>" name="cod_cliente" id="cod_cliente">
          <input type="hidden" value="<?php echo $num_poliza; ?>" name="num_poliza" id="num_poliza">
          <input type="hidden" value="<?php echo $user; ?>" name="user" id="user">
          <input type="hidden" value="<?php echo $num_siniestro; ?>" name="num_siniestro" id="num_siniestro">
          <div class="row">
              <div class="col-md-12">
            <div class="col-md-4">
          <div class="form-group">
            <label for="condiciones">Asegurado:</label>
            <input type="text" class="form-control" id="asegurado" name="asegurado" value="<?php echo $asegurado; ?>" readonly>
              </div>
            </div>
                  <div class="col-md-4">
          <div class="form-group">
            <label for="condiciones">Receptor:</label>
            <input type="text" class="form-control" id="receptor" name="receptor">
              </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
            <label for="condiciones">NIT Receptor:</label>
            <input type="text" class="form-control" id="nit_receptor" name="nit_receptor">
              </div>
          </div>
          </div>
              </div>
            <div class="col-md-12">
          <label for="exampleSelect1">Por concepto de:</label>
          <textarea id="concepto" name="concepto"></textarea>
              </div>
        <br><br>
          <div class="row">
          <div class="col-md-12">
          <div class="col-md-3">
              <div class="form-group">
            <label for="importe">Importe a Pagar:</label>
            <input type="text" class="form-control" id="importe" name="importe">
              </div>
        </div>
              <div class="col-md-3">
          <div class="form-group">
            <label for="formGroupExampleInput">Retención:</label>
            <input type="text" class="form-control" id="retencion" name="retencion">
          </div>
          </div>
         <div class="col-md-3">
          <div class="form-group">
            <label for="formGroupExampleInput">Pago Total:</label>
            <input type="text" class="form-control" id="pago_total" name="pago_total">
          </div>
          </div>
          <div class="col-md-3">
           <div class="form-group">
            <label for="exampleSelect1">Cobertura Afectada:</label>
            <select class="form-control" id="cobertura" name="cobertura">
              <option></option>
              <option>DAÑOS PROPIOS</option>
              <option>RESPONSABILIDAD CIVIL</option>
              <option>ROBO PARCIAL</option>
              <option>RECUPERO</option>
              <option>GASTOS MEDICOS</option>
              <option>PROTECCIÓN CONTRA ROBO</option>
              <option>T.R.D.P.</option>
              <option>ROBO, HURTO Y/O EXTRAVIO</option>
              <option>CLONACION "SKIMMING"</option>
              <option>PERDIDA TOTAL</option>
              <option>TODO RIESGO DE EQUIPO ELECTRONICO</option>
              <option>INCENDIO</option>
              <option>INUNDACION</option>
            </select>
          </div>
          </div>
              </div>
            <div class="col-md-12">
            <div class="col-md-4">
           <div class="form-group">
            <label for="formGroupExampleInput">Fecha de Indemnización:</label>
            <input type="text" class="form-control" id="indemnizacion" name="indemnizacion" placeholder="0000-00-00">
          </div>
          </div>
          <div class="col-md-4">
           <div class="form-group">
            <label for="formGroupExampleInput">Documento de Descargo:</label>
            <input type="text" class="form-control" id="descargo" name="descargo">
          </div>
          </div>
          <div class="col-md-4">
           <div class="form-group">
            <label for="exampleSelect1">Indemnizaci&oacute;n:</label>
            <select class="form-control" id="indem_si_no" name="indem_si_no">
              <option>Seleccione</option>
              <option>SI</option>
              <option>NO</option>
            </select>
          </div>
          </div>
                </div>
                <br><br>
            <div class="container">
                <h3>Datos de Factura</h3>
        <div class="col-md-12"> 
            <div class="col-md-4">
           <div class="form-group">
            <label for="formGroupExampleInput">N&uacute;mero de Factura:</label>
            <input type="text" class="form-control" id="num_factura" name="num_factura">
          </div>
          </div>
          <div class="col-md-4">
           <div class="form-group">
            <label for="formGroupExampleInput">C&oacute;digo de Factura:</label>
            <input type="text" class="form-control" id="cod_factura" name="cod_factura">
          </div>
          </div>
          <div class="col-md-4">
           <div class="form-group">
            <label for="exampleSelect1">Autorizaci&oacute;n:</label>
               <input type="text" class="form-control" id="autorizacion" name="autorizacion">
          </div>
          </div>
                </div>
            <div class="col-md-12">
            <div class="col-md-3">
           <div class="form-group">
            <label for="formGroupExampleInput">NIT:</label>
            <input type="text" class="form-control" id="nit_factura" name="nit_factura">
          </div></div>
          <div class="col-md-3">
           <div class="form-group">
            <label for="formGroupExampleInput">Importe de Factura:</label>
            <input type="text" class="form-control" id="importe_factura" name="importe_factura">
          </div></div>
          <div class="col-md-2">
           <div class="form-group">
            <label for="exampleSelect1">Tipo de Moneda:</label>
            <select class="form-control" id="moneda" name="moneda">
              <option>Seleccione</option>
              <option>BS</option>
              <option>USD</option>
            </select>
          </div>
          </div>
          <div class="col-md-4">
           <div class="form-group">
            <label for="exampleSelect1">Fecha:</label>
               <input type="text" class="form-control" id="fecha_factura" name="fecha_factura" placeholder="0000-00-00">
          </div>
          </div> 
              </div>
              <div class="col-md-12">
                  <div class="col-md-10"></div>
                <div class="col-md-2"><button type="submit" class="btn btn-primary">Guardar Cambios</button></div>
              </div>
        </div>
              </div>
          </form>
      </div>
      <br><br>
      
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