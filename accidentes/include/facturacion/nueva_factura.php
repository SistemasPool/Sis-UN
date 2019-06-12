<?php
$cod_cliente= $_REQUEST['cod_cliente'];
$pagador= $_REQUEST['pagador']; 
$nitf_cif= $_REQUEST['nitf_cif']; 
$nro_poliza= $_REQUEST['nro_poliza']; 
$estado= $_REQUEST['estado']; 
$monto= $_REQUEST['monto']; 
$id = $_REQUEST['id'];
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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="../../css/jquery.dataTables.min.css" rel="stylesheet">
    
    <link href="../../js/jquery.dataTables.min.js" rel="stylesheet">
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
            <li><a href="#"><?php echo $_SESSION["usuario"]; ?></a></li>
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="../../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <div class="container">
			<h4><i class='glyphicon glyphicon-edit'></i> Nueva Factura</h4>
			<form class="form-horizontal" action="reporte.php" method="post">
				<div class="form-group row">
                <div class="col-md-4">
				  <label for="nombre_cliente" class="control-label">Nombre a Facturar</label>
                    <input type="hidden" class="form-control input-sm" id="id_factura" name="id_factura" value="<?php echo $id; ?>">
					  <input type="text" class="form-control input-sm" id="pagador" name="pagador" value="<?php echo $pagador; ?>" readonly>
				  </div>
                    <div class="col-md-4">
				  <label for="tel1" class="control-label">NIT/CI</label>
				  <input type="text" class="form-control input-sm" id="nitf_cif" name="nitf_cif" value="<?php echo $nitf_cif; ?>" readonly >
							</div>
                    <div class="col-md-4">
					<label for="mail" class="control-label">Monto</label>
				      <input type="text" class="form-control input-sm" id="monto" name="monto" value="<?php echo number_format($monto,2); ?>" readonly>
							</div>
				 </div>
                            <div class="form-group row">
                            <div class="col-md-4">
							<label for="tel2" class="control-label">Fecha</label>
								<input type="text" class="form-control input-sm" id="fecha" name="fecha" value="<?php echo date("Y-m-d");?>" readonly>
							</div>
                            <div class="col-md-4">
							<label for="tel2" class="control-label">Código de Cliente</label>
								<input type="text" class="form-control input-sm" id="cod_cliente" name="cod_cliente" value="<?php echo $cod_cliente;?>" readonly>
							</div>
                            <div class="col-md-4">
							<label for="tel2" class="control-label">Número de Póliza</label>
								<input type="text" class="form-control input-sm" id="num_poliza" name="num_poliza" value="<?php echo $nro_poliza;?>" readonly>
                            </div>
                </div>
                <div class="form-group row">
                            <div class="col-md-12">
							<label for="tel2" class="control-label">Descripción</label>
								<textarea type="text" class="form-control input-sm" id="concepto" name="concepto"></textarea>
							</div>
				<div class="col-md-12">
					<div class="pull-right">
						<button type="submit" class="btn btn-default">
						  <span class="glyphicon glyphicon-print"></span> Imprimir
						</button>
					</div>	
                    </div>
				</div>
			</form>	
      </div>
      <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  </body>
</html>