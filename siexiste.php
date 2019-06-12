<html>
    <head>
<title></title>
    </head>
    <body>
        <form method="post">
            <input type="text" id="cotizacion" name="cotizacion">
            <button type="submit" name="boton">Enviar</button>
        </form>
    </body>
</html>
<?php

if(isset($_POST['boton'])){
$connect = mysqli_connect("localhost", "root", "", "unibienes");

$cod_cotizacion = $_POST['cotizacion'];

$sql = "SELECT * FROM respon_civil_auto_pol WHERE cod_cotizacion='$cod_cotizacion'";  
$result = mysqli_query($connect, $sql);
$rows = mysqli_num_rows($result);
if($rows != 0)  
{  
 echo'<script type="text/javascript">
        alert("El Número de Carnet ya esta registrado, por favor usar otro número.");
        window.history.back(1);
        </script>';
}
else
{
    header("Location: recibe_si_existe.php?cotizacion=$cod_cotizacion");
}}
?>