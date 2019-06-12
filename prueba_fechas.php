<?php
$fecha_actual = strtotime("2018-06-10");
$fecha_entrada = strtotime("2018-06-09");
	
if($fecha_actual > $fecha_entrada)
	{
    echo'<script type="text/javascript">
    alert("La fecha es mayor a la fecha de de inicio de vigencia");
    window.history.go(1);
    </script>';
    //header("Location:".$_SERVER['HTTP_REFERER']);
	}else
		{
		echo "La fecha comparada es igual o menor";
		}
?>