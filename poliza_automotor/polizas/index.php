<?php 
include './include/conexion.php'; 
include "../../verificar_sesion.php";
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
    
    <link href="css/jquery.dataTables.min.css"starter-template.css"" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="padding:50px;">
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UNIBienes</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
              <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personas <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Clientes</a></li>
          <li><a href="#">Usuarios</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../poliza_automotor/automovil/index.php">Automovil</a></li>
          <li><a href="#">Casa</a></li>
        </ul>
      </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../poliza_automotor/polizas/index.php">Automotores</a></li>
          <li><a href="#">Incencio</a></li>
        </ul>
      </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">
      <div class="starter-template">
        <br><br>
          <table id="example" class="table table-striped table-hover" width="100%" cellspacing="0">
        <thead>
            <tr><th>Nro Póliza</th>
                <th>Código del Cliente</th>
                <th>Nombres</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>Teléfono</th>
                <th>Celular</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr><th>Nro Póliza</th>
                <th>Código del Cliente</th>
                <th>Nombres</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>Teléfono</th>
                <th>Celular</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
                  <?php 
		          $sel = $con ->query("SELECT * FROM clientes");
		          while ($fila = $sel -> fetch_assoc()) {
		          ?>
		 <tr>
            <td><?php echo $fila['nro_poliza'];?></td>
            <td><?php echo $fila['cod_cliente'];?></td>
		 	<td><?php echo $fila['nombres']; ?></td>
		 	<td><?php echo $fila['paterno']; ?></td>
		 	<td><?php echo $fila['materno']; ?></td>
            <td><?php echo $fila['telefono_fijo']; ?></td>
            <td><?php echo $fila['celular']; ?></td>
		 	<td>
                <a href="include/borrar.php?id=<?php echo $fila['id_cliente'] ?>"><button class="btn btn-primary btn-xs" type="submit">Ver Póliza</button></a></td>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/datatablejs.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
        

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
		