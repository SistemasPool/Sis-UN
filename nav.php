<?php
$monto_asegurado = 18500;
$prima = 388.50;

$resultado = $prima/$monto_asegurado*100;
echo number_format($resultado,2);
?>