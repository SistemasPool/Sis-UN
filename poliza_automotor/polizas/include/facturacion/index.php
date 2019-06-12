<?php
include "../../../../verificar_sesion.php";
include '../../include/conexion.php'; 
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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
    <link href="../../css/jquery.dataTables.min.css" rel="stylesheet">

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
                            <li><a href="index.php">Clientes</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../poliza_automotor/automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../poliza_automotor/cotizaciones/index.php">Cotización</a></li>
                            <li><a href="../poliza_automotor/polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="../poliza_automotor/reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="../poliza_automotor/siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="../poliza_automotor/polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../poliza_automotor/siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../poliza_automotor/siniestros/ver_liquidacion.php">Liquidaciones</a></li>
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
            <li><a href="../salir.php">Salir</a></li>
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
            <tr><!-- <th>Nro Póliza</th> -->
                <th>Num.</th>
                <th>Num. Póliza</th>
                <th>Nombre/Razon</th>
                <th>CI/NIT</th>
                <th>Num. Factura</th>
                <th>Fecha Factura</th>
                <th>Importe</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr> <!-- <th>Nro Póliza</th> -->
                <th>Num.</th>
                <th>Num. Póliza</th>
                <th>Nombre/Razon</th>
                <th>CI/NIT</th>
                <th>Num. Factura</th>
                <th>Fecha Factura</th>
                <th>Importe</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            

            
                  <?php 
                  $contador=1;
                  $s_distrito = $_SESSION["distrito"];
		          $sel = $con ->query("SELECT * FROM `libro_ventas`");
		          while ($fila = $sel -> fetch_assoc()) {
		          ?>
		 <tr>
            <!-- <td><?php //echo $fila['nro_poliza'];?></td> -->
            <td><?php echo $contador;?></td>
            <td><?php echo $fila['num_poliza']; ?></td>
		 	<td><?php echo $fila['nombre_razon']; ?></td>
		 	<td><?php echo $fila['ci_nit']; ?></td>
		 	<td><?php echo $fila['num_factura']; ?></td>
            <td><?php echo $fila['fecha_factura']; ?></td>
            <td><?php echo "Bs ".number_format($fila['importe_venta'],2); ?></td>
		 	<td>
               <a href="factura_pdflv.php?id=<?php echo $fila['id_lv'] ?>"><button class="btn btn-danger btn-xs" type="submit"><i class="fas fa-file-pdf"></i></button></a>
                </td>
		 </tr>
                  <?php  $contador++; } ?>
        </tbody>
    </table>
       </div>
     </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../../js/datatablejs.js"></script>
    <script src="../../js/jquery.dataTables.min.js"></script>
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