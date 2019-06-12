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

    <div class="container-fliud">
        <h2>Editar Registro</h2>
      <form action="update.php" enctype="multipart/form-data" method="post">
                        <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" id="ids" name="ids" value="<?php echo $ids; ?>">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $fila['id_cliente']; ?>">
                            <input type="hidden" class="form-control" id="idau" name="idau" value="<?php echo $idau; ?>">
                            <input type="hidden" class="form-control" id="cod_cliente" name="cod_cliente" value="<?php echo $pref.str_pad($ids, 8, "0", STR_PAD_LEFT); ?>">
                            <input type="hidden" class="form-control" id="nro_poliza" name="nro_poliza" value="<?php echo $prefijo.str_pad($idau, 8, "0", STR_PAD_LEFT); ?>">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $fila['nombres']; ?>">
                                  </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $fila['paterno']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Materno</label>
                                <input type="text" class="form-control" id="materno" name="materno" value="<?php echo $fila['materno']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apellido de Casada</label>
                                <input type="text" class="form-control" id="ap_casada" name="ap_casada" value="<?php echo $fila['ap_casada']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tipo de Documento</label>
                                <select class="form-control" id="tipo_doc" name="tipo_doc">
                                    <option selected value="<?php echo $fila['tipo_documento']; ?>"><?php echo $fila['tipo_documento']; ?></option>
                                    <option value="CEDULA DE IDENTIDAD">CEDULA DE IDENTIDAD</option>
                                    <option value="CEDULA DE EXTRANJERO">CEDULA DE EXTRANJERO</option>
                                    <option value="PASAPORTE">PASAPORTE</option>
                                    <option value="RUC">RUC</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Número de Documento</label>
                                <input type="text" class="form-control" id="num_doc" name="num_doc" value="<?php echo $fila['nit_ci']; ?>">
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Extension de Carnet</label>
                                <select class="form-control" id="ext_ci" name="ext_ci">
                                 <?php  
                            if($fila['ext_ci']=='LP'){
                                ?>
                                <option selected value="<?php echo $fila['ext_ci']; ?>"><?php echo $fila['ext_ci']; ?></option>
                                    <option value="BE">BE</option>
                                    <option value="CB">CB</option>
                                    <option value="SC">SC</option>
                                    <option value="CH">CH</option>
                                    <option value="PA">PA</option>
                                    <option value="PO">PO</option>
                                    <option value="TJ">TJ</option>
                                    <option value="OR">OR</option>
                                <?php
                                }
                                elseif($fila['ext_ci']==''){
                                ?>
                            
                                    <option value="BE">BE</option>
                                    <option value="CB">CB</option>
                                    <option value="LP">LP</option>
                                    <option value="SC">SC</option>
                                    <option value="CH">CH</option>
                                    <option value="PA">PA</option>
                                    <option value="PO">PO</option>
                                    <option value="TJ">TJ</option>
                                    <option value="OR">OR</option>
                                    <?php
                                }elseif($fila['ext_ci']=='BE'){
                                ?>
                                <option selected value="<?php echo $fila['ext_ci']; ?>"><?php echo $fila['ext_ci']; ?></option>
                                    <option value="CB">CB</option>
                                    <option value="LP">LP</option>
                                    <option value="SC">SC</option>
                                    <option value="CH">CH</option>
                                    <option value="PA">PA</option>
                                    <option value="PO">PO</option>
                                    <option value="TJ">TJ</option>
                                    <option value="OR">OR</option>
                                    <?php
                                }elseif($fila['ext_ci']=='CB'){
                                ?>
                                <option selected value="<?php echo $fila['ext_ci']; ?>"><?php echo $fila['ext_ci']; ?></option>
                                    <option value="BE">BE</option>
                                    <option value="LP">LP</option>
                                    <option value="SC">SC</option>
                                    <option value="CH">CH</option>
                                    <option value="PA">PA</option>
                                    <option value="PO">PO</option>
                                    <option value="TJ">TJ</option>
                                    <option value="OR">OR</option>
                                    <?php
                                }elseif($fila['ext_ci']=='SC'){
                                ?>
                                <option selected value="<?php echo $fila['ext_ci']; ?>"><?php echo $fila['ext_ci']; ?></option>
                                    <option value="BE">BE</option>
                                    <option value="LP">LP</option>
                                    <option value="CB">CB</option>
                                    <option value="CH">CH</option>
                                    <option value="PA">PA</option>
                                    <option value="PO">PO</option>
                                    <option value="TJ">TJ</option>
                                    <option value="OR">OR</option>
                                    <?php
                                }elseif($fila['ext_ci']=='CH'){
                                ?>
                                <option selected value="<?php echo $fila['ext_ci']; ?>"><?php echo $fila['ext_ci']; ?></option>
                                    <option value="BE">BE</option>
                                    <option value="LP">LP</option>
                                    <option value="CB">CB</option>
                                    <option value="SC">SC</option>
                                    <option value="PA">PA</option>
                                    <option value="PO">PO</option>
                                    <option value="TJ">TJ</option>
                                    <option value="OR">OR</option>
                                    <?php
                                }elseif($fila['ext_ci']=='PA'){
                                ?>
                                <option selected value="<?php echo $fila['ext_ci']; ?>"><?php echo $fila['ext_ci']; ?></option>
                                    <option value="BE">BE</option>
                                    <option value="LP">LP</option>
                                    <option value="CB">CB</option>
                                    <option value="SC">SC</option>
                                    <option value="CH">CH</option>
                                    <option value="PO">PO</option>
                                    <option value="TJ">TJ</option>
                                    <option value="OR">OR</option>
                                    <?php
                                }elseif($fila['ext_ci']=='PO'){
                                ?>
                                <option selected value="<?php echo $fila['ext_ci']; ?>"><?php echo $fila['ext_ci']; ?></option>
                                    <option value="BE">BE</option>
                                    <option value="LP">LP</option>
                                    <option value="CB">CB</option>
                                    <option value="SC">SC</option>
                                    <option value="CH">CH</option>
                                    <option value="PA">PA</option>
                                    <option value="TJ">TJ</option>
                                    <option value="OR">OR</option>
                                    <?php
                                }elseif($fila['ext_ci']=='TJ'){
                                ?>
                                <option selected value="<?php echo $fila['ext_ci']; ?>"><?php echo $fila['ext_ci']; ?></option>
                                    <option value="BE">BE</option>
                                    <option value="LP">LP</option>
                                    <option value="CB">CB</option>
                                    <option value="SC">SC</option>
                                    <option value="CH">CH</option>
                                    <option value="PA">PA</option>
                                    <option value="PO">PO</option>
                                    <option value="OR">OR</option>
                                    <?php
                                }elseif($fila['ext_ci']=='OR'){
                                ?>
                                <option selected value="<?php echo $fila['ext_ci']; ?>"><?php echo $fila['ext_ci']; ?></option>
                                    <option value="BE">BE</option>
                                    <option value="LP">LP</option>
                                    <option value="CB">CB</option>
                                    <option value="SC">SC</option>
                                    <option value="CH">CH</option>
                                    <option value="PA">PA</option>
                                    <option value="PO">PO</option>
                                    <option value="TJ">TJ</option>
                                    <?php
                                }
                                   ?>

                                    
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Genero</label>
                            <select class="form-control" id="genero" name="genero">
                            <?php  
                            if($fila['genero']=='FEMENINO'){
                                ?>
                                <option selected value="<?php echo $fila['genero']; ?>"><?php echo $fila['genero']; ?></option>
                                <option value="MASCULINO">MASCULINO</option>
                                <?php 
                                }elseif($fila['genero']=='MASCULINO')
                            {
                                ?>
                                <option selected value="<?php echo $fila['genero']; ?>"><?php echo $fila['genero']; ?></option>
                                <option value="FEMENINO">FEMENINO</option>
                                <?php
                            }else{
                                ?>
                                <option value="FEMENINO">FEMENINO</option>
                                <option value="MASCULINO">MASCULINO</option>
                                <?php
                            }
                            ?> 
                          </select>
                            </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fecha de Nacimiento</label>
                                <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" value="<?php echo $fila['fecha_nacimiento']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Nacionalidad</label>
                            <select class="form-control" id="nacionalidad" name="nacionalidad">
                             <option selected value="<?php echo $fila['nacionalidad']; ?>"><?php echo $fila['nacionalidad']; ?></option>
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
                            
                            <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Estado Civil</label>
                            <select class="form-control" id="estado_civil" name="estado_civil">
                            <option selected value="<?php echo $fila['estado_civil']; ?>"><?php echo $fila['estado_civil']; ?></option>
                            <?php
                              $civil = $con ->query("SELECT * FROM estado_civil");
                              //mysqli_set_charset('utf8');
                              while ($estado = mysqli_fetch_array($civil)) {
                              ?>
                              <option value="<?php echo $estado['des_civil']; ?>"><?php echo $estado['des_civil']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombre del Conyuge</label>
                                <input type="text" class="form-control" id="conyuge" name="conyuge" value="<?php echo $fila['conyuge']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">País de Residencia</label>
                            <select class="form-control" id="pais" name="pais">
                            <option selected value="<?php echo $fila['pais_residencia']; ?>"><?php echo $fila['pais_residencia']; ?></option>
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
                            <option selected value="<?php echo $fila['ciudad']; ?>"><?php echo $fila['ciudad']; ?></option>
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
                                <label for="exampleInputPassword1">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $fila['celular']; ?>">
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $fila['email']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Tipo de Trabajo</label>
                            <select class="form-control" id="tipo_trabajo" name="tipo_trabajo">
                            <option selected value="<?php echo $fila['tipo_trabajo']; ?>"><?php echo $fila['tipo_trabajo']; ?></option>
                            <option value="DEPENDIENTE">DEPENDIENTE</option>
                            <option value="INDEPENDIENTE">INDEPENDIENTE</option>
                            <option value="NO TRABAJA ACTUALMENTE">NO TRABAJA ACTUALMENTE</option>
                          </select>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Profesión</label>
                            <select class="form-control" id="profesiones" name="profesiones">
                           <option selected value="<?php echo $fila['profesion']; ?>"><?php echo $fila['profesion']; ?></option>
                            <?php
                              $profesion = $con ->query("SELECT * FROM profesion");
                              //mysqli_set_charset('utf8');
                              while ($prof = mysqli_fetch_array($profesion)) {
                                  ?>
                              <option value="<?php echo $prof['des_prof']; ?>"><?php echo $prof['des_prof']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
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
                            <option selected value="<?php echo $fila['caedec']; ?>"><?php echo $fila['caedec']; ?></option>
                            <?php
                              $actividad_eco = $con ->query("SELECT * FROM actividad_economica");
                              //mysqli_set_charset('utf8');
                              while ($actividad = mysqli_fetch_array($actividad_eco)) {
                                  ?>
                              <option value="<?php echo $actividad['des_act']; ?>"><?php echo $actividad['des_act']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Lugar de Trabajo</label>
                                <input type="text" class="form-control" id="lugar_trabajo" name="lugar_trabajo" value="<?php echo $fila['lugar_trabajo']; ?>">
                              </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Dirección Laboral</label>
                                <input type="text" class="form-control" id="dir_laboral" name="dir_laboral" value="<?php echo $fila['direccion_comercial']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono del Trabajo</label>
                                <input type="text" class="form-control" id="tel_trabajo" name="tel_trabajo" value="<?php echo $fila['telefono_trabajo']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Cargo</label>
                                <input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $fila['cargo']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Fecha de Ingreso Laboral</label>
                                <input type="text" class="form-control" id="f_ingreso" name="f_ingreso" value="<?php echo $fila['fecha_ingreso_laboral']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Ingresos (BOB)</label>
                                <input type="text" class="form-control" id="sueldo" name="sueldo" value="<?php echo $fila['ingresos']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">NIT (Si Corresponde)</label>
                                <input type="text" class="form-control" id="nit_natural" name="nit_natural" value="<?php echo $fila['nit_naturtal']; ?>">
                              </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Tipo de Referencia</label>
                            <select class="form-control" id="tipo_referecia" name="tipo_referecia">
                            <option selected value="<?php echo $fila['referencia_cat']; ?>"><?php echo $fila['referencia_cat']; ?></option>
                            <?php
                              $referencias = $con ->query("SELECT * FROM tipo_referencia");
                              //mysqli_set_charset('utf8');
                              while ($referencia = mysqli_fetch_array($referencias)) {
                                  ?>
                              <option value="<?php echo $referencia['des_refer']; ?>"><?php echo $referencia['des_refer']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Nombre Completo de Referencia</label>
                                <input type="text" class="form-control" id="nom_referencia" name="nom_referencia" value="<?php echo $fila['referencia_nombre']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Teléfono de Referencia</label>
                                <input type="text" class="form-control" id="tel_refer" name="tel_refer" value="<?php echo $fila['referencia_telefono']; ?>">
                              </div>
                                </div>
                            
                              <div class="col-md-2">
                            <div class="form-group">
                            <label for="exampleInputPassword1">PEP</label>
                            <select class="form-control" id="pep" name="pep" onChange="CambiarFormulario()">
                            <option selected value="<?php echo $fila['pep']; ?>"><?php echo $fila['pep']; ?></option>
                            <option value="NO">NO</option>
                            <option value="SI">SI</option>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exampleInputPassword1">Cargo</label>
                                <input type="text" class="form-control" id="cargo_pep" name="cargo_pep" value="<?php echo $fila['cargo_pep']; ?>">
                              </div>
                                </div>
                            <div class="col-md-3">
                            <div class="form-group">
                            <label for="exampleInputPassword1">Residencia en U.S.A.</label>
                            <select class="form-control" id="residencia_usa" name="residencia_usa">
                            <option selected value="<?php echo $fila['res_usa']; ?>"><?php echo $fila['res_usa']; ?></option>
                            <option value="NO">NO</option>
                            <option value="SI">SI</option>
                          </select>
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

              </div>
          </div>
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