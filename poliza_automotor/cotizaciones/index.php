<?php
include("../../verificar_sesion.php");
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

    <title>Sistema UNIBienes</title>

    <!-- Bootstrap core CSS -->
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    
    
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
             <li><a href="#"><?php echo $s_distrito = $_SESSION["distrito"]; ?></a></li>
            <li><a href="../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <div class="container">
      <div class="starter-template">
        <br><br>
          <table id="example" class="table table-striped table-hover" width="100%" cellspacing="0" style="font-size:12px;">
        <thead>
            <tr><th>Cod. Cotización</th>
                <th>Documento</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Año</th>
                <th>Clase</th>
                <th>Modelo</th>
                <th>Tipo Pago</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr><th>Cod. Cotización</th>
                <th>Documento</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Año</th>
                <th>Clase</th>
                <th>Modelo</th>
                <th>Tipo Pago</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
                  <?php 
		          $sel = $con ->query("SELECT * FROM automovil_cotizacion WHERE distrito='$s_distrito' group by cod_cotizacion");
		          while ($fila = $sel -> fetch_assoc()) {
		          ?>
		 <tr>
            <td><?php echo $fila['cod_cotizacion'];?></td>
            <td><?php echo $fila['cod_cliente'];?></td>
            <td><?php echo $fila['placa'];?></td>
		 	<td><?php echo $fila['marca']; ?></td>
		 	<td><?php echo $fila['ano']; ?></td>
		 	<td><?php echo $fila['clase']; ?></td>
            <td><?php echo $fila['modelo']; ?></td>
             <?php $id= $fila['id_automovil']; ?>
		 	<td><?php echo $tipo_pago = $fila['tipo_pago'];?></td>
		 	<?php
              if($usuario =='Auditoria'){        
            ?>
             <td>
             <a href="../pdf/pdf_automotor_cot.php?cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button style="color:white;" class="btn btn-sm btn-danger pull-right" type="submit">PDF</button></a></td>
             <?php
              }else{
            ?>
             <td>
        <button type="button" class="btn btn-danger btn-xs" style="font-size:11px;" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $id; ?>" data-whateverpago="<?php echo $tipo_pago; ?>">Tipo Pago</button>
        <a href="include/crea_poliza.php?cod_cliente=<?php echo $fila['cod_cliente'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion'] ?>"><button style="font-size:11px;" class="btn btn-success btn-xs" type="submit">Crear Póliza</button></a>
        <a href="../polizas/include/verpoliza.php?cod_cotizacion=<?php echo $fila['cod_cotizacion'] ?>"><button style="font-size:11px;" class="btn btn-primary btn-xs" type="submit">Ver Cotización</button></a>
             </td>
           <?php } ?> 
                <td>
              </td>
		 </tr>
                  <?php } ?>
        </tbody>
    </table>
          
      </div>
 
    </div><!-- /.container -->
   
<!-- modal
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $id; ?>">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

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
        <form action="actualiza_pago.php" method="post">
          <div class="form-group">
            <input type="hidden" name="id" class="form-control" id="recipient-id">
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Tipo Pago</label>
                                <select class="form-control" name="tipo_pago" id="recipient-pago">
                                <option value="CREDITO">CREDITO</option>
                                <option value="CONTADO">CONTADO</option>
                                </select> 
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
    
    <script src="../librerias/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="../librerias/dataTables.bootstrap.min.js"></script>
    <script src="../librerias/jquery.dataTables.min.js"></script>
    
   
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
    var recipientpago = button.data('whateverpago')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Registrar Tipo de Pago')
   // modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
    modal.find('#recipient-id').val(recipient)
    modal.find('#recipient-pago').val(recipientpago)
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