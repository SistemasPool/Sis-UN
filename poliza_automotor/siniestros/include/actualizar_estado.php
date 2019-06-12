
<?php include 'conexion.php';
$id = $_REQUEST['id'];
$estado = $_REQUEST['estado'];
$monto = $_REQUEST['monto'];

$sel = $con -> query("SELECT * FROM datos_act_sin WHERE id_datos_act_sin='$id' ");
if ($fila = $sel -> fetch_assoc()) {
}
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

    <title>Editar Automovil</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">
    
    <link href="../css/jquery.dataTables.min.css"starter-template.css"" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

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
          <a class="navbar-brand" href="#">Editar Automovil</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <h2>Editar Estado</h2>
        <br><br>
      <div class="starter-template">
          
	<form action="update_estado.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nùmero de siniestro</label>
                                    <input type="text" class="form-control" id="num_siniestro" name="num_siniestro" value="<?php echo $fila['num_siniestro'] ?>" readonly>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Reserva</label>
                                <input type="text" class="form-control" id="reserva" name="reserva" value="<?php echo $fila['monto_reserva'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Estado</label>
                                <select type="text" class="form-control" id="estado" name="estado" >
                                    <option selected value="<?php echo $fila['estado'] ?>"><?php echo $fila['estado'] ?></option>
                                    <option value="DECLINADO">DECLINADO</option>
                                    <option value="PAGADO">PAGADO</option>
                                    <option value="PENDIENTE">PENDIENTE</option>
                                    <option value="RECHAZADO">RECHAZADO</option>
                                    </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <br>
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
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
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/datatablejs.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
        

  </body>
</html>      