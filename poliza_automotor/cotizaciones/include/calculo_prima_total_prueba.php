<?php
//include "../../../verificar_sesion.php"; 
$con = new mysqli('localhost','root','','unibienes');

$consulta = $con ->query("SELECT * FROM produccion_ciclo");
while($consul = $consulta -> fetch_assoc()){

 echo $valor_asegurado = $consul['valor_asegurado'];
    echo '<br>';


}
?>
