<?php  
$connect = mysqli_connect("localhost", "root", "", "unibienes");
$sql = "INSERT INTO respon_civil_auto_pol(id_respciv, suma_asegurada, estado) VALUES('', ".$_POST["suma_asegurada"].", '".$_POST["estado"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Registro almacenado';  
}  
 ?>