<?php
include 'automovil/include/conexion.php';
                  $cod_cliente = $_REQUEST['cod_cliente'];
                  $numero_poliza = $_REQUEST['numero_poliza'];
                  $s = $con ->query("SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'");
                    $fi = $s -> fetch_assoc();
                    $variable= $fi['nro_poliza'];
                    if (empty($variable)) {
                        header("Location:automotor_individual.php?codigo=$cod_cliente");
                    
                    }else{
                        header("Location:polizas/index.php?codigo=$cod_cliente&nro_poliza=$numero_poliza");
                    }
?>