<?php
include "../../verificar_sesion.php";
include './include/conexion.php'; 
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
      <script src="js/funcion.js"></script>
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
                            <li><a href="../automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                    
                    
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../cotizaciones/index.php">Cotización</a></li>
                            <li><a href="../polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="../reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="../siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="../siniestros/index.php">Siniestros</a></li>
                                    <li><a href="../polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../siniestros/ver_liquidacion.php">Liquidaciones</a></li>
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
            <li><a href="#"><?php echo $usuario = $_SESSION["usuario"]; ?></a></li>
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <div class="container-fluid">
        <h3>Siniestros de Automotores</h3>
      <div class="starter-template">
        <br><br>
          <table id="example" style="font-size:11px;" class="table table-striped table-hover" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Cod. Siniestro</th>
                <th>Cod. Póliza</th>
                <th>Cod. Cliente</th>
                <th>Asegurado</th>
                <th>Placa</th>
                <th>Monto de Reserva</th> 
                <th>Estado</th>
                <th width='15%'></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Cod. Siniestro</th>
                <th>Cod. Póliza</th>
                <th>Cod. Cliente</th>
                <th>Asegurado</th>
                <th>Placa</th>
                <th>Monto de Reserva</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
                  <?php
		          $sel = $con ->query("SELECT * FROM siniestros");
		          while ($fila = $sel -> fetch_assoc()) {
		          ?>
		 <tr>
		 	<td><?php echo $num_siniestro = $fila['num_siniestro'] ?></td>
		 	<td><?php echo $poliza = $fila['num_poliza'] ?></td>
		 	<td><?php echo $cliente = $fila['cod_cliente'] ?></td>
            <td><?php echo $fila['asegurado'] ?></td>
            <td><?php echo $fila['placa_sin'] ?></td>
            <td><?php echo $monto_reserva = $fila['monto_reserva'] ?></td>
             <td><?php echo $fila['estado'] ?></td>
             <?php $id = $fila['id_siniestro'];
                      
              if($usuario=='Auditoria'){
             ?>
             <td>
             <a href="report_carpeta.php?num_siniestro=<?php echo $fila['num_siniestro'] ?>"><button class="btn btn-default btn-xs" type="submit" title="Resumen del Siniestro"><i class="fa fa-book"></i></button></a></td>
             <?php
              }else{
             ?>
         <td>
                <!-- <button type="button" class="btn btn-success btn-xs" style="font-size:11px;" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $id; ?>" data-whateversiniestro="<?php echo $num_siniestro; ?>" data-whatevermontoreserva="<?php echo $monto_reserva; ?>"><i class="fas fa-edit"></i></button> -->
                <a href="include/historial_siniestro.php?num_siniestro=<?php echo $fila['num_siniestro'] ?>"><button class="btn btn-primary btn-xs" type="submit" title="Estado"><i class="fas fa-file"></i></button></a>
                <a href="include/actualizar_siniestro.php?num_siniestro=<?php echo $fila['num_siniestro'] ?>"><button class="btn btn-warning btn-xs" type="submit" title="Modificar"><i class="fas fa-pencil-alt"></i></button></a>
                <a href="include/borrar.php?id=<?php echo $fila['id_automovil'] ?>"><button class="btn btn-danger btn-xs" type="submit" title="Eliminar"><i class="fas fa-times"></i></button></a>
                <a href="report_carpeta.php?num_siniestro=<?php echo $fila['num_siniestro'] ?>"><button class="btn btn-default btn-xs" type="submit" title="Resumen del Siniestro"><i class="fa fa-book"></i></button></a>
                <a href="include/orden_pago.php?num_siniestro=<?php echo $fila['num_siniestro']?>&num_poliza=<?php echo $poliza; ?>&cod_cliente=<?php echo $cliente;?>&asegurado=<?php echo $fila['asegurado']; ?>"><button class="btn btn-success btn-xs" type="submit" title="Orden de Pago"><i class="fa fa-usd" aria-hidden="true">$</i></button></a>
                </td>
             <?php } ?>
		 </tr>
                  <?php } ?>
        </tbody>
    </table>
      </div>
    </div><!-- /.container -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualiza Pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="registra_datos_sin.php" method="post">
          <div class="form-group">
            <!-- <label for="recipient-id" class="col-form-label">ID:</label> -->
            <input type="hidden" name="id" class="form-control" id="recipient-id">
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Estado</label>
                                <select class="form-control" name="estado" id="recipient-estado">
                                <option value="">Seleccione Estado</option>
                                <option value="ANULADO">ANULADO</option>
                                <option value="CERRADO">CERRADO</option>
                                <option value="DECLINADO">DECLINADO</option>
                                <option value="PAGADO">PAGADO</option>
                                <option value="PENDIENTE">PENDIENTE</option>
                                <option value="RECHAZADO">RECHAZADO</option>
                                </select> 
          </div>
          <div class="form-group">
           <!-- <label for="recipient-siniestro" class="col-form-label">Num. Siniestro:</label> --> 
            <input type="hidden" name="siniestro" class="form-control" id="recipient-siniestro">
          </div>
          <div class="form-group">
            <label for="recipient-montoreserva" class="col-form-label">Monto de Reserva:</label> 
            <input type="text" name="montoreserva" class="form-control" id="recipient-montoreserva">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
        </form>
    </div>
  </div>
</div> 
      </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/datatablejs.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
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
    <script type="text/javascript">    
    $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var recipientsiniestro = button.data('whateversiniestro')
    var recipientmontoreserva = button.data('whatevermontoreserva')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Actualiza Siniestro ' + recipient)
    modal.find('.modal-body input').val(recipient)
    modal.find('#recipient-id').val(recipient)
    modal.find('#recipient-siniestro').val(recipientsiniestro)
    modal.find('#recipient-montoreserva').val(recipientmontoreserva)
    })
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('#guardarpago').click(function(){ 
          })
        });
    </script>

    <script>
        $('#example').DataTable( {
    language: {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
        
} );
       
    </script>
    
  </body>
</html>