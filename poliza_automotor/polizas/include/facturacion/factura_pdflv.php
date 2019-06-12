<?php
ob_start();
include '../../../../verificar_sesion.php';
?>
<style type="text/css">
<!--
.saltos{
    margin-top:-0.5px; 
    }
.salto{
    margin-top:2px; 
    }
.total{
    width:100%;
}
.caja{
border-style:solid;
border:1px;
border-color:#000;
    }
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
.midnight-blue{
	background:#2c3e50;
	padding: 4px 4px 4px;
	color:white;
	font-weight:bold;
	font-size:12px;
}
.silver{
	background:white;
	padding: 3px 4px 3px;
}
.clouds{
	background:#ecf0f1;
	padding: 3px 4px 3px;
}
.border-top{
	border-top: solid 1px #bdc3c7;
	
}
.border-left{
	border-left: solid 1px #bdc3c7;
}
.border-right{
	border-right: solid 1px #bdc3c7;
}
.border-bottom{
	border-bottom: solid 1px #bdc3c7;
}
table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
}
</style>
<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm">
    
<?php
//conexion
$con = new mysqli('localhost','root','','unibienes');
$id = $_REQUEST['id'];    

$sel = $con ->query("SELECT * FROM `libro_ventas` WHERE id_lv='$id'");
$fila = $sel -> fetch_assoc();
    
$pagador = utf8_encode($fila['nombre_razon']);
$nitf_cif = $fila['ci_nit'];
$monto = $fila['importe_venta'];
$fecha = $fila['fecha'];
$fecha_control = $fila['fecha_factura'];
//date("Ymd", strtotime($fecha));
$date = str_replace('-', '', $fecha_control);
$num_factura = $fila['num_factura'];
$nit = '338090023';
$autorizacion = $fila['autorizacion'];

$monto_redondo = round($monto);
    
$sel_desc = $con ->query("SELECT * FROM `items_factura` WHERE num_fac='$num_factura'");
$sel_desc1 = $con ->query("SELECT * FROM `items_factura` WHERE num_fac='$num_factura'");

$fecha1 = $fila['fecha_factura'];
list($anio, $mes, $dia) = explode("-",$fecha1);
////echo "Año: $anio <br />";
////echo "Mes: $mes <br />";
////echo "Dia: $dia <br />";

     //definimos el area geografica del cual deseamos la fecha actual
     date_default_timezone_set("America/La_Paz");
     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    
