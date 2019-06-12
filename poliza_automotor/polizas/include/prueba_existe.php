<?php
$connect = mysqli_connect("localhost", "root", "", "unibienes");

$codigo = '654321';
    
$sql = "SELECT * FROM respon_civil_auto_pol where cod_cliente='$codigo'";  
$result = mysqli_query($connect, $sql);
$rows = mysqli_num_rows($result);
 if($rows != 0)  
{  

     echo "El usuario ya esta registrado";
}
else 
{
    echo 'Usuario no registrado';
}
?>