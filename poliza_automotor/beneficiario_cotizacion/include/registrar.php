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

    <title>Registrar Automovil</title>

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
          <a class="navbar-brand" href="#">Automovil</a>
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
        <h2>Registrar Automovil</h2>
        <?php 
        $poliza = $_REQUEST['nro_poliza'];
        $cod_cliente = $_REQUEST['codigo'];
        ?>
	 <form action="guardar.php" method="post">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Código del Cliente</label>
                                    <input type="text" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $cod_cliente ?>">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Número de Póliza</label>
                                <input type="text" class="form-control" id="nro_poliza" name="nro_poliza" value="<?php echo $poliza ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Clase</label>
                                <input type="text" class="form-control" id="clase" name="clase" placeholder="Clase">
                              </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Placa</label>
                                <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa">
                              </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Año</label>
                                <input type="text" class="form-control" id="ano" name="ano" placeholder="Año">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Color</label>
                                <input type="text" class="form-control" id="color" name="color" placeholder="Color">
                              </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                <label for="exampleInputPassword1">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Tracción</label>
                                <input type="text" class="form-control" id="traccion" name="traccion" placeholder="Tracción">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Uso</label>
                                <input type="text" class="form-control" id="uso" name="uso" placeholder="Uso">
                              </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Distrito</label>
                                <input type="text" class="form-control" id="distrito" name="distrito" placeholder="Distrito">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Plazas</label>
                                <input type="text" class="form-control" id="plazas" name="plazas" placeholder="Plazas">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Chasis</label>
                                <input type="text" class="form-control" id="chasis" name="chasis" placeholder="Chasis">
                              </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Motor</label>
                                <input type="text" class="form-control" id="motor" name="motor" placeholder="Motor">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Capital Asegurado</label>
                                <input type="text" class="form-control" id="auto_cap_aseg" name="auto_cap_aseg" placeholder="Capital Asegurado">
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