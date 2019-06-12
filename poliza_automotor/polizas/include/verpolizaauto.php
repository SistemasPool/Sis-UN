<?php
include "../../../verificar_sesion.php";
include 'conexion.php';

$cod_cliente = $_REQUEST['cod_cliente'];
$nro_poliza = $_REQUEST['nro_poliza'];

     if (isset($_POST['up_cuotas'])) {
        $monto = $_POST['monto'];
        $id = $_POST['id'];
        $fecha_cuotas = $_POST['fecha_cuotas'];
         
        $up_ini = $con ->query("UPDATE `cuotas` SET `monto`='$monto',`fecha_cuotas`='$fecha_cuotas' WHERE `id_cuotas`='$id'");
         
        ///sumatoria
        $sum_ini = $con ->query("SELECT sum(monto) as suma_inicial FROM cuota_inicial WHERE `num_poliza`='$nro_poliza' and `cod_cliente`='$cod_cliente'");
        $sum_inicial = $sum_ini -> fetch_assoc();
        $su_ini = $sum_inicial['suma_inicial'];
        
        $sum_cuotas = $con ->query("SELECT sum(monto) as suma_cuotas FROM cuotas WHERE `num_poliza`='$nro_poliza' and `cod_cliente`='$cod_cliente'");
        $sum_cuotass = $sum_cuotas -> fetch_assoc();
        $su_cuotas = $sum_cuotass['suma_cuotas'];
        
        $sumatoria_credito = $su_ini+$su_cuotas;
        
        $sum_cuotas = $con ->query("UPDATE `automovil` SET `prima_total`='$sumatoria_credito' WHERE `cod_cliente`='$cod_cliente' and `nro_poliza`='$nro_poliza'");
        ///sumatoria
     }
    if (isset($_POST['up_inicial'])) {
        $monto = $_POST['monto'];
        $id = $_POST['id'];
        $fecha_cuotas = $_POST['fecha_cuotas'];
        
        $up_ini = $con ->query("UPDATE `cuota_inicial` SET `monto`='$monto',`fecha_cuotas`='$fecha_cuotas' WHERE `id_cuo_ini`='$id'");
        
        
        ///sumatoria
        $sum_ini = $con ->query("SELECT sum(monto) as suma_inicial FROM cuota_inicial WHERE `num_poliza`='$nro_poliza' and `cod_cliente`='$cod_cliente'");
        $sum_inicial = $sum_ini -> fetch_assoc();
        $su_ini = $sum_inicial['suma_inicial'];
        
        $sum_cuotas = $con ->query("SELECT sum(monto) as suma_cuotas FROM cuotas WHERE `num_poliza`='$nro_poliza' and `cod_cliente`='$cod_cliente'");
        $sum_cuotass = $sum_cuotas -> fetch_assoc();
        $su_cuotas = $sum_cuotass['suma_cuotas'];
        
        $sumatoria_credito = $su_ini+$su_cuotas;
        
        $sum_cuotas = $con ->query("UPDATE `automovil` SET `prima_total`='$sumatoria_credito' WHERE `cod_cliente`='$cod_cliente' and `nro_poliza`='$nro_poliza'");
        ///sumatoria
        
     } 

    if (isset($_POST['del_cuotas'])) {
        $id = $_POST['id'];
        $del_ini = $con ->query("DELETE FROM `cuotas` WHERE `id_cuotas`='$id'");
        
        ///sumatoria
        $sum_ini = $con ->query("SELECT sum(monto) as suma_inicial FROM cuota_inicial WHERE `num_poliza`='$nro_poliza' and `cod_cliente`='$cod_cliente'");
        $sum_inicial = $sum_ini -> fetch_assoc();
        $su_ini = $sum_inicial['suma_inicial'];
        
        $sum_cuotas = $con ->query("SELECT sum(monto) as suma_cuotas FROM cuotas WHERE `num_poliza`='$nro_poliza' and `cod_cliente`='$cod_cliente'");
        $sum_cuotass = $sum_cuotas -> fetch_assoc();
        $su_cuotas = $sum_cuotass['suma_cuotas'];
        
        $sumatoria_credito = $su_ini+$su_cuotas;
        
        $sum_cuotas = $con ->query("UPDATE `automovil` SET `prima_total`='$sumatoria_credito' WHERE `cod_cliente`='$cod_cliente' and `nro_poliza`='$nro_poliza'");
        ///sumatoria
     } 

    if (isset($_POST['del_inicial'])) {
        $id = $_POST['id'];
        $del_ini = $con ->query("DELETE FROM cuota_inicial WHERE `id_cuo_ini`='$id'");
        
        ///sumatoria
        $sum_ini = $con ->query("SELECT sum(monto) as suma_inicial FROM cuota_inicial WHERE `num_poliza`='$nro_poliza' and `cod_cliente`='$cod_cliente'");
        $sum_inicial = $sum_ini -> fetch_assoc();
        $su_ini = $sum_inicial['suma_inicial'];
        
        $sum_cuotas = $con ->query("SELECT sum(monto) as suma_cuotas FROM cuotas WHERE `num_poliza`='$nro_poliza' and `cod_cliente`='$cod_cliente'");
        $sum_cuotass = $sum_cuotas -> fetch_assoc();
        $su_cuotas = $sum_cuotass['suma_cuotas'];
        
        $sumatoria_credito = $su_ini+$su_cuotas;
        
        $sum_cuotas = $con ->query("UPDATE `automovil` SET `prima_total`='$sumatoria_credito' WHERE `cod_cliente`='$cod_cliente' and `nro_poliza`='$nro_poliza'");
        ///sumatoria
     } 


