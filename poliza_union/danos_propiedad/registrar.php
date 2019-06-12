<?php
include("../../verificar_sesion.php");
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

    <title>Registrar Cliente</title>

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
                            <li><a href="../../clientes/index.php">Clientes</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../poliza_automotor/automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores</a>
								<ul class="dropdown-menu">
									<li><a href="../../poliza_automotor/cotizaciones/index.php">Cotización</a></li>
                                    <li><a href="../../poliza_automotor/polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                                    <li><a href="../../poliza_automotor/siniestros/index.php">Siniestros</a></li>
                                    <li><a href="../../poliza_automotor/reportes/include/reportes_automotor.php">Reportes</a></li>
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
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

<?php
$s_distrito = $_SESSION["distrito"];
if($s_distrito=='LA PAZ'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBLP';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='SANTA CRUZ'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBSC';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='COCHABAMBA'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBCB';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='SUCRE'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBCH';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
      elseif($s_distrito=='POTOSI'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBPT';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='TARIJA'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBTA';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='PANDO'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBPD';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='BENI'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBBE';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
elseif($s_distrito=='ORURO'){
$sele = $con ->query("SELECT MAX(idnumero) as idcliente FROM clientes WHERE distrito='$s_distrito'");
		          $filas = $sele -> fetch_assoc();
                  $ids= $filas['idcliente']+1;
$pref = 'CUBOR';

if($ids<=10){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=100000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=1000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}elseif($ids<=10000000){
    $pref.str_pad($ids, 8, "0", STR_PAD_LEFT);
}
}
?>
    <div class="container">
        <h2>Registrar Cliente</h2>
      <div class="starter-template">

	 <form action="guardar.php" enctype="multipart/form-data" method="post">
                    
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" id="ids" name="ids" value="<?php echo $ids; ?>">
                            <input type="hidden" class="form-control" id="idau" name="idau" value="<?php echo $idau; ?>">
                            <input type="hidden" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $pref.str_pad($ids, 8, "0", STR_PAD_LEFT); ?>">
                            <input type="hidden" class="form-control" id="nro_poliza" name="nro_poliza" value="<?php echo $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT); ?>">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombres/Razón Social</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Paterno">
                              </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Materno</label>
                                <input type="text" class="form-control" id="materno" name="materno" placeholder="Materno">
                              </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIT/CI</label>
                                <input type="text" class="form-control" id="nit_ci" name="nit_ci" placeholder="NIT/CI" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Zona</label>
                                <input type="text" class="form-control" id="zona" name="zona" placeholder="Zona">
                              </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono Fijo</label>
                                <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" placeholder="Teléfono Fijo">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                              </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIT/CI</label>
                                <input type="text" class="form-control" id="nitf_cif" name="nitf_cif" placeholder="NIT/CI">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Pagador</label>
                                <input type="text" class="form-control" id="pagador" name="pagador" placeholder="Pagador">
                              </div>
                                </div>
                            <div class="col-md-6">
                                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                            <?php 
                    date_default_timezone_set("America/La_Paz");
                    $date = date('Y-m-d'); ?>
                    <input type="hidden" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $date; ?>">
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