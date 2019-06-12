<?php
include "../verificar_sesion.php";
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" href="bootstrap/css/fondo.css">
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
            <li><a href="#"><?php echo $usuario = $_SESSION["usuario"]; ?></a></li>
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <div class="container-fluid">
      <div class="starter-template">
        <br><br>
          <table id="example" class="table table-striped table-hover" width="100%" cellspacing="0" style="font-size:12px;">
        <thead>
            <tr><!-- <th>Nro Póliza</th> -->
                <th width="10%">Código del Cliente</th>
                <th width="20%">Nombres</th>
                <th width="15%">Paterno</th>
                <th width="15%">Materno</th>
                <th width="10%">Teléfono</th>
                <th width="10%">Celular</th>
                <th width="10%">Distrito</th>
                <th  width="10%"></th>
                <th>
                    <a href="include/registrar.php"><button class="btn btn-default btn-sm"><i class="fas fa-user"></i></button></a>
                    <a href="juridica/registrar.php"><button class="btn btn-warning btn-sm"><i class="fas fa-industry"></i></button></a>
                </th>
            </tr>
        </thead>
        <tfoot>
            <tr> <!-- <th>Nro Póliza</th> -->
                <th>Código del Cliente</th>
                <th>Nombres</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>Teléfono</th>
                <th>Celular</th>
                <th>Distrito</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
                  <?php 
                  $s_distrito = $_SESSION["distrito"];
		          $sel = $con ->query("SELECT DISTINCT id_cliente, cod_cliente, nombres, paterno, materno, telefono_fijo, celular, distrito, persona FROM clientes");
		          while ($fila = $sel -> fetch_assoc()) {
		          ?>
		 <tr>
            <!-- <td><?php //echo $fila['nro_poliza'];?></td> -->
            <td><?php echo $fila['cod_cliente'];?></td>
		 	<td><?php echo $fila['nombres']; ?></td>
		 	<td><?php echo $fila['paterno']; ?></td>
		 	<td><?php echo $fila['materno']; ?></td>
            <td><?php echo $fila['telefono_fijo']; ?></td>
            <td><?php echo $fila['celular']; ?></td>
            <td><?php echo $fila['distrito']; ?></td>
             
            <?php 
                if($usuario=='Auditoria'){
                    ?>
                <td>
                <a href="include/ver_datos.php?id=<?php echo $fila['id_cliente'] ?>"><button class="btn btn-primary btn-xs" type="submit"><i class="fas fa-eye"></i></button></a>
                </td>
                <td>
              </td>   
                 <?php   
                }else{
             ?>
             <td>
                <a href="persona.php?id=<?php echo $fila['id_cliente'] ?>&cod_cliente=<?php echo $fila['cod_cliente']; ?>&persona=<?php echo $fila['persona'] ?>"><button class="btn btn-success btn-xs" type="submit"><i class="fas fa-pencil-alt"></i></button></a>
            <!--    <a href="include/borrar.php?id=<?php echo $fila['id_cliente'] ?>"><button class="btn btn-danger btn-xs" type="submit"><i class="fas fa-times"></i></button></a> -->
                <a href="include/ver_datos.php?id=<?php echo $fila['id_cliente'] ?>&persona=<?php echo $fila['persona'] ?>"><button class="btn btn-primary btn-xs" type="submit"><i class="fas fa-eye"></i></button></a>
                </td>
                <td>
                <select name="forma" onchange="location = this.value;">
                <option>Cotización de:</option>
                <option value="../poliza_automotor/polizas/include/cotizacion_automotor.php?cod_cliente=<?php echo $fila['cod_cliente']; ?>">Automotores</option>
                <option value="../incendio/include/cotizacion_incendio.php?cod_cliente=<?php echo $fila['cod_cliente']; ?>">Incendio</option>
                <option value="../accidentes/include/cotizacion_accidentes.php?cod_cliente=<?php echo $fila['cod_cliente']; ?>">Accidentes</option>
                <!-- <option value="Sitemap.php?id=<?php echo $fila['id_cliente'] ?>">Incendio</option> -->
                </select>
              </td>
             <?php
             }
            ?>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/datatablejs.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
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
		