?>
<table cellspacing="0" style="width: 100%;">
        <tr>
           <td style="width: 30%; color: #444444; font-size:11px;">
               <img src="img/logo.jpg" width="180" height="50"><br>
                <br>CASA MATRIZ - 0<br>
                Calle Heriberto Gutierrez # 2389<br>
                Zona: Sopocachi Bajo<br>
				Telf.: (591-2) 2121920 - 2154213<br>
				Email: unibienes@unibienes.com.bo<br>
                La Paz - Bolivia
            </td>
			<td style="width: 40%; color: #34495e;font-size:24px;text-align:center">
                FACTURA
            </td>
			<td style="width: 30%;text-align:left; font-size:11px;">
            <div class="caja" style="padding:5px;">
                <p class="salto">NIT: <strong><?php echo $nit; ?></strong></p>
                <p class="salto">FACTURA Nº<strong> <?php echo '   '.$num_factura;?></strong></p>
                <p class="salto">Nº de Autorización: <strong><?php echo $autorizacion; ?></strong></p>
            </div>
            </td>
    </tr>
    </table>
    <table cellspacing="0" style="width: 100%;">
        <tr>
            <td style="width: 40%;"></td>
            <td style="width: 40%;"></td>
            <td stryle="text-align: center;">ORIGINAL</td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
           <td style="width:50%;" class='midnight-blue'>FACTURAR A</td>
        </tr>
		<tr>
           <td style="width:100%; font-size: 14px;">
            <div class="caja" style="padding:5px;">
			<?php 
				////$sql_cliente=mysqli_query($con,"select * from clientes where id_cliente='$id_cliente'");
				////$rw_cliente=mysqli_fetch_array($sql_cliente);
                //definimos el area geografica del cual deseamos la fecha actual
                date_default_timezone_set("America/La_Paz");
                $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                //echo "<br> FECHA: ";
				echo "<p class='saltos'>Lugar y Fecha: La Paz, ".$dias=date($dia)." de ".$meses[date($mes)-1]. " del ".date($anio).'</p>';
                echo "<p class='saltos'>Señor(es): ";
				echo $pagador.'</p>';
                echo "<p class='saltos'>NIT/CI: ";
				echo $nitf_cif.'</p>';
			?>
			</div>
		   </td>
        </tr>
    </table>
    <div class="caja" style="border-style: solid; margin:auto; width: 675px; height: 600px;">
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
        <tr>
            <th style="width: 10%;text-align:center" class='midnight-blue'>CANT.</th>
            <th style="width: 60%" class='midnight-blue'>DESCRIPCION</th>
            <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO UNIT.</th>
            <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO TOTAL</th>
            
        </tr> <?php
        $contador = 1;
        if(mysqli_num_rows($sel_desc) > 0){
        while($filas = $sel_desc -> fetch_assoc()){
        $descripcion = $filas['descripcion'];
        $p_unitario = $filas['p_unitario'];
        ?>
        <tr style="height: 70px;">
            <td style="width: 10%; text-align: center"><?php echo $contador;?></td>
            <td style="width: 60%; text-align: left"><?php echo $descripcion; ?></td>
            <td style="width: 15%; text-align: right"><?php echo number_format($p_unitario,2); ?></td>
            <td style="width: 15%; text-align: right"><?php echo number_format($p_unitario,2); ?></td>
        </tr>
        <?php
        }
        }else{
            ?>
        <tr style="height: 70px;">
            <td style="width: 10%; text-align: center">1</td>
            <td style="width: 60%; text-align: left"><?php echo $fila['concepto']; ?></td>
            <td style="width: 15%; text-align: right"><?php echo number_format($monto,2); ?></td>
            <td style="width: 15%; text-align: right"><?php echo number_format($monto,2); ?></td>
        </tr>
        <?php
            
        } ?>
        

    <!--    <tr style="height: 70px;">
            <td style="width: 10%; text-align: center"><?php echo $cantidad; ?></td>
            <td style="width: 60%; text-align: left"><?php echo $nombre_producto;?></td>
            <td style="width: 15%; text-align: right"><?php echo $precio_venta_f;?></td>
            <td style="width: 15%; text-align: right"><?php echo $precio_total_f;?></td>
        </tr> -->
    </table>
        
    </div>
    
    <?php
//$numero = 5000;
$cambio = valorEnLetras($monto);

function valorEnLetras($x)
{
if ($x<0) { $signo = "menos ";}
else      { $signo = "";}
$x = abs ($x);
$C1 = $x;

$G6 = floor($x/(1000000));  // 7 y mas

$E7 = floor($x/(100000));
$G7 = $E7-$G6*10;   // 6

$E8 = floor($x/1000);
$G8 = $E8-$E7*100;   // 5 y 4

$E9 = floor($x/100);
$G9 = $E9-$E8*10;  //  3

$E10 = floor($x);
$G10 = $E10-$E9*100;  // 2 y 1


$G11 = round(($x-$E10)*100,0);  // Decimales
//////////////////////

$H6 = unidades($G6);

if($G7==1 AND $G8==0) { $H7 = "Cien "; }
else {    $H7 = decenas($G7); }

$H8 = unidades($G8);

if($G9==1 AND $G10==0) { $H9 = "Cien "; }
else {    $H9 = decenas($G9); }

$H10 = unidades($G10);

if($G11 < 10) { $H11 = "0".$G11; }
else { $H11 = $G11; }

/////////////////////////////
    if($G6==0) { $I6=" "; }
elseif($G6==1) { $I6="Millón "; }
         else { $I6="Millones "; }
         
if ($G8==0 AND $G7==0) { $I8=" "; }
         else { $I8="Mil "; }
         
$I10 = "";
$I11 = "/100 ";

$C3 = $signo.$H6.$I6.$H7.$I7.$H8.$I8.$H9.$I9.$H10.$I10.$H11.$I11;

return $C3; //Retornar el resultado

}

