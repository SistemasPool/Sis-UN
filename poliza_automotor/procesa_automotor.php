<?php
include '../clientes/include/conexion.php'; 

                  $cod_cliente = $_REQUEST['cod_cliente'];
                  //$numero_poliza = $_REQUEST['nro_poliza'];
		          $sel = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'] ;
                  $paterno = $fila['paterno'] ;
                  $materno = $fila['materno'] ;
                  $completo = $nombres." ".$paterno." ".$materno;
                   
		          ?>
          
                  <?php
                    $selo = $con ->query("SELECT MAX(idnum) as idautomotor FROM automovil");
                                      $fi = $selo -> fetch_assoc();
                                      $ids= $fi['idautomotor']+1;
                    $prefijo = 'AULP';
                    
                    
                    if($ids<=10){
                        $autonumerico = $prefijo.str_pad($ids, 9, "0", STR_PAD_LEFT);
                    }elseif($ids<=100){
                        $autonumerico = $prefijo.str_pad($ids, 9, "0", STR_PAD_LEFT);
                    }elseif($ids<=1000){
                        $autonumerico = $prefijo.str_pad($ids, 9, "0", STR_PAD_LEFT);
                    }elseif($ids<=10000){
                        $autonumerico = $prefijo.str_pad($ids, 9, "0", STR_PAD_LEFT);
                    }elseif($ids<=100000){
                        $autonumerico = $prefijo.str_pad($ids, 9, "0", STR_PAD_LEFT);
                    }elseif($ids<=1000000){
                        $autonumerico = $prefijo.str_pad($ids, 9, "0", STR_PAD_LEFT);
                    }elseif($ids<=10000000){
                        $autonumerico = $prefijo.str_pad($ids, 9, "0", STR_PAD_LEFT);
                    }elseif($ids<=100000000){
                        $autonumerico = $prefijo.str_pad($ids, 9, "0", STR_PAD_LEFT);
                    }
                    ?>
          <h3>Número de Póliza</h3><?php echo $autonumerico; ?>
          <h3>Codigo de cliente</h3><?php echo $cod_cliente; ?>