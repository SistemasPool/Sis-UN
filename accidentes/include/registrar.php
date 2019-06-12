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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Registrar Accidentes Personales</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
     
    <!-- Datatables -->
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <style>
        .marginBottom-0 {margin-bottom:0;}
        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu:hover>a:after{border-left-color:#555;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}

        /* datepicker css */

.ui-datepicker {
    text-align: center;
}

.ui-datepicker-trigger {
    margin: 0 0 0 5px;
    vertical-align: text-top;
}

.ui-datepicker {
    font-family: Open Sans, Arial, sans-serif;
    margin-top: 2px;
    padding: 0 !important;
    border-color: #c9f0f5 !important;
}

.ui-datepicker {
    width: 256px;
}

.openemr-calendar .ui-datepicker {
    width: 191px;
}

.ui-datepicker table {
    width: 256px;
    table-layout: fixed;
}

.openemr-calendar .ui-datepicker table {
    width: 191px;
    table-layout: fixed;
}

.ui-datepicker-header {
    background-color: #3e9aba !important;
    background-image: none !important;
    border-radius: 0;
}

.openemr-calendar .ui-datepicker-header {
    background-color: #e6f7f9 !important;
    border-width: 1px;
    border-color: #c9f0f5;
    border-style: solid;
}

.ui-datepicker-title {
    line-height: 35px !important;
    margin: 0 10px !important;
}

.openemr-calendar .ui-datepicker-title {
    line-height: 20px !important;
}

.ui-datepicker-prev span {
    display: none !important;
}

.ui-datepicker-next {
    text-align: center;
}

.ui-datepicker-next span {
    display: none !important;
}

.ui-datepicker-prev {
    background-color: transparent !important;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAMCAYAAACulacQAAAAUklEQVQYlXWPwQnAMAwDj9IBOlpH8CjdJLNksuujFIJjC/w6WUioFBcqJ7sGEAD5Y/hpqLRghRv4YQlUjqXI3Kql2MixraGbEhVcDXcFUR/1egEHNuTBpFW0NgAAAABJRU5ErkJggg==') !important;
    height: 12px !important;
    width: 7px !important;
    margin: 14px 12px;
    display: inline-block;
    left: 0 !important;
    top: 0 !important;
}

.openemr-calendar .ui-datepicker-prev {
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAOCAYAAAD9lDaoAAAAuUlEQVQokXXRsUtCYRAA8J8pDQ1CVIgIgtBU2NDiZIuDS4uLf6WDS1O0tLREEE8icBNKS3lTs8/B78XHw3dwcHA/juOuqjzucYJVrQQMcYctvo4OgEFIeMK6iPphCjzjEWLUC3vACx7yRo5uMUIFr5gii1EL41AvMIkBVPGH04DrSLEsIvjEOZq4wi9+iijDR0ANXOMbmxjlcIY2LtANO6YxymGCDs5wg/ciYv+KBJeY4+2A+Y9j4Y47RtUkrNXeDxUAAAAASUVORK5CYII=') !important;
    height: 14px !important;
    width: 9px !important;
    margin: 5px !important;
}

.ui-datepicker-next {
    cursor: pointer;
}

.ui-datepicker-prev {
    cursor: pointer;
}

.ui-datepicker-next {
    background-color: transparent !important;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAMCAYAAABfnvydAAAAVUlEQVQYlXWQ0Q3AIAhEL07gKI7kKN2kI3Wk1w9to3KQEELucQEECOizhhTQGHFnwOdgobWx0GkZILfYBhXl0STVbPoBarbkL7ozN/F8VBBXh8uJgF5r2hrI4GHUkAAAAABJRU5ErkJggg==') !important;
    height: 12px !important;
    width: 8px !important;
    margin: 14px 12px;
    display: inline-block;
    right: 0 !important;
    top: 0 !important;
}

.openemr-calendar .ui-datepicker-next {
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAOCAYAAAASVl2WAAAAtElEQVQYlXXQsUpCcRQH4I97EQyHa1pgIEE0hBGYL+BjNLRFjxXh4rM4F21BS4S4FAgqQioOngt/RM/6+zi/w4EanlA4MDkecYsO3vG/D8a4Rx03eMMqBQt8oodTXAdalwBm+IpNDVxG3aYEMMU3ujjDBT5SAH9R2cE58mwPFOgneJSCGp7RjLoXTEtQjbCFOV7xCxkqdp9sYxnhpFyb4QFXdh8c4Cc9Ko++OwzjFwfn5FiwBVeuI/K2UCkSAAAAAElFTkSuQmCC') !important;
    height: 14px !important;
    width: 8px !important;
    margin: 5px;
}

.ui-datepicker-month {
    border-radius: 2px;
    background-color: #3985a0;
    width: 110px !important;
    height: 22px;
    font-family: Open Sans !important;
    color: #fff;
    font-size: 14px !important;
    font-weight: 600;
    text-align: left;
    border: none !important;
    margin-right: 17px !important;
    vertical-align: text-top;
}

.openemr-calendar .ui-datepicker-month {
    font-family: Open Sans, Arial, sans-serif;
    color: rgba(34, 34, 34, 0.87);
    font-size: 12px !important;
    font-weight: 700;
    text-align: center;
    transform: scaleX(1.0029)
}

.ui-datepicker-year {
    border-radius: 2px;
    background-color: #3985a0;
    width: 61px !important;
    height: 22px;
    border: none !important;
    font-family: Open Sans !important;
    color: #fff;
    font-size: 14px !important;
    font-weight: 600;
    text-align: left;
    vertical-align: text-top;
}

.openemr-calendar .ui-datepicker-year {
    font-family: Open Sans, Arial, sans-serif;
    color: rgba(34, 34, 34, 0.87);
    font-size: 12px !important;
    font-weight: 700;
    text-align: center;
    transform: scaleX(1.0029)
}

.ui-datepicker-month option,
.ui-datepicker-year option {
    color: #3985a0 !important;
    background-color: #fff !important;
    font-family: Open Sans !important;
    font-size: 14px !important;
    font-weight: 600;
}

.ui-datepicker-month option[selected],
.ui-datepicker-year option[selected] {
    background-color: #e5edf0 !important;
}

.ui-datepicker .ui-state-hover {
    /*background: none !important;*/
    border: 0 !important;
}

.ui-datepicker td {
    vertical-align: top;
}

.ui-datepicker .ui-state-default {
    border-radius: 2px;
    border-color: #edebeb !important;
/*     background: white !important; */
    width: 24px;
    height: 24px;
    padding: 0 !important;
    line-height: 24px;
    text-align: center !important;
    font-family: Open Sans, Arial, sans-serif;
    color: #707070;
    font-size: 13px;
    font-weight: 400 !important;
    margin: 7px 0 0 4px;
}

.ui-datepicker .ui-state-default.ui-state-highlight{
    border-color: #dcdcdc;
    background-color: #cff3f8 !important;
    color: #3e9aba !important;
}

.openemr-calendar .ui-state-default {
    font-size: 10px;
    margin: 0;
}

.ui-datepicker td {
    width: 33px;
}

.openemr-calendar .ui-datepicker td {
    width: 26px;
}

.openemr-calendar .ui-state-default {
    width: 26px;
    height: 20px;
    line-height: 20px;
}
.ui-state-default.ui-state-hover {
    border-color: #dcdcdc;
    background-color: #cff3f8 !important;
}

.ui-datepicker .ui-state-active {
    border-color: #dcdcdc;
    background-color: #cff3f8 !important;
    color: #3e9aba !important;
} 

.ui-datepicker-calendar thead tr th {
    font-family: Open Sans, Arial, sans-serif;
    color: #549fa8;
    font-size: 12px;
    font-weight: 400;
    padding: 0.45em 0.3em !important;
    /*   width: 15px !important; */
}

.openemr-calendar .ui-datepicker-calendar thead tr th {
    font-size: 10px;
}

.ui-datepicker-close {
    display: none;
}

.ui-datepicker thead {
    background-color: #f5f5f5;
}

.openemr-calendar .ui-datepicker thead {
    background: none;
}

.ui-state-default.ui-datepicker-current {
    float: none !important;
    font-family: Open Sans, Arial, sans-serif;
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    text-align: left;
    border-width: 0 !important;
    border: none;
    vertical-align: top;
    margin: 0 !important;
    background-color: transparent !important;
}

.ui-datepicker-buttonpane.ui-widget-content {
    text-align: center;
    background-color: #3e9aba;
    margin: 0 !important;
    height: 28px;
    padding: 0 !important;
}

.openemr-calendar .ui-datepicker-year {
    background-color: transparent;
}

.openemr-calendar .ui-datepicker-month {
    background-color: transparent;
}

.openemr-calendar .ui-state-default {
    border: 0 !important;
}

.openemr-calendar .ui-datepicker-month {
    margin-right: 10px !important;
}

      
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
      <br><br>
    <div class="container">
        <h4>Registrar Cotizaci&oacute;n Accidentes Personales</h4>
        <br>
      <div class="starter-template">

	 <form action="procesa_cot_ap.php" enctype="multipart/form-data" method="post">
                        <div class="row">
                        <input type="hidden" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $fila['cod_cliente']; ?>">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Asegurado</label>
                                    <input type="text" class="form-control" id="completo" name="completo" value="<?php echo $nombre_completo; ?>" readonly>
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
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Zona</label>
                                <input type="text" class="form-control" id="zona" name="zona" value="<?php echo $fila['zona']; ?>" readonly>
                              </div>
                            </div>
                            
                            <div class="col-md-2">
                                 <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono Fijo</label>
                                <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" value="<?php echo $fila['telefono_fijo']; ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-2">
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
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Suma Asegurada</label>
                                <input type="text" class="form-control" id="suma_a" name="suma_a" placeholder="Suma Asegurada">
                              </div>
                                </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Prima Total</label>
                                <input type="text" class="form-control" id="prima_total" name="prima_total" placeholder="Prima Total">
                              </div>
                                </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">F. de Inicio</label>
                                <input type="text" class="form-control" id="f_inicio" name="f_inicio" placeholder="Fecha de Inicio e Vigencia">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Comisión Intermediario</label>
                                <input type="text" class="form-control" id="comision" name="comision" placeholder="Comisión Intermediario">
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
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Tipo Pago</label>
                                <select type="text" class="form-control" id="tipo_pago" name="tipo_pago">
                                <option value="CREDITO">CREDITO</option>
                                <option value="CONTADO">CONTADO</option>
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