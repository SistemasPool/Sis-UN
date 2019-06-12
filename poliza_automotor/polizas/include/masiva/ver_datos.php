<?php
include "verificar_sesion.php";
include 'conexion.php'; 
$id = $_REQUEST['id'];
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
    <link href="../css/jquery.dataTables.min.css" rel="stylesheet">

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

    <div class="container-fluid">
      <div class="starter-template">
        <br><br>
          <h4>Datos del Documento</h4>
          <table class="table table-striped table-hover" width="100%" cellspacing="0" style="font-size:11px;">
        <thead>
         <tr><!-- <th>Nro Póliza</th> -->
                <th>F. Ingreso</th>
                <th>Cite Ext</th>
                <th>Remitente</th>
                <th>Referencia</th>
                <th>Documento</th>
                <th># Hoja Ruta</th>
                <th>Resp. Corresp.</th>
                <th>F. Resp. Corresp.</th>
                <th>Loc. Documento</th>
            </tr>
        </thead>
        <tbody>
                  <?php 
                  $s_distrito = $_SESSION["distrito"];
		          $sel = $con ->query("SELECT * FROM cartas WHERE id_cartas='$id'");
		          while ($fila = $sel -> fetch_assoc()) {
		          ?>
		 <tr> 
             
            <!-- <td><?php //echo $fila['nro_poliza'];?></td> -->
            <td style="color:#286090;"><?php echo $fila['fecha_entrada'];?></td>
		 	<td style="color:#286090;"><?php echo $fila['cite_externo']; ?></td>
		 	<td style="color:#286090;"><?php echo $fila['remitente']; ?></td>
		 	<td style="color:#286090;"><?php echo $fila['referencia']; ?></td>
            <td style="color:#286090;"><?php echo $fila['tipo_documento']; ?></td>
            <td style="color:#286090;"><?php echo $fila['num_hoja_ruta']; ?></td>
            <td style="color:#286090;"><?php echo $fila['resp_corresp']; ?></td>
            <td style="color:#286090;"><?php echo $fila['fecha_resp_corresp']; ?></td>
		 	<td style="color:#286090;"><?php echo $fila['loc_archivo_fisico']; ?></td>
                
		 </tr>
                  <?php } ?>
        </tbody>
    </table>
       </div>
     </div><!-- /.container -->
      
      <div class="container" style="width:500px;">
      <div class="starter-template">
          <h4>Datos de los Trapasos</h4>
          <table class="table table-striped table-hover" cellspacing="0" style="font-size:11px;">
        <thead>
            <tr><!-- <th>Nro Póliza</th> -->
                <th width="50%">En Posesión de:</th>
                <th width="50%">Fecha de Operación</th>
                 <th></th>
            </tr>
        </thead>
        <tbody>
                  <?php 
                  $s_distrito = $_SESSION["distrito"];
		          $selo = $con ->query("SELECT * FROM log_cartas WHERE id_cartas='$id' order by orden_log_cartas DESC");
		          while ($file = $selo -> fetch_assoc()) {
		          ?>
		 <tr> 
             
            <!-- <td><?php //echo $fila['nro_poliza'];?></td> -->
            <td style="color:#286090;"><?php echo $file['trans_user'];?></td>
		 	<td style="color:#286090;"><?php echo $file['fecha_trans']; ?></td>
            <td></td>
	 </tr>
                  <?php } ?>
        </tbody>
    </table>
       </div>
     </div><!-- /.container -->

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
      
    <script type="text/javascript">    
    $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
   // var recipientpago = button.data('whateverpago')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Registrar Contacto')
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