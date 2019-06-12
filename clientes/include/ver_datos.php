<?php
include("../../verificar_sesion.php");
include 'conexion.php';
$id = $_REQUEST['id'];
$persona = $_REQUEST['persona'];
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

    <title>Ver Datos del Cliente</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
            
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
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

  <body onLoad="CambiarFormulario();">
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
            <li><a href="#"><?php echo $_SESSION["distrito"]; ?></a></li>
            <li><a href="salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

<?php
if($persona=='NATURAL'){
$sele = $con ->query("SELECT * FROM clientes WHERE id_cliente='$id'");
		          $filas = $sele -> fetch_assoc();

?>
    <div class="container-fluid">
        <h2>Información del  Cliente</h2>
        <br><br>
      <div class="starter-template">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" readonly value="<?php echo $filas['nombres']; ?>">
                                  </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Apellido Paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" readonly value="<?php echo $filas['paterno']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apellido Materno</label>
                                <input type="text" class="form-control" id="materno" name="materno" readonly value="<?php echo $filas['materno']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apellido de Casada</label>
                                <input type="text" class="form-control" id="ap_casada" name="ap_casada" readonly value="<?php echo $filas['ap_casada']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tipo de Documento</label>
                                <input type="text" class="form-control" id="tipo_doc" name="tipo_doc" readonly value="<?php echo $filas['tipo_documento']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Número de Documento</label>
                                <input type="text" class="form-control" id="num_doc" name="num_doc" readonly value="<?php echo $filas['nit_ci']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Extension de Carnet</label>
                                <input type="text" class="form-control" id="ext_ci" name="ext_ci" readonly value="<?php echo $filas['ext_ci']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Genero</label>
                            <input type="text" class="form-control" id="genero" name="genero" readonly value="<?php echo $filas['genero']; ?>">
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fecha de Nacimiento</label>
                                <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" readonly value="<?php echo $filas['fecha_nacimiento']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Nacionalidad</label>
                             <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" readonly value="<?php echo $filas['nacionalidad']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Estado Civil</label>
                            <input type="text" class="form-control" id="estado_civil" name="estado_civil" readonly value="<?php echo $filas['estado_civil']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombre del Conyuge</label>
                                <input type="text" class="form-control" id="conyuge" name="conyuge" readonly value="<?php echo $filas['nombre_conyuge']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">País de Residencia</label>
                            <input type="text" class="form-control" id="pais" name="pais" readonly value="<?php echo $filas['pais_residencia']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Departamento</label>
                            <input type="text" class="form-control" id="departamento" name="departamento" readonly value="<?php echo $filas['distrito']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Ciudad</label>
                            <input type="text" class="form-control" id="ciudades" name="ciudades" readonly value="<?php echo $filas['ciudad']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Zona</label>
                                <input type="text" class="form-control" id="zona" name="zona" readonly value="<?php echo $filas['zona']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" readonly value="<?php echo $filas['direccion']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                                 <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono Fijo</label>
                                <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" readonly value="<?php echo $filas['telefono_fijo']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Celular</label>
                                 <input type="text" class="form-control" id="celular" name="celular" readonly value="<?php echo $filas['celular']; ?>">
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="email" name="email" readonly value="<?php echo $filas['email']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Tipo de Trabajo</label>
                            <input type="text" class="form-control" id="tipo_trabajo" name="tipo_trabajo" readonly value="<?php echo $filas['tipo_trabajo']; ?>">
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Profesión</label>
                           <input type="text" class="form-control" id="profesiones" name="profesiones" readonly value="<?php echo $filas['profesion']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Desc. de la Actividad Económica</label>
                                <input type="text" class="form-control" id="act_economica" name="act_economica" readonly value="<?php echo $filas['act_economica']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Actividad Economica</label>
                            <input type="text" class="form-control" id="actividad_eco" name="actividad_eco" readonly value="<?php echo $filas['caedec']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Lugar de Trabajo</label>
                                <input type="text" class="form-control" id="lugar_trabajo" name="lugar_trabajo" readonly value="<?php echo $filas['lugar_trabajo']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Dirección Laboral</label>
                                 <input type="text" class="form-control" id="dir_laboral" name="dir_laboral" readonly value="<?php echo $filas['direccion_comercial']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono del Trabajo</label>
                                <input type="text" class="form-control" id="tel_trabajo" name="tel_trabajo" readonly value="<?php echo $filas['telefono_trabajo']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Cargo</label>
                                <input type="text" class="form-control" id="cargo" name="cargo" readonly value="<?php echo $filas['cargo']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha de Ingreso Laboral</label>
                                <input type="text" class="form-control" id="f_ingreso" name="f_ingreso" readonly value="<?php echo $filas['fecha_ingreso_laboral']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Ingresos (BOB)</label>
                                
                                <input type="text" class="form-control" id="f_ingreso" name="f_ingreso" readonly value="<?php echo $filas['ingresos']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIT (Si Corresponde)</label>
                                <input type="text" class="form-control" id="nit_natural" name="nit_natural" readonly value="<?php echo $filas['nit_natural']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Tipo de Referencia</label>
                             <input type="text" class="form-control" id="tipo_referencia" name="tipo_referencia" readonly value="<?php echo $filas['referencia_cat']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombre Completo de Referencia</label>
                                <input type="text" class="form-control" id="nom_referencia" name="nom_referencia" readonly value="<?php echo $filas['referencia_nombre']; ?>">
                              </div>
                                </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Tel. de Referencia</label>
                                <input type="text" class="form-control" id="tel_refer" name="tel_refer" readonly value="<?php echo $filas['referencia_telefono']; ?>">
                              </div>
                                </div>
                            
                              <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputPassword1">PEP</label>
                            <input type="text" class="form-control" id="pep" name="pep" readonly value="<?php echo $filas['pep']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Cargo</label>
                                <input type="text" class="form-control" id="cargo_pep" name="cargo_pep" readonly value="<?php echo $filas['cargo_pep']; ?>">
                              </div>
                                </div>
                            <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Residencia en U.S.A.</label>
                            <input type="text" class="form-control" id="residencia_usa" name="residencia_usa" readonly value="<?php echo $filas['res_usa']; ?>">
                                </div>
                            </div>
                      <!--      <div class="col-md-6">
                                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div> -->
                            <?php 
                    date_default_timezone_set("America/La_Paz");
                    $date = date('Y-m-d'); ?>
                    <input type="hidden" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $date; ?>">
                            </div>
                        </div>
          <br><br>
</div><!-- /.container -->

      </div>
      <?php
    }else{
    
    $se = $con ->query("SELECT * FROM clientes WHERE id_cliente='$id'");
		          $fila= $se -> fetch_assoc();
    ?>
    <div class="container-fluid">
          <h3>Persona Juridica</h3>
        <br>
      <div class="starter-template">
                        <div class="row">
                        <div class="col-md-12">
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
                               <input type="text" class="form-control" id="actividad_eco" name="actividad_eco" value="<?php echo $fila['act_economica']; ?>">
                                </div></div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIT</label>
                                <input type="text" class="form-control" id="num_doc" name="num_doc" value="<?php echo $fila['nit_ci']; ?>">
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
                            <input type="text" class="form-control" id="constitucion" name="constitucion" value="<?php echo $fila['constitucion']; ?>">
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
                                <input type="text" class="form-control" id="tipo_persona" name="tipo_persona" value="<?php echo $fila['tipo_persona']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Capital</label>
                                <input type="text" class="form-control" id="capital" name="capital" value="<?php echo $fila['capital']; ?>">
                              </div>
                            </div>
                            
                            <h4>Direccion Oficina Principal</h4>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">País de Residencia</label>
                            <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $fila['pais_residencia']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Departamento</label>
                            <input type="text" class="form-control" id="departamento" name="departamento" value="<?php echo $fila['distrito']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Ciudad</label>
                            <input type="text" class="form-control" id="ciudades" name="ciudades" value="<?php echo $fila['ciudad']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Zona</label>
                                <input type="text" class="form-control" id="zona" name="zona" placeholder="Zona" value="<?php echo $fila['zona']; ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion"value="<?php echo $fila['direccion']; ?>">
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
                            <input type="text" class="form-control" id="tipo_referecia" name="tipo_referecia" value="<?php echo $fila['referencia_cat']; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombre Completo de Referencia</label>
                                <input type="text" class="form-control" id="nom_referencia" name="nom_referencia"value="<?php echo $fila['referencia_nombre']; ?>">
                              </div>
                                </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono de Referencia</label>
                                <input type="text" class="form-control" id="tel_refer" name="tel_refer" value="<?php echo $fila['referencia_telefono']; ?>">
                              </div>
                                </div>
                            </div>
                        </div>
    </div>  
    <?php
    }?>
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="http://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
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