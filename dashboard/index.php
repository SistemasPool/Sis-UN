<?php include("../verificar_sesion.php"); 
$usuario = $_SESSION["usuario"];
$con = new mysqli('localhost','root','','unibienes');
$con->query("SET NAMES 'utf8'");


$sel = $con ->query("SELECT count(nombres) as clientes FROM clientes");
$fila = $sel -> fetch_assoc();
$num_clientes = $fila['clientes'];

$cot = $con ->query("SELECT count(placa) as cotizacion FROM automovil_cotizacion");
$fila_cot = $cot -> fetch_assoc();
$num_cotizacion = $fila_cot['cotizacion'];

$pol = $con ->query("SELECT count(placa) as polizas FROM automovil WHERE estado='NUEVO'");
$fila_pol = $pol -> fetch_assoc();
$num_polizas = $fila_pol['polizas'];

$sin = $con ->query("SELECT count(num_siniestro) as siniestro FROM siniestros");
$fila_sin = $sin -> fetch_assoc();
$num_siniestros = $fila_sin['siniestro'];



$sellp = $con ->query("SELECT count(nombres) as clientes FROM clientes WHERE distrito='LA PAZ'");
$filalp = $sellp -> fetch_assoc();
$num_clienteslp = $filalp['clientes'];

$cotlp = $con ->query("SELECT count(placa) as cotizacion FROM automovil_cotizacion WHERE distrito='LA PAZ'");
$fila_cotlp = $cotlp -> fetch_assoc();
$num_cotizacionlp = $fila_cotlp['cotizacion'];

$pollp = $con ->query("SELECT count(placa) as polizas FROM automovil WHERE distrito='LA PAZ' and estado='NUEVO'");
$fila_pollp = $pollp -> fetch_assoc();
$num_polizaslp = $fila_pollp['polizas'];

$sinlp = $con ->query("SELECT count(num_siniestro) as siniestro FROM siniestros WHERE distrito='LA PAZ'");
$fila_sinlp = $sinlp -> fetch_assoc();
$num_siniestroslp = $fila_sinlp['siniestro'];


$selcb = $con ->query("SELECT count(nombres) as clientes FROM clientes WHERE distrito='COCHABAMBA'");
$filacb = $selcb -> fetch_assoc();
$num_clientescb = $filacb['clientes'];

$cotcb = $con ->query("SELECT count(placa) as cotizacion FROM automovil_cotizacion WHERE distrito='COCHABAMBA'");
$fila_cotcb = $cotcb -> fetch_assoc();
$num_cotizacioncb = $fila_cotcb['cotizacion'];

$polcb = $con ->query("SELECT count(placa) as polizas FROM automovil WHERE distrito='COCHABAMBA' and estado='NUEVO'");
$fila_polcb = $polcb -> fetch_assoc();
$num_polizascb = $fila_polcb['polizas'];

$sincb = $con ->query("SELECT count(num_siniestro) as siniestro FROM siniestros WHERE distrito='COCHABAMBA'");
$fila_sincb = $sincb -> fetch_assoc();
$num_siniestroscb = $fila_sincb['siniestro'];


$selsc = $con ->query("SELECT count(nombres) as clientes FROM clientes WHERE distrito='SANTA CRUZ'");
$filasc = $selsc -> fetch_assoc();
$num_clientessc = $filasc['clientes'];

$cotsc = $con ->query("SELECT count(placa) as cotizacion FROM automovil_cotizacion WHERE distrito='SANTA CRUZ'");
$fila_cotsc = $cotsc -> fetch_assoc();
$num_cotizacionsc = $fila_cotsc['cotizacion'];

$polsc = $con ->query("SELECT count(placa) as polizas FROM automovil WHERE distrito='SANTA CRUZ' and estado='NUEVO'");
$fila_polsc = $polsc -> fetch_assoc();
$num_polizassc = $fila_polsc['polizas'];