$suma_capital = $con ->query("SELECT SUM(prima_total) AS suma_capital FROM calculo_prima WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
$suca= $suma_capital -> fetch_assoc();
$valor = $suca['suma_capital'];

$se_pro = $con ->query("SELECT * FROM automovil WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
$sepro= $se_pro -> fetch_assoc();
$producto_auto = $sepro['plan'];

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
       <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- Editor Tiny -->
     
      <script>tinymce.init({ selector:'textarea' });</script>
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
      <?php
      $sql = $con ->query("SELECT * FROM automovil where nro_poliza='$nro_poliza'");  
        $valida = $sql -> fetch_assoc();
        $rows = mysqli_num_rows($sql);
         if($rows > 1)  
        {  
            ?>
            <h4 style="text-align:center;">SEGURO DE AUTOMOTORES - GRUPAL</h4>
            <?php
        }else
         {
             ?>
             <h4 style="text-align:center;">SEGURO DE AUTOMOTORES - INDIVIDUAL</h4>
             <?php
         }
          ?>    
      
      <h5 style="text-align:center;">CONDICIONES PARTICULARES</h5>
    <div class="container">

        <br><br>
                  <?php
                  //$cod_cliente = $_REQUEST['cod_cliente'];
                  //$nro_poliza = $_REQUEST['nro_poliza'];
		          $sel = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'] ;
                  $paterno = $fila['paterno'] ;
                  $materno = $fila['materno'] ;
                  $tipo_pago = $fila['tipo_pago'] ;
                  $completo = $nombres." ".$paterno." ".$materno;
		          ?>

          <a href="../../pdf/pdf_automotor.php?cod_cliente=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>&producto=<?php echo $producto_auto; ?>"><button style="color:white;" class="btn btn-primary glyphicon glyphicon-print pull-right" type="submit"></button>
          </a>
                    
         <!-- <a href="../../pdf/condicionado_general.php?codigo=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>"><button style="color:white;" class="btn btn-success pull-right glyphicon glyphicon-list-alt" type="submit"></button></a> -->
          <br>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row"> 
        <h5>Código del Cliente: </h5><?php echo $producto_auto; ?>
            <div class="col-md-12">
            <div class="col-md-12">Asegurado: <?php echo $completo; ?></div>
            <div class="col-md-12">Código del Cliente: <?php echo $fila['cod_cliente']; ?></div>
            <div class="col-md-12">Número de Póliza: <?php echo $sepro['nro_poliza']; ?></div>
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
          
    <?php
                  //$cod_cliente = $_REQUEST['cod_cliente'];
                  //$nro_poliza = $_REQUEST['nro_poliza'];
		          $tomador = $con ->query("SELECT * FROM clientes_tomador WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
		          $tom = $tomador -> fetch_assoc();
                  $nombres = $tom['nombres'];
                  $paterno = $tom['paterno'];
                  $materno = $tom['materno'];
                  $completo = $nombres." ".$paterno." ".$materno;
		          ?>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row">
            <div class="col-md-12"><h5>Datos del Tomador</h5></div>

            
            <div class="col-md-12">
            <div class="col-md-12">Nombre: <?php echo $completo; ?></div>
            <div class="col-md-12">Dirección: <?php echo $tom['direccion']; ?></div>
            <div class="col-md-12">Zona: <?php echo $tom['zona']; ?></div>
            <div class="col-md-12">Celular: <?php echo $tom['celular']; ?></div>
            <div class="col-md-12">Teléfono: <?php echo $tom['telefono_fijo']; ?></div>
            <div class="col-md-12">E-mail: <?php echo $tom['email']; ?></div>
            <div class="col-md-12">NIT/CI: <?php echo $tom['nit_ci']; ?></div>
            </div>
        </div>
    </div>

    <?php
                  //$cod_cliente = $_REQUEST['cod_cliente'];
                  //$nro_poliza = $_REQUEST['nro_poliza'];
		          $beneficiario = $con ->query("SELECT * FROM beneficiario WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
		          $ben = $beneficiario -> fetch_assoc();
                  $nombres = $ben['nombres'];
                  $paterno = $ben['paterno'];
                  $materno = $ben['materno'];
                  $completoben = $nombres." ".$paterno." ".$materno;
		          ?>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row">
            <div class="col-md-12"><h5>Datos del Beneficiario</h5></div>
            
            <div class="col-md-12">
            <div class="col-md-12">Nombre: <?php echo $completoben; ?></div>
            <div class="col-md-12">Dirección: <?php echo $ben['direccion']; ?></div>
            <div class="col-md-12">Zona: <?php echo $ben['zona']; ?></div>
            <div class="col-md-12">Celular: <?php echo $ben['celular']; ?></div>
            <div class="col-md-12">Teléfono: <?php echo $ben['telefono_fijo']; ?></div>
            <div class="col-md-12">E-mail: <?php echo $ben['email']; ?></div>
            <div class="col-md-12">NIT/CI: <?php echo $ben['nit_ci']; ?></div>
            </div>
        </div>
    </div>

    <hr style="background-color: #FFF100; height: 2px; border: 0;">
        <?php
         if($nro_poliza=='AULP00000033'){
             $certunion = $con ->query("SELECT * FROM certi_bunion WHERE nro_poliza='$nro_poliza'");
             
             ?>
          <div class="container" style="font-size:12px;">
              <div class="row">
            <div class="col-md-12">
                <a href="../../siniestros/include/registrar_certificado.php?nro_poliza=<?php echo $nro_poliza; ?>&cod_cliente=<?php echo $fila['cod_cliente']; ?>"><button style="color:white;" class="btn btn-success pull-right" type="submit">Agregar Autómovil</button></a></div>
              </div></div>
            
            <?php
             $contador = 1;
             while($certificado = $certunion -> fetch_assoc()){
            ?>
            <hr style="background-color: #FFF100; height: 2px; border: 0;">
            <div class="container">
            <div class="row">
            <div class="col-md-12">
            <div class="col-md-6">Prestatario: <?php echo $certificado['prestatario']; ?></div>
            <div class="col-md-6">Num. Certificado: <?php echo $certificado['num_cert']; ?></div>
            <div class="col-md-6">Distrito: <?php echo $certificado['distrito']; ?></div>
            <div class="col-md-6">Modelo: <?php echo $certificado['modelo']; ?></div>
            <div class="col-md-6">Tracción: <?php echo $certificado['traccion']; ?></div>
            <div class="col-md-6">Clase: <?php echo $certificado['clase']; ?></div>
            <div class="col-md-6">Placa: <?php echo $certificado['placa']; ?></div>
            <div class="col-md-6">Marca: <?php echo $certificado['marca']; ?></div>
            <div class="col-md-6">Año: <?php echo $certificado['ano']; ?></div>
            <div class="col-md-6">Motor: <?php echo $certificado['motor'];?></div>
            <div class="col-md-6">Chasis: <?php echo $certificado['chasis']; ?></div>
            <div class="col-md-6">Plazas: <?php echo $certificado['plazas']; ?></div>
        <!--<div class="col-md-6">Capital Asegurado: <?php echo number_format($auto_gpo['auto_cap_aseg'],2); ?></div>
            <div class="col-md-6">Prima Total: <?php echo number_format($auto_gpo['prima_total'],2); ?></div> -->
             </div>
            <div class="col-md-12">
          <a href="../../siniestros/include/pdf_certificado.php?id_certificado=<?php echo $certificado['id_ceun']; ?>"><button class="btn btn-primary btn-xs pull-right" type="submit">PDF</button></a>
          <a href="../../siniestros/include/registrar.php?nro_poliza=<?php echo $nro_poliza; ?>&cod_cliente=<?php echo $fila['cod_cliente']; ?>&id_certificado=<?php echo $certificado['id_ceun']; ?>"><button class="btn btn-danger btn-xs pull-right" type="submit"> Siniestro</button></a>
          <a href="../include/cargar_anexo_auto.php?cod_cliente=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>&placa=<?php echo $placa_auto; ?>"><button style="color:white;" class="btn btn-success pull-right btn-xs" type="submit"> Anexo</button></a>
          </div>
          </div>
          </div>
                <?php
                 $contador++;
           }
           ?>
         
       <?php
         }else{
         ?>
         <div class="row">
            <?php 
                    $sel1 = $con ->query("SELECT * FROM automovil WHERE nro_poliza='$nro_poliza'");
                    $sel2 = $con ->query("SELECT * FROM automovil WHERE nro_poliza='$nro_poliza'");
                
		          ?>
    <h5>Datos del Automovil </h5>
            
        
            <?php
                  $autogpo = $sel1 -> fetch_assoc();
                  $tipo_pago = $autogpo['tipo_pago'];
                  $inicio_vigencia = $autogpo['inicio_vigencia'];
                  $final_vigencia = $autogpo['final_vigencia'];
		          while ($auto_gpo = $sel2 -> fetch_assoc()) {
		      ?>
            <div class="container" style="font-size:12px;">
            <div class="row">
            <div class="col-md-12">
            <hr style="background-color: #FFF100; height: 2px; border: 0;">
            <div class="col-md-6">Distrito: <?php echo $auto_gpo['plaza']; ?></div>
            <div class="col-md-6">Uso: <?php echo $auto_gpo['uso']; ?></div>
            <div class="col-md-6">Modelo: <?php echo $auto_gpo['modelo']; ?></div>
            <div class="col-md-6">Tracción: <?php echo $auto_gpo['traccion']; ?></div>
            <div class="col-md-6">Clase: <?php echo $auto_gpo['clase']; ?></div>
            <div class="col-md-6">Placa: <?php echo $auto_gpo['placa']; ?></div>
            <div class="col-md-6">Marca: <?php echo $auto_gpo['marca']; ?></div>
            <div class="col-md-6">Año: <?php echo $auto_gpo['ano']; ?></div>
            <div class="col-md-6">Motor: <?php echo $auto_gpo['motor'];?></div>
            <div class="col-md-6">Chasis: <?php echo $auto_gpo['chasis']; ?></div>
            <div class="col-md-6">Plazas: <?php echo $auto_gpo['plazas']; ?></div>
            <div class="col-md-6">Capital Asegurado: <?php echo number_format($auto_gpo['auto_cap_aseg'],2); ?></div>
            <div class="col-md-6">Prima Total: <?php echo number_format($auto_gpo['prima_total'],2); ?></div>
            <div class="col-md-6">
            <?php
           $sel_automovil = $con ->query("SELECT * FROM automovil WHERE nro_poliza='$nro_poliza'");
           $seauto = $sel_automovil -> fetch_assoc();
           $placa_auto = $seauto['placa'];
           $sel_aut = $con ->query("SELECT COUNT(nro_poliza) as cuenta_certificado FROM automovil WHERE nro_poliza='$nro_poliza'");
           $seaut = $sel_aut -> fetch_assoc();
           $cuenta_certificado = $seaut['cuenta_certificado'];
           if($cuenta_certificado == 1){
            ?>
          <a href="../../siniestros/include/registrar.php?nro_poliza=<?php echo $nro_poliza; ?>&cod_cliente=<?php echo $fila['cod_cliente']; ?>&id_automovil=<?php echo $auto_gpo['id_automovil']; ?>"><button class="btn btn-danger btn-xs pull-right" type="submit"> Siniestro</button></a>
          <a href="../include/cargar_anexo_auto.php?cod_cliente=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>&placa=<?php echo $placa_auto; ?>"><button style="color:white;" class="btn btn-success pull-right btn-xs" type="submit"> Anexo</button></a>
            <?php
           }else{
            ?>
          <a href="../../siniestros/include/registrar.php?nro_poliza=<?php echo $nro_poliza; ?>&cod_cliente=<?php echo $fila['cod_cliente']; ?>&id_automovil=<?php echo $auto_gpo['id_automovil']; ?>"><button class="btn btn-danger btn-xs pull-right" type="submit"> Siniestro</button></a>
          <a href="../include/cargar_anexo_auto.php?cod_cliente=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>&placa=<?php echo $placa_auto; ?>"><button style="color:white;" class="btn btn-success pull-right btn-xs" type="submit"> Anexo</button></a>
          <a href="../../pdf/pdf_certificado.php?nro_poliza=<?php echo $nro_poliza; ?>&cod_cliente=<?php echo $fila['cod_cliente']; ?>&certificado=<?php echo $auto_gpo['certificado']; ?>"><button class="btn btn-primary btn-xs pull-right" type="submit"> Certificado</button></a>
            <?php
           }
           ?>
          
            </div>
            </div>
            <?php } ?>
       </div>
         <?php } ?>
        </div>
    </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
            <div class="col-md-12" style="font-size:12px;">
                <div class="col-md-7">Coberturas Adicionales</div>
                <div class="col-md-1">Cobertura</div>
                <div class="col-md-2">Suma Asegurada</div>
                <div class="col-md-2"></div>
            </div>
            <br><br>
            <div class="col-md-12" style="font-size:10px;">
                <div class="col-md-7"><h5 style="font-weight: bold;">RESPONSABILIDAD CIVIL</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12" style="font-size:10px;">
                <?php

                    if($producto_auto=="PRODUCTO A"){
                       $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
                        $prod_auto = $prod -> fetch_assoc();
                        $prod_auto['nombre'];
                        $prod_auto['monto'];
                    }elseif($producto_auto=="PRODUCTO B"){
                         $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
                        $prod_auto = $prod -> fetch_assoc();
                        $prod_auto['nombre'];
                        $prod_auto['monto'];
                    }
                    elseif($producto_auto=="PRODUCTO C"){
                        $prod = $con ->query("SELECT * FROM producto_automotores_pol WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
                        $prod_auto = $prod -> fetch_assoc();
                        $prod_auto['nombre'];
                        $prod_auto['monto'];
                    }
		          $sel_pro = $con ->query("SELECT DISTINCT nombre,monto FROM producto_automotores_pol WHERE cod_cliente='$cod_cliente'");
		          while ($cob_pro = $sel_pro -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-7"><?php echo $cob_pro['nombre']; ?></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2"><?php echo 'Hasta $USD '.number_format($cob_pro['monto']); ?></div>
            <div class="col-lg-2"></div>
            <?php } ?>
            <?php
                  //$codigo = $_REQUEST['cod_cliente'];
		          $sel2 = $con ->query("SELECT * FROM respon_civil_auto_pol WHERE cod_cliente='$cod_cliente' and num_poliza='$nro_poliza'");
		          while ($cob_au = $sel2 -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-7"><?php echo $cob_au['nombre']; ?></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2"><?php echo '$ '.number_format($cob_au['suma_asegurada']); ?></div>
            <div class="col-lg-2">   
            </div>
            <?php } ?>
            </div>
            </div>
        </div>
          
     <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-7"><h5 style="font-weight: bold;">RIESGOS CUBIERTOS</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $selda = $con ->query("SELECT * FROM riesgo_cubierto_au_pol WHERE cod_cliente='$cod_cliente' and num_poliza='$nro_poliza'");
		          while ($riesgo = $selda -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-7"><?php echo $riesgo['nombre'];  ?></div>
            <div class="col-lg-1"><?php echo '% '.$riesgo['porcentaje'];  ?></div>
            <div class="col-lg-2"><?php echo $riesgo['franquicia'];  ?></div>
            <div class="col-lg-2">
                </div>
           
            <?php } ?>
            </div>
            </div>
        </div>
          
          <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-7"><h5 style="font-weight: bold;">ACCIDENTES PERSONALES PARA OCUPANTES</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $sely = $con ->query("SELECT * FROM acc_perso_au_pol WHERE cod_cliente='$cod_cliente' and num_poliza='$nro_poliza'");
		          while ($accper = $sely -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-7"><?php echo $accper['nombre'];  ?></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2"><?php echo '$ '.number_format($accper['suma_asegurada']);  ?></div>
            <div class="col-md-2">
                </div>
           
            <?php } ?>
            </div>
            </div>
        </div>
          
          <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-7"><h5 style="font-weight: bold;">CLAUSULAS ADICIONALES</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $selos = $con ->query("SELECT * FROM clau_adic_au_pol WHERE cod_cliente='$cod_cliente' and num_poliza='$nro_poliza'");
		          while ($claadic = $selos -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-7"><?php echo $claadic['nombre'];  ?></div>
            <div class="col-lg-1"><?php echo $claadic['cubre'];  ?></div>
            <div class="col-lg-2"></div>
            <div class="col-md-2">
                </div>
           
            <?php } ?>
            </div>
            </div>
        </div>
          
           <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-7"><h5 style="font-weight: bold;">BENEFICIOS ADICIONALES</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $se = $con ->query("SELECT * FROM ben_adic_au_pol WHERE cod_cliente='$cod_cliente' and num_poliza='$nro_poliza'");
		          while ($benadic = $se -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-7"><?php echo $benadic['nombre'];  ?></div>
            <div class="col-lg-1"><?php echo $benadic['cubre'];  ?></div>
            <div class="col-lg-2"></div>
            <div class="col-md-2">
                </div>
           
            <?php } ?>
            </div>
            </div>
        </div>
          
          
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
            <?php
            $tipo_pago;
         if($tipo_pago=='CONTADO'){
            ?>
            
    <h5>Prima Total</h5>
            
            <div class="col-md-12" style="font-weight: bold; font-size:10px;">Contado: USD $ <?php echo number_format($valor,2); ?></div>
            
    <?php  } 
        elseif($tipo_pago=='CREDITO'){
            $cuota_inicial = $con ->query("SELECT * FROM cuota_inicial WHERE cod_cliente='$cod_cliente' and num_poliza='$nro_poliza'");
		    $cuoini = $cuota_inicial -> fetch_assoc();
            $cuotas = $con ->query("SELECT * FROM cuotas WHERE cod_cliente='$cod_cliente' and num_poliza='$nro_poliza'");
            
        ?>
            <div class="col-md-12" style="font-size:12px;">
                <form method="POST">
                <div class="col-md-3">Cuota Inicial USD $: </div>
                <div class="col-md-3"><input class="form-control" type="text" value="<?php echo $cuoini['monto']; ?>" name="monto" id="monto"></div>
                <div class="col-md-3"><input class="form-control" type="text" value="<?php echo $cuoini['fecha_cuotas']; ?>" id="fecha_cuotas" name="fecha_cuotas">
                <input class="form-control" type="hidden" value="<?php echo $cuoini['id_cuo_ini']; ?>" name="id" id="id"></div>
                <div class="col-md-3">
                <button name="up_inicial" style="font-size:11px;" class="btn btn-success btn-xs" type="submit"><i class="far fa-edit"></i></button>
                <button onclick="return confirm('Estás seguro que deseas eliminar el registro?');" name="del_inicial" style="font-size:11px;" class="btn btn-danger btn-xs" type="submit"><i class="fas fa-trash-alt"></i></button>
                </div>
                </form>
            </div>
    
             <?php
            while($cuotass = $cuotas -> fetch_assoc()){
                ?>
                    <div class="col-md-12" style="font-size:12px;">
                    <form method="POST">
                    <div class='col-md-3'>Cuota número : USD $ </div>
                    <div class='col-md-3'><input class="form-control" type="text" name="monto" id="monto" value="<?php echo $cuotass['monto']; ?>">
                    <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $cuotass['id_cuotas']; ?>"></div>
                    <div class='col-md-3'><input class="form-control" type="text" name="fecha_cuotas" id="fecha_cuotas" value="<?php echo $cuotass['fecha_cuotas']; ?>"></div>
                    <div class='col-md-3'>
                    <button name="up_cuotas" style="font-size:11px;" class="btn btn-success btn-xs" type="submit"><i class="far fa-edit"></i></button>
                    <button onclick="return confirm('Estás seguro que deseas eliminar el registro?');" name="del_cuotas" style="font-size:11px;" class="btn btn-danger btn-xs" type="submit"><i class="fas fa-trash-alt"></i>
                    </button>
                    </div>
                    </form>
                 </div>
                <?php 
            }
                ?>
           
        <?php  } ?>
            </div>
        </div>
          <hr style="background-color: #FFF100; height: 2px; border: 0;">
          <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-7"><h5 style="font-weight: bold;">REQUISITOS DE ASEGURABILIDAD</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $sewa = $con ->query("SELECT * FROM req_aseg_au_pol WHERE cod_cliente='$cod_cliente' and num_poliza='$nro_poliza'");
		          while ($reqaeg = $sewa -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-7"><?php echo $reqaeg['nombre'];  ?></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2"></div>
            <div class="col-md-2">
                </div>
           
            <?php } ?>
            </div>
            </div>
        </div>
          <br>
          <div class="container" style="font-size:10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-7"><h5 style="font-weight: bold;">NOTA ACLARATORIA</h5></div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <?php
		          $nota = $con ->query("SELECT * FROM nota_aclar_au_pol WHERE cod_cliente='$cod_cliente' and num_poliza='$nro_poliza'");
		          while ($notacla = $nota -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-7"><?php echo $notacla['nombre'];  ?></div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2"></div>
            <div class="col-md-2">
                </div>
           
            <?php } ?>
            </div>
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
            

           <div class="col-md-12" style="font-size:10px;">
               <?php $sqldate=date('d M Y',strtotime($inicio_vigencia));
               $sqldate1=date('d M Y',strtotime($final_vigencia)); ?>
               <div class="col-md-12">Inicio:  Desde las 12:01 p.m. del <?php echo $sqldate; ?></div>
            <div class="col-md-12">Termino: Hasta las 12:00 p.m. del <?php echo $sqldate1; ?></div>
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
    
      <a href="../../pdf/pdf_automotor.php?cod_cliente=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>"><button type="submit"></button></a>
      
      
   <!-- <div class="container">
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
      <div class="row">
          <div class="col-md-12">
        <form action="cargar_anexo_auto.php" method="post" enctype="multipart/form-data">
          <div class="col-md-6">
               <input type="hidden" value="<?php echo $cod_cliente; ?>">
            <input type="hidden" value="<?php echo $nro_poliza; ?>">
              <div class="form-group">
                <label for="exampleInputFile">Cargar Anexo</label>
                <input type="file" class="form-control-file" id="anexo_automotor" name="anexo_automotor" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> 
              </div>
              <button type="submit" class="btn btn-primary btn-xs">Cargar</button>
          </div>
            </form>
          <form action="cargar_endoso_auto.php" method="post" enctype="multipart/form-data">
          <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputFile">Cargar Endoso</label>
                <input type="file" class="form-control-file" id="endoso_automotor" name="endoso_automotor" aria-describedby="fileHelp">
               <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> 
              </div>
              <button type="submit" class="btn btn-primary btn-xs">Cargar</button>
          </div>
              </form>
          </div>
          
      </div>
        <hr style="background-color: #FFF100; height: 2px; border: 0;">
    </div> -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
      </div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
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