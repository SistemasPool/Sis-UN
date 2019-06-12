<?php
//include "verificar_sesion.php";
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

    <title>Sistema UNIBienes</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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
              <a class="navbar-brand" href="#" target="_blank">Cartas</a>
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
      <div class="starter-template">
        <br><h3>Cartas</h3><br>
          <table class="table table-striped table-hover" width="80%" cellspacing="0" style="font-size:11px;">
        <thead>
            <tr> <!-- <th>Nro Póliza</th> -->
                <th>Nombre/Razon Social</th>
                <th>CI o NIT</th>
                <th>Monto</th>
                <th>Autorización</th>
                <th>Num de Factura</th>
                
                <th></th>

                    <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr> <!-- <th>Nro Póliza</th> -->
                <th>Nombre/Razon Social</th>
                <th>CI o NIT</th>
                <th>Monto</th>
                <th>Autorización</th>
                <th>Num de Factura</th>
                <th></th>

                <th></th>
            </tr>
        </tfoot>
        <tbody>
            
                  <?php
                  //$s_usuario = $_SESSION["usuario"];
                  
                  $sel = $con ->query("SELECT * FROM clientes");
                  $contador = 1;
		          while ($fila = $sel -> fetch_assoc()) {
                  require_once('codcontrol/CodigoControlV7.php');
                  
                    $pagador = $fila['pagador'];  
                    $nitf_cif = $fila['nitf_cif'];
                    $numero_autorizacion = '428401800014765';
                    $numero_factura = $contador;
                    $nit_cliente = $nitf_cif;
                    $fecha_compra = '20080927';
                    $monto_compra = '8';
                    $clave = 'RjMmHg#z\BdG(5a[2==WeU4-E5-3#SdQRNAuAYIi[6b%qJBp\yK=rMQn%\wjMm4)';
                  
		          ?>
		 <tr> 
             
            <!-- <td><?php //echo $fila['nro_poliza'];?></td> -->
		 	<td><?php echo $pagador; ?></td>
		 	<td><?php echo $nitf_cif; ?></td>
            <td><?php echo '8' ?></td>
            <td><?php echo $numero_autorizacion; ?></td>
            <td><?php echo $numero_factura; ?></td>
            <td><?php echo $fila['recepcionado']; ?></td>
            
		 	<td width="12%">
                
            <?php
            
            
            echo $codigo_control = CodigoControlV7::generar($numero_autorizacion, $numero_factura, $nit_cliente, $fecha_compra, $monto_compra, $clave); 
            $contador++;
            ?>
           <!--     <a href="actualizar.php?id=<?php echo $fila['id_cartas']; ?>"><button class="btn btn-success btn-xs" type="submit"><i class="fas fa-pencil-alt"></i></button></a>
                <a href="borrar.php?id=<?php echo $fila['id_cartas']; ?>"><button class="btn btn-danger btn-xs" type="submit"><i class="fas fa-times"></i></button></a>
                <a href="ver_datos.php?id=<?php echo $fila['id_cartas']; ?>"><button class="btn btn-primary btn-xs" type="submit"><i class="fas fa-eye"></i></button></a>
                <a href="<?php echo $fila['archivo']; ?>"><button class="btn btn-danger btn-xs" type="submit"><i class="fas fa-file-pdf"></i></button></a>
                <button type="button" class="fas fa-exchange-alt btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $fila['id_cartas']; ?>"></button> -->
                </td>
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
        <h5 class="modal-title" id="exampleModalLabel">Registra Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="actualiza_transferencia.php" method="post">
          <div class="form-group">
            <input type="hidden" name="id" class="form-control" id="recipient-id">
          </div>
                             <div class="form-group">
                              <label for="sel1">Receptor</label>
                              <select class="form-control" id="tranferencia" name="tranferencia">
                              <option value="AAMELLER">AAMELLER</option>
                              <option value="FIRIARTE">FIRIARTE</option>
                              <option value="JALVAREZ">JALVAREZ</option>
                              <option value="JPOMIER">JPOMIER</option>
                              <option value="MCAMACHO">MCAMACHO</option>
                              <option value="MPALMA">MPALMA</option>
                              <option value="PTORRICO">PTORRICO</option>
                              </select>
                            </div>
                               
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

      
    <script type="text/javascript">    
    $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
   // var recipientpago = button.data('whateverpago')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Registrar Traspaso')
   // modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body inpu').val(recipient)
    modal.find('#recipient-id').val(recipient)
    //modal.find('#recipient-pago').val(recipientpago)
    })
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
		