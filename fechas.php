 <?php
// Para PHP >= 5.3.0

$fecha = '2018-10-10';
$ini = new DateTime($fecha); // formato: aaaa-mm-dd

$mas_1D = new DateInterval('P30D');

for ($i=0;$i<4;$i++){   
   echo $ini->add($mas_1D)->format('Y-m-d') . '<br/>';
} 
    ?>