<?php
include "../../verificar_sesion.php";
include "conexion.php";
$cod_cliente = $_REQUEST['cod_cliente'];

		          $sel = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno'];
                  $direccion = $fila['direccion'];
                  $telefono_fijo = $fila['telefono_fijo'];
                  $nit_ci = $fila['nit_ci'];
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
      <script src="script.js"></script>
    <title>.: Sistema UNIBienes :.</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
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
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <div class="container">
        <h2>Cotización Incendio</h2>
        <br>
	 <form action="procesa_cot_incendio.php" method="post">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Código Cliente</label>
                                    <input type="text" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $cod_cliente;?>" readonly="readonly">
                                  </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $nombres;?>" readonly="readonly">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ap. Paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $paterno;?>" readonly="readonly">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ap. Materno</label>
                                <input type="text" class="form-control" id="materno" name="materno" value="<?php echo $materno;?>" readonly="readonly">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Dirección Legal</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $direccion;?>" readonly="readonly">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono</label>
                                <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" value="<?php echo $telefono_fijo;?>" readonly="readonly">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">CI/NIT</label>
                                <input type="text" class="form-control" id="nit_ci" name="nit_ci"value="<?php echo $nit_ci;?>" readonly="readonly">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Valor del Inmueble USD</label>
                                <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor del Inmueble USD" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Tasa Prima</label>
                                <input type="text" class="form-control" id="tasa_prima" name="tasa_prima" placeholder="Tasa Prima" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha Inicio de Vigencia</label>
                                <input type="text" class="form-control" id="inicio_vigencia" name="inicio_vigencia" placeholder="0000-00-00" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Intermediario</label>
                                <?php
                                  $mysqli = new mysqli('localhost', 'root', '', 'unibienes');
                                ?>
                                  <select class="form-control" id="intermediario" name="intermediario">
                                        <option value="0">Seleccione Intermediario:</option>
                                        <?php
                                          $query = $mysqli -> query ("SELECT * FROM intermediarios order by intermediario");
                                          while ($interm = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$interm['intermediario'].'">'.$interm['intermediario'].'</option>';
                                          }
                                        ?>
                                      </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Comisión de Intermediario</label>
                                <input type="text" class="form-control" id="inter_comision" name="inter_comision" placeholder="Comisión de Intermediario">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ubicación del Riesgo</label>
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicación del Riesgo">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Dirección Asegurada</label>
                                <input type="text" class="form-control" id="dir_aseg" name="dir_aseg" placeholder="Dirección Asegurada">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tipo Pago</label>
                                <select type="text" class="form-control" id="tipo_pago" name="tipo_pago">
                                <option></option>
                                <option value="CREDITO">CREDITO</option>
                                <option value="CONTADO">CONTADO</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Materia del Asegurado</label>
                                <textarea type="text" class="form-control" id="materia" name="materia"></textarea>
                              </div>
                            </div>
                            
                            <div class="col-md-6">
                                <br>
                                 <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
</div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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