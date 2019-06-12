<?php
$con = new mysqli('localhost','root','','masiva');
$con->query("SET NAMES 'utf8'");


for ($i = 100001; $i <= 500000; $i++) {
    
   $ins = $con -> query("INSERT INTO `clientes`(`id_cliente`, `nombre_completo`, `carnet`) VALUES ('','JOSÉ MANUEL MARTINEZ MARTINEZ','$i')");
}
?>