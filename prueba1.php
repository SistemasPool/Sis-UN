<?php 

$con = new mysqli('localhost','root','','unibienes');
$con->query("SET NAMES 'utf8'");
$cod_cot = $con ->query("SELECT * FROM calculo_prima WHERE nro_poliza='AUSC00000020'");
                  while($codigo_cot = $cod_cot -> fetch_assoc()){
                  
                  $auto_cap_aseg= $codigo_cot['valor_asegurado'];
                  $id = $codigo_cot['id_calculo_prima'];
                  echo "<br>";
                  echo $prima = $auto_cap_aseg*2/100;
                  //echo $id;
$actualizar = $con ->query("UPDATE calculo_prima SET prima_total='$prima' WHERE nro_poliza='AUSC00000020' and id_calculo_prima='$id'");        

}
?>