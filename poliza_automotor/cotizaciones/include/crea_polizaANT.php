<?php include 'conexion.php';
include "../../../verificar_sesion.php";
$codigo = $_REQUEST['cod_cliente'];
$cod_cotizacion = $_REQUEST['cod_cotizacion'];



$sel = $con -> query("SELECT * FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion' ");
$fila = $sel -> fetch_assoc();
$se = $con -> query("SELECT * FROM clientes_cotizacion WHERE cod_cotizacion='$cod_cotizacion' ");
$file = $se -> fetch_assoc();
$sele = $con -> query("SELECT * FROM clientes WHERE cod_cliente='$codigo' ");
$fi = $sele -> fetch_assoc();

$tipopago = $fila['tipo_pago'];
$plan = $fila['plan'];
$intermediario = $fila['intermediario']; 

if($tipopago==""){
    
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Debe registrar el tipo de pago (CREDITO O CONTADO)');
    window.location.href='javascript:history.back();';
    </script>");
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

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
        <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
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
                    
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../cotizaciones/index.php">Cotización</a></li>
                                    <li><a href="../../polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="../../reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="../../siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="../../poliza_automotor/polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../../poliza_automotor/siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../../poliza_automotor/siniestros/ver_liquidacion.php">Liquidaciones</a></li>
								<!--	<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
								</ul>
							</li>
                        </ul>
                    
                 <!--   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
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
                     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
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
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <div class="container">
        <br>
	 <form action="procesa_pol_automotor.php" method="post">
                    <div class="container">
            <input type="hidden" class="form-control" id="cod_cotizacion" name="cod_cotizacion" value="<?php echo $cod_cotizacion; ?>">
                        
                         <h4>Datos del Cliente</h4>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Código del Cliente</label>
                                    <input type="text" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $fila['cod_cliente'] ?>" readonly>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombres/Razón Social</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="<?php echo $file['nombres'] ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ap. Paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Paterno" value="<?php echo $file['paterno'] ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ap. Materno</label>
                                <input type="text" class="form-control" id="materno" name="materno" value="<?php echo $file['materno'] ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $file['direccion'] ?>" readonly>
                              </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Zona</label>
                                <input type="text" class="form-control" id="zona" name="zona" value="<?php echo $fi['zona']; ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Carnet/NIT</label>
                                <input type="text" class="form-control" id="nit_ci" name="nit_ci" value="<?php echo $file['nit_ci']; ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono Fijo</label>
                                <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" value="<?php echo $file['telefono_fijo'] ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $fi['celular'] ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $fi['email'] ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Tipo de Pago</label>
                                <input type="text" class="form-control" id="tipo_pago" name="tipo_pago" readonly value="<?php echo $tipopago;?>">
                            <!--    <?php
                                 // $mysqli = new mysqli('localhost', 'root', '', 'unibienes');
                                ?>
                                  <select class="form-control" id="tipo_pago" name="tipo_pago">
                                        <option value="0">Seleccione Tipo de Pago:</option>
                                        <?php
                                   //       $query = $mysqli -> query ("SELECT * FROM tipo_pago");
                                     //     while ($valores = mysqli_fetch_array($query)) {
                                       //     echo '<option value="'.$valores[pago].'">'.$valores[pago].'</option>';
                                         // }
                                        ?>
                                      </select> -->
                              </div>
                            </div>
                         <!--   <div class="col-md-4">
                                <?php 
                                date_default_timezone_set("America/La_Paz");
                                $date = date('Y-m-d'); ?>
                                <div class="form-group"> 
                                <label for="exampleInputPassword1">Fecha de Registro</label> -->
                                <input type="hidden" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $date; ?>"> <!--
                                </div>
                            </div> -->
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha de Inicio de Vigencia</label>
                                <input type="text" class="form-control" id="inicio_vigencia" name="inicio_vigencia" placeholder="0000-00-00">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Intermediario</label>
                                <input type="text" class="form-control" id="intermediario" name="intermediario" value="<?php echo $intermediario; ?>" readonly>
                                <?php
                                 // $mysqli = new mysqli('localhost', 'root', '', 'unibienes');
                                ?>
                                 <!-- <select class="form-control" id="intermediario" name="intermediario">
                                        <option value="0">Seleccione Intermediario:</option>
                                        <?php
                                        //  $query = $mysqli -> query ("SELECT * FROM intermediarios order by intermediario");
                                        //  while ($interm = mysqli_fetch_array($query)) {
                                        //    echo '<option value="'.$interm['intermediario'].'">'.$interm['intermediario'].'</option>';
                                        //  }
                                        ?>
                                      </select> -->
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Plan</label>
                                <input type="text" class="form-control" id="intermediario" name="intermediario" value="<?php echo $plan; ?>" readonly>
                                <?php
                                //  $mysqli = new mysqli('localhost', 'root', '', 'unibienes');
                                ?>
                                <!--  <select class="form-control" id="producto_auto" name="producto_auto">
                                        <option value="0">Seleccione Producto:</option>
                                        <?php
                                         // $que = $mysqli -> query ("SELECT * FROM producto_automotores order by producto_auto");
                                          //while ($prod_auto = mysqli_fetch_array($que)) {
                                        //    echo '<option value="'.$prod_auto['producto_auto'].'">'.$prod_auto['producto_auto'].'</option>';
                                        //  }
                                        ?>
                                      </select> -->
                              </div>
                            </div>
                           <!-- <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Monto Primer Cuota</label>
                                <input type="text" class="form-control" id="primera_cuota" name="primera_cuota" placeholder="Monto Primer Cuota">
                              </div>
                            </div> -->
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Comisi&oacute;n Intermediario</label>
                                <input type="number" min="0" class="form-control" id="comision_intermediario" name="comision_intermediario" value="0">
                              </div>
                            </div>
                            </div>
                            </div>
                        </div>
                            <br><br>
                            <div class="container">                        
                            <h4>Datos para la Factura</h4>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">CI/NIT</label>
                                <input type="text" class="form-control" id="cif_nitf" name="cif_nitf" placeholder="CI/NIT">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombre a Facturar</label>
                                <input type="text" class="form-control" id="pagador" name="pagador" placeholder="Nombre a Facturar">
                                </div>
                            </div>
                    </div>
         </div>
                            <br><br>
         <?php
         if($tipopago=="CREDITO"){
         ?>
         
                      <div class="container">
                            <h4>Datos del Automovil</h4>
                          
                        <?php  
                $incarro = $con -> query("SELECT * FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");

                    while ($row = $incarro -> fetch_assoc()) {
                           $setenta_credito = $row['prima_credito']*.06;
                           $setenta_credi = $row['prima_credito']+$setenta_credito;
                           $setenta = $setenta_credi*.70/4;
                            ?>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Clase</label>
                                    <input type="text" class="form-control" id="clase" name="clase" value="<?php echo $row['clase'] ?>" readonly>
                                  </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Placa</label>
                                <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $row['placa'] ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Marca</label>
                                <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $row['marca'] ?>" readonly>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_auto[]" value="<?php echo $row['id_automovil'] ?>">
                                    <label for="exampleInputEmail1">Sugerencia Cuotas Mensuales </label>
                                    <input type="text" class="form-control" name="cuota_inicial[]" value="<?php echo $setenta; ?>">
                                  </div>
                            </div> <?php } ?>
                           <!-- <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Color</label>
                                <input type="text" class="form-control" id="color" name="color">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $fila['modelo'] ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tracción</label>
                                    <input type="text" class="form-control" id="traccion" name="traccion">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Uso</label>
                                <input type="text" class="form-control" id="uso" name="uso">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Distrito</label>
                                <input type="text" class="form-control" id="distrito" name="distrito" value="LA PAZ">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Plazas</label>
                                    <input type="text" class="form-control" id="plazas" name="plazas" value="<?php echo $fila['plazas'] ?>">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Chasis</label>
                                <input type="text" class="form-control" id="chasis" name="chasis">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Motor</label>
                                <input type="text" class="form-control" id="motor" name="motor">
                              </div>
                            </div>
                           
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Precio del Motorizado</label>
                                <input type="text" class="form-control" id="auto_cap_aseg" name="auto_cap_aseg" value="<?php //echo $fila['auto_cap_aseg'] ?>">
                              </div>
                            </div> 
                            <?php   
                              }
                              ?> -->
                            <div class="col-md-6">
                                <br>
                                 <button type="submit" name="Enviar" class="btn btn-primary" value="Enviar">Enviar</button>
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