function unidades($u)
{
    if ($u==0)  {$ru = " ";}
elseif ($u==1)  {$ru = "Un ";}
elseif ($u==2)  {$ru = "Dos ";}
elseif ($u==3)  {$ru = "Tres ";}
elseif ($u==4)  {$ru = "Cuatro ";}
elseif ($u==5)  {$ru = "Cinco ";}
elseif ($u==6)  {$ru = "Seis ";}
elseif ($u==7)  {$ru = "Siete ";}
elseif ($u==8)  {$ru = "Ocho ";}
elseif ($u==9)  {$ru = "Nueve ";}
elseif ($u==10) {$ru = "Diez ";}

elseif ($u==11) {$ru = "Once ";}
elseif ($u==12) {$ru = "Doce ";}
elseif ($u==13) {$ru = "Trece ";}
elseif ($u==14) {$ru = "Catorce ";}
elseif ($u==15) {$ru = "Quince ";}
elseif ($u==16) {$ru = "Dieciseis ";}
elseif ($u==17) {$ru = "Decisiete ";}
elseif ($u==18) {$ru = "Dieciocho ";}
elseif ($u==19) {$ru = "Diecinueve ";}
elseif ($u==20) {$ru = "Veinte ";}

elseif ($u==21) {$ru = "Veintiuno ";}
elseif ($u==22) {$ru = "Veintidos ";}
elseif ($u==23) {$ru = "Veintitres ";}
elseif ($u==24) {$ru = "Veinticuatro ";}
elseif ($u==25) {$ru = "Veinticinco ";}
elseif ($u==26) {$ru = "Veintiseis ";}
elseif ($u==27) {$ru = "Veintisiente ";}
elseif ($u==28) {$ru = "Veintiocho ";}
elseif ($u==29) {$ru = "Veintinueve ";}
elseif ($u==30) {$ru = "Treinta ";}

elseif ($u==31) {$ru = "Treinta y uno ";}
elseif ($u==32) {$ru = "Treinta y dos ";}
elseif ($u==33) {$ru = "Treinta y tres ";}
elseif ($u==34) {$ru = "Treinta y cuatro ";}
elseif ($u==35) {$ru = "Treinta y cinco ";}
elseif ($u==36) {$ru = "Treinta y seis ";}
elseif ($u==37) {$ru = "Treinta y siete ";}
elseif ($u==38) {$ru = "Treinta y ocho ";}
elseif ($u==39) {$ru = "Treinta y nueve ";}
elseif ($u==40) {$ru = "Cuarenta ";}

elseif ($u==41) {$ru = "Cuarenta y uno ";}
elseif ($u==42) {$ru = "Cuarenta y dos ";}
elseif ($u==43) {$ru = "Cuarenta y tres ";}
elseif ($u==44) {$ru = "Cuarenta y cuatro ";}
elseif ($u==45) {$ru = "Cuarenta y cinco ";}
elseif ($u==46) {$ru = "Cuarenta y seis ";}
elseif ($u==47) {$ru = "Cuarenta y siete ";}
elseif ($u==48) {$ru = "Cuarenta y ocho ";}
elseif ($u==49) {$ru = "Cuarenta y nueve ";}
elseif ($u==50) {$ru = "Cincuenta ";}

elseif ($u==51) {$ru = "Cincuenta y uno ";}
elseif ($u==52) {$ru = "Cincuenta y dos ";}
elseif ($u==53) {$ru = "Cincuenta y tres ";}
elseif ($u==54) {$ru = "Cincuenta y cuatro ";}
elseif ($u==55) {$ru = "Cincuenta y cinco ";}
elseif ($u==56) {$ru = "Cincuenta y seis ";}
elseif ($u==57) {$ru = "Cincuenta y siete ";}
elseif ($u==58) {$ru = "Cincuenta y ocho ";}
elseif ($u==59) {$ru = "Cincuenta y nueve ";}
elseif ($u==60) {$ru = "Sesenta ";}

elseif ($u==61) {$ru = "Sesenta y uno ";}
elseif ($u==62) {$ru = "Sesenta y dos ";}
elseif ($u==63) {$ru = "Sesenta y tres ";}
elseif ($u==64) {$ru = "Sesenta y cuatro ";}
elseif ($u==65) {$ru = "Sesenta y cinco ";}
elseif ($u==66) {$ru = "Sesenta y seis ";}
elseif ($u==67) {$ru = "Sesenta y siete ";}
elseif ($u==68) {$ru = "Sesenta y ocho ";}
elseif ($u==69) {$ru = "Sesenta y nueve ";}
elseif ($u==70) {$ru = "Setenta ";}

elseif ($u==71) {$ru = "Setenta y uno ";}
elseif ($u==72) {$ru = "Setenta y dos ";}
elseif ($u==73) {$ru = "Setenta y tres ";}
elseif ($u==74) {$ru = "Setenta y cuatro ";}
elseif ($u==75) {$ru = "Setenta y cinco ";}
elseif ($u==76) {$ru = "Setenta y seis ";}
elseif ($u==77) {$ru = "Setenta y siete ";}
elseif ($u==78) {$ru = "Setenta y ocho ";}
elseif ($u==79) {$ru = "Setenta y nueve ";}
elseif ($u==80) {$ru = "Ochenta ";}

elseif ($u==81) {$ru = "Ochenta y uno ";}
elseif ($u==82) {$ru = "Ochenta y dos ";}
elseif ($u==83) {$ru = "Ochenta y tres ";}
elseif ($u==84) {$ru = "Ochenta y cuatro ";}
elseif ($u==85) {$ru = "Ochenta y cinco ";}
elseif ($u==86) {$ru = "Ochenta y seis ";}
elseif ($u==87) {$ru = "Ochenta y siete ";}
elseif ($u==88) {$ru = "Ochenta y ocho ";}
elseif ($u==89) {$ru = "Ochenta y nueve ";}
elseif ($u==90) {$ru = "Noventa ";}

elseif ($u==91) {$ru = "Noventa y uno ";}
elseif ($u==92) {$ru = "Noventa y dos ";}
elseif ($u==93) {$ru = "Noventa y tres ";}
elseif ($u==94) {$ru = "Noventa y cuatro ";}
elseif ($u==95) {$ru = "Noventa y cinco ";}
elseif ($u==96) {$ru = "Noventa y seis ";}
elseif ($u==97) {$ru = "Noventa y siete ";}
elseif ($u==98) {$ru = "Noventa y ocho ";}
else            {$ru = "Noventa y nueve ";}
return $ru; //Retornar el resultado
}

