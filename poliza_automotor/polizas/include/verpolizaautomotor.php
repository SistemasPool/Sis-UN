<?php
include 'conexion.php';

$cod_cliente = $_REQUEST['cod_cliente'];
$nro_poliza = $_REQUEST['numero_poliza'];

//Inicio registra clausulas
$connect = mysqli_connect("localhost", "root", "", "unibienes");

$sql = "SELECT * FROM respon_civil_auto_pol where cod_cliente='$cod_cliente'";  
$result = mysqli_query($connect, $sql);
$rows = mysqli_num_rows($result);
 if($rows != 0)  
{
     
 }
else
{
$inserta_accidentes = $con -> query("INSERT INTO acc_perso_au_pol (nombre, cubre, suma_asegurada, cod_cliente, num_poliza) SELECT acc_perso_au.nombre, acc_perso_au.cubre, acc_perso_au.suma_asegurada, '$cod_cliente', '$nro_poliza' FROM acc_perso_au");

$inserta_beneficios = $con -> query("INSERT INTO ben_adic_au_pol (nombre, suma_asegurada, cubre, cod_cliente, num_poliza) SELECT ben_adic_au.nombre, ben_adic_au.suma_asegurada, ben_adic_au.cubre, '$cod_cliente', '$nro_poliza' FROM ben_adic_au");

$inserta_clau_adic = $con -> query("INSERT INTO clau_adic_au_pol (nombre, cubre, cod_cliente, num_poliza) SELECT clau_adic_au.nombre, clau_adic_au.cubre, '$cod_cliente', '$nro_poliza' FROM clau_adic_au");

$inserta_nota_acla = $con -> query("INSERT INTO nota_aclar_au_pol(nombre, cod_cliente, num_poliza) SELECT nota_aclar_au.nombre, '$cod_cliente', '$nro_poliza'  FROM nota_aclar_au");

$inserta_requerimiento = $con -> query("INSERT INTO req_aseg_au_pol(nombre, cod_cliente, num_poliza) SELECT req_aseg_au.nombre, '$cod_cliente', '$nro_poliza'  FROM req_aseg_au");

//$inserta_cobertura = $con -> query("INSERT INTO cob_adic_au_pol(id_cob_ad_au, nombre_cob_au, valor_aseg_au, fran_au, coaseg_au) SELECT req_aseg_au.nombre, '$codigo', ''  FROM req_aseg_au");

$inserta_civil= $con -> query("INSERT INTO respon_civil_auto_pol(nombre, suma_asegurada, cod_cliente, num_poliza, estado) SELECT respon_civil_auto.nombre, respon_civil_auto.suma_asegurada, '$cod_cliente', '$nro_poliza', 'CUBRE' FROM respon_civil_auto");

$inserta_riesgo = $con -> query("INSERT INTO riesgo_cubierto_au_pol(nombre, porcentaje, cod_cliente, num_poliza, franquicia) SELECT riesgo_cubierto_au.nombre, riesgo_cubierto_au.porcentaje, '$cod_cliente', '$nro_poliza', riesgo_cubierto_au.franquicia FROM  riesgo_cubierto_au");

}


