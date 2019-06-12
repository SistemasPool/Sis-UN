<?php  
	$connect = mysqli_connect("localhost", "root", "", "unibienes");
	$sql = "DELETE FROM respon_civil_auto_pol WHERE id_respciv = '".$_POST["id_respciv"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>