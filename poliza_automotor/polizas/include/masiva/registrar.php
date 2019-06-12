<?php
include("verificar_sesion.php");
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
      <script>
        function numeros(e){
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " 0123456789";
        especiales = [8,37,39,46];
     
        tecla_especial = false
        for(var i in especiales){
     if(key == especiales[i]){
         tecla_especial = true;
         break;
            } 
        }
     
        if(letras.indexOf(tecla)==-1 && !tecla_especial)
            return false;
    }
      </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Registrar Cliente</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    
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
              <a class="navbar-brand" href="#" target="_blank">Entidades</a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
  
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
        <h3>Registrar Carta</h3>
      <div class="starter-template">
          <br><br>
	 <form action="guardar.php" enctype="multipart/form-data" method="post">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha de Recepción</label>
                                <input type="text" class="form-control" id="f_recepcion" name="f_recepcion">
                              </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha del Documento</label>
                                <input type="text" class="form-control" id="f_documento" name="f_documento">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Cite Externo</label>
                                <input type="text" class="form-control" id="cite_ext" name="cite_ext">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Remitente</label>
                                <input type="text" class="form-control" id="remitente" name="remitente">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Referencia</label>
                                <input type="text" class="form-control" id="referencia" name="referencia">
                              </div>
                            </div>
                            <div class="col-md-3">
                                 <div class="form-group">
                                  <label for="sel1">Tipo de Documento</label>
                                  <select class="form-control" id="tipo_doc" name="tipo_doc">
                                    <option value="">Seleccione tipo de documento..</option>
                                    <option value="CARTA">CARTA</option>
                                    <option value="CERTIFICADO ÚNICO">CERTIFICADO ÚNICO</option>
                                    <option value="CIRCULAR">CIRCULAR</option>
                                    <option value="FACTURA">FACTURA</option>
                                    <option value="INFORME">INFORME</option>
                                    <option value="RESOLUCIÓN ADMINISTRATIVA">RESOLUCIÓN ADMINISTRATIVA</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                 <div class="form-group">
                                  <label for="sel1">Departamento</label>
                                  <select class="form-control" id="departamento" name="departamento">
                                    <option value="">Seleccione Departamento..</option>
                                    <option value="ADMINISTRACIÓN">ADMINISTRACIÓN</option>
                                    <option value="COMERCIAL">COMERCIAL</option>
                                    <option value="GERENCIA GENERAL">GERENCIA GENERAL</option>
                                    <option value="LEGAL">LEGAL</option>
                                    <option value="TECNICA">TECNICA</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                 <div class="form-group">
                                  <label for="sel1">Destinatario</label>
                                  <select class="form-control" id="recepcionado" name="recepcionado">
                                    <option value="">Seleccione Destinatario..</option>
                                    <option value="AAMELLER">AAMELLER</option>
                                    <option value="DGUTIERREZ">DGUTIERREZ</option>
                                    <option value="GTOLEDO">GTOLEDO</option>
                                    <option value="JALVAREZ">JALVAREZ</option>
                                    <option value="JPOMIER">JPOMIER</option>
                                    <option value="JPSALDIAS">JPSALDIAS</option>
                                    <option value="MCAMACHO">MCAMACHO</option>
                                    <option value="MPALMA">MPALMA</option>
                                    <option value="NLOPEZ">NLOPEZ</option>
                                    <option value="PTORRICO">PTORRICO</option>
                                    <option value="SCOQUIRA">SCOQUIRA</option>
                                  </select>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Archivo</label>
                                <input type="file" class="form-control" id="archivo" name="archivo">
                              </div>
                                </div>
                       <!--  <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Respuesta Correspondencia</label>
                                <input type="text" class="form-control" id="resp_corresp" name="resp_corresp">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha de Respuesta de Correspondencia</label>
                                <input type="text" class="form-control" id="fecha_resp_corresp" name="fecha_resp_corresp">
                              </div>
                                </div>
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Localización del Archivo</label>
                                <input type="text" class="form-control" id="loc_archivo_fisico" name="loc_archivo_fisico">
                              </div>
                                </div> -->
                                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            <?php 
                                date_default_timezone_set("America/La_Paz");
                                $date = date('Y-m-d'); ?>
                                <input type="hidden" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $date; ?>">
                                </div>
                        </div>
                        </div>
                    </form>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
      
         <script type="text/javascript">
        $(function() {
            $("#fecha_resp_corresp").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#fecha_resp_corresp").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
             
        $(function() {
            $("#f_documento").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#f_documento").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        $(function() {
            $("#f_recepcion").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#f_recepcion").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        $(function() {
            $("#fecha_recepcion").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#fecha_recepcion").datepicker({
                onSelect: function(dateStr) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) { 
                        minDate.setDate(minDate.getDate() + 1);
                    }
                }
            });
        });
        
    </script>

  </body>
</html>