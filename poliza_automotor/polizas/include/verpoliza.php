<?php
include "../../../verificar_sesion.php";
include 'conexion.php';

$cod_cotizacion = $_REQUEST['cod_cotizacion'];
//$cod_cotizacion = $_POST['carnet'];
//$codigo = $_REQUEST['carnet'];

$produc_auto = $con -> query("SELECT * FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
$pa = $produc_auto -> fetch_assoc();
$producto_au = $pa['plan'];

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

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="../../librerias/bootstrap-theme.min.css">
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
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

      <br><br>
      <h4 style="text-align:center;">SEGURO DE AUTOMOTORES - INDIVIDUAL</h4>
      <h5 style="text-align:center;">CONDICIONES PARTICULARES</h5>
      <h3 style="text-align:center;">COTIZACIÓN</h3>
    <div class="container">
      <div class="starter-template">
        <br><br>
                  <?php
                  //$cod_cliente = $_REQUEST['cod_cliente'];
                  //$nro_poliza = $_REQUEST['nro_poliza'];
		          $sel = $con ->query("SELECT * FROM clientes_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'] ;
                  $paterno = $fila['paterno'] ;
                  $materno = $fila['materno'] ;
                  $completo = $nombres." ".$paterno." ".$materno;
          
                  $tomador = $con ->query("SELECT * FROM clientes_tomador_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
		          $toma = $tomador -> fetch_assoc();
                  $nombres = $toma['nombres'] ;
                  $paterno = $toma['paterno'] ;
                  $materno = $toma['materno'] ;
                  $completoma = $nombres." ".$paterno." ".$materno;
          
                  $beneficiario = $con ->query("SELECT * FROM beneficiario_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
		          $benef = $beneficiario -> fetch_assoc();
                  $nombres = $benef['nombres'] ;
                  $paterno = $benef['paterno'] ;
                  $materno = $benef['materno'] ;
                  $complebene = $nombres." ".$paterno." ".$materno;
          

                    $sel1 = $con ->query("SELECT * FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
                    $auto= $sel1 -> fetch_assoc();
                    //  $cod_cliente = $auto['cod_cliente'] ;
                    //  $nro_poliza = $auto['nro_poliza'] ;
                    $clase = $auto['clase'] ;
                    $placa = $auto['placa'] ;
                    $ano = $auto['ano'] ;
                    //  $color = $auto['color'] ;
                    $modelo = $auto['modelo'] ;
                    //  $traccion = $auto['traccion'] ;
                    //  $uso = $auto['uso'] ;
                    //  $distrito = $auto['distrito'] ;
                    $pasajeros = $auto['plazas'] ;
                    //  $chasis = $auto['chasis'] ;
                    $tasa_prima = $auto['tasa_prima'] ;
                    $marca = $auto['marca'] ;
                    $suma_capital = $con ->query("SELECT SUM(auto_cap_aseg) AS suma_capital FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
                    $suca= $suma_capital -> fetch_assoc();
                    $valor = $suca['suma_capital'];
                    $intermediario = $auto['intermediario'];
                    //$producto_auto = $auto['plan'];
          
          
                    if($producto_au=="PRODUCTO A"){
                        $porcentaje_reaseguro= 2.0838709677;
                    }elseif($producto_au=="PRODUCTO B"){
                        $porcentaje_reaseguro= 2.2483870968;
                    }
                    elseif($producto_au=="PRODUCTO C"){
                        $porcentaje_reaseguro = 2.5225806452;
                    }
                        $porcentaje_reaseguro;
		          ?>
          
          <a href="../../pdf/pdf_automotor_cot.php?cod_cotizacion=<?php echo $cod_cotizacion; ?>"><button style="color:white;" class="btn btn-danger pull-right" type="submit">Genera PDF</button></a>
    <?php echo $producto_au; ?>
          
    
          
          
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row"> 
        <!--    <h5>Código del Cliente: </h5><?php //echo $cod_cliente;?> -->
    <h5>Datos del Tomador</h5>
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
          
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row"> 
        <!--    <h5>Código del Cliente: </h5><?php //echo $cod_cliente;?> -->
    <h5>Datos del Asegurado</h5>
            <div class="col-md-12">
                <div class="col-md-12">
                    <a href="../../tomador_cotizacion/include/actualizar.php?id=<?php echo $toma['id_cliente_tomador'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a></div>
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
            <div class="col-md-6">Celular: <?php //echo $fila['celular']; ?></div> -->
            </div>
        </div>
    </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container" style="font-size:12px;">
         <h5>Datos del Automovil </h5>
         <a href="../../automovil_cot_gpo/include/registrar.php?cod_cotizacion=<?php echo $cod_cotizacion; ?>&cod_cliente=<?php echo $fila['cod_cliente']; ?>&producto=<?php echo $producto_au; ?>"><button style="color:white;" class="btn btn-success pull-right" type="submit">Agregar Autómovil</button></a>
        <div class="row">
            
            <?php
            $automovil = $con ->query("SELECT * FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
            while($automo= $automovil -> fetch_assoc()){
            ?>
            <div class="col-md-12">
            <hr style="background-color: #FFF100; height: 2px; border: 0;">
            <div class="col-md-6">Distrito: <?php echo $automo['distrito']; ?></div>
            <div class="col-md-6">Uso: <?php echo $automo['uso']; ?></div>
            <div class="col-md-6">Modelo: <?php echo $automo['modelo']; ?></div>
            <div class="col-md-6">Tracción: <?php echo $automo['traccion']; ?></div>
            <div class="col-md-6">Clase: <?php echo $automo['clase']; ?></div>
            <div class="col-md-6">Placa: <?php echo $automo['placa']; ?></div>
            <div class="col-md-6">Marca: <?php echo $automo['marca']; ?></div>
            <div class="col-md-6">Año: <?php echo $automo['ano']; ?></div>
            <div class="col-md-6">Motor: <?php echo $automo['motor'];?></div>
            <div class="col-md-6">Chasis: <?php echo $automo['chasis']; ?></div>
            <div class="col-md-6">Plazas: <?php echo $automo['plazas']; ?></div>
            <div class="col-md-6">Capital Asegurado: <?php echo $automo['auto_cap_aseg']; ?></div>
            <div class="col-md-6">Color: <?php echo $automo['color']; ?></div>
            <div class="col-md-6">Prima Contado: <?php echo number_format($automo['prima_total'],2); ?></div>
            <div class="col-md-6">Prima Cr&eacute;dito: <?php echo number_format($automo['prima_credito'],2); ?></div>
            <a href="../../automovil_cotizacion/include/actualizar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs pull-right" type="submit"></button></a>
            <a href="../../automovil_cotizacion/include/borrar.php?id=<?php echo $automo['id_automovil'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs pull-right" type="submit"></button></a>
            </div>
            <?php  } ?>
        </div>
    </div>
    <!-- Inicio en Vivo  -->      
          <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container">
        <div class="row">
            <div class="col-md-12" style="font-size:12px;">
                <div class="col-md-6">Coberturas Adicionales</div>
                <div class="col-md-1">Cobertura</div>
                <div class="col-md-2">Suma Asegurada</div>
                <div class="col-md-2">Franquicia</div>
                <div class="col-md-1"></div>
            </div>
            <br><br>
            <div class="col-md-12" style="font-size:10px;">
                <div class="col-md-6"><h5 style="font-weight: bold;">RESPONSABILIDAD CIVIL</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12" style="font-size:10px;">
            <?php
                   //$produc_auto = $con -> query("SELECT * FROM producto_automotores_pol WHERE cod_cotizacion='$cod_cotizacion'");
                  //$pa = $produc_auto -> fetch_assoc();
                 // $producto_auto = $pa['producto_auto'];
                    //if($producto_au=="PRODUCTO A"){
                       $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE cod_cotizacion='$cod_cotizacion'");
                       $prod_auto = $prod -> fetch_assoc();
                      $nombre_rc = $prod_auto['nombre'];
                      $monto_rc = $prod_auto['monto'];
                    //}elseif($producto_au=="PRODUCTO B"){
                    //     $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE cod_cotizacion='$cod_cotizacion'");
                    //    $prod_auto = $prod -> fetch_assoc();
                    //    $prod_auto['nombre'];
                    //    $prod_auto['monto'];
                    //}
                    //elseif($producto_au=="PRODUCTO C"){
                    //    $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE cod_cotizacion='$cod_cotizacion'");
                    //    $prod_auto = $prod -> fetch_assoc();
                    //    $prod_auto['nombre'];
                    //    $prod_auto['monto'];
                    //}
		            ?>
            <div class="col-lg-6"><?php echo $nombre_rc; ?></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2"><?php echo 'Hasta $USD '.number_format($monto_rc); ?></div>
            <div class="col-lg-2"></div>
            <div class="col-md-1">
                <a href="../../producto/include/actualizar.php?id=<?php echo $prod_auto['id_prod_auto'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs" type="submit"></button></a>
            <a href="../../producto/include/borrar.php?id=<?php echo $prod_auto['id_prod_auto'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs" type="submit"></button></a>
            </div>
                <?php
             $sel2 = $con ->query("SELECT * FROM respon_civil_auto_pol WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($cob_au = $sel2 -> fetch_assoc()) {
		          ?> 
            <div class="col-lg-6"><?php echo $cob_au['nombre']; ?></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2"><?php echo 'Hasta $USD '.number_format($cob_au['suma_asegurada']); ?></div>
            <div class="col-lg-2"></div>
            <div class="col-md-1">
            <a href="../../responsabilidad_civil/include/actualizar.php?id=<?php echo $cob_au['id_respciv'] ?>&carnet=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs" type="submit"></button></a>
            <a href="../../responsabilidad_civil/include/borrar.php?id=<?php echo $cob_au['id_respciv'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs" type="submit"></button></a>    
            </div>
            <?php } ?>
            </div>
            </div>
        </div>
        <hr style="background-color: #FFF100; height: 2px; border: 0;"> 
  
    <!-- Fin en Vivo  --> 
          <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6"><h5 style="font-weight: bold;">RIESGOS CUBIERTOS</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $selda = $con ->query("SELECT * FROM riesgo_cubierto_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($riesgo = $selda -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-6"><?php echo $riesgo['nombre'];  ?></div>
            <div class="col-lg-1"><?php echo 'Al '.$riesgo['porcentaje']. "%";  ?></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"><?php echo $riesgo['franquicia']; ?></div>
            <div class="col-md-1">
            <a href="../../riegos_cubiertos/include/actualizar.php?id=<?php echo $riesgo['id_riecu'] ?>&carnet=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs" type="submit"></button></a>
            <a href="../../riegos_cubiertos/include/borrar.php?id=<?php echo $riesgo['id_riecu'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs" type="submit"></button></a>
                </div>
           
            <?php } ?>
            </div>
            </div>
        </div>
    <!-- Inicio en Vivo  -->      
          <hr style="background-color: #FFF100; height: 2px; border: 0;">
             <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6"><h5 style="font-weight: bold;">ACCIDENTES PERSONALES PARA OCUPANTES</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $sely = $con ->query("SELECT * FROM acc_perso_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($accper = $sely -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-6"><?php echo $accper['nombre'];  ?></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2"><?php echo '$ '.number_format($accper['suma_asegurada']);  ?></div>
            <div class="col-md-2"></div>
            <div class="col-md-1">
            <a href="../../accidentes_personales/include/actualizar.php?id=<?php echo $accper['id_acc_pers'] ?>&carnet=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs" type="submit"></button></a>
            <a href="../../accidentes_personales/include/borrar.php?id=<?php echo $accper['id_acc_pers'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs" type="submit"></button></a>
                </div>
           
            <?php } ?>
            </div>
            </div>
        </div>        
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
          
          <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6"><h5 style="font-weight: bold;">CLAUSULAS ADICIONALES</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $selos = $con ->query("SELECT * FROM clau_adic_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($claadic = $selos -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-6"><?php echo $claadic['nombre'];  ?></div>
            <div class="col-lg-1"><?php echo $claadic['cubre'];  ?></div>
            <div class="col-lg-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-1">
            <a href="../../clausulas_adicionales/include/actualizar.php?id=<?php echo $claadic['id_clau_adic'] ?>&carnet=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs" type="submit"></button></a>
            <a href="../../clausulas_adicionales/include/borrar.php?id=<?php echo $claadic['id_clau_adic'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs" type="submit"></button></a>
                </div>
           
            <?php } ?>
            </div>
            </div>
        </div>
    <!-- Fin en Vivo  --> 
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
          
          <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <?php 
                $cod_cli = $con ->query("SELECT * FROM ben_adic_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
		        $codcli = $cod_cli -> fetch_assoc();
                $codigocliente = $codcli['cod_cliente'];
                ?>
                <div class="col-md-5"><h5 style="font-weight: bold;">BENEFICIOS ADICIONALES</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-3"></div>
                <div class="col-md-1"><a href="../../beneficios_adicionales/include/registrar.php?cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>&cod_cliente=<?php echo $codigocliente; ?>"><button class="glyphicon glyphicon-floppy-disk btn btn-primary btn-xs" type="submit"></button></a></div>
            </div>
         </div>
          
     <div class="row">
            
            <?php
		          $se = $con ->query("SELECT * FROM ben_adic_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($benadic = $se -> fetch_assoc()) {
		          ?>
           <div class="col-md-12">
            <div class="col-md-6"><?php echo $benadic['nombre'];  ?></div>
            <div class="col-md-1"><?php echo $benadic['cubre'];  ?></div>
            <div class="col-md-2"></div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
            <a href="../../beneficios_adicionales/include/actualizar.php?id=<?php echo $benadic['id_ben_au'] ?>&carnet=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs" type="submit"></button></a>
            <a href="../../beneficios_adicionales/include/borrar.php?id=<?php echo $benadic['id_ben_au'] ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs" type="submit"></button></a>
            </div>
           </div>
            <?php } ?>
            
            </div>
              </div>
   
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
          
     <div class="container">
        <div class="row">
    <h5>Prima Total</h5>
<?php
       $sumatoria = $con ->query("SELECT SUM(auto_cap_aseg) as suma_prima FROM automovil_cotizacion WHERE cod_cotizacion='$cod_cotizacion'");
            $f = mysqli_fetch_assoc($sumatoria);
            $suma_pri=$f["suma_prima"];
            //$sumaprima = $sumatoria -> fetch_assoc();
            //echo $sumaprima=['suma_prima'];

 //echo $porcentaje_reaseguro;
?>         
        <div class="col-md-12" style="font-weight: bold; font-size:12px;">
            Contado: USD $ <?php echo number_format($prima_total = $suma_pri*$tasa_prima/100,2); ?></div>
        <div class="col-md-12" style="font-weight: bold; font-size:12px;">
            Crédito: USD $ <?php echo number_format($credito = $prima_total*.06+($prima_total),2); ?>
            </div>
            <div class="col-md-12" style="font-size:10px;">
                Cuota inicial minimo 30% y cuatro cuotas adicionales.
            </div>
            <div class="col-md-12" style="font-size:10px;">
                <div class="col-md-4"><?php // echo "Cuota Inicial: USD $ ".number_format($primera = $credito*.3,2); ?></div>
                <div class="col-md-4"><?php //echo $fecha= date('d-m-Y', strtotime('1 month')) ; ?></div>
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12" style="font-size:10px;">
                <?php
               // $cuotas= $credito*.7;
            //    $cuota = 4;
            //    $contador = 1;
            //    for($ii = 1; $ii <= $cuota; $ii++)
              //       {
            //            $mes    =    date('m')    +    $ii;
            //            if( $mes    <=    9    ) 
            //            {
            //                $vencimiento    =    date('d-')    .    '0'    .    $mes    .date('-Y');
              //          }elseif(    $mes    ==    13    )
            //            {
            //                $vencimiento    =    date('d-')    .    '01'    .date('-Y');
            //            }else{
            //                $vencimiento    =    date('d-')    .    $mes    .date('-Y');
              //          }
            //        echo "<div class='col-md-4'>";
            //        echo "Cuota número ".$contador++.": USD $  ".number_format($cuotas/4,2);
            //        echo "</div>";
            //        echo "<div class='col-md-4'> ";
            //        echo "</div>";
            //        echo "<div class='col-md-4'>";
            //        echo "</div>";
              //                              echo "<br>";
            //    }
                ?> 
                
            </div>
            </div>
        </div>
    </div>
          <hr style="background-color: #FFF100; height: 2px; border: 0;">
          
         <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6"><h5 style="font-weight: bold;">REQUISITOS DE ASEGURABILIDAD</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                 <div class="col-md-1"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $sewa = $con ->query("SELECT * FROM req_aseg_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($reqaeg = $sewa -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-6"><?php echo $reqaeg['nombre'];  ?></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2"></div>
            <div class="col-md-2"></div>
             <div class="col-md-1">
            <a href="../../requisitos_asegurabilidad/include/actualizar.php?id=<?php echo $reqaeg['id_reqaseg']; ?>&carnet=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs" type="submit"></button></a>
            <a href="../../requisitos_asegurabilidad/include/borrar.php?id=<?php echo $reqaeg['id_reqaseg']; ?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs" type="submit"></button></a>
                </div>
           
            <?php } ?>
            </div>
            </div>
        </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
      <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6"></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"><a href="../../nota_aclaratoria/include/registrar.php?cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-floppy-disk btn btn-primary btn-xs" type="submit"></button></a></div>
            </div>
         </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6"><h5 style="font-weight: bold;">NOTA ACLARATORIA</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
            </div>
         </div>
         <div class="row">
            
            <?php
		          $nota = $con ->query("SELECT * FROM nota_aclar_au_pol WHERE cod_cotizacion='$cod_cotizacion'");
		          while ($notacla = $nota -> fetch_assoc()) {
		          ?>   
             <div class="col-md-12">
            <div class="col-md-6"><?php echo $notacla['nombre'];  ?></div>
            <div class="col-md-1"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-1">
            <a href="../../nota_aclaratoria/include/actualizar.php?id=<?php echo $notacla['id_notacla'];?>&carnet=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-cog btn btn-success btn-xs" type="submit"></button></a>
            <a href="../../nota_aclaratoria/include/borrar.php?id=<?php echo $notacla['id_notacla'];?>&cod_cotizacion=<?php echo $fila['cod_cotizacion']; ?>"><button class="glyphicon glyphicon-trash btn btn-danger btn-xs" type="submit"></button></a>
            </div>
           </div>
            <?php } ?>
            
            </div>
        </div>

          
     <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
            <?php
                   //definimos el area geografica del cual deseamos la fecha actual
                    date_default_timezone_set("America/La_Paz");
                    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            ?>
    <h5>Vigencia</h5>
            
            <h5>Un Año</h5>
           <!-- <div class="col-md-12" style="font-size:10px;">
            <div class="col-md-12">Inicio:  Desde las 12:01 p.m. del <?php //echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></div>
            <div class="col-md-12">Termino: Hasta las 12:00 p.m. del <?php //echo $dias=date('d')." de ".$meses[date('n')-1]. " del ". " 2019"; ?></div>
            </div> -->
    </div>
    
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container" style="font-size:10px;">
        <div class="row">
    <h5>SEGURO DE EXTRATERRITORIALIDAD</h5>
            <div class="col-md-12">
            <div class="col-md-12">PREVIO AVISO A LA COMPAÑIA EXCLUYENDO BENEFICIO DE AUXILIO MECÁNICO, ROBO PARCIAL DE PARTES Y PIEZAS, AUTOREEMPLAZO Y SERVICIO DE GRÚA, MAXIMO 30 DIAS POR VIAJE.</div>
        </div>
    </div>
         
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container" style="font-size:10px;">
        <div class="row">
    <h5>OBSERVACIONES</h5>
            <div class="col-md-12">
            <div class="col-md-12">Las coberturas mencionadas como "no cubiertas", no se encuentran aseguradas en la presente Póliza.</div>
            <div class="col-md-12">El Asegurado autoriza a la Compañia de Seguros a enviar reporte a la Central de Riesgos del mercado de seguros acorde a las normativas reglamentarias de la Autoridad de Fiscalización Pensiones y Seguros.</div>
            </div>
        </div>
    </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container" style="font-size:10px;">
        <div class="row">
    <h5>INTERMEDIARIO</h5>
            <div class="col-md-12">
            <div class="col-md-12"><?php echo $intermediario; ?></div>
        </div>
    </div>
         <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container" style="font-size:10px;">
        <div class="row">
    <h5 font-size:10px;>VALIDEZ DE LA OFERTA: 15 DIAS A PARTIR DE LA FECHA.</h5>
    </div>

          <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container" style="font-size:10px;">
        <div class="row">
    <h5 font-size:10px;>Lugar y Fecha:</h5>
            <div class="col-md-12">
            <div class="col-md-12">La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></div>
            </div>
        </div>
    </div>
    <h5 style="text-align:center; font-size:10px;">UNIBIENES SEGUROS Y REAEGUROS PATRIMONIALES S.A.</h5>
          <br><br>
      <h5 style="text-align:center; font-size:10px;">FIRMAS AUTORIZADAS</h5>
      </div>
     </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
        <script src="../../librerias/bootstrap.min.js"></script>
        
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