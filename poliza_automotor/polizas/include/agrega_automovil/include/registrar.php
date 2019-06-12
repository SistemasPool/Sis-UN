<?php include("../../../../../verificar_sesion.php"); ?>
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
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <style>
        .marginBottom-0 {margin-bottom:0;}
        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu:hover>a:after{border-left-color:#555;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
    </style>
    <title>.:Sistema Unibienes:.</title>
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
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores</a>
								<ul class="dropdown-menu">
									<li><a href="../../cotizaciones/index.php">Cotización</a></li>
                                    <li><a href="../../polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                                    <li><a href="../../siniestros/index.php">Siniestros</a></li>
                                    <li><a href="../../reportes/include/reportes_automotor.php">Reportes</a></li>
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
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <div class="container">
        <h2>Registrar Automovil</h2>
        <?php 
        
        $nro_poliza = $_REQUEST['nro_poliza'];
        $cod_cliente = $_REQUEST['cod_cliente'];
        ?>
        <br><br><br>
	 <form action="guardar_certificado.php" method="post">
                    <div class="container">
                        <input type="hidden" class="form-control" id="nro_poliza" name="nro_poliza" value="<?php echo $nro_poliza; ?>">
                        <input type="hidden" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $cod_cliente; ?>">
                        <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Prestatario</label>
                                <input type="text" class="form-control" id="prestatario" name="prestatario" placeholder="Prestatario">
                              </div>
                            </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Carnet</label>
                                <input type="text" class="form-control" id="carnet" name="carnet" placeholder="Carnet">
                              </div>
                            </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Direcciòn</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direcciòn">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Clase de Vehículo</label>
                                <?php
                                  $mysqli = new mysqli('localhost', 'root', '', 'unibienes');
                                ?>
                                  <select class="form-control" id="clase" name="clase">
                                        <option value="0">Seleccione Clase:</option>
                                        <?php
                                          $quer = $mysqli -> query ("SELECT * FROM tipo_automovil");
                                          while ($val = mysqli_fetch_array($quer)) {
                                            echo '<option value="'.$val[tipo].'">'.$val[tipo].'</option>';
                                          }
                                        ?>
                                      </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Placa</label>
                                <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Marca</label>
                                <?php
                                  $mysqli = new mysqli('localhost', 'root', '', 'unibienes');
                                ?>
                                  <select class="form-control" id="marca" name="marca">
                                        <option value="0">Seleccione Marca:</option>
                                        <?php
                                          $query = $mysqli -> query ("SELECT * FROM marcas_automovil");
                                          while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="'.$valores[marca].'">'.$valores[marca].'</option>';
                                          }
                                        ?>
                                      </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Año</label>
                                <?php
                                  $mysqli = new mysqli('localhost', 'root', '', 'unibienes');
                                ?>
                                  <select class="form-control" id="ano" name="ano">
                                        <option value="0">Seleccione Año:</option>
                                        <option value="2019">2019</option>
                                    <option value="2018">2018</option>  
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                    <option value="2014">2014</option> 
                                      <option value="2013">2013</option>
                                      <option value="2012">2012</option>
                                      <option value="2011">2011</option>
                                         <option value="2010">2010</option>
                                    <option value="2009">2009</option>  
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                    <option value="2005">2005</option> 
                                      <option value="2004">2004</option>
                                      <option value="2003">2003</option>
                                      <option value="2002">2002</option>
                                         <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                      <option value="1999">1999</option>
                                      </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Color</label>
                                <input type="text" class="form-control" id="color" name="color" placeholder="Color">
                              </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="form-group">
                                <label for="exampleInputPassword1">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleSelect1">Distrito del Siniestro</label>
                                    <select class="form-control" id="exampleSelect1" id="distrito" name="distrito">
                                     <option>Seleccione Departamento</option>
                                      <option>BENI</option>
                                      <option>COCHABAMBA</option>
                                      <option>LA PAZ</option>
                                      <option>ORURO</option>
                                      <option>PANDO</option>
                                      <option>POTOSI</option>
                                      <option>SANTA CRUZ</option>
                                      <option>SUCRE</option>
                                      <option>TARIJA</option>
                                    </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Plazas</label>
                                <input type="number" class="form-control" id="plazas" name="plazas" min="0" placeholder="Plazas">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Chasis</label>
                                <input type="text" class="form-control" id="chasis" name="chasis" placeholder="Chasis">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Motor</label>
                                <input type="text" class="form-control" id="motor" name="motor" placeholder="Motor">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <br>
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

  </body>
</html>