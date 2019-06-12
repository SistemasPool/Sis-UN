<?php
include("../lib/pdf/mpdf.php");
$conexion = new mysqli("localhost","corporac_sitel","SitelcompRey","corporac_sitelcomp");

             $id = $_GET["cod"];

            $sq="select * from clientes where cliente_ci='$id'";
            $res = $conexion->query($sq);
            $rw = mysqli_fetch_array($res);


$html = '
    <br><br>
    <h2>PLAN DE PAGOS</h2>
<h3 align="center">URBANIZACION "LA PASTORA"</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; font-size:10px">
    <thead>
        <tr>
            <th width="33%" align="left">Cliente <label for="">'.$rw['1'].'</label></th>
            <th width="33%" align="left">Precio <label for="">$ '.number_format($rw['4'],2).'</label></th>
            <th width="33%" align="left">Fecha de Reserva <label for="">'.$rw['5'].'</label></th>
        </tr>
    </thead>
    <thead>
        <tr>
            <th align="left">Carnet <label for="">'.$rw['2'].'</label></th>
            <th align="left">Cuota Inicial <label for="">$ '.number_format($rw['6'],2).'</label></th>
            <th align="left">Tipo de Cuota <label for="">'.$rw['7'].'</label></th>
        </tr>
    </thead>
    <thead>
        <tr>
             <th align="left">Celular <label for="">'.$rw['3'].'</label></th>
            <th align="left">Saldo <label for="">$ '.number_format($rw['9'],2).'</label></th>
            <th align="left">Moneda <label for="">'.$rw['10'].'</label></th>
        </tr>
    </thead>
    <thead>
        <tr>
           <th align="left">Superficie M2 <label for="">'.$rw['19'].'</label></th>
            <th align="left">Plazo <label for="">'.$rw['8'].'</label></th>
            <th align="left">Plan de Pago <label for="">'.$rw['11'].'</label></th>
        </tr>
    </thead>
    <thead>
        <tr>
            <th align="left">Manzano <label for="">'.$rw['12'].'</label></th>
            <th align="left">Plan <label for="">'.$rw['14'].'</label></th>
            <th align="left">Interes <label for="">'.number_format($rw['15'],2).'</label></th>
        </tr>
    </thead>
          <thead>
        <tr>
            <th align="left">Lote <label for="">'.$rw['13'].'</label></th>
            <th align="left">Total Credito <label for="">'.number_format($rw['17'],2).'</label></th>
            <th align="left">Costo M2 <label for="">'.number_format($rw['18'],2).'</label></th>
        </tr>
    </thead>
    <thead>
        <tr>
            
            
            <th align="left">Ubicación <label for="">'.$rw['16'].'</label></th>
        </tr>
    </thead>
</table>
<br>
';

             $link = mysqli_connect("localhost","corporac_sitel","SitelcompRey");
             mysqli_select_db($link, "corporac_sitelcomp");
             $result = mysqli_query($link, "select * from reserva where ci='$id'");
if (mysqli_num_rows($result) != 0) 
{ 
$html .='
    <h3>Reserva</h3>
    <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; font-size:10px">
    <thead>
      <tr>
        <th>Pago</th>
        <th>Fecha del Pago</th>
        <th>Recibo No</th>
        <th>Recepción</th>
        <th>Moneda</th>
        <th>Aporte</th>
      </tr>
    </thead>
        <tbody>
                      <tr>   
                      <td>'.$ro['1'].'</td>
                      <td>'.$ro['2'].'</td>
                       <td>'.$ro['3'].'</td>
                       <td>'.$ro['4'].'</td>
                       <td>'.$ro['5'].'</td>
                       <td>'.$ro['6'].'</td>
            </tr>
              </tbody>
            </table>
    ';
}else{ }
$html .='
<br>
<h3>Tabla de Pagos</h3>
    <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-collapse: collapse; font-size:10px">
    <thead>
      <tr>
        <th>Cuota</th>
        <th width="12%">Fecha de Pago</th>
        <th>Formulario</th>
        <th width="15%">Cuota Mensual $US</th>
        <th>Saldo</th>
        <th>Interes</th>
        <th>Aportado</th>
        <th width="12%">Reprogramación</th>
      </tr>
    </thead>
    <tbody align="center">  ';
       
     
       
            $sqt="select * from pagos where carnet='$id'";
            $resultado= $conexion->query($sqt);
 
            while($row = mysqli_fetch_array($resultado)){
$html .='         
                 <tr>   
                       <td>'.$row['1'].'</td>
                       <td>'.$row['2'].'</td>
                       <td>'.$row['3'].'</td>
                       <td>'."$ ".ceil($row['5']).'</td>
                       <td>'."$ ".number_format($row['4']).'</td>
                       <td>'.$row['6'].' %'.'</td>
                       <td>'."$ ".number_format($row['7'],2).'</td>
                       <td>'.$row['8'].'</td>
                       </tr>
                    ';
                    }
         
    $html .=' 
              </tbody>
            </table>
  <br><br><br><br>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; font-size:10px; text-align:center;">
    <tr>
        <td width="33%">__________________________________</td>
        <td width="33%"></td>
        <td width="33%">__________________________________</td>
    </tr>
    <tr>
        <td>'.$rw['1'].'</td>
        <td></td>
        <td>MARCO ANTONIO REY ALFARO</td>
    </tr>
    <tr>
        <td>'.$rw['2'].'</td>
        <td></td>
        <td>CI 1861259 TJA</td>
    </tr>
    <tr>
        <td>COMPRADOR</td>
        <td></td>
        <td>GERENTE GENERAL</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

            
';

//formato de la hoja
$mpdf = new mPDF('c', 'A4');
$css = file_get_contents('../../css/bootstrap.min.css');
$mpdf->writeHTML($html);
$mpdf->Output('reporte.pdf','I');
?>
huevos