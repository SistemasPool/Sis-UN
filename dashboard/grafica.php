<?php
$con = new mysqli('localhost','root','','unibienes');
$con->query("SET NAMES 'utf8'");

$sel = $con ->query("SELECT count(nombres) as clientes, nro_poliza FROM clientes WHERE fecha_registro between '2018-01-01' and '2018-12-31' and distrito='LA PAZ'");
$fila = $sel -> fetch_assoc();
$num_clientes = $fila['clientes'];

$sel1 = $con ->query("SELECT count(nombres) as clientes FROM  clientes WHERE fecha_registro between '2019-01-01' and '2019-12-31' and distrito='LA PAZ'");
$fila1 = $sel1 -> fetch_assoc();
$num_clientes1 = $fila1['clientes'];

$sel2 = $con ->query("SELECT count(nombres) as clientes, nro_poliza FROM clientes WHERE fecha_registro between '2018-01-01' and '2018-12-31' and distrito='COCHABAMBA'");
$fila2 = $sel2 -> fetch_assoc();
$num_clientes2 = $fila2['clientes'];

$sel3 = $con ->query("SELECT count(nombres) as clientes FROM  clientes WHERE fecha_registro between '2019-01-01' and '2019-12-31' and distrito='COCHABAMBA'");
$fila3 = $sel3 -> fetch_assoc();
$num_clientes3 = $fila3['clientes'];

$sel4 = $con ->query("SELECT count(nombres) as clientes, nro_poliza FROM clientes WHERE fecha_registro between '2018-01-01' and '2018-12-31' and distrito='SANTA CRUZ'");
$fila4 = $sel4 -> fetch_assoc();
$num_clientes4 = $fila4['clientes'];

$sel5 = $con ->query("SELECT count(nombres) as clientes FROM  clientes WHERE fecha_registro between '2019-01-01' and '2019-12-31' and distrito='SANTA CRUZ'");
$fila5 = $sel5 -> fetch_assoc();
$num_clientes5 = $fila5['clientes'];

$cot = $con ->query("SELECT count(placa) as cotizacion FROM automovil_cotizacion GROUP BY nro_poliza");
$fila_cot = $cot -> fetch_assoc();
$num_cotizacion = $fila_cot['cotizacion'];

$pol = $con ->query("SELECT count(placa) as polizas FROM automovil WHERE estado='NUEVO'");
$fila_pol = $pol -> fetch_assoc();
$num_polizas = $fila_pol['polizas'];

$pol1 = $con ->query("SELECT count(placa) as polizas FROM automovil WHERE estado='ANULADA'");
$fila_pol1 = $pol1 -> fetch_assoc();
$num_polizas1 = $fila_pol1['polizas'];

$sin = $con ->query("SELECT count(num_siniestro) as siniestro FROM siniestros");
$fila_sin = $sin -> fetch_assoc();
$num_siniestros = $fila_sin['siniestro'];

?>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
    

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Clientes', 'La Paz', 'Chochabamba', 'Santa Cruz', 'Potosi'],
          ['2018', <?php echo $num_clientes; ?>, <?php echo $num_clientes2; ?>, <?php echo $num_clientes4; ?>, <?php echo $num_clientes4; ?>],
          ['2019', <?php echo $num_clientes1; ?>, <?php echo $num_clientes3; ?>, <?php echo $num_clientes5; ?>, <?php echo $num_clientes4; ?>]
        ]);

        var options = {
          chart: {
            title: 'UNIBienes S.A.',
            subtitle: 'Creación de Clientes',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>
    <div id="barchart_material" style="width: 500px; height: 400px; margin:0;"></div>
