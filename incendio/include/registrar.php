<?php
//include("../../verificar_sesion.php");
include 'conexion.php';
$s_distrito = $_SESSION["distrito"];
		          $sel = $con ->query("SELECT * FROM clientes");
$fila = $sel -> fetch_assoc();
$nombre_completo = $fila['nombres']." ".$fila['paterno']." ".$fila['materno'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
      
<script language="JavaScript">
function CambiarFormulario(){
	switch(document.forms[0].pep.selectedIndex){
		case 0: 
			document.forms[0].cargo_pep.disabled=true;
			break;
		case 1: 
			document.forms[0].cargo_pep.disabled=false;
			break;
	}
}
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Registrar Incencio</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

    <!-- Datatables -->
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="css/jquery.dataTables.min.css" rel="stylesheet">

 
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

  <body onLoad="CambiarFormulario();">
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
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    <div class="container">
        <h4>Registrar Cotizaci&oacute;n Incendio</h4>
      <div class="starter-template">

	 <form action="guardar.php" enctype="multipart/form-data" method="post">
                        <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" id="ids" name="ids" value="<?php echo $ids; ?>">
                            <input type="hidden" class="form-control" id="idau" name="idau" value="<?php echo $idau; ?>">
                            <input type="hidden" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $pref.str_pad($ids, 8, "0", STR_PAD_LEFT); ?>">
                            <input type="hidden" class="form-control" id="nro_poliza" name="nro_poliza" value="<?php echo $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT); ?>">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Asegurado</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $nombre_completo; ?>" readonly>
                                  </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Número de Documento</label>
                                <input type="text" class="form-control" id="num_doc" name="num_doc" value="<?php echo $fila['nit_ci']; ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $fila['direccion']; ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Materia del Seguro</label>
                            <textarea name="materia" class="form-control" id="materia" rows="5"></textarea>
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Zona</label>
                                <input type="text" class="form-control" id="zona" name="zona" value="<?php echo $fila['zona']; ?>" readonly>
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                                 <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono Fijo</label>
                                <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" value="<?php echo $fila['telefono_fijo']; ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $fila['celular']; ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $fila['email']; ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Valor Asegurado</label>
                                <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor Asegurado">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Valor Total</label>
                                <input type="text" class="form-control" id="valor_total" name="valor_total" placeholder="Valor Total">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">F. de Inicio</label>
                                <input type="text" class="form-control" id="f_inicio" name="f_inicio" placeholder="Fecha de Inicio e Vigencia">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">A Favor Clausula de Subrogación</label>
                                <input type="text" class="form-control" id="subrogacion" name="subrogacion" placeholder="A Favor">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Prima Clausula de Subrogación</label>
                                <input type="text" class="form-control" id="subrogacion" name="subrogacion" placeholder="Prima">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Comisión Intermediario</label>
                                <input type="text" class="form-control" id="comision" name="comision" placeholder="Comisión Intermediario">
                              </div>
                                </div>
                            <div class="col-md-4">
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
          <br><br>
</div><!-- /.container -->

      </div>
      
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="http://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#f_inicio").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#f_inicio").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        
        $(function() {
            $("#f_ingreso").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#f_ingreso").datepicker({
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
      <script>
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () {
$("#fecha").datepicker();
});
</script>

  </body>
</html>