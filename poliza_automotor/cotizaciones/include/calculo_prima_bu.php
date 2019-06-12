<?php
 if(isset($_POST['enviar']))
  {
$terremoto = $_POST['terremoto'];
$terrorismo = $_POST['terrorismo'];

    $con = new mysqli('localhost','root','','unibienes');
    $valor_asegurado = $_POST['valor'];
    $prima_total = $_POST['prima_cobrar'];
    $cod_cliente = $_POST['cod_cliente'];
    $num_poliza = $_POST['num_poliza'];
    $porcentaje_iva=13;
    $porcentaje_it=3;
    $porcentaje_itf=.3;
    $porcentaje_aba = 0.061263045503;
    $porcentaje_fpa=.5;
    $porcentaje_aps=2;
    $porcentaje_itf_remesas = 0.3;
    $porcentaje_intermediario=16;
    $porcentaje_iue_remesas=2.5;
    $porcentaje_comision_bancaria = 2.10;
    $porcentaje_comision_compania = 10.9;
    //$porcentaje_factor_tasa_tecnica = 1.26079803962626;
    $porcentaje_secion = .70;
    //en posible desarrollo
    $prima_anulacion=1;
    ////////////////////
    $porcentaje_seguridad = .59;
    $porcentaje_reaseguro = .20;
   
    //traer de la base de datos
    $com_cobranza_1 = 0;
    $com_cobranza_2 = 0;
    $factor_impuesto = 1.14942528736;
    $tipo_cambio = 6.86;
    $porcentaje_factor_tasa_tecnica = 1.33700747;
    $compania = '116';
    $distrito = 'LA PAZ';
    $fecha_hoy = date('Y-m-d');
    //$modalidad = '91';
    //$ramo = '05';
    $broker = 'Sudamenricana S.R.L. Corredores de Seguros.';
    $ramo = $_POST['ramo'];
    
    //parmetrizar por post
    if($terremoto =='SI'){
        $porcentaje_comi_reaseguro = .275;
    }elseif($terremoto =='NO')
    {
        $porcentaje_comi_reaseguro = .0;
    }
    if($terrorismo =='SI'){
        $porcentaje_comi_reaseguro = .0;
    }elseif($terrorismo =='NO')
    {
        $porcentaje_comi_reaseguro = .20;
    }
    
    //$porcentaje_comision_inter = $_POST['com_inter'];
    if($ramo=='INCENDIO Y ALIADOS'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 13.1776500381;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 61.73;
        $porcentaje_comi_reaseguro = 32.5;
        
        $modalidad = '91';
        $ramo = '01';
    }
    elseif($ramo=='ROTURA DE MAQUINARIA'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 33.1897380226;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 35.06;
        $modalidad = '91';
        $ramo = '07';
    }
    elseif($ramo=='EQUIPO CONTRATISTA'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 40.8659157534;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 24.83;
        $modalidad = '91';
        $ramo = '07';
    }
    elseif($ramo=='EQUIPO ELECTRICO'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 39.6353261661;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 26.47;
        $modalidad = '91';
        $ramo = '07';
    }
    elseif($ramo=='TRDP'){
        $porcentaje_comision_inter=17;
        $porcentaje_prima_riesgo = 19.0875107189;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 52.96;
        $porcentaje_comi_reaseguro = 32.5;
        $modalidad = '91';
        $ramo = '01';
    }
    elseif($ramo=='PESADO PARTICULAR'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 486171294347;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 14.50;
        $porcentaje_secion = 0;
        $porcentaje_comi_reaseguro = 0;
        $modalidad = '91';
        $ramo = '05';
    }
    elseif($ramo=='LIVIANO PARTICULAR'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 43.7322890605;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 21.01;
        $porcentaje_secion = 0;
         $porcentaje_comi_reaseguro = 0;
        $modalidad = '91';
        $ramo = '05';
    }
    elseif($ramo=='PESADO PUBLICO'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 25.7836897134;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 44.93;
        $porcentaje_secion = 0;
         $porcentaje_comi_reaseguro = 0;
        $modalidad = '91';
        $ramo = '05';
    }
    elseif($ramo=='LIVIANO PUBLICO'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 41.0084840593;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 24.64;
         $porcentaje_comi_reaseguro = 0;
        $porcentaje_secion = 0;
        $modalidad = '91';
        $ramo = '05';
    }
    elseif($ramo=='MOTOCICLETAS CUADRATRAC'){
        $porcentaje_comision_inter=15;
        $porcentaje_prima_riesgo = 30.6385157074;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 38.46;
        $porcentaje_secion = 0;
         $porcentaje_comi_reaseguro = 0;
        $modalidad = '91';
        $ramo = '05';
    }
    elseif($ramo=='TARJETA DE CREDITO'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 31.5669470539;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 40.07;
        $porcentaje_secion = 0;
         $porcentaje_comi_reaseguro = 0;
        $modalidad = '91';
        $ramo = '09';
    }
    elseif($ramo=='TARJETA DE DEBITO'){
        $porcentaje_comision_inter=10;
        $porcentaje_prima_riesgo = 31.5669470539;
        $prima_riesgo=$prima_total*$porcentaje_prima_riesgo/100;
        $com_cobranza = 40.07;
         $porcentaje_comi_reaseguro = 0;
        $porcentaje_secion = 0;
        $modalidad = '91';
        $ramo = '09';
    }

    
    $com_inter = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_inter)/100;
    $com_comp = ($prima_total/$porcentaje_factor_tasa_tecnica*$porcentaje_comision_compania)/100;
    $itf = $prima_total*$porcentaje_itf/100;
    $it = $prima_total*$porcentaje_it/100;
    $iva = $prima_total*$porcentaje_iva/100;
    $comi_cobranza = $com_cobranza*$prima_total/100;
    $prima_neta = ($prima_total-$comi_cobranza)/$porcentaje_factor_tasa_tecnica;
    $aba = ($prima_neta*$porcentaje_aba)/100;
    $fpa = ($prima_neta*$porcentaje_fpa)/100;
    $aps = ($prima_neta*$porcentaje_aps)/100;
    $prima_directa = $prima_neta;
    $prima_riesgo = $prima_total*$porcentaje_prima_riesgo/100;
    $itf_remesas = $porcentaje_itf_remesas*$prima_riesgo/100;
    $uie_remesas = $porcentaje_iue_remesas*$prima_riesgo/100;
    $com_inter = ($prima_neta*$porcentaje_comision_inter)/100;
    $com_comp = ($prima_neta*$porcentaje_comision_compania)/100;
    $com_inter_fact = ($com_inter/.87);
    $com_bancaria = $porcentaje_comision_bancaria*$prima_riesgo/100;
    $prima_directa_bs = $prima_directa*$tipo_cambio;
    
    $prima_neta_directa = $prima_directa/$prima_anulacion;
     
    
    $prima_neta_directa_bs = $prima_directa*$tipo_cambio;
    $prima_adicional = ($prima_total-$iva)-$prima_directa;
    $prima_ced_reaseg = $porcentaje_secion*$porcentaje_seguridad*$prima_riesgo;
    $prima_ced_reaseg_bs = $prima_ced_reaseg*$tipo_cambio;
    $com_reaseguro = $prima_ced_reaseg*$porcentaje_comi_reaseguro/100;
    
    $insertar = $con ->query("INSERT INTO `n_produccion`(`id_produccion`, `cia`, `nombre_cia`, `cod_parte`, `oficina`, `cod_sector`, `cod_moneda`, `fecha_informacion`, `modalidad`, `ramo`, `cod_cliente`, `cod_poliza`, `tipo_pago`, `valor_en_riesgo`, `valor_asegurado`, `terrorismo_riesgos`, `terremoto`, `tipo_aseguramiento`, `nro_polizas_emitidas`, `nro_polizas_renovadas`, `nro_certificado`, `tipo_de_raseguro`, `prima_comercial`, `itf`, `it`, `iva`, `aba`, `fpa`, `aps`, `itf_remesas`, `nom_intermediario`, `com_inter`, `com_fac_inter`, `iue_remesas`, `com_bancaria`, `com_compania`, `com_cobranza_uno`, `com_cobranza_dos`, `nombre_inter`, `prima_riesgo`, `prima_directa`, `prima_directa_bs`,     `prima_renovadas`, `prima_renovadas_bs`, `prima_acep_coaseguro`, `prima_acep_coaseguro_bs`, `valor_aseg_anulado`, `nro_pol_anuladas`, `prima_anulada`, `prima_anulada_bs`, `prima_renov_anu`, `prima_renov_anu_bs`, `prima_coaseg_anu`, `prima_coaseg_anu_bs`, `nro_polizas_netas`, `valor_aseg_cedido`, `valor_aseg_cedido_anu`, `prima_neta_directa`, `prima_neta_directa_bs`, `prima_acep_reaseg_nal`, `prima_acep_reaseg_nal_bs`, `pri_acep_anu_reaseg_nal`, `pri_acep_anu_reaseg_nal_bs`, `pri_acep_reaseg_ext`, `pri_acep_reaseg_ext_bs`, `pri_acep_anu_reaseg_ext`, `pri_acep_anu_reaseg_ext_bs`, `pri_cedidas_reaseg`, `pri_cedidas_reaseg_bs`, `comi_reaseg`, `comi_reaseg_anu`, `anu_primas_cedidas_reaseg`, `anu_primas_cedidas_reaseg_bs`, `distrito`, `f_registro`) VALUES ('','$compania','UNIBIENES S.A.', 'S', '$distrito', 'P','1', '$fecha_hoy','$modalidad','$ramo', '$cod_cliente','$num_poliza','$tipo_pago','0.00','$valor_asegurado','NO','NO','VT','1','0','1','','$prima_total','$itf','$it','$iva','$aba','$fpa','$aps','$itf_remesas','$broker','$com_inter','$com_inter_fact','$uie_remesas','$com_bancaria','$com_comp','0.00','$comi_cobranza','$broker','$prima_riesgo','$prima_directa','$prima_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_neta_directa','$prima_neta_directa_bs','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$prima_ced_reaseg','$prima_ced_reaseg_bs','$com_reaseguro','0.00','0.00','0.00','$distrito','$fecha_hoy')");
    
   // if(mysqli_query($con, $insertar)){
    //header('Location: ../index.php');
