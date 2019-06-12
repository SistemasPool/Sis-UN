<?php
include 'clientes/include/conexion.php'; 

 
$fechas_cuotas = $con ->query("SELECT SUM(monto) as monto_cuotas FROM cuotas WHERE num_poliza='AULP00000023'");
$fecuo = $fechas_cuotas -> fetch_assoc();
$fechas = $con ->query("SELECT fecha_cuotas FROM cuotas WHERE num_poliza='AULP00000023'");
$fe = $fechas -> fetch_assoc();
$cuotas = $fecuo['monto_cuotas']/4;

                $cuota = 4;
                $contador = 2;
                for($ii = 1; $ii <= $cuota; $ii++)
                     {
                        $mes    =    date('m')    +    $ii;
                        if( $mes    <=    9    ) 
                        {
                            $vencimiento    =    date('d-')    .    '0'    .    $mes    .date('-Y');
                        }elseif(    $mes    ==    13    )
                        {
                            $vencimiento    =    date('d-')    .    '01'    .date('-Y');
                        }else{
                            $vencimiento    =    date('d-')    .    $mes    .date('-Y');
                        }
                    echo $cuotas;
                   echo  $fecha_cuotas = date('Y-m-d', strtotime($vencimiento));
                    echo "<br>";
                    //ok, si guarda
                   $ins = $con -> query("INSERT INTO temp_fecha_cuotas(id_fecha_cuotas, monto, fecha_cuotas, num_poliza) VALUES ('', '$cuotas', '$fecha_cuotas', 'AULP00000023')");
                }
?>