
<?php include '../include/conexion.php';
$id = $_REQUEST['id'];

$sel = $con -> query("SELECT * FROM clientes WHERE id_cliente='$id' ");
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

    <title>CRUD</title>

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
          <a class="navbar-brand" href="#">CRUD</a>
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
        <h2>Editar Registro</h2>
      <div class="starter-template">


	<form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="<?php echo $fila['nombres'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Paterno</label>
                    <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Paterno" value="<?php echo $fila['paterno'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Materno</label>
                    <input type="text" class="form-control" id="materno" name="materno" placeholder="Materno" value="<?php echo $fila['materno'] ?>">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">NIT/CI</label>
                    <input type="text" class="form-control" id="nit_ci" name="nit_ci" placeholder="NIT/CI" value="<?php echo $fila['nit_ci'] ?>">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="<?php echo $fila['direccion'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telefono Fijo</label>
                    <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" placeholder="Teléfono Fijo" value="<?php echo $fila['telefono_fijo'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" value="<?php echo $fila['celular'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $fila['email'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIT/CI</label>
                    <input type="text" class="form-control" id="nitf_cif" name="nitf_cif" placeholder="NIT/CI" value="<?php echo $fila['nitf_cif'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pagador</label>
                    <input type="text" class="form-control" id="pagador" name="pagador" placeholder="Pagador" value="<?php echo $fila['pagador'] ?>">
                  </div>

                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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