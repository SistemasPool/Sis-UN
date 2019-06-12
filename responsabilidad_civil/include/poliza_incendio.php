<?php
include "../../verificar_sesion.php";
include 'conexion.php';

$num_poliza = $_REQUEST['num_poliza'];
$cod_cliente = $_REQUEST['cod_cliente'];
//$codigo = $_REQUEST['carnet'];

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

    <title>.: Sistema UNIBienes :.</title>

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
                
                <!--    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
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
                    </li> -->
                    
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../cotizaciones/index.php">Cotización</a></li>
                            <li><a href="../../polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="../../reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="../../siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="../../poliza_automotor/siniestros/index.php">Siniestros</a></li>
                                    <li><a href="../../polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../../poliza_automotor/siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../../poliza_automotor/siniestros/ver_liquidacion.php">Liquidaciones</a></li>
								<!--	<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
								</ul>
							</li>
                        </ul>
                    
                 <!--    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Link 1</a></li>
                            <li><a href="#">Dropdown Link 2</a></li>
                            <li><a href="#">Dropdown Link 3</a></li>
                            <li class="divider"></li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
								<ul class="dropdown-menu">
									<li><a href="#">Dropdown Submenu Link 4.1</a></li>
									<li><a href="#">Dropdown Submenu Link 4.2</a></li>
									<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li>
								</ul>
							</li>
                           <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
								<ul class="dropdown-menu">
									<li><a href="#">Dropdown Submenu Link 5.1</a></li>
									<li><a href="#">Dropdown Submenu Link 5.2</a></li>
									<li><a href="#">Dropdown Submenu Link 5.3</a></li>
									<li class="divider"></li>
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
										<ul class="dropdown-menu">
											<li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
											<li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
											<li class="divider"></li>
											<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.3</a>
												<ul class="dropdown-menu">
													<li><a href="#">Dropdown Submenu Link 5.4.3.1</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.3.2</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.3.3</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.3.4</a></li>
												</ul>
											</li>
											<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.4</a>
												<ul class="dropdown-menu">
													<li><a href="#">Dropdown Submenu Link 5.4.4.1</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.4.2</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.4.3</a></li>
													<li><a href="#">Dropdown Submenu Link 5.4.4.4</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li> -->
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

      <br><br>
      <h4 style="text-align:center;">POLIZA DE SEGURO DE INCENDIO</h4>
      <h5 style="text-align:center;">CONDICIONES PARTICULARES</h5>
    <div class="container">
      <div class="starter-template">
        <br><br>
                  <?php
                  //$cod_cliente = $_REQUEST['cod_cliente'];
                  //$nro_poliza = $_REQUEST['nro_poliza'];
		          $sel = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno'];
                  $completo = $nombres." ".$paterno." ".$materno;
          
                  $tomador = $con ->query("SELECT * FROM clientes_tomador WHERE nro_poliza='$num_poliza'");
		          $toma = $tomador -> fetch_assoc();
                  $nombres = $toma['nombres'];
                  $paterno = $toma['paterno'];
                  $materno = $toma['materno'];
                  $completoma = $nombres." ".$paterno." ".$materno;
          
		          ?>
     <div class="container">     
    <a href="pdf_incendio_pol.php?num_poliza=<?php echo $num_poliza; ?>&cod_cliente=<?php echo $cod_cliente; ?>"><button class="btn btn-default pull-right" type="submit"><i class="far fa-file-pdf"></i>
</button></a>
   <!-- <a href="../../poliza_automotor/siniestros/include/registrar.php?nro_poliza=<?php echo $num_poliza; ?>&cod_cliente=<?php echo $cod_cliente; ?>"><button class="btn btn-danger pull-right" type="submit"><i class="fas fa-skull-crossbones"></i>
