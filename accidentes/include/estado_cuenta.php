<?php
include "../../verificar_sesion.php";
include 'conexion.php'; 

                  $tipo_pago = $_REQUEST['tipo_pago'];
                  $cod_cliente = $_REQUEST['cod_cliente'];
                  $num_poliza = $_REQUEST['nro_poliza'];
		          $sel = $con ->query("SELECT * FROM calculo_prima WHERE cod_cliente='$cod_cliente' AND nro_poliza='$num_poliza'");
		          $estado_cuenta = $sel -> fetch_assoc();
                  $id = $estado_cuenta['id_calculo_prima'];
                  $prima_total = $estado_cuenta['prima_total'];
                  $estado = $estado_cuenta['estado'];
                  $nro_factura = $estado_cuenta['nro_factura'];
                  $select = $con ->query("SELECT * FROM acc_perso_poliza WHERE cod_cliente='$cod_cliente' AND num_poliza='$num_poliza'");
		          $auto = $select -> fetch_assoc();
                  $fecha_pago = $auto['vencimiento']; 
                  $select_cli = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
		          $cli = $select_cli -> fetch_assoc();
                  $nitf_cif = $cli['nitf_cif'];
                  $pagador = $cli['pagador'];
            $tipo_pago;
         if($tipo_pago=='CONTADO'){
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

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
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
            <li><a href="../../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>


    <div class="container">
      <div class="starter-template">
        <br><br>
          
          
        <div class="container">
        <div class="row">
            <?php
            $tipo_pago;
         if($tipo_pago=='CONTADO'){
            ?>
    <h5>Prima Total</h5>
            <div class="col-md-4" style="font-weight: bold; font-size:14px;">Número de Póliza: <?php echo $num_poliza; ?></div>
            <div class="col-md-4" style="font-weight: bold; font-size:14px;">Código del Cliente: <?php echo $cod_cliente; ?></div>
            <div class="col-md-4" style="font-weight: bold; font-size:14px;">Tipo de Pago: <?php echo $tipo_pago; ?></div>
            <br><br><br><br>
            <table class="table table-striped table-hover" width="100%" cellspacing="0">
        <thead>
            <tr><th width="20%">Prima Total</th>
                <th width="20%">Fecha de Pago</th>
                <th width="20%">Estado</th>
                <th width="20%">Nro de Factura</th>
                <th width="20%">Facturar</th>
            </tr>
        </thead>
        <tbody>
		 <tr>
            <td><?php echo 'USD $'.number_format($prima_total,2); ?></td>
            <td><?php echo $fecha_pago; ?></td>
		 	<td><?php echo $estado;  ?></td>
             <td><?php echo $nro_factura;  ?></td>
             <?php
             if($estado=='NO PAGADO'){
             ?>
            <td>
            <a href="Facturacion/nueva_factura.php?id=<?php echo $id;?>&cod_cliente=<?php echo $cod_cliente; ?>&nitf_cif=<?php echo $nitf_cif; ?>&pagador=<?php echo $pagador; ?>&nro_poliza=<?php echo $num_poliza; ?>&estado=<?php echo $estado; ?>&monto=<?php echo $prima_total; ?>"><button class="btn btn-primary btn-xs" type="submit">Facturar</button></a>
            </td>
            <?php  
             }
             ?>
		 </tr>
                
        </tbody>
    </table>            
    <?php  } ?>
        
            </div>
    </div><!-- /.container -->
        </div>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


    
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

          <script type="text/javascript">    
    $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var recipientpago = button.data('whateverpago')
    var recipientcliente = button.data('whatevercliente')
    var recipientnumpoliza = button.data('whatevernumpoliza')
    var recipienttipopago = button.data('whatevertipopago')
    var recipientfactura = button.data('whateverfactura')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Actualizar estado de Pago')
   // modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
    modal.find('#recipient-id').val(recipient)
    modal.find('#recipient-pago').val(recipientpago)
    modal.find('#recipient-cliente').val(recipientcliente)
    modal.find('#recipient-numpoliza').val(recipientnumpoliza)
    modal.find('#recipient-tipopago').val(recipienttipopago)
    modal.find('#recipient-factura').val(recipientfactura)
    })
    </script>
    
    <script type="text/javascript">
      $(document).ready(function(){
          $('#guardarpago').click(function(){
              
          })
        });
    </script>
          
          
    <script>
        $('#example').DataTable( {
    language: {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
        
} );
       
    </script>
    
  </body>
</html>

            <?php
                }
             elseif($tipo_pago=='CREDITO'){
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
    <link href="../../../clientes/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../clientes/css/jquery.dataTables.min.css" rel="stylesheet">
    
    <link href="../../../clientes/js/jquery.dataTables.min.js" rel="stylesheet">
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
            <li><a href="../../../salir.php">Salir</a></li>
          </ul>
        </li>
      </ul>
            </div><!-- /.navbar-collapse -->
        </nav>


    <div class="container">
      <div class="starter-template">
        <br><br>
          
          
        <div class="container">
        <div class="row">
     <?php
                 
            $cuota_inicial = $con ->query("SELECT * FROM cuota_inicial WHERE cod_cliente='$cod_cliente' and num_poliza='$num_poliza'");
		    $cuoini = $cuota_inicial -> fetch_assoc();
            $cuotas = $con ->query("SELECT * FROM cuotas WHERE cod_cliente='$cod_cliente' and num_poliza='$num_poliza'");
            
        ?>
        <div class="col-md-4" style="font-weight: bold; font-size:14px;">Número de Póliza: <?php echo $num_poliza; ?></div>
        <div class="col-md-4" style="font-weight: bold; font-size:14px;">Código del Cliente: <?php echo $cod_cliente; ?></div>
        <div class="col-md-4" style="font-weight: bold; font-size:14px;">Tipo de Pago: <?php echo $tipo_pago; ?></div>
        <br><br><br><br>
        <table class="table table-striped table-hover" width="100%" cellspacing="0">
        <thead>
            <tr><th width="20%">Cuota Inicial</th>
                <th width="20%">Fecha de Pago</th>
                <th width="20%">Estado</th>
                <th width="20%">Nro de Factura</th>
                <th width="20%"></th>
            </tr>
        </thead>
        <tbody>
		 <tr>
            <td><?php echo 'USD $'.$cuoini['monto']; ?></td>
            <td><?php echo $cuoini['fecha_cuotas'];?></td>
		 	<td><?php echo $cuoini['estado']; ?></td>
             <td><?php echo $cuoini['nro_factura']; ?></td>
             <td>
                 <a href="Facturacion/nueva_factura.php?id=<?php echo $id;?>&cod_cliente=<?php echo $cod_cliente; ?>&nitf_cif=<?php echo $nitf_cif; ?>&pagador=<?php echo $pagador; ?>&nro_poliza=<?php echo $num_poliza; ?>&estado=<?php echo $cuoini['estado']; ?>&monto=<?php echo $cuoini['monto'] ?>"><button class="btn btn-primary btn-xs" type="submit">Facturar</button></a>
                 <button type="button" class="btn btn-success btn-xs" style="font-size:11px;" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $cuoini['id_cuo_ini']; ?>" data-whateverpago="<?php echo $estado; ?>" data-whatevercliente="<?php echo $cod_cliente; ?>" data-whatevernumpoliza="<?php echo $num_poliza; ?>" data-whatevertipopago="<?php echo $tipo_pago; ?>" data-whateverfactura="" data-whatevercuotainicial="CUOTA INICIAL">Actualizar</button></td>
		 </tr>
        </tbody>
    </table>
  
 <!-- modal cuota inicial-->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualiza Estado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="actualiza_cuota_inicial.php" method="post">
          <div class="form-group">
            <input type="hidden" name="cod_cliente" class="form-control" id="recipient-cliente">
            <input type="hidden" name="num_poliza" class="form-control" id="recipient-numpoliza">
            <input type="hidden" name="tipo_pago" class="form-control" id="recipient-tipopago">
            <input type="hidden" name="cuota_inicial" class="form-control" id="recipient-cuotainicial">
            <div class="form-group">
            <label for="exampleInputPassword1">Número de Factura</label>
            <input type="text" name="nro_factura" class="form-control" id="recipient-factura">
            <input type="hidden" name="id" class="form-control" id="recipient-id">
          </div>
            </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Estado</label>
                                <select class="form-control" name="estado_pago" id="recipient-pago">
                                <option value="NO PAGADO">NO PAGADO</option>
                                <option value="PAGADO">PAGADO</option>
                                </select> 
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
        </form>
    </div>
  </div>
</div> 
      </div>
    <!-- final modal cuota inicial-->
            
        <table class="table table-striped table-hover" width="100%" cellspacing="0">
            
                <thead>
            <tr>
                <th width="20%">Cuotas</th>
                <th width="20%">Fecha de Pago</th>
                <th width="20%">Estado</th>
                <th width="20%">Nro de Factura</th>
                <th width="20%"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($cuotass = $cuotas -> fetch_assoc())
            { 
                $monto = $cuotass['monto'];
            ?>
		 <tr>
            <td><?php echo 'USD $'.$monto; ?></td>
            <td><?php echo $cuotass['fecha_cuotas'];?></td>
		 	<td><?php echo $estado = $cuotass['estado']; ?></td>
             <td><?php echo $cuotass['nro_factura']; ?></td>
             <td>
            <a href="Facturacion/nueva_factura.php?id=<?php echo $id;?>&cod_cliente=<?php echo $cod_cliente; ?>&nitf_cif=<?php echo $nitf_cif; ?>&pagador=<?php echo $pagador; ?>&nro_poliza=<?php echo $num_poliza; ?>&estado=<?php echo $estado; ?>&monto=<?php echo $monto; ?>"><button class="btn btn-primary btn-xs" type="submit">Facturar</button></a>
            <button type="button" class="btn btn-success btn-xs" style="font-size:11px;" data-toggle="modal" data-target="#exampleModalcuotas" data-whatever="<?php echo $cuotass['id_cuotas']; ?>" data-whateverpago="<?php echo $estado; ?>" data-whatevercliente="<?php echo $cod_cliente; ?>" data-whatevernumpoliza="<?php echo $num_poliza; ?>" data-whatevertipopago="<?php echo $tipo_pago; ?>" data-whateverfactura="" data-whatevercuotainicial="CUOTAS">Actualizar</button></td>
		 </tr>
        </tbody>
             <?php } ?>           
            </table>
            
            <!-- modal cuotas -->
 <div class="modal fade" id="exampleModalcuotas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualiza Estado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="actualiza_cuotas.php" method="post">
          <div class="form-group">
            <input type="hidden" name="cod_cliente" class="form-control" id="recipient-cliente">
            <input type="hidden" name="num_poliza" class="form-control" id="recipient-numpoliza">
            <input type="hidden" name="tipo_pago" class="form-control" id="recipient-tipopago">
            <input type="hidden" name="cuota_inicial" class="form-control" id="recipient-cuotainicial">
            <div class="form-group">
            <label for="exampleInputPassword1">Número de Factura</label>
            <input type="text" name="nro_factura" class="form-control" id="recipient-factura">
            <input type="hidden" name="id" class="form-control" id="recipient-id">
          </div>
            </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Estado</label>
                                <select class="form-control" name="estado_pago" id="recipient-pago">
                                <option value="NO PAGADO">NO PAGADO</option>
                                <option value="PAGADO">PAGADO</option>
                                </select> 
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
        </form>
    </div>
  </div>
</div> 
      </div>
    <!-- final modal cuotas -->
            
            
            </div>
    </div><!-- /.container -->
        </div>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../clientes/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../clientes/js/datatablejs.js"></script>
    <script src="../../../clientes/js/jquery.dataTables.min.js"></script>
    
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

    <script type="text/javascript">    
    $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var recipientpago = button.data('whateverpago')
    var recipientcliente = button.data('whatevercliente')
    var recipientnumpoliza = button.data('whatevernumpoliza')
    var recipienttipopago = button.data('whatevertipopago')
    var recipientfactura = button.data('whateverfactura')
    var recipientcuotainicial = button.data('whatevercuotainicial')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Actualizar estado de Pago')
   // modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
    modal.find('#recipient-id').val(recipient)
    modal.find('#recipient-pago').val(recipientpago)
    modal.find('#recipient-cliente').val(recipientcliente)
    modal.find('#recipient-numpoliza').val(recipientnumpoliza)
    modal.find('#recipient-tipopago').val(recipienttipopago)
    modal.find('#recipient-factura').val(recipientfactura)
    modal.find('#recipient-cuotanicial').val(recipientcuotainicial)
    })
    </script>
      
      
    <script type="text/javascript">    
    $('#exampleModalcuotas').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var recipientpago = button.data('whateverpago')
    var recipientcliente = button.data('whatevercliente')
    var recipientnumpoliza = button.data('whatevernumpoliza')
    var recipienttipopago = button.data('whatevertipopago')
    var recipientfactura = button.data('whateverfactura')
    var recipientcuotainicial = button.data('whatevercuotainicial')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Actualizar estado de Pago')
   // modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
    modal.find('#recipient-id').val(recipient)
    modal.find('#recipient-pago').val(recipientpago)
    modal.find('#recipient-cliente').val(recipientcliente)
    modal.find('#recipient-numpoliza').val(recipientnumpoliza)
    modal.find('#recipient-tipopago').val(recipienttipopago)
    modal.find('#recipient-factura').val(recipientfactura)
    modal.find('#recipient-cuotanicial').val(recipientcuotainicial)
    })
    </script>
    
    <script type="text/javascript">
      $(document).ready(function(){
          $('#guardarpago').click(function(){
              
          })
        });
    </script>
          
          
    <script>
        $('#example').DataTable( {
    language: {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
        
} );
       
    </script>
    
  </body>
</html>
            <?php } ?> 