//    echo "Records inserted successfully.";
//} else{
//    echo "ERROR: Could not able to execute $insertar. " . mysqli_error($con);
 }
?>

<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <script src="script.js"></script>
    <title>.: Sistema UNIBienes :.</title>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

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
                                    <li><a href="../../polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../../siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../../siniestros/ver_liquidacion.php">Liquidaciones</a></li>
								
								</ul>
							</li>
                    
                </ul>
                    </li>
                </ul>
  
        <ul class="nav navbar-nav navbar-right">
    
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="#"><?php echo $_SESSION["usuario"]; ?></a></li>
            <li><a href="../../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
         </div>
        </nav>
    <div class="container">
        <h2>Modulo de Producción</h2>
        <br>
	 <form action="" method="post">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Código Cliente</label>
                                    <input type="text" class="form-control" id="cod_cliente" name="cod_cliente">
                                  </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Número de Póliza</label>
                                <input type="text" class="form-control" id="num_poliza" name="num_poliza">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Valor Asegurado</label>
                                <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Prima a Cobrar</label>
                                <input type="text" class="form-control" id="prima_cobrar" name="prima_cobrar" placeholder="Prima a Cobrar" required>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Terremoto</label>
                                <select type="text" class="form-control" id="terremoto" name="terremoto">
                                <option value='SI'>SI</option>
                                <option value='NO'>NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Terrorismo</label>
                                <select type="text" class="form-control" id="terrorismo" name="terrorismo">
                                <option value='SI'>SI</option>
                                <option value='NO'>NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha Inicio de Vigencia</label>
                                <input type="text" class="form-control" id="f_vigencia" name="f_vigencia" placeholder="0000-00-00" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Ramo</label>
                                <select type="text" class="form-control" id="ramo" name="ramo">
                                <option></option>
                                <option value='INCENDIO Y ALIADOS'>INCENDIO Y ALIADOS</option>
                                <option value='ROTURA DE MAQUINARIA'>ROTURA DE MAQUINARIA</option>
                                <option value='EQUIPO ELECTRICO'>EQUIPO ELECTRICO</option>
                                <option value='EQUIPO CONTRATISTA'>EQUIPO CONTRATISTA</option>
                                <option value='TRDP'>TRDP</option>
                                <option value='PESADO PARTICULAR'>PESADO PARTICULAR</option>
                                <option value='LIVIANO PARTICULAR'>LIVIANO PARTICULAR</option>
                                <option value='PESADO PUBLICO'>PESADO PUBLICO</option>
                                <option value='LIVIANO PUBLICO'>LIVIANO PUBLICO</option>
                                <option value='MOTOCICLETAS CUADRATRAC'>MOTOCICLETAS CUADRATRAC</option>
                                <option value='TARJETA DE CREDITO'>TARJETA DE CREDITO</option>
                                <option value='TARJETA DE DEBITO'>TARJETA DE DEBITO</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <br>
                                 <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
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