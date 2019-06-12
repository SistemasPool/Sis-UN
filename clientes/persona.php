<?php
$id = $_REQUEST['id'];
$cod_cliente = $_REQUEST['cod_cliente'];
$persona = $_REQUEST['persona'];

if($persona=='NATURAL'){
    header("Location: include/actualizar.php?cod_cliente=$cod_cliente&id=$id");
}
else{
    header("Location: juridica/actualizar.php?cod_cliente=$cod_cliente&id=$id");
}
?>