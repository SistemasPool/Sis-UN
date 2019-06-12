<?php
include "../../verificar_sesion.php";
include '../include/conexion.php';
$id = $_REQUEST['id'];
$cod_cliente = $_REQUEST['cod_cliente'];

$sel = $con -> query("SELECT * FROM clientes WHERE id_cliente='$id' ");
if ($fila = $sel -> fetch_assoc()) {
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

    <title>.: Sistema UNIBienes :.</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">
    
    <link href="../css/jquery.dataTables.min.css"starter-template.css"" rel="stylesheet">

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
                            <li><a href="../../clientes/index.php">Clientes</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../poliza_automotor/automovil/index.php">Automovil</a>
							</li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Automotores</a>
								<ul class="dropdown-menu">
									<li><a href="../../poliza_automotor/cotizaciones/index.php">Cotización</a></li>
                                    <li><a href="../../poliza_automotor/polizas/include/ver_poliza_automotor.php">Pólizas</a></li>
                                    <li><a href="../../poliza_automotor/siniestros/index.php">Siniestros</a></li>
                                    <li><a href="../../poliza_automotor/reportes/include/reportes_automotor.php">Reportes</a></li>
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
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <div class="container-fluid">
        <h3>Persona Juridica</h3>
        <br>
      <div class="starter-template">
	 <form action="update.php" enctype="multipart/form-data" method="post">
                        <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Raz&oacute;n Social</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $fila['nombres']; ?>">
                                  </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombre Abreviado</label>
                                <input type="text" class="form-control" id="abreviado" name="abreviado" value="<?php echo $fila['abreviado']; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Descripción de la Actividad Económica</label>
                                <input type="text" class="form-control" id="act_economica" name="act_economica" value="<?php echo $fila['act_economica']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Actividad Economica</label>
                            <select class="form-control" id="actividad_eco" name="actividad_eco">
                            <option></option>
                            <?php
                              $actividad_eco = $con ->query("SELECT * FROM actividad_economica");
                              //mysqli_set_charset('utf8');
                              while ($actividad = mysqli_fetch_array($actividad_eco)) {
                                  ?>
                              <option selected value="<?php echo $actividad['des_act']; ?>"><?php echo $actividad['des_act']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIT</label>
                                <input type="text" class="form-control" id="num_doc" name="num_doc" value="<?php echo $fila['num_doc']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Matricula de Registro</label>
                                <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo $fila['matricula']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Pais de Constituci&oacute;n</label>
                            <select class="form-control" id="constitucion" name="constitucion">
                            <option selected value="<?php echo $fila['constitucion']; ?>"><?php echo $fila['constitucion']; ?></option>
                            <?php
                              $query = $con ->query("SELECT * FROM paises");
                              //mysqli_set_charset('utf8');
                              while ($paises = mysqli_fetch_array($query)) {
                                  ?>
                              <option value="<?php echo $paises['des_pais']; ?>"><?php echo $paises['des_pais']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nombre Representante Legal</label>
                                <input type="text" class="form-control" id="nom_representante" name="nom_representante" value="<?php echo $fila['nom_representante']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apellidos Representante Legal</label>
                                <input type="text" class="form-control" id="ap_representante" name="ap_representante" value="<?php echo $fila['ap_representante']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nombre Completo (Resp. seguros)</label>
                                <input type="text" class="form-control" id="nom_seguros" name="nom_seguros" value="<?php echo $fila['nom_seguros']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Cargo (Resp. Seguros)</label>
                                <input type="text" class="form-control" id="cargo_seguros" name="cargo_seguros" value="<?php echo $fila['cargo_seguros']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tipo de Persona</label>
                                <select class="form-control" id="tipo_persona" name="tipo_persona">
                                    <option selected value="<?php echo $fila['tipo_persona']; ?>"><?php echo $fila['tipo_persona']; ?></option>
                                    <option value="S.R.L.">S.R.L.</option>
                                    <option value="S.A.">S.A.</option>
                                    <option value="ONG">ONG</option>
                                    <option value="EMP. PUBLICA">EMP. PUBLICA</option>
                                    <option value="SOC. ACC">SOC. ACC</option>
                                    <option value="SOC. LIMITADA">SOC. LIMITADA</option>
                                    <option value="SOC. ANON. MIXTA">SOC. ANON. MIXTA</option>
                                    <option value="SOC. UNIPERSONAL">SOC. UNIPERSONAL</option>
                                    <option value="ASOC. CIVIL">ASOC. CIVIL</option>
                                    <option value="ASOC. COPROP">ASOC. COPROP</option>
                                    <option value="ASOC. SIN FINES DE LUCRO">ASOC. SIN FINES DE LUCRO</option>
                                    <option value="OTRO">OTRO</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Capital</label>
                                <select class="form-control" id="capital" name="capital">
                                    <option value="<?php echo $fila['capital']; ?>"><?php echo $fila['capital']; ?></option>
                                    <option value="MIXTA">MIXTA</option>
                                    <option value="PUBLICA">PUBLICA</option>
                                    <option value="PRIVADA">PRIVADA</option>
                                </select>
                              </div>
                            </div>
                            
                            <h4>Direccion Oficina Principal</h4>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">País de Residencia</label>
                            <select class="form-control" id="pais" name="pais">
                            <option selected value="<?php echo $fila['pais_residencia'];?>"><?php echo $fila['pais_residencia']; ?></option>
                            <?php
                              $query = $con ->query("SELECT * FROM paises");
                              //mysqli_set_charset('utf8');
                              while ($paises = mysqli_fetch_array($query)) {
                                    ?>
                            <option value="<?php echo $paises['des_pais'];?>"><?php echo $paises['des_pais']; ?></option>
                                <?php
                                  }
                                  ?>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Departamento</label>
                            <select class="form-control" id="departamento" name="departamento">
                            <option selected value="<?php echo $fila['distrito']; ?>"><?php echo $fila['distrito']; ?></option>
                            <?php
                              $depto = $con ->query("SELECT * FROM departamentos");
                              //mysqli_set_charset('utf8');
                              while ($departamento = mysqli_fetch_array($depto)) {
                                  ?>
                              <option value="<?php echo $departamento['des_depto']; ?>"><?php echo $departamento['des_depto']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Ciudad</label>
                            <select class="form-control" id="ciudades" name="ciudades">
                            <option selected value="<?php echo $fila['ciudad']; ?>"><?php echo $fila['ciudad']; ?>
                            <?php
                              $ciudades = $con ->query("SELECT * FROM ciudades");
                              //mysqli_set_charset('utf8');
                              while ($ciudad = mysqli_fetch_array($ciudades)) {
                                  ?>
                              <option value="<?php echo $ciudad['des_ciudad']; ?>"><?php echo $ciudad['des_ciudad']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Zona</label>
                                <input type="text" class="form-control" id="zona" name="zona" value="<?php echo $fila['zona']; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $fila['direccion']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                                 <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono Fijo</label>
                                <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" value="<?php echo $fila['telefono_fijo']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Pagina Web</label>
                                <input type="text" class="form-control" id="pagina" name="pagina" value="<?php echo $fila['pagina']; ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Correo Corporativo</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $fila['email']; ?>">
                              </div>
                            </div>
                            
                            <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Tipo de Referencia</label>
                            <select class="form-control" id="tipo_referecia" name="tipo_referecia">
                            <option></option>
                            <?php
                              $referencias = $con ->query("SELECT * FROM tipo_referencia");
                              //mysqli_set_charset('utf8');
                              while ($referencia = mysqli_fetch_array($referencias)) {
                                  ?>
                              <option selected value="<?php echo $referencia['des_refer']; ?>"><?php echo $referencia['des_refer']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombre Completo de Referencia</label>
                                <input type="text" class="form-control" id="nom_referencia" name="nom_referencia" value="<?php echo $fila['referencia_nombre']; ?>">
                              </div>
                                </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono de Referencia</label>
                                <input type="text" class="form-control" id="tel_refer" name="tel_refer" value="<?php echo $fila['referencia_telefono']; ?>">
                              </div>
                                </div>
                            <div class="col-md-6">
                                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                            <?php 
                    date_default_timezone_set("America/La_Paz");
                    $date = date('Y-m-d'); ?>
                    <input type="hidden" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $date; ?>">
                            </div>
                        </div>
                    </form>
          <br><br>
</div><!-- /.container -->

      </div>
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