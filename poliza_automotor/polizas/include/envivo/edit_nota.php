<?php  
	$connect = mysqli_connect("localhost", "root", "", "unibienes");
	$id_respciv = $_POST["id_respciv"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE respon_civil_auto_pol SET ".$column_name."='".$text."' WHERE id_respciv='".$id_respciv."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Registro Actulizado';  
	}  
 ?>