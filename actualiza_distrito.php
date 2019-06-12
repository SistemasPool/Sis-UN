<?php
$con = new mysqli('localhost','root','','unibienes');
$con->query("SET NAMES 'utf8'");
$id = mysqli_real_escape_string($con,  $_POST['id']);
$distrito = mysqli_real_escape_string($con,  $_POST['distrito']);

$up = $con -> query("UPDATE usuarios SET distrito='$distrito' WHERE id_usuario='$id'");
if ($up) {
	echo "<script>
	location.href='perfil.php';
	</script>";
}else{
	echo "<script>
	location.href='perfil.php';
	</script>";
}
//location.href='perfil.php?id=".$id."';
?>