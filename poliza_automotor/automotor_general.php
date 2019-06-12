<?php
include '../clientes/include/conexion.php'; 
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

    <title>Póliza de Automotores</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="#">Clientes</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
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
                  $cod_cliente = $_REQUEST['id'];
                  //$numero_poliza = $_REQUEST['nro_poliza'];
		          $sel = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'] ;
                  $paterno = $fila['paterno'] ;
                  $materno = $fila['materno'] ;
                  $completo = $nombres." ".$paterno." ".$materno;
                   
		          ?>
          
          <h3>Número de Póliza</h3><?php echo $fila['nro_poliza']; ?>
          <?php
          //$up = $con -> query("UPDATE clientes SET nro_poliza='$autonumerico' WHERE cod_cliente='$cod_cliente'");
          //$ins = $con -> query("INSERT INTO automovil (id_automovil,idnum,cod_cliente,nro_poliza) VALUES ('','$ids','$cod_cliente','$autonumerico')");
          ?>
          <a href="pdf/pdf_automotor.php?id=<?php echo $fila['cod_cliente']?>"><button style="color:white;" class="btn btn-danger pull-right" type="submit">Genera PDF</button></a>
          
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
	<div class="container">
        <div class="row">
    <h5>Datos del Cliente</h5>
            <div class="col-md-12">
            <div class="col-md-6">Asegurado: <?php echo $completo; ?></div>
            <div class="col-md-6">Teléfono: <?php echo $fila['telefono_fijo']; ?></div>
            <div class="col-md-6">Dirección: <?php echo $fila['direccion']; ?></div>
            <div class="col-md-6">e-mail: <?php echo $fila['email']; ?></div>
            <div class="col-md-6">NIT/CI: <?php echo $fila['nit_ci']; ?></div>
            <div class="col-md-6">Celular: <?php echo $fila['celular']; ?></div>
            </div>
        </div>
    </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
            <?php 
                      $sel1 = $con ->query("SELECT * FROM automovil WHERE cod_cliente='$cod_cliente'");
                      $auto= $sel1 -> fetch_assoc();
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
                      $plazas = $auto['plazas'] ;
                      $chasis = $auto['chasis'] ;
                      $motor = $auto['motor'] ;
                      $auto_cap_aseg = $auto['auto_cap_aseg'];
		          ?>
    <h5>Datos del Automovil </h5>
            <div class="col-md-12">
            <div class="col-md-5"></div>
                <div class="col-md-3"></div>
                <!--<div class="col-md-1"><a href="automovil/index.php"><button style="background:#FFF100;" class="btn  btn-xs" type="submit">Ver Autos</button></a></div>-->
                <div class="col-md-1"><a href="automovil/include/registrar.php?poliza=<?php echo $autonumerico; ?>&cod_cliente=<?php echo $cod_cliente; ?>"><button style="background:#004990; color:white;" class="btn  btn-xs" type="submit">Registrar</button></a></div>
                <div class="col-md-1"><a href="automovil/include/actualizar.php?id=<?php echo $auto['id_automovil'] ?>"><button style="background:#0078C1; color:white;" class="btn btn-xs" type="submit">Modificar</button></a></div>
                <div class="col-md-1"><a href="automovil/include/borrar.php?id=<?php echo $auto['id_automovil'] ?>"><button style="background:#F7971C; color:white;" class="btn btn-xs" type="submit">Eliminar</button></a></div>
            <div class="col-md-6">Distrito: <?php echo $auto['distrito']; ?></div>
            <div class="col-md-6">Uso: <?php echo $auto['uso']; ?></div>
            <div class="col-md-6">Modelo: <?php echo $auto['modelo']; ?></div>
            <div class="col-md-6">Tracción: <?php echo $auto['traccion']; ?></div>
            <div class="col-md-6">Clase: <?php echo $auto['clase']; ?></div>
            <div class="col-md-6">Placa: <?php echo $auto['placa']; ?></div>
            <div class="col-md-6">Color: <?php echo $auto['color']; ?></div>
            <div class="col-md-6">Año: <?php echo $auto['ano']; ?></div>
            <div class="col-md-6">Motor: <?php echo $auto['motor'];?></div>
            <div class="col-md-6">Chasis: <?php echo $auto['chasis']; ?></div>
            <div class="col-md-6">Plazas: <?php echo $auto['plazas']; ?></div>
            <div class="col-md-6">Capital Asegurado: <?php echo $auto['auto_cap_aseg']; ?></div>
            </div>
        </div>
    </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6"><h5>Coberturas Adicionales</h5></div>
                <div class="col-md-5"></div>
                <div class="col-md-1">
                <a href="coberturas/index.php"><button style="background:#FFF100;" class="btn  btn-xs" type="submit">Ver Coberturas</button></a>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
            <div class="col-lg-4">Coberturas Adicionales:</div>
            <div class="col-lg-2">Valor Asegurado:</div>
            <div class="col-lg-2">Franquicia:</div>
            <div class="col-lg-2">Coaseguro:</div>
            <div class="col-lg-2">
                </div>
             <?php
                  $codigo = $_REQUEST['id'];
		          $sel2 = $con ->query("SELECT * FROM cob_adic_au_pol WHERE codigo_cliente='$codigo'");
		          while ($cob_au = $sel2 -> fetch_assoc()) {
		          ?>   
            <div class="col-lg-4"><?php echo $cob_au['nombre_cob_au'] ?></div>
            <div class="col-lg-2"><?php echo $cob_au['valor_aseg_au'] ?></div>
            <div class="col-lg-2"><?php echo "$".$cob_au['fran_au'] ?></div>
            <div class="col-lg-2"><?php echo $cob_au['coaseg_au']. "%"; ?></div>
            <div class="col-lg-2">
            <a href="include/modificar_cob_auto.php?id=<?php echo $cob_au['id_cob_ad_au'] ?>"><button style="background:#0078C1; color:white;" class="btn btn-xs" type="submit">Modificar</button></a>
            <a href="include/eliminar_cob_auto.php?id=<?php echo $cob_au['id_cob_ad_au'] ?>"><button style="background:#F7971C; color:white;" class="btn btn-xs" type="submit">Eliminar</button></a></div>
                 <?php } ?>
            </div>
        </div>
    </div>
          
          <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
    <h5>Prima Total</h5>
            <div class="col-md-12">
            <div class="col-md-12">Contado:$ 500.00</div>
            <div class="col-md-12">Crédito:
            <table>
            <tr>
            <td></td>
            <td>Cuota</td>
            <td> - </td>
            <td>Monto</td>
            <td> - </td>
            <td>Fecha de Vencimiento</td>
            </tr>
            <tr>
            <td></td>
            <td>1</td>
            <td></td>
            <td>115,00</td>
            <td></td>
            <td>21-12-2017</td>
                </tr>
                <tr>
            <td></td>
            <td>2</td>
            <td></td>
            <td> 43,00</td>
            <td></td>
            <td>21-01-2018</td>
                </tr>
                <tr>
            <td></td>
            <td>3</td>
            <td></td>
            <td> 43,00</td>
            <td></td>
            <td>21-2-2018</td>
            </tr>
            </table>
            </div>
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
            <div class="col-md-12">
            <div class="col-md-12">Inicio:  Desde las 12:01 p.m. del <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></div>
            <div class="col-md-12">Termino: Hasta las 12:00 p.m. del <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ". " 2019"; ?></div>
            </div>
    </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-11"><h5>Notas Especiales</h5></div>
                <div class="col-md-1"><a href="notas%20especiales/index.php"><button style="background:#FFF100;" class="btn  btn-xs" type="submit">Ver Notas</button></a></div>
            </div>
            <div class="col-md-9">
                <?php 
		          $sel3 = $con ->query("SELECT * FROM notas_automotor");
		          while ($not_au = $sel3 -> fetch_assoc()) {
		          ?>   
            <?php echo $not_au['nota_automotor'] ?>
            </div>
            <div class="col-md-2">
            <a href="include/modificar_not_auto.php?id=<?php echo $cob_au['id_nota_auto'] ?>"><button style="background:#0078C1; color:white;" class="btn btn-xs" type="submit">Modificar</button></a>
            <a href="include/eliminar_not_auto.php?id=<?php echo $cob_au['id_nota_auto'] ?>"><button style="background:#F7971C; color:white;" class="btn btn-xs" type="submit">Eliminar</button></a>
            <?php } ?></div>
            </div>
        </div>
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
    <h5>Beneficios Adicionales</h5>
            <div class="col-md-12">
            <div class="col-md-12"></div>
            
            </div>
        </div>
    </div>
     
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
    <h5>Subrogación de Derechos</h5>
            <div class="col-md-12">
            <div class="col-md-12"></div>
            
            </div>
        </div>
    </div>
     
    <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
    <h5>OBSERVACIONES</h5>
            <div class="col-md-12">
            <div class="col-md-12">Las coberturas mencionadas como "no cubiertas", no se encuentran aseguradas en la presente Póliza.</div>
            <div class="col-md-12">El Asegurado autoriza a la Compañia de Seguros a enviar reporte a la Central de Riesgos del mercado de seguros acorde a las normativas reglamentarias de la Autoridad de Fiscalización Pensiones y Seguros.</div>
            </div>
        </div>
    </div>

          <hr style="background-color: #FFF100; height: 2px; border: 0;">
     <div class="container">
        <div class="row">
    <h5>Lugar y Fecha:</h5>
            <div class="col-md-12">
            <div class="col-md-12">La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?></div>
            </div>
        </div>
    </div>
    <h5 style="text-align:center;">UNIBIENES SEGUROS Y REAEGUROS PATRIMONIALES S.A.</h5>
          <br><br>
      <h5 style="text-align:center;">FIRMAS AUTORIZADAS</h5>
      </div>
     </div><!-- /.container -->
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
        
  </body>
</html>	