$sinsc = $con ->query("SELECT count(num_siniestro) as siniestro FROM siniestros WHERE distrito='SANTA CRUZ'");
$fila_sinsc = $sinsc -> fetch_assoc();
$num_siniestrossc = $fila_sinsc['siniestro']; 
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

      


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
   <nav class="navbar navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="#" target="_blank">UNIBienes</a>
            </div>
            
            
        <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="perfil.php"><?php echo $usuario; ?></a></li>
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
        </nav>
    <div class="container-fluid">
      <div class="row">
          <br>
        <div class="col-md-12">
            <div class="col-md-3">
                <ul class="list-group">
                  <li class="list-group-item active">Dashboard</li>
                  <a href="#" data-toggle="modal" data-target="#exampleModal"><li class="list-group-item">Anulacion de Factura</li></a>
                    <a href="#" data-toggle="modal" data-target="#exampleModal1"><li class="list-group-item">Contado Cochabamba</li></a>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="col-md-12"><h3 style="color:#31708F;">UNIBIENES NACIONAL</h3></div>
            <div class="col-md-12">
                
                <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-user" style="font-size:40px;"></i>
                     <p> Número de Clientes </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_clientes ?></div>
                  </div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="panel panel-info">
                  <div class="panel-heading">
                     <i class="glyphicon glyphicon-th" style="font-size:40px;"></i>
                     <p> Número de Cotizaciones </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_cotizacion ?></div>
                  </div>
                </div>
                </div><div class="col-md-3">
                <div class="panel panel-warning">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-th-list" style="font-size:40px;"></i>
                     <p> Número de Polizas </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_polizas ?></div>
                  </div>
                </div>
                </div><div class="col-md-3">
                <div class="panel panel-danger">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-off" style="font-size:40px;"></i>
                     <p> Número de Siniestros </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_siniestros ?></div>
                  </div>
                </div>
                </div>
                </div>
                
                <div class="col-md-12"><h3 style="color:#31708F;">LA PAZ</h3></div>
            <div class="col-md-12">
                
                <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-user" style="font-size:40px;"></i>
                     <p> Número de Clientes </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_clienteslp ?></div>
                  </div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="panel panel-info">
                  <div class="panel-heading">
                     <i class="glyphicon glyphicon-th" style="font-size:40px;"></i>
                     <p> Número de Cotizaciones </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_cotizacionlp ?></div>
                  </div>
                </div>
                </div><div class="col-md-3">
                <div class="panel panel-warning">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-th-list" style="font-size:40px;"></i>
                     <p> Número de Polizas </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_polizaslp ?></div>
                  </div>
                </div>
                </div><div class="col-md-3">
                <div class="panel panel-danger">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-off" style="font-size:40px;"></i>
                     <p> Número de Siniestros </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_siniestroslp ?></div>
                  </div>
                </div>
                </div>
                </div>
                <div class="col-md-12"><h3 style="color:#31708F;">SANTA CRUZ</h3></div>
            <div class="col-md-12">
                
                <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-user" style="font-size:40px;"></i>
                     <p> Número de Clientes </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_clientessc ?></div>
                  </div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="panel panel-info">
                  <div class="panel-heading">
                     <i class="glyphicon glyphicon-th" style="font-size:40px;"></i>
                     <p> Número de Cotizaciones </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_cotizacionsc ?></div>
                  </div>
                </div>
                </div><div class="col-md-3">
                <div class="panel panel-warning">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-th-list" style="font-size:40px;"></i>
                     <p> Número de Polizas </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_polizassc ?></div>
                  </div>
                </div>
                </div><div class="col-md-3">
                <div class="panel panel-danger">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-off" style="font-size:40px;"></i>
                     <p> Número de Siniestros </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_siniestrossc ?></div>
                  </div>
                </div>
                </div>
                </div>
                <div class="col-md-12"><h3 style="color:#31708F;">COCHABAMBA</h3></div>
            <div class="col-md-12">
                
                <div class="col-md-3">
                <div class="panel panel-default">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-user" style="font-size:40px;"></i>
                     <p> Número de Clientes </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_clientescb ?></div>
                  </div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="panel panel-info">
                  <div class="panel-heading">
                     <i class="glyphicon glyphicon-th" style="font-size:40px;"></i>
                     <p> Número de Cotizaciones </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_cotizacioncb ?></div>
                  </div>
                </div>
                </div><div class="col-md-3">
                <div class="panel panel-warning">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-th-list" style="font-size:40px;"></i>
                     <p> Número de Polizas </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_polizascb ?></div>
                  </div>
                </div>
                </div><div class="col-md-3">
                <div class="panel panel-danger">
                  <div class="panel-heading">
                      <i class="glyphicon glyphicon-off" style="font-size:40px;"></i>
                     <p> Número de Siniestros </p></div>
                  <div class="panel-body">
                    <div style="font-size:20px;"><?php echo $num_siniestroscb ?></div>
                  </div>
                </div>
                </div>
                </div>
                
            </div>
            </div>
        </div>
      </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form action="anular.php" method="post">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anulación de Factura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
    <div class="col-md-12">
<div class="col-md-6">
  <div class="form-group">
    <label for="exampleFormControlInput1">Número de Factura</label>
    <input type="text" class="form-control" id="num_fac" name="num_fac">
  </div>e
</div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="FormControlSelect2">Número de Autorizacion</label>
    <select class="form-control" id="autorizacion" name="autorizacion">
      <option>Seleccione Autorización</option>
      <option value="428401800014765">428401800014765</option>
      <option value="428401900025293">428401900025293</option>
      <option value="428401900026565">428401900026565</option>
      <option value="428401900026577">428401900026577</option>
    </select>
  </div>
        </div>
          </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger btn-md">Guardar Cambios</button>
      </div>
    </div>
  </div>
</form>
</div>
      
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form action="credito_cochabamba.php" method="post">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Credito Cochabamba</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="col-md-12">
    <div class="col-md-6">
    <div class="form-group">
    <label for="exampleFormControlInput1">Número Póliza</label>
    <input type="text" class="form-control" id="num_poliza" name="num_poliza">
  </div>
    </div>
     <div class="col-md-6">
    <div class="form-group">
    <label for="exampleFormControlInput1">Código Cliente</label>
    <input type="text" class="form-control" id="cod_cliente" name="cod_cliente">
  </div>
    </div>
     <div class="col-md-6">
    <div class="form-group">
    <label for="exampleFormControlInput1">Prima a Cobrar</label>
    <input type="text" class="form-control" id="prima" name="prima">
  </div>
    </div>
     <div class="col-md-6">
    <div class="form-group">
    <label for="exampleFormControlInput1">Cuota Inicial</label>
    <input type="text" class="form-control" id="cuota" name="cuota">
  </div>
    </div>
    
          </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger btn-md">Guardar Cambios</button>
      </div>
    </div>
  </div>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
      
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  </body>
</html>
