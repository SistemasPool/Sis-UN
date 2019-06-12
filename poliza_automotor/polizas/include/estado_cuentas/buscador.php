<?php
include 'config.php';
include "../../verificar_sesion.php";
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

    <title>Sistema UNIBienes</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
    <link href="../css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>
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
                            <li><a href="index.php">Clientes</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../poliza_automotor/automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                     <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../poliza_automotor/cotizaciones/index.php">Cotización</a></li>
                            <li><a href="../poliza_automotor/polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                            <li><a href="../poliza_automotor/reportes/include/reportes_automotor.php">Reportes</a></li>
                            <li class="dropdown dropdown-submenu"><a href="../poliza_automotor/siniestros/index.php" class="dropdown-toggle" data-toggle="dropdown">Siniestros</a>
								<ul class="dropdown-menu">
                                    <li><a href="../poliza_automotor/polizas/ver_anexos.php">Anexos</a></li>
									<li><a href="../poliza_automotor/siniestros/ver_orden_pago.php">Ordenes de Pago</a></li>
									<li><a href="../poliza_automotor/siniestros/ver_liquidacion.php">Liquidaciones</a></li>
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
            <li><a href="../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
<br><br><br>
<div class="container">
<a href="reporte_listadouif.php"><button class="btn btn-success btn-xs" type="submit"><i class="fas fa-file-excel"></i></button></a>

<form action="buscador.php" method="get">
<div class="row">
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Cliente</label>
    <input type="text" class="form-control" id="cliente" name="cliente" value="<?php  echo ($_GET["cliente"]);  ?>">
  </div>
<div class="form-group col-md-4">
    <label for="exampleInputEmail1">Ingrese una Palabra</label>
    <input type="text" class="form-control" id="palabra" name="palabra" value="<?php  echo ($_GET["palabra"]);  ?>">
  </div>
<div class="form-group col-md-6">
<br>
<button type="submit" class="btn btn-primary" name="buscador" value="Buscar">Buscar</button>
    </div>
</div>
</form>

<?php 
if ($_GET['buscador'])
{
$cliente = $_GET['cliente'];
date_default_timezone_set('America/La_Paz');
$fecha = date("Y-m-d");
$hora = date("H:i:s");
$buscar = $_GET['palabra'];
$usuario = $_SESSION["usuario"];
if (empty($buscar))
{
echo "No se ha ingresado ninguna palabra";
}
else
{
$sql = "SELECT * FROM lista_uif WHERE nombres_razon_placa LIKE '%$buscar%' OR ap_paterno LIKE '%$buscar%' OR materno LIKE '%$buscar%' OR nombre_completo LIKE '%$buscar%'";
$result = mysql_query($sql,$connect);

$total = mysql_num_rows($result);

$insert = "INSERT INTO `log_uif`(`id_log_uif`, `cliente`, `busqueda`, `resultado`, `fecha`, `hora`, `usuario`) VALUES ('','$cliente','$buscar','$total','$fecha','$hora','$usuario')";
$resultado = mysql_query($insert,$connect);   
    
echo "Resultados para : $buscar";
echo "<br> Total de resultados : $total";
echo "<br><br>";
echo "<table class='table table-striped table-hover'>
<tr style='background-color:black; color:white;'>
<td>Nombre Completo</td>
<td>Causal</td>
<td>Número de Identificación</td>
<tr>"; 
if($total > 0){
while ($row = mysql_fetch_array($result)){
?>
<tr>
<td><?php echo $row['nombre_completo']; ?></td>
<td><?php echo $row['causal']; ?></td>
<td><?php echo $row['num_iden']; ?></td>
</tr>
<?php
}   
echo "</table>";
}
else
{
echo "No se encontraron resultados para: $buscar";
}  
}}
?>
</div>
<!-- -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/datatablejs.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>      