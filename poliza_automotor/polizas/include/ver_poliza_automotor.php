<?php
include "../../../verificar_sesion.php";
include 'conexion.php'; 
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
    <link href="../../../clientes/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../clientes/css/jquery.dataTables.min.css" rel="stylesheet">
    
    <link href="../../../clientes/js/jquery.dataTables.min.js" rel="stylesheet">
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
                                    <li><a href="../../siniestros/index.php">Siniestros</a></li>
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
            <li><a href="#"><?php echo $usuario = $_SESSION["usuario"]; ?></a></li>
              <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            
            <li><a href="../../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    <div class="container">
      <div class="starter-template">
        <br><br>
          <table id="example" class="table table-striped table-hover" width="100%" cellspacing="0" style="font-size:10px;">
        <thead>
            <tr><th>Nro Póliza</th>
                <th>Cod. Cliente</th>
                <th>Nombres</th>
                <th>Placa</th>
                <th>Clase</th>
                <th>Tipo</th>
                <th>Color</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr><th>Nro Póliza</th>
                <th>Cod. Cliente</th>
                <th>Nombres</th>
                <th>Placa</th>
                <th>Clase</th>
                <th>Tipo</th>
                <th>Color</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
                  <?php 
                  $s_distrito = $_SESSION["distrito"];
		          $sel = $con ->query("SELECT * FROM automovil WHERE distrito='$s_distrito' group by nro_poliza");
		          while ($fila = $sel -> fetch_assoc()) {
                  $cod_cliente = $fila['cod_cliente'];   
                  $se_cli = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
                  $secli= $se_cli -> fetch_assoc();
                  $nombres = $secli['nombres'];
                  $paterno = $secli['paterno'];
                  $materno = $secli['materno'];
                  $completo = $nombres." ".$paterno." ".$materno;
		          
        ?>
            
		 <tr>
            <td><?php echo $nro_poliza= $fila['nro_poliza'];?></td>
            <td><?php echo $fila['cod_cliente'];?></td>
            <td><?php echo $completo; ?></td>
		 	<td><?php echo $fila['placa']; ?></td>
		 	<td><?php echo $fila['clase']; ?></td>
		 	<td><?php echo $fila['marca']; ?></td>
            <td><?php echo $fila['color']; ?></td>
            <td><?php echo $fila['modelo']; ?></td>
            <?php
            if($fila['estado']=='ANULADA'){
            ?>
            <strong><td style="color:red;"><?php echo $fila['estado']; ?></td></strong>
            <?php
            }else{
		 	?>
             <td><?php echo $fila['estado']; ?></td>
             <?php
            }
              if($usuario=='Auditoria'){
             ?>
             <td>
             <a href="../../pdf/pdf_automotor.php?cod_cliente=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>"><button style="color:white;" class="btn btn-danger btn-xs" type="submit">PDF</button>
          </a>
                 <td><a href="estado_cuenta.php?cod_cliente=<?php echo $fila['cod_cliente'] ?>&nro_poliza=<?php echo $fila['nro_poliza'] ?>&tipo_pago=<?php echo $fila['tipo_pago']; ?>"><button class="btn btn-primary btn-xs" type="submit">Estado Cuenta</button></a></td>
             <?php
             }else{
             ?>
             <td>
                <a href="verpolizaauto.php?cod_cliente=<?php echo $fila['cod_cliente'] ?>&nro_poliza=<?php echo $fila['nro_poliza'] ?>"><button class="btn btn-primary btn-xs" type="submit">Ver Póliza</button></a></td>
                <td><a href="estado_cuenta.php?cod_cliente=<?php echo $fila['cod_cliente'] ?>&nro_poliza=<?php echo $fila['nro_poliza'] ?>&tipo_pago=<?php echo $fila['tipo_pago']; ?>"><button class="btn btn-primary btn-xs" type="submit">Estado Cuenta</button></a></td>
             <?php } ?>
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
    <script src="../../../clientes/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../clientes/js/datatablejs.js"></script>
    <script src="../../../clientes/js/jquery.dataTables.min.js"></script>
    
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