<?php
//$con = new mysqli('localhost','unibiene_facuni','Facturas1480','unibiene_facturas');
$con = new mysqli('localhost','root','','unibienes');
$con->query("SET NAMES 'utf8'");
?>

<!DOCTYPE html>
<html lang="es">
  <head>
      <script>
        function expRegular(e)
            {
            var tecla;
            tecla = (document.all) ? e.keyCode : e.which;
            if(tecla == 8)
            {return true;}
            var patron;
            patron = /[0-9]/
            var te;
            te = String.fromCharCode(tecla);
            return patron.test(te);
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

      body {
        background: url(img/fondo_fact.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
          color:white;
}

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
              <a class="navbar-brand" href="#" target="_blank">Facturación Electrónica</a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
  
                 <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><?php echo $_SESSION["usuario"]; ?></a></li>
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>-->
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
<div class="container">
      <div class="starter-template">
        <br><h3>Facturación Electrónica</h3><br>

<div class="row">
    <div class="col-md-12">
<form action="index.php" method="get">
<div class="col-md-4">
<label for="exampleInputEmail1" >Ingrese su número de Carnet</label>
<input type="text" name="palabra" class="form-control mr-sm-2" value="<?php  echo ($_GET["palabra"]); ?>" onkeypress="return expRegular(event);">
    </div>
<div class="col-md-3">
    <br>
<input type="submit" class="btn btn-primary my-2 my-sm-0" name="buscador" value="Buscar">
    </div>
</form>
    </div>
</div>
                  <?php
                    if ($_GET['buscador']){
                            $buscar = $_GET['palabra'];

                        if (empty($buscar))
                        {
                        echo'<script type="text/javascript">
                            alert("No ha ingresado ningun número de Carnet");
                            </script>';
                        //echo "No se ha ingresado ninguna palabra";
                        }
                        else
                        {

                $sql = $con -> query("SELECT * FROM libro_ventas WHERE ci_nit LIKE '%$buscar%' OR num_factura LIKE '%$buscar%'");

                        if ($row = $sql -> fetch_assoc()) {
                       
                         echo "Resultados para el número de Carnet : $buscar";

                        do {
                        ?>
                        <table class="table table-hover" width="60%" cellspacing="0" style="font-size:12px;">
        <thead>
            <tr> <!-- <th>Nro Póliza</th> -->
                <th>Nombre/Razon Social</th>
                <th>Fecha de Facturación</th>
                <th>Concepto</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                        <tr style="background:#286090;"> 
                        <!-- <td><?php //echo $fila['nro_poliza'];?></td> -->
                        <td><?php echo utf8_encode($row['nombre_razon']); ?></td>
                        <td><?php echo $row['fecha_factura']; ?></td>
                        <td><?php echo utf8_encode($row['concepto']); ?></td>
                        <td width="12%">
                            <a href="reporte.php?id=<?php echo $row['id_lv']; ?>"><button style="background:#fff;" class="btn btn-sm" type="submit"><i class="fas fa-print"></i></button></a>
                            </td>
                     </tr>
                    </tbody>

                        <?php
                        }
                        while ($row = $sql -> fetch_assoc());
                        }
                        else
                        {
                        echo "No se encontraron resultados para: $buscar";
                        }
                        }
                        }
                  
		          ?>
		 
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
		