//Final registra clausulas
    
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

    <title>Póliza de Automotores</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">


  </head>

  <body style="padding:50px;">
      
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UNIBienes</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personas <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../../../clientes/index.php">Clientes</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../../automovil/index.php">Automovil</a></li>
        </ul>
      </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../../polizas/include/ver_poliza_automotor.php">Automotores</a></li>
        </ul>
      </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cotización <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../../cotizaciones/index.php">Ver Cotizaciones</a></li>
          <li><a href="../../polizas/include/cotizacion_automotor.php">Crear Cotización</a></li>
        </ul>
      </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

      <br><br>
      <h4 style="text-align:center;">SEGURO DE AUTOMOTORES - INDIVIDUAL</h4>
      <h5 style="text-align:center;">CONDICIONES PARTICULARES</h5>
    <div class="container">
      <div class="starter-template">
        <br><br>
                  <?php
                  //$cod_cliente = $_REQUEST['cod_cliente'];
                  //$nro_poliza = $_REQUEST['nro_poliza'];
		          $sel = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'] ;
                  $paterno = $fila['paterno'] ;
                  $materno = $fila['materno'] ;
                  $tipo_pago = $fila['tipo_pago'] ;
                  $completo = $nombres." ".$paterno." ".$materno;
                   
		          ?>

          <a href="../../pdf/pdf_automotor_gpo.php?codigo=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>"><button style="color:white;" class="btn btn-danger pull-right" type="submit">Genera PDF</button></a>
          <br>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container" style="font-size:12px;">
        <div class="row"> 
        <!--    <h5>Código del Cliente: </h5><?php //echo $cod_cliente;?> -->
    <h5>Datos del Cliente</h5>
            <div class="col-md-12">
            <div class="col-md-6">Asegurado: <?php echo $completo; ?></div>
            <div class="col-md-6">Código del Cliente: <?php echo $fila['cod_cliente']; ?></div>
            <div class="col-md-6">Número de Póliza: <?php echo $fila['nro_poliza']; ?></div>
            <div class="col-md-6">Teléfono: <?php echo $fila['telefono_fijo']; ?></div>
            <div class="col-md-6">Dirección: <?php echo $fila['direccion']; ?></div>
            <div class="col-md-6">E-mail: <?php echo $fila['email']; ?></div>
            <div class="col-md-6">NIT/CI: <?php echo $fila['nit_ci']; ?></div>
            <div class="col-md-6">Celular: <?php echo $fila['celular']; ?></div>
            <div class="col-md-6">CI/NIT Factura: <?php echo $fila['nitf_cif']; ?></div>
            <div class="col-md-6">Nombre Factura: <?php echo $fila['pagador']; ?></div>
            </div>
        </div>
    </div>
          <?php 
          $tipo_pago = $fila['tipo_pago'];
          $inicio_vigencia = $fila['inicio_vigencia'];
          $final_vigencia = $fila['final_vigencia'];
          ?>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container" style="font-size:12px;">
        
             <h5>Motorizado(os). </h5>
            <a href="../../automovil/include/registrar.php?codigo=<?php echo $cod_cliente; ?>&nro_poliza=<?php echo $nro_poliza; ?>"><button style="color:white;" class="btn btn-success pull-right" type="submit">Agregar Autómovil</button></a>
            <br>
            <?php
                  //$codigo = $_REQUEST['cod_cliente'];
		          $sel1 = $con ->query("SELECT * FROM automovil WHERE cod_cliente='$cod_cliente' and nro_poliza='$nro_poliza'");
		          while ($auto= $sel1 -> fetch_assoc()) {
                    $cod_cliente = $auto['cod_cliente'] ;
                    $nro_poliza = $auto['nro_poliza'] ;
                    $clase = $auto['clase'] ;
                    $placa = $auto['placa'] ;
                    $ano = $auto['ano'] ;
                    $color = $auto['color'] ;
                    $modelo = $auto['modelo'] ;
                    $traccion = $auto['traccion'] ;
                    $uso = $auto['uso'] ;
                    $distrito = $auto['distrito'] ;
                    $pasajeros = $auto['plazas'] ;
                    $chasis = $auto['chasis'] ;
                    $motor = $auto['motor'] ;
                    $marca = $auto['marca'] ;
                    $valor = $auto['auto_cap_aseg'];
                    $prima_total = $auto['prima_total'];
		          ?>
            <hr style="background-color: #FFF100; height: 2px; border: 0;">
            <div class="row">
            <div class="col-md-12">
            <div class="col-md-6">Distrito: <?php echo $auto['distrito']; ?></div>
            <div class="col-md-6">Uso: <?php echo $auto['uso']; ?></div>
            <div class="col-md-6">Modelo: <?php echo $modelo; ?></div>
            <div class="col-md-6">Tracción: <?php echo $auto['traccion']; ?></div>
            <div class="col-md-6">Clase: <?php echo $clase; ?></div>
            <div class="col-md-6">Placa: <?php echo $auto['placa']; ?></div>
            <div class="col-md-6">Marca: <?php echo $marca; ?></div>
            <div class="col-md-6">Año: <?php echo $ano; ?></div>
            <div class="col-md-6">Motor: <?php echo $auto['motor'];?></div>
            <div class="col-md-6">Chasis: <?php echo $auto['chasis']; ?></div>
            <div class="col-md-6">Plazas: <?php echo $pasajeros; ?></div>
            <div class="col-md-6">Capital Asegurado: <?php echo 'USD '. number_format($valor,2); ?></div>
            <div class="col-md-6">Prima Total: <?php echo 'USD  '. number_format($prima_total,2); ?></div>
            
                </div>
        </div>
            <?php } ?>
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

            $capital_asegurado = $con->query("SELECT SUM(auto_cap_aseg) as suma_capital FROM automovil WHERE cod_cliente='$cod_cliente'");
            $scapital = $capital_asegurado -> fetch_assoc();
            $sucap = $scapital['suma_capital'];
            
        if($tipo_pago='CONTADO'){
            ?>
            
    <h5>Prima Total</h5>
            
            
            <div class="col-md-12" style="font-weight: bold; font-size:10px;">Contado: USD $ <?php echo $prima_total = number_format($sucap *.0212); ?></div>
            
       
            <div class="col-md-12" style="font-size:10px;">
                <div class="col-md-4">Crédito: USD $ <?php echo $credito = number_format($prima_total *.06+($prima_total)); ?></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
    
            <div class="col-md-12" style="font-size:10px;">
                <div class="col-md-4"><?php echo "Cuota número 1: USD $ ".number_format($primera = $credito*.3,2); ?></div>
                <div class="col-md-4"><?php echo $fecha= date('d-m-Y', strtotime('1 month')) ; ?></div>
                <div class="col-md-4"></div>
            </div>
            <div class="col-md-12" style="font-size:10px;">
                <?php
                $cuotas= $credito*.7;
                $cuota = 5;
                $contador = 2;
                for($ii = 1; $ii <= $cuota; $ii++)
                     {
                        $mes    =    date('m', strtotime('1 month'))    +    $ii;
                        if( $mes    <=    9    ) 
                        {
                            $vencimiento    =    date('d-')    .    '0'    .    $mes    .date('-Y');
                        }elseif(    $mes    ==    13    )
                        {
                            $vencimiento    =    date('d-')    .    '01'    .date('-Y');
                        }else{
                            $vencimiento    =    date('d-')    .    $mes    .date('-Y');
                        }
                    echo "<div class='col-md-4'>";
                    echo "Cuota número ".$contador++.": USD $  ".number_format($cuotas/5,2);
                    echo "</div>";
                    echo "<div class='col-md-4'> $vencimiento ";
                    echo "</div>";
                    echo "<div class='col-md-4'>";
                    echo "</div>";
                                            echo "<br>";
                }
                ?>
                
            </div>
        <?php  } ?>
            </div>
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
     </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
  </body>
</html>	