function decenas($d)
{
    if ($d==0)  {$rd = "";}
elseif ($d==1)  {$rd = "Ciento ";}
elseif ($d==2)  {$rd = "Doscientos ";}
elseif ($d==3)  {$rd = "Trescientos ";}
elseif ($d==4)  {$rd = "Cuatrocientos ";}
elseif ($d==5)  {$rd = "Quinientos ";}
elseif ($d==6)  {$rd = "Seiscientos ";}
elseif ($d==7)  {$rd = "Setecientos ";}
elseif ($d==8)  {$rd = "Ochocientos ";}
else            {$rd = "Novecientos ";}
return $rd; //Retornar el resultado
}
?>
    
    
    
    <div>
            <div style="text-align:left; width:69.7%; border:solid 1px; border-color:black; font-size:11px; display:inline;">Son:. <?php echo $cambio.' Bolivianos.'; ?></div>
            <div style="text-align: right; width:15%; border:solid 1px; font-size:12px; display:inline;">TOTAL BS:</div>
            <div style="text-align: right; width:15%; border:solid 1px; font-size:12px; display:inline;"><?php echo number_format($monto,2); ?></div>
            </div>
<div class="container">
        <?php
            include "qr/qr/qrlib.php";
            $dir = 'qr/temp/';
            
            //Si no existe la carpeta la creamos
            if (!file_exists($dir))
                mkdir($dir);

            //Declaramos la ruta y nombre del archivo a generar
            $filename = $dir.'test.png';

            //Parametros de Condiguración
            
            //Precisión:
            //L = Baja
            //M = Mediana
            //Q = Alta
            //H= Máxima
            
            $tamaño = 3; //Tamaño de Pixel
            $level = 'L'; //Precisión Baja
            $framSize = 3; //Tamaño en blanco
           

            //Mostramos la imagen generada
        
        
            require_once('codcontrol/CodigoControlV7.php');

            //$numero_autorizacion = '3904001634450';
            //$numero_factura = '122644';
            //$nit_cliente = '2210396';
            //$fecha_compra = '20080927';
            //$monto_compra = '87960';
            //$clave = 'aQ9fWQNXG(37Yf%9)i3Sc+hX7AJehF]_ZbIyXZ([nPA59j#QNeemsY{gYR5}cHPp';
            
        $codigo_control = $fila['codigo_control'];
            
        $contenido = $nit."|".$monto."|".$num_factura."|".$autorizacion."|".$date."|".$codigo_control."|"; //Texto

            //Enviamos los parametros a la Función para generar código QR 
            QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
        
        ?>

        <br>
        <table cellpadding="0" cellspacing="0">
			<tr>
				<td width='20%' rowspan="4"><img src="<?php echo $dir.basename($filename); ?>" width='20px' height='20px'/></td>
				<td style="font-size:10px;">Código de Control: <?php echo $codigo_control; ?></td>
			</tr>
			<tr style="font-size:10px;">
				<td>Fecha limite de emisión: 04/03/2019</td>
			</tr>
            <tr style="font-size:10px;">
				<td>Forma de Pago: AL CONTADO</td>
			</tr>
            <tr width='80%' style="font-size:9px;">
				<td> “ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS. EL USO ILÍCITO DE ÉSTA SERÁ SANCIONADO DE ACUERDO A LEY”<br>
                    Ley No 453: Los servicios deben suministrarse en condiciones de o¿inocuidad, calidad y seguridad.
                </td>
			</tr>
		</table>
     </div>     
    
    
    <br>
    <table cellspacing="0" style="width: 100%;">
        <tr>
           <td style="width: 30%; color: #444444; font-size:11px;">
               <img src="img/logo.jpg" width="180" height="50"><br>
                <br>Calle Heriberto Gutierrez # 2389<br> 
                Zona: Sopocachi Bajo<br>
				Telf.: (591-2) 2121920 - 2154213<br>
				Email: unibienes@unibienes.com.bo<br>
                La Paz - Bolivia
            </td>
			<td style="width: 40%; color: #34495e;font-size:24px;text-align:center">
                FACTURA
            </td>
            <td style="width: 30%;text-align:left; font-size:11px;">
            <div class="caja" style="padding:5px;">
                <p class="salto">NIT: <strong><?php echo $nit; ?></strong></p>
                <p class="salto">FACTURA Nº<strong> <?php echo '   '.$num_factura;?></strong></p>
                <p class="salto">Nº de Autorización: <strong><?php echo $autorizacion; ?></strong></p>
            </div>
            </td>
            </tr>
    </table>
    <table cellspacing="0" style="width: 100%;">
        <tr>
            <td style="width: 40%;"></td>
            <td style="width: 40%;"></td>
            <td stryle="text-align: center;">COPIA</td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
           <td style="width:50%;" class='midnight-blue'>FACTURAR A</td>
        </tr>
		<tr>
           <td style="width:100%; font-size: 14px;">
            <div class="caja" style="padding:5px;">
			<?php 
				////$sql_cliente=mysqli_query($con,"select * from clientes where id_cliente='$id_cliente'");
				////$rw_cliente=mysqli_fetch_array($sql_cliente);
                //definimos el area geografica del cual deseamos la fecha actual
                date_default_timezone_set("America/La_Paz");
                $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                //echo "<br> FECHA: ";
				echo "<p class='saltos'>Lugar y Fecha: La Paz, ".$dias=date($dia)." de ".$meses[date($mes)-1]. " del ".date($anio).'</p>';
                echo "<p class='saltos'>Señor(es): ";
				echo $pagador.'</p>';
                echo "<p class='saltos'>NIT/CI: ";
				echo $nitf_cif.'</p>';
			?>
			</div>
		   </td>
        </tr>
    </table>
    <div class="caja" style="border-style: solid; margin:auto; width: 675px; height: 600px;">
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
        <tr>
            <th style="width: 10%;text-align:center" class='midnight-blue'>CANT.</th>
            <th style="width: 60%" class='midnight-blue'>DESCRIPCION</th>
            <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO UNIT.</th>
            <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO TOTAL</th>
            
        </tr>
        <?php
        $contador = 1;
        if(mysqli_num_rows($sel_desc1) > 0){
        while($filaso = $sel_desc1 -> fetch_assoc()){
        $descripcion1 = $filaso['descripcion'];
        $p_unitario1 = $filaso['p_unitario'];
        ?>
        <tr style="height: 70px;">
            <td style="width: 10%; text-align: center"><?php echo $contador;?></td>
            <td style="width: 60%; text-align: left"><?php echo $descripcion1; ?></td>
            <td style="width: 15%; text-align: right"><?php echo number_format($p_unitario1,2); ?></td>
            <td style="width: 15%; text-align: right"><?php echo number_format($p_unitario1,2); ?></td>
        </tr>
        <?php
        }
        }else{
            ?>
        <tr style="height: 70px;">
            <td style="width: 10%; text-align: center">1</td>
            <td style="width: 60%; text-align: left"><?php echo $fila['concepto']; ?></td>
            <td style="width: 15%; text-align: right"><?php echo number_format($monto,2); ?></td>
            <td style="width: 15%; text-align: right"><?php echo number_format($monto,2); ?></td>
        </tr>
        <?php
        } ?>

    <!--    <tr style="height: 70px;">
            <td style="width: 10%; text-align: center"><?php echo $cantidad; ?></td>
            <td style="width: 60%; text-align: left"><?php echo $nombre_producto;?></td>
            <td style="width: 15%; text-align: right"><?php echo $precio_venta_f;?></td>
            <td style="width: 15%; text-align: right"><?php echo $precio_total_f;?></td>
        </tr> -->
    </table>
        
    </div>
    
        
    
    <div>
            <div style="text-align:left; width:69.7%; border:solid 1px; border-color:black; font-size:11px; display:inline;">Son:. <?php echo $cambio.' Bolivianos.'; ?></div>
            <div style="text-align: right; width:15%; border:solid 1px; font-size:12px; display:inline;">TOTAL BS:</div>
            <div style="text-align: right; width:15%; border:solid 1px; font-size:12px; display:inline;"><?php echo number_format($monto,2); ?></div>
            </div>
<div class="container">
        <br>
        <table cellpadding="0" cellspacing="0">
			<tr>
				<td width='20%' rowspan="4"><img src="<?php echo $dir.basename($filename); ?>" width='20px' height='20px'/></td>
				<td style="font-size:10px;">Código de Control: <?php echo $codigo_control; ?></td>
			</tr>
			<tr style="font-size:10px;">
				<td>Fecha limite de emisión: 04/03/2019</td>
			</tr>
            <tr style="font-size:10px;">
				<td>Forma de Pago: AL CONTADO</td>
			</tr>
            <tr width='80%' style="font-size:9px;">
				<td> “ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS. EL USO ILÍCITO DE ÉSTA SERÁ SANCIONADO DE ACUERDO A LEY”<br>
                    Ley No 453: Los servicios deben suministrarse en condiciones de o¿inocuidad, calidad y seguridad.
                </td>
			</tr>
		</table>
     </div>     
</page>
<?php 
    $content = ob_get_clean();
    include_once("html/html2pdf.class.php");
    $pdf = new HTML2PDF('P','A4','ES','UTF-8');
    $pdf->writeHTML($content);
    $pdf->pdf->IncludeJS('print(TRUE)');
    $pdf->output('lista.pdf');
?>