<?php
include "../../verificar_sesion.php";
include 'conexion.php';

$cod_cliente = $_REQUEST['cod_cliente'];
$nro_poliza = $_REQUEST['nro_poliza'];

$suma_capital = $con ->query("SELECT SUM(prima_total) AS suma_capital FROM calculo_prima WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
$suca= $suma_capital -> fetch_assoc();
$valor = $suca['suma_capital'];

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
     
      <script>tinymce.init({ selector:'textarea' });</script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
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
                            <li><a href="poliza_automotor/automovil/index.php">Automovil</a>
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

      <br><br>

      <h4 style="text-align:center;">PÓLIZA DE TARJETA DE DEBITO</h4>   
      <h5 style="text-align:center;">CONDICIONES PARTICULARES</h5>
      <div class="container">

        <br><br>
                  <?php
                  //$cod_cliente = $_REQUEST['cod_cliente'];
                  //$nro_poliza = $_REQUEST['nro_poliza'];
		          $sel = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno'];
                  $tipo_pago = $fila['tipo_pago'];
                  $completo = $nombres." ".$paterno." ".$materno;
		          ?>

    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row"> 
        <h5>Código del Cliente: </h5><?php echo $producto_auto; ?>
            <div class="col-md-12">
            <div class="col-md-12">Asegurado: <?php echo $completo; ?></div>
            <div class="col-md-12">Código del Cliente: <?php echo $fila['cod_cliente']; ?></div>
            <div class="col-md-12">Número de Póliza: <?php echo $nro_poliza; ?></div>
            <div class="col-md-12">Teléfono: <?php echo $fila['telefono_fijo']; ?></div>
            <div class="col-md-12">Dirección: <?php echo $fila['direccion']; ?></div>
            <div class="col-md-12">Zona: <?php echo $fila['zona']; ?></div>
            <div class="col-md-12">E-mail: <?php echo $fila['email']; ?></div>
            <div class="col-md-12">NIT/CI: <?php echo $fila['nit_ci']; ?></div>
            <div class="col-md-12">Celular: <?php echo $fila['celular']; ?></div>
            <div class="col-md-12">CI/NIT Factura: <?php echo $fila['nitf_cif']; ?></div>
            <div class="col-md-12">Nombre Factura: <?php echo $fila['pagador']; ?></div>
            </div>
        </div>
    </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        
        <a href="../../siniestros/include/registrar_certificado.php?nro_poliza=<?php echo $nro_poliza; ?>&cod_cliente=<?php echo $fila['cod_cliente']; ?>"><button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i></button></a>
        <div class="row">
            <div class="col-md-12"><h5>Datos del Cliente</h5></div>
            <?php
             $cli_debito = $con ->query("SELECT * FROM cliente_debito WHERE nro_poliza='$nro_poliza'");
             $contador = 1;
             while($clidebito = $cli_debito -> fetch_assoc()){
             ?>
            <div class="col-md-12">
            <div class="col-md-12">Nombre Completo: <?php echo $clidebito['nombre_completo']; ?></div>
            <div class="col-md-12">Carnet: <?php echo $clidebito['carnet']; ?></div>
            <div class="col-md-12">Número de Tarjeta: <?php echo $clidebito['numero_tarjeta']; ?></div>
            </div>
            <div class="col-md-12">
          <!-- <a href="../../siniestros/include/pdf_certificado.php?id_certificado=<?php echo $certificado['id_ceun']; ?>"><button class="btn btn-primary btn-xs pull-right" type="submit">PDF</button></a> -->
          <a href="../../siniestros/include/registrar.php?nro_poliza=<?php echo $nro_poliza; ?>&cod_cliente=<?php echo $fila['cod_cliente']; ?>&id_certificado=<?php echo $certificado['id_ceun']; ?>"><button class="btn btn-danger btn-xs pull-right" type="submit"> Siniestro</button></a>
          <a href="../include/cargar_anexo_auto.php?cod_cliente=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>&placa=<?php echo $placa_auto; ?>"><button style="color:white;" class="btn btn-success pull-right btn-xs" type="submit"> Anexo</button></a>
          </div>
                <?php
                 $contador++;
 } ?>
        </div>
    </div>
          
           <!-- Modal -->
          <form action="cliente_td/guardar.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro Cliente Tarjeta de Débito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            
              <div class="modal-body">
                <input type="hidden" value="<?php echo $_REQUEST['nro_poliza']; ?>" name="nro_poliza" id="nro_poliza">
                <input type="hidden" value="<?php echo $_REQUEST['cod_cliente']; ?>" name="cod_cliente" id="cod_cliente">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                  </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Número de Carnet</label>
                    <input type="text" class="form-control" id="carnet" name="carnet">
                  </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Número de Tarjeta</label>
                    <input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            
            </div>
          </div>
        </div>
        </form>
          
        </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript
      <script src="../js/bootstrap.min.js"></script>  -->
    
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
      
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