</button></a> -->
    <?php echo $producto_au; ?></div>
        <br>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row"> 
        <!--    <h5>Código del Cliente: </h5><?php //echo $cod_cliente;?> -->
    <h5>Datos del Tomador</h5>
            <div class="col-md-12">
            <div class="col-md-6">Asegurado: <?php echo $completoma; ?></div>
            <div class="col-md-6">Carnet: <?php echo $toma['nit_ci']; ?></div>
            <div class="col-md-6">Teléfono: <?php echo $toma['telefono_fijo']; ?></div>
            <div class="col-md-6">Dirección: <?php echo $toma['direccion']; ?></div>
            <!--<div class="col-md-6">e-mail: <?php //echo $fila['email']; ?></div>
            <div class="col-md-6">NIT/CI: <?php //echo $fila['nit_ci']; ?></div>
            <div class="col-md-6">Celular: <?php //echo $fila['celular']; ?></div> -->
            </div>
        </div>
    </div>
          
          
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row"> 
        <!--    <h5>Código del Cliente: </h5><?php //echo $cod_cliente;?> -->
    <h5>Datos del Cliente</h5>
            <div class="col-md-12">
            <div class="col-md-6">Tomador: <?php echo $completo; ?></div>
            <div class="col-md-6">Carnet: <?php echo $fila['nit_ci']; ?></div>
            <div class="col-md-6">Teléfono: <?php echo $fila['telefono_fijo']; ?></div>
            <div class="col-md-6">Dirección: <?php echo $fila['direccion']; ?></div>
            <!--<div class="col-md-6">e-mail: <?php //echo $fila['email']; ?></div>
            <div class="col-md-6">NIT/CI: <?php //echo $fila['nit_ci']; ?></div>
            <div class="col-md-6">Celular: <?php //echo $fila['celular']; ?></div> -->
            </div>
        </div>
    </div>
          
   <!-- <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row"> 
           <h5>Código del Cliente: </h5><?php //echo $cod_cliente;?> 
    <h5>Datos del Beneficiario</h5>
            <div class="col-md-12">
                <div class="col-md-12">
                    <a href="../../beneficiario_cotizacion/include/actualizar.php?id=<?php echo $benef['id_cliente'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a></div>
            <div class="col-md-6">Beneficiario: <?php echo $complebene; ?></div>
            <div class="col-md-6">Carnet: <?php echo $benef['nit_ci']; ?></div>
            <div class="col-md-6">Teléfono: <?php echo $benef['telefono_fijo']; ?></div>
            <div class="col-md-6">Dirección: <?php echo $benef['direccion']; ?></div>
            <!--<div class="col-md-6">e-mail: <?php //echo $fila['email']; ?></div>
            <div class="col-md-6">NIT/CI: <?php //echo $fila['nit_ci']; ?></div>
            <div class="col-md-6">Celular: <?php //echo $fila['celular']; ?></div>
            </div>
        </div>
    </div> -->
    <?php
$incendio = $con ->query("SELECT * FROM incendio_poliza WHERE num_poliza='$num_poliza'");
		          $ince = $incendio -> fetch_assoc();
?>
 <hr style="background-color: #FFF100; height: 2px; border: 0;">
<table width=90% cellspacing=0 cellpadding=0 style="font-size:12px;">
<tr>
    <td>Datos de la P&oacute;liza</td>
</tr>
    <tr>
    <td width=30%>Asegurado:</td>
    <td width=70%><?php echo $completoma; ?></td>
</tr>
 <tr>
    <td width=30%>Ubicaci&oacute;n del Riesgo:</td>
    <td width=70%><?php echo $ince['ubicacion_riesgo']; ?></td>
</tr>
<tr>
    <td width=30%>Direcci&oacute;n Asegurada:</td>
    <td width=70%><?php echo $ince['direccion_asegurada']; ?></td>
</tr>
<tr>
    <td width=30%>Materia del Seguro:</td>
    <td width=70%><?php echo $ince['materia_seguro']; ?></td>
</tr>
<tr>
    <td width=30%>Valor Asegurado:</td>
    <td width=70%><?php echo "USD ".number_format($ince['valor_asegurado'],2); ?></td>
</tr>
<tr>
    <td width=30%>A Favor del</td>
    <td width=70%><?php echo $ince['afavor']." Por USD .- ".number_format($ince['afavor_prima'],2);?></td>
</tr>
</table>
    <!-- Inicio en Vivo  -->      
          <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
             <div class="col-md-12">
        <div class="col-md-11"><h5 style="font-weight: bold;">COBERTURAS</h5></div>
            </div>
         
            <table class="table table-striped" style="font-size:12px;">
            <?php 
            $coberturas = $con -> query("SELECT * FROM coberturas_incendio_pol WHERE num_poliza='$num_poliza'");
            while($cob = $coberturas -> fetch_assoc()){
            ?>  <tr>
                <td><?php echo utf8_decode(strtoupper($cob['glosa']));?></td>
                <td></td>
            </tr>
            <?php 
            }
            ?>
            </table>
            </div>
        </div>
  
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
             <div class="col-md-12">
            <div class="col-md-6"><h5 style="font-weight: bold;">A PRIMER RIESGO</h5></div>
            <div class="col-md-5"><h5 style="font-weight: bold;">Hasta el 100% del valor asegurado del Inmueble.</h5></div>
         </div>
             <table class="table table-striped" style="font-size:12px;">
            <?php 
            $primer = $con -> query("SELECT * FROM primer_riesgo_pol  WHERE num_poliza='$num_poliza'");
            while($prim = $primer -> fetch_assoc()){
            ?>
                 <tr>
                <td><?php echo utf8_decode(strtoupper($prim['glosa']));?></td>
                <td></td>
             </tr>
            <?php 
            }
            ?>
                 </table>
             
        </div>
          
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
             <div class="col-md-12">
            <div class="col-md-11"><h5 style="font-weight: bold;">CLAUSULAS ADICIONALES</h5></div> 
                 </div>
         
            <table class="table table-striped" style="font-size:12px;">
            <?php 
            $cla_adic = $con -> query("SELECT * FROM `clau_adic_incendio_pol` WHERE num_poliza='$num_poliza'");
            while($clau = $cla_adic -> fetch_assoc()){
            ?>
                <tr><td><?php echo utf8_decode(strtoupper($clau['glosa']));?></td>
                <td></td>
                </tr>
            <?php 
            }
            ?>
                 </table>
        </div>
        </div>
        
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
             <div class="col-md-12" style="font-size:10px;">
            <div class="col-md-11"><h5 style="font-weight: bold;">FRANQUICIA/DEDUCIBLE</h5></div>
            </div>
        
            <table class="table table-striped" style="font-size:12px;">
            <?php 
            $franqui = $con -> query("SELECT * FROM `franquicia_incendio_pol`  WHERE num_poliza='$num_poliza'");
            while($fra = $franqui -> fetch_assoc()){
            ?>
                  <tr><td><?php echo utf8_decode(strtoupper($fra['grosa']));?></td>
                <td></td>
                </tr>
            <?php 
            }
            ?>
              </table>
             </div>
        </div>
        
          <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
             <div class="col-md-12" style="font-size:10px;">
            <div class="col-md-11"><h5 style="font-weight: bold;">EXCLUCIONES</h5></div>
            <div class="col-md-12"><h5 style="font-weight: bold;">DE ACUERDO A LAS EXCLUCIONES DEL CONDICIONADO GENERAL ADICIONALMENTE:</h5></div></div>
         
            <table class="table table-striped" style="font-size:12px;">
            <?php 
            $exclu = $con -> query("SELECT * FROM `exclusiones_incendio_pol`  WHERE num_poliza='$num_poliza'");
            while($ex = $exclu -> fetch_assoc()){
            ?>
                <tr><td><?php echo utf8_decode(strtoupper($ex['glosa']));?></td>
               <td></td></tr>
            <?php 
            }
            ?>
              </table>
            </div>
        </div>
              
              
              
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
             <div class="col-md-12" style="font-size:10px;">
            <div class="col-md-11"><h5 style="font-weight: bold;">CONDICIONES ESPECIALES</h5></div>
            </div>
            <table class="table table-striped" style="font-size:12px;">
            <?php 
            $condi = $con -> query("SELECT * FROM `cond_part_inc_pol` WHERE num_poliza='$num_poliza'");
            while($cond = $condi -> fetch_assoc()){
            ?>
                <tr><td><?php echo utf8_decode(strtoupper($cond['glosa']));?></td>
                <td></td></tr>
            <?php 
            }
            ?>
                </table>
            </div>
         </div>
              
        
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
             <div class="col-md-12" style="font-size:10px;">
            <div class="col-md-11"><h5 style="font-weight: bold;">NOTAS ESPECIALES</h5></div>
            </div> 
         
            <table class="table table-striped" style="font-size:12px;">
            <?php 
            $especiales = $con -> query("SELECT * FROM `notas_especiales_incendio_pol`  WHERE num_poliza='$num_poliza'");
            while($notespe = $especiales -> fetch_assoc()){
            ?><tr>
                <td><?php echo utf8_decode(strtoupper($notespe['glosa']));?></td>
                <td></td></tr>
            <?php 
            }
            ?>
              </table>
            </div>
        </div>
              
              
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
             <div class="col-md-12" style="font-size:10px;">
            <div class="col-md-11"><h5 style="font-weight: bold;">OBSERVACIONES</h5></div>
        
            </div> 
            <table class="table table-striped" style="font-size:12px;">
            <?php 
            $obse = $con -> query("SELECT * FROM `observaciones_incendio_pol` WHERE num_poliza='$num_poliza'");
            while($obs = $obse -> fetch_assoc()){
            ?>
                <tr><td><?php echo "- ".utf8_decode(strtoupper($obs['glosa']));?></td>
                <td></td></tr>
            <?php 
            }
            ?>
              </table>
            </div>
         </div>
              
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
             <div class="col-md-12" style="font-size:10px;">
            <div class="col-md-11"><h5 style="font-weight: bold;">NOTA ESPECIAL</h5></div>
            </div>
            <table class="table table-striped" style="font-size:12px;">
            <?php 
            $nota = $con -> query("SELECT * FROM `nota_especial_incendio_pol`  WHERE num_poliza='$num_poliza'");
            while($not = $nota -> fetch_assoc()){
            ?>
                <tr><td><?php echo utf8_decode(strtoupper($not['glosa']));?></td>
                <td></td><tr>
            <?php 
            }
            ?>
                    </table>
            </div>
              </div>
          <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container" style="font-size:10px;">
        <div class="row">
    <h5 font-size:10px;>Lugar y Fecha:</h5>
            <div class="col-md-12">
            <?php
                   //definimos el area geografica del cual deseamos la fecha actual
                    date_default_timezone_set("America/La_Paz");
                    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            ?>
            <div class="col-md-12">La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></div>
            </div>
        </div>
    </div>
    <h5 style="text-align:center; font-size:10px;">UNIBIENES SEGUROS Y REAEGUROS PATRIMONIALES S.A.</h5>
          <br><br>
      <h5 style="text-align:center; font-size:10px;">FIRMAS AUTORIZADAS</h5>
      </div>
     </div>
      </div>
     <!-- /.container -->
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