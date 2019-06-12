<?php include("verificar_sesion.php"); 
$usuario = $_SESSION["usuario"];
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="bootstrap/css/fondo.css">
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
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Producción <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="poliza_automotor/cotizaciones/include/calculo_prima.php">Productos</a></li>
                            <li><a href="poliza_automotor/cotizaciones/include/calculo_prima_diferida.php">Prima Diferida</a></li>
                            <li><a href="poliza_automotor/cotizaciones/include/calculo_prima_bu.php">Prima Banco Union</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Personas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="clientes/index.php">Clientes</a>
                            <li><a href="clientes/buscador/buscador.php">Lista UIF</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="poliza_automotor/automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                  <!--  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores</a>
								<ul class="dropdown-menu">
									<li><a href="poliza_automotor/cotizaciones/index.php">Cotización</a></li>
                                    <li><a href="poliza_automotor/polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                                    <li><a href="poliza_automotor/siniestros/index.php">Siniestros</a></li>
                                    <li><a href="poliza_automotor/reportes/include/reportes_automotor.php">Reportes</a></li>
								</ul>
							</li>
                        </ul>
                    </li> -->
                    <?php 
                if($usuario=='Auditoria'){
                    ?>
                     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contabilidad <b class="caret"></b></a>
                    </li>
                    <?php
                    }else{
                    ?>
                         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contabilidad <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="poliza_automotor/reportes/contabilidad/reporte_fechas.php">Reporte LV</a>
							</li>
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Ramos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu"><a href="poliza_automotor/siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Automotores</a>
								<ul class="dropdown-menu">
                                    <li><a href="poliza_automotor/cotizaciones/index.php">Cotización</a></li>
                                    <li><a href="poliza_automotor/polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                                    <li><a href="poliza_automotor/reportes/include/reportes_automotor.php">Reportes</a></li>
                                    <li><a href="poliza_automotor/siniestros/index.php">Siniestros</a></li>
                                    <li><a href="poliza_automotor/polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="poliza_automotor/siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="poliza_automotor/siniestros/ver_liquidacion.php">Liquidaciones</a></li>
								<!--	<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
								</ul>
							</li>
                            <li class="dropdown dropdown-submenu"><a href="" class="dropdown-toggle" data-toggle="dropdown">Incendio</a>
								<ul class="dropdown-menu">
                                    <li><a href="incendio/index.php">Cotización</a></li>
                                    <li><a href="incendio/ver_poliza_incendio.php">Polizas</a></li>
								<!--	<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
								</ul>
							</li>
                            <li class="dropdown dropdown-submenu"><a href="" class="dropdown-toggle" data-toggle="dropdown">Accidentes</a>
								<ul class="dropdown-menu">
                                    <li><a href="accidentes/index.php">Cotización</a></li>
                                    <li><a href="accidentes/ver_poliza_accidentes.php">Polizas</a></li>
								<!--	<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
								</ul>
							</li>
                            </ul>
							</li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Banco Unión <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="poliza_union/automotores/index.php">Automotores</a></li>
                            <li><a href="poliza_union/danos_propiedad/index.php">Daños Propiedad</a></li>
                            <li><a href="poliza_union/equipo_contratista/index.php">Equipo Contratista</a></li>
                            <li><a href="poliza_union/equipo_electronico/index.php">Equipo Eletrónico</a></li>
                            <li><a href="poliza_union/incendio/index.php">Incendio</a></li>
                            <li><a href="poliza_union/rotura_maquinaria/index.php">Rotura de Maquinaria</a></li>
                            <li><a href="poliza_union/tarjeta_credito/index.php">Tarjeta de Crédito</a></li>
                            <li><a href="poliza_union/tarjeta_debito/index.php">Tarjeta de Débito</a></li>
                            <!--<li><a href="poliza_automotor/polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="poliza_automotor/reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="poliza_automotor/siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="poliza_automotor/siniestros/index.php">Siniestros</a></li>
                                    <li><a href="poliza_automotor/polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="poliza_automotor/siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="poliza_automotor/siniestros/ver_liquidacion.php">Liquidaciones</a></li>
									<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li> -->
								</ul>
							</li>
                            
                        <!--   <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
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
									</li>-->
                            </ul>
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
            </div><!-- /.navbar-collapse -->
        </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/bootstrap.min.js"></script>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  </body>
</html>
