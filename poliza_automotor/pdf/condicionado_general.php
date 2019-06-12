<?php ob_start(); ?>

                  <?php
                  $codigo = $_REQUEST['codigo'];
                  $con = new mysqli('localhost','root','','unibienes');
		          $sel = $con ->query("SELECT * FROM clientes where cod_cliente='$codigo'");
		          $fila = $sel -> fetch_assoc();
                  $nombres = $fila['nombres'];
                  $paterno = $fila['paterno'];
                  $materno = $fila['materno'];
                  $tipo_pago = $fila['tipo_pago'];
                  $completo = $nombres." ".$paterno." ".$materno;

		          ?>
  <style type="text/css">
    @page { margin: 70px 20px; }
        .saltopagina{page-break-after:always;}
#contenedor {
    display: table;
    width: 500px;
    text-align: center;
    margin: 0 auto;
}
#contenidos {
    display: table-row;
}
#columna1, #columna2, #columna3 {
    display: table-cell;
    vertical-align: left;
    border: 1px solid #000;
}
</style>


<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-weight:bold; font-family:Calibri; text-align:center;">CONDICIONES GENERALES</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
    <tr><td style="font-size:10px; text-align:center;">P&Oacute;LIZA No.:<?php echo $fila['nro_poliza']; ?></td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight:bold;">REGLAS APLICABLES AL CONTRATO</td>
</tr>
</table>
<br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="text-align:justify;">Se aplicar&aacute;n al presente contrato de seguro las disposiciones contenidas en los art&iacute;culos siguientes y las normas legales de car&aacute;cter imperativo establecidas en el del C&oacute;digo de Comercio. Sin embargo, se entender&aacute;n v&aacute;lidas las estipulaciones contractuales que sean m&aacute;s beneficiosas para el asegurado o el beneficiario.
</td>
</tr>
</table>
<br><br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight:bold;">ART&Iacute;CULO 1: DEFINICIONES.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Para los efectos de la presente p&oacute;liza, las palabras, t&eacute;rminos y/o expresiones referidas a continuaci&oacute;n, tendr&aacute;n los siguientes significados</td>
</tr>
</table>
<br><br><br><br>
<nobreak></nobreak>
<div id="contenedor" style="font-size:9px; text-align:left;">
    <div id="contenidos">
        <div id="columna1">ASEGURADOR/COMPA&Ntilde;&Iacute;A:</div>
        <div id="columna2">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">ASEGURADO:</div>
        <div id="columna2">La persona natural o jur&iacute;dica titular del inter&eacute;s amparado por el seguro.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">ACCESORIOS:</div>
        <div id="columna2">Los objetos instalados en el veh&iacute;culo que no son imprescindibles para el normal desplazamiento del mismo y que han sido declarados e identificados como accesorios en las Condiciones Particulares de la p&oacute;liza, siempre que permanezcan fijos permanentemente al veh&iacute;culo, por ejemplo, los equipos de sonido 
            o comunicaci&oacute;n.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">BENEFICIARIO:</div>
        <div id="columna2">El que, aun sin ser asegurado, tiene derecho a la indemnizaci&oacute;n en caso de siniestro.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">MATERIA ASEGURADA:</div>
        <div id="columna2">Se entiende como materia asegurada, los bienes en las Condiciones Particulares de la P&oacute;liza y que constituyen el objeto del seguro.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">SUMA ASEGURADA O L&Iacute;MITE DE COBERTURA:</div>
        <div id="columna2">Importe m&aacute;ximo indemnizable para cada &iacute;tem de cobertura, ya sea por uno o varios de los riesgos asegurados.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">FORMULARIO SOLICITUD DE SEGURO:</div>
        <div id="columna2">Es el documento en el cual se solicita el seguro y se especifica los datos necesarios que son la base del seguro y forma parte integrante del Contrato.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">P&Oacute;LIZA:</div>
        <div id="columna2">Se entiende el conjunto de documentos que contiene el presente Contrato de Seguro: Condiciones Particulares, Condiciones Generales, Cl&aacute;usulas y Anexos.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">ACCIDENTE:</div>
        <div id="columna2">Hecho violento, s&uacute;bito e imprevisto, externo y ajeno a la intencionalidad del asegurado, cuyas consecuencias pueden estar amparadas por alguna cobertura del seguro.  Constituye un solo y &uacute;nico accidente el conjunto de da&ntilde;os derivados de un mismo hecho.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">CARRETERAS HABILITADAS AL TR&Aacute;NSITO:</div>
        <div id="columna2">Se entiende las de dominio p&uacute;blico, garajes, aparcamientos y carreteras habilitadas para la circulaci&oacute;n de veh&iacute;culos, que no sean sendas o no habilitadas al tr&aacute;nsito rodado.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">FRANQUICIA DEDUCIBLE:</div>
        <div id="columna2">Es la cantidad a cargo del asegurado, cuando &eacute;sta se encuentre estipulada.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">COASEGURO:</div>
        <div id="columna2">Proporci&oacute;n de la p&eacute;rdida a cargo del Asegurado.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">ACCESORIOS:</div>
        <div id="columna2">Son las partes y piezas adicionales instaladas al veh&iacute;culo despu&eacute;s   de que el mismo ha sido asegurado, es decir despu&eacute;s de iniciada la vigencia del contrato de seguro.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">SINIESTRO:</div>
        <div id="columna2">Siniestro es la realizaci&oacute;n del evento previsto en la p&oacute;liza. El siniestro se produce al acontecer el riesgo cubierto por el contrato de seguro y da origen a la obligaci&oacute;n del asegurador de indemnizar o efectuar la prestaci&oacute;n convenida, de acuerdo a los procedimientos que debe seguir el asegurado, seg&uacute;n se se&ntilde;alan en las secciones respectivas.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">&Aacute;MBITO TERRITORIAL</div>
        <div id="columna2">La cobertura de la presente p&oacute;liza es valida &uacute;nicamente dentro del territorio del Estado Plurinacional de Bolivia.  El &aacute;mbito territorial puede ser ampliado mediante solicitud expresa del Asegurado a la Compa&ntilde;&iacute;a y se establecer&aacute; mediante anexo a la P&oacute;liza.</div>
    </div>
    <div id="contenidos">
        <div id="columna1">LICENCIA PARA CONDUCIR</div>
        <div id="columna2">El conductor debe contar con Licencia vigente o vencida para conducir el tipo de veh&iacute;culo asegurado.</div>
    </div>
 </div>
<nobreak></nobreak>

<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight:bold; text-align:center;">ART&Iacute;CULO 2: CONDICIONES QUE APLICAN A TODAS LAS SECCIONES:</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight:bold;">1.	OBLIGACIONES DEL ASEGURADO</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El asegurado est&aacute; obligado a:</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">1.	mantener el estado del riesgo, en tal virtud, debe comunicar por escrito al asegurador las agravaciones substanciales del riesgo debidas a hechos propios, antes de su ejecuci&oacute;n y los ajenos a su voluntad, dentro de los ocho d&iacute;as siguientes al momento en que los conozca.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">2.	Si se omite la comunicaci&oacute;n de estos hechos, cesan en lo futuro las obligaciones del asegurador, correspondiendo al mismo probar la agravaci&oacute;n del riesgo.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">3.	Comunicada la agravaci&oacute;n del riesgo dentro de los t&eacute;rminos previstos en este art&iacute;culo, el asegurador puede rescindir el contrato o exigir el reajuste a que haya lugar en el importe de la prima, dentro de los quince d&iacute;as siguientes.
La vigencia del seguro no se suspende sino ocho d&iacute;as despu&eacute;s de la fecha en que el asegurador comunique su decisi&oacute;n de rescindir el contrato.
</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">4.	El asegurado est&aacute; obligado, en la medida de sus posibilidades, a evitar la extensi&oacute;n y propagaci&oacute;n del siniestro y a proporcionar los medios de salvamento de las cosas aseguradas, as&iacute; como a observar las instrucciones oportunamente dadas por el asegurador, dentro de lo materialmente razonable. Si como efecto de esas instrucciones, el asegurado incurre en gastos, &eacute;stos ser&aacute;n reembolsados por el asegurador, siempre que sean justificables.</td>
</tr>
</table>
<br><br>

<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight:bold;">2.	DECLARACI&Oacute;N DEL RIESGO ASEGURADO</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El asegurado est&aacute; obligado a declarar objetiva y verazmente los hechos y circunstancias que tengan importancia para la de terminaci&oacute;n del estado de riesgo, tal como lo conozca; en su caso, mediante cuestionario proporcionado por el asegurador.
</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La Reticencia y falsas declaraciones.  La reticencia o inexactitud en las declaraciones del Asegurado sobre los hechos y circunstancias que, conocidos por el Asegurador, hubieran inducido a no aceptar el contrato o a estipular condiciones distintas, hacen anulable el presente contrato.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Las declaraciones falsas o reticentes hechas con dolo o mala fe hacen nulo el presente contrato.  En este caso el Asegurado no tendr&aacute; derecho a la devoluci&oacute;n de las primas pagadas. </td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El Asegurado o beneficiario pierde el derecho a la indemnizaci&oacute;n o prestaci&oacute;n del seguro, cuando:
Provoquen dolosamente el siniestro, su extensi&oacute;n o propagaci&oacute;n;
Oculten o alteren, maliciosamente, en la verificaci&oacute;n del siniestro, los hechos y circunstancias mencionadas en los Art&iacute;culos 1.028 y 1.031 del C&oacute;digo de Comercio, y
Recurran a pruebas falsas con el &aacute;nimo de obtener un beneficio il&iacute;cito.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>En cualquiera de estos casos, el Asegurado pierde adem&aacute;s el derecho a la devoluci&oacute;n de las primas, sin perjuicio de las sanciones penales.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight:bold;">3.	DISCREPANCIAS EN LA P&Oacute;LIZA</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Si el tomador o asegurado encuentran que la p&oacute;liza no concuerda con lo convenido o con lo propuesto, pueden pedir la rectificaci&oacute;n correspondiente por escrito, dentro de los quince d&iacute;as siguientes a la recepci&oacute;n de la p&oacute;liza. Se consideran aceptadas las estipulaciones de &eacute;sta si durante dicho plazo no se solicita la mencionada rectificaci&oacute;n.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Si dentro de los quince d&iacute;as siguientes al de la reclamaci&oacute;n el asegurador no da curso a la rectificaci&oacute;n solicitada o mantiene silencio, se entiende aceptada en los t&eacute;rminos de la modificaci&oacute;n, de acuerdo a lo establecido en el Art.  1013 del C&oacute;digo de Comercio</td>
</tr>
</table>
<br><br>

<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight:bold;">4.	PAGO DE LAS PRIMAS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Es obligaci&oacute;n del Asegurado pagar la prima conforme a lo convenido en las Condiciones Particulares de la presente P&oacute;liza.
</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Si la entrega de la p&oacute;liza o certificado provisional de cobertura se realiza sin la percepci&oacute;n de la prima, se presume la concesi&oacute;n de cr&eacute;dito con intereses por su importe.
</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Si el pago de la prima es parcial, se presume el otorgamiento de cr&eacute;dito con intereses por el saldo.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Salvo pacto en contrario, el incumplimiento en el pago de la prima m&aacute;s los intereses, dentro de los plazos fijados, suspende la vigencia del contrato.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Suspendida la vigencia de la p&oacute;liza, el asegurador tiene derecho con fuerza ejecutiva a la prima correspondiente al periodo corrido, calculado a prorrata.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight:bold;">5.	RESCISI&Oacute;N POR VOLUNTAD UNILATERAL</td>
</tr>
</table>
<br><br>

<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El presente Contrato puede ser rescindido por voluntad unilateral de cualquiera de las partes contratantes.  Si la Compa&ntilde;&iacute;a Aseguradora ejerce la facultad de rescindir, debe notificar por escrito su decisi&oacute;n al asegurado en su domicilio y con antelaci&oacute;n no menor de quince d&iacute;as; si fuera el asegurado quien ejerza la facultad de rescindir, &eacute;sta producir&aacute; sus efectos desde su notificaci&oacute;n escrita al asegurador.
</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Si la rescisi&oacute;n del contrato fuera por voluntad de la Compa&ntilde;&iacute;a Aseguradora, &eacute;ste devolver&aacute; a prorrata la parte de la prima de seguro por el tiempo no corrido; salvo que, durante la vigencia del seguro objeto de la rescisi&oacute;n, haya pagado al asegurado, siniestros por un valor de cuando menos el ochenta y cinco por ciento (85%) del monto de la prima neta anual pactada.  Si fuera por voluntad del Asegurado, la Compa&ntilde;&iacute;a Aseguradora tendr&aacute; derecho a la prima por el tiempo corrido, seg&uacute;n tarifa de plazos cortos.</td>
</tr>
</table>
<br>
<nobreak></nobreak>
<div id="contenedor" style="font-size:10px;">
    <div id="contenidos">
        <div id="columna1">Plazo hasta</div>
        <div id="columna2">% de la prima anual</div>
    </div>
    <div id="contenidos">
        <div id="columna1">15 d&iacute;as</div>
        <div id="columna2">12%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">1 mes</div>
        <div id="columna2">20%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">2 meses</div>
        <div id="columna2">30%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">3 meses</div>
        <div id="columna2">40%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">4 meses</div>
        <div id="columna2">50%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">5 meses</div>
        <div id="columna2">60%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">6 meses</div>
        <div id="columna2">70%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">7 meses</div>
        <div id="columna2">75%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">8 meses</div>
        <div id="columna2">80%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">9 meses</div>
        <div id="columna2">85%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">10 meses</div>
        <div id="columna2">90%</div>
    </div>
    <div id="contenidos">
        <div id="columna1">mas de 10 meses</div>
        <div id="columna2">100%</div>
    </div>
</div>
<nobreak></nobreak>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">Terminaci&oacute;n Autom&aacute;tica del seguro:</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La terminaci&oacute;n autom&aacute;tica del contrato se producir&aacute; en los siguientes casos:</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>a)	Por la venta del veh&iacute;culo asegurado.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>b)	Por la mala fe comprobada del Asegurado al haberse celebrado el contrato o durante su vigencia.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>c)	Por efectuarse en el veh&iacute;culo cualquier alteraci&oacute;n en su estructura, su mecanismo o su uso normal, agravando el riesgo.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>d)	Cuando se demuestre dolo o mala fe del Asegurado en la contrataci&oacute;n o durante la vigencia del contrato o por siniestro total, no proceder&aacute; ninguna devoluci&oacute;n de primas.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30% style="font-weight: bold;">6.	PRESCRIPCI&Oacute;N</td>
<td width=70%>Las acciones emergentes del presente contrato de seguro prescriben en dos a&ntilde;os a contar de la fecha del siniestro.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30% style="font-weight: bold;">7.	JURISDICCI&Oacute;N Y COMPETENCIA</td>
<td width=70%>El conocimiento de las acciones judiciales emergentes del contrato de seguro, es de competencia y jurisdicci&oacute;n del juez del domicilio del asegurado o del lugar donde se encuentren los intereses asegurados. Es nula toda convenci&oacute;n en contrario.</td>
</tr>
</table>
<br><br>
<table width=90% align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30% style="font-size:11px;">8.	DOMICILIO</td>
<td width=70%>Se fija como domicilio legal para el cumplimiento de las obligaciones emanadas de esta p&oacute;liza. la oficina central de la Compa&ntilde;&iacute;a Aseguradora</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30% style="font-weight: bold;">9.	COMUNICACIONES</td>
<td width=70%>Cualquier comunicaci&oacute;n que haya de efectuarse entre la Compa&ntilde;&iacute;a Aseguradora y el Asegurado en relaci&oacute;n a este contrato, deber&aacute; hacerse por escrito mediante carta mecanografiada o certificada dirigida al domicilio de las partes que hayan registrado en la p&oacute;liza.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30% style="font-weight: bold;">10.	GESTION DE COBRANZA</td>
<td width=70%>La Compa&ntilde;&iacute;a no est&aacute; obligada a dar aviso alguno al Asegurado con respecto a la fecha de vencimiento de sus cuotas pendientes; podr&aacute; hacerlo a simple t&iacute;tulo de cortes&iacute;a, sin que la interrupci&oacute;n o demora de tal servicio pueda considerarse justificaci&oacute;n para no efectuar el pago que corresponda en cada fecha preestablecida de vencimiento.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30% style="font-weight: bold;">11.	FORMULARIO DE SOLICITUD</td>
<td width=70%>El formulario de solicitud de P&oacute;liza de Automotores forma parte integrante del presente contrato acept&aacute;ndolo el asegurado como bueno y verdadero, a&uacute;n en el caso de que hubiese sido llenado por un representante del mismo, o por su corredor de seguros</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30% style="font-weight: bold;">12.	INSPECCI&Oacute;N DE PRE RIESGO
</td>
<td width=70%>La Inspecci&oacute;n de Pre - Riesgo, es el documento extendido por la Compa&ntilde;&iacute;a, aceptado y firmado por el Tomador y/o Asegurado como una declaraci&oacute;n formal que acredita el estado, condiciones y las partes, piezas y accesorios con los cuales un veh&iacute;culo es asegurado.  La Inspecci&oacute;n de Pre – Riesgo forma parte inseparable de la P&oacute;liza.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td width=30% style="font-weight: bold;">13.	PLURALIDAD DE SEGUROS</td>
<td width=70%>El que toma varios seguros sobre el mismo riesgo y el mismo inter&eacute;s, debe hacer saber a cada uno de los aseguradores la existencia de los otros seguros.
Si la pluralidad de seguros es contratada de buena fe, en defecto de estipulaciones especiales, todos los
aseguradores, en caso de siniestro responder&aacute;n proporcionalmente al monto de su contrato con relaci&oacute;n al da&ntilde;o ocurrido.
Si alg&uacute;n asegurador hubiera pagado en exceso, podr&aacute; repetir contra los dem&aacute;s aseguradores.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-size:11px; font-weight: bold;">14.	DEBERES DEL ASEGURADO EN CASO DE SINIESTRO</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a)	En el caso de siniestro, el asegurado, contratante o tomador, seg&uacute;n los casos, debe:
Tan pronto y a m&aacute;s tardar dentro de los tres d&iacute;as de tener conocimiento del siniestro, deben comunicar tal hecho al asegurador, salvo fuerza mayor o impedimento justificado. Este plazo no se aplica si se se&ntilde;ala otro diferente en seguros espec&iacute;ficos de este Contrato. Los t&eacute;rminos se&ntilde;alados pueden ampliarse mediante cl&aacute;usula del contrato, pero no reducirse, seg&uacute;n Art. 1030 C&oacute;digo de Comercio
</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-size:11px;">No se puede invocar retardaci&oacute;n u omisi&oacute;n del aviso cuando el Asegurador o sus agentes, dentro del plazo indicado, intervengan en el salvamento o comprobaci&oacute;n del siniestro al tener conocimiento del mismo por cualquier medio.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">b)  Solicitar y obtener la copia legalizada del Informe T&eacute;cnico Circunstancial (Denuncia, Informe T&eacute;cnico, y/o Resoluci&oacute;n del Juzgado de Tr&aacute;nsito con determinaci&oacute;n de responsabilidades) en caso de encontrarse terceros involucrados en el accidente, que deber&aacute; ser entregado a la Compa&ntilde;&iacute;a en el menor plazo posible. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">c)	Pagar la franquicia y/o coaseguro estipulado para la atenci&oacute;n del siniestro. En caso de que el reclamo en cuesti&oacute;n sea rechazado, la Compa&ntilde;&iacute;a devolver&aacute; la suma cancelada dentro de cinco (5) d&iacute;as h&aacute;biles de comunicar el rechazo al asegurado.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">d)	Facilitar, a requerimiento del Asegurador, todas las informaciones que se tengan sobre los hechos y circunstancias del siniestro, suministrando las evidencias conducentes a la determinaci&oacute;n de la causa, identidad de las personas e intereses asegurados y cuant&iacute;a de los da&ntilde;os, as&iacute; como permitir las indagaciones pertinentes y necesarias a tal objeto.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">e)	Esperar la autorizaci&oacute;n de la Compa&ntilde;&iacute;a para iniciar la reparaci&oacute;n de cualquier da&ntilde;o, salvo en caso de que el Asegurado se hallase de viaje con el veh&iacute;culo, o en un lugar donde no existan agentes de la Compa&ntilde;&iacute;a, y siempre que tal reparaci&oacute;n fuera imprescindible para que el veh&iacute;culo pueda funcionar. En tal caso el Asegurado queda autorizado a efectuar reparaciones que no sobrepasen por ning&uacute;n motivo los QUINIENTOS 00/100($US. 500) D&Oacute;LARES AMERICANOS.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">f)	Utilizar los talleres autorizados y asignados por la Compa&ntilde;&iacute;a, salvo pacto en contrario mediante el correspondiente Anexo de Elegibilidad de Talleres.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">g)  Comunicar e informar sobre cualquier acuerdo judicial o extrajudicial, el mismo que deber&aacute; hacerse con el previo consentimiento y participaci&oacute;n de la Compa&ntilde;&iacute;a; caso contrario tal acuerdo no compromete la responsabilidad de la Compa&ntilde;&iacute;a.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">h)	Informar y remitir inmediatamente a la Compa&ntilde;&iacute;a, <strong>y a m&aacute;s tardar dentro de las 48 horas siguientes a la recepci&oacute;n de los mismos, </strong>  todos los avisos, citaciones, requerimientos, cartas, emplazamientos y, en general, todos los documentos judiciales y/o extrajudiciales que con motivo de un siniestro cubierto por el seguro le sean dirigidos.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">i)	En caso de ocurrir un siniestro cubierto por el seguro, la Compa&ntilde;&iacute;a podr&aacute;, a su propia decisi&oacute;n, tratar directamente con los perjudicados o sus derechohabientes e indemnizarles si ha lugar. De no haberse podido obtener un arreglo amistoso, la Compa&ntilde;&iacute;a podr&aacute; dirigir la defensa del Asegurado en la acci&oacute;n civil. A tales efectos el Asegurado, en cada caso, debe otorgar a la Compa&ntilde;&iacute;a los poderes necesarios a favor de la persona que la Compa&ntilde;&iacute;a designe.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">j)	A su discreci&oacute;n la Compa&ntilde;&iacute;a podr&aacute; liberarse de asumir la defensa y de toda responsabilidad posterior, si deposita ante autoridad competente el total de la suma asegurada para la cobertura de Responsabilidad Civil en esta P&oacute;liza, y pagar las costas y gastos devengados hasta ese momento, dejando al Asegurado la responsabilidad exclusiva de su propia defensa.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">15.	OBLIGACI&Oacute;N DE EVITAR LA EXTENSI&Oacute;N Y PROPAGACI&Oacute;N DEL SINIESTRO</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El asegurado est&aacute; obligado, en la medida de sus posibilidades, a evitar la extensi&oacute;n y propagaci&oacute;n del siniestro y a proporcionar los medios de salvamento de las cosas aseguradas, as&iacute; como a observar las instrucciones oportunamente dadas por el asegurador, dentro de lo materialmente razonable. Si como efecto de esas instrucciones, el asegurado incurre en gastos, &eacute;stos ser&aacute;n reembolsados por el asegurador, siempre que sean justificables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">16.	PRIMA GANADA</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso que la Compa&ntilde;&iacute;a indemnizar&aacute; un siniestro por un monto superior al 85% de la prima anual de la P&oacute;liza, &eacute;sta ser&aacute; considerada como ganada por la Compa&ntilde;&iacute;a. Consecuentemente, la anulaci&oacute;n de la p&oacute;liza por parte del asegurador no admitir&aacute; devoluci&oacute;n de prima.
Los seguros con duraci&oacute;n menor a un a&ntilde;o que resulten afectados por siniestros cuyo monto exceda el de la prima pactada, devengaran en forma autom&aacute;tica la totalidad de la prima pactada.
En cualquiera de los casos, de existir un saldo de la prima total pactada, vencida o por vencer, ser&aacute; deducida de todo siniestro indemnizable.
</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">17.	RECUPEROS</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de P&eacute;rdida Total por accidente del veh&iacute;culo, sus restos pasar&aacute;n en posesi&oacute;n o propiedad de la Compa&ntilde;&iacute;a, renunciando el Asegurado a todo derecho sobre los mismos.
El Asegurado queda obligado a remitir a la Compa&ntilde;&iacute;a toda la documentaci&oacute;n pertinente que le sea solicitada, as&iacute; como otorgar el poder respectivo, cuando corresponda, para la libre disposici&oacute;n y transferencia del veh&iacute;culo asegurado, para que la Compa&ntilde;&iacute;a proceda con la indemnizaci&oacute;n correspondiente.
</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El asegurador que paga la indemnizaci&oacute;n se subroga por este hecho las acciones y derechos del asegurado contra terceros responsables del siniestro, hasta la suma de la indemnizaci&oacute;n.
El asegurado dentro de lo posible, debe facilitar y coadyuvar la acci&oacute;n del asegurador contra terceros responsables.
</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">18.	ABANDONO</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Al ocurrir un siniestro no le est&aacute; permitido al asegurado abandonar las cosas aseguradas, est&eacute;n o no da&ntilde;adas por el siniestro, salvo pacto en contrario
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">19.	SUBROGACI&Oacute;N</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Por el pago de la indemnizaci&oacute;n, el asegurador se subroga en los derechos y acciones que el asegurado tenga en contra de terceros en raz&oacute;n del siniestro.
</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El asegurador no tiene derecho a la subrogaci&oacute;n contra personas que tengan relaci&oacute;n de parentesco o dependencia con el asegurado, de tal como que comprometan, de acuerdo con las leyes; la responsabilidad del propio asegurado. Esta disposici&oacute;n no tiene aplicaci&oacute;n si la responsabilidad proviene de dolo o mala fe.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">20.	PLAZO PARA PRONUNCIARSE </td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El asegurador debe pronunciarse sobre el derecho del asegurado o beneficiario dentro de los treinta (30) d&iacute;as de recibida la informaci&oacute;n y evidencia citadas en el Art&iacute;culo 1031 del C&oacute;digo de Comercio. Se dejar&aacute; constancia escrita de la fecha de recepci&oacute;n de la informaci&oacute;n y evidencias a efecto del c&oacute;mputo del plazo.
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El plazo de treinta (30) d&iacute;as mencionado, fenece con la aceptaci&oacute;n o rechazo del siniestro o con la solicitud del asegurador al asegurado que se complementen los requerimientos contemplados en el Art&iacute;culo 1031 y no vuelve a correr hasta que el asegurado haya cumplido con tales requerimientos.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La solicitud de complementos establecidos en el Art&iacute;culo 1031 del C&oacute;digo de Comercio, por parte del asegurador no podr&aacute; extenderse por m&aacute;s de dos veces a partir de la primera solicitud de informes y evidencias, debiendo pronunciarse dentro el plazo establecido y de manera definitiva sobre el derecho del asegurado, despu&eacute;s de la entrega por parte del asegurado del &uacute;ltimo requerimiento de informaci&oacute;n.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El silencio del asegurador, vencido el t&eacute;rmino para pronunciarse o vencidas las solicitudes de complementaci&oacute;n, importa la aceptaci&oacute;n del reclamo.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">21.	INSPECCI&Oacute;N DEL OBJETO ASEGURADO</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Los representantes de la Compa&ntilde;&iacute;a podr&aacute;n durante la vigencia del seguro y a horas razonables, inspeccionar o examinar los objetos asegurados por esta p&oacute;liza, y el asegurado debe facilitarles todos los detalles o informaciones que necesiten para poder inspeccionar el objeto asegurado.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">22.	ACREEDORES PRENDARIOS O HIPOTECARIOS</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso que este seguro se suscriba o celebre a favor de acreedores prendarios o hipotecarios, queda entendido y convenido que el monto de la indemnizaci&oacute;n a que haya lugar en virtud de la presente p&oacute;liza, se pagar&aacute; al acreedor asegurado hasta la concurrencia del inter&eacute;s que tenga en la conservaci&oacute;n del objeto materia del seguro en el momento de producirse el siniestro. El saldo, si los hubiere, se le pagar&aacute; al due&ntilde;o de las cosas afectadas por el siniestro.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">23.	PERDIDA DEL DERECHO A LA INDEMNIZACION </td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El asegurado o el beneficiario pierde el derecho a la indemnizaci&oacute;n o prestaciones del seguro, cuando:
</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>1) Provoquen dolosamente el siniestro, su extensi&oacute;n o propagaci&oacute;n;</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>2) Oculten o alteren, maliciosamente, en la verificaci&oacute;n del siniestro, los hechos y circunstancias
mencionados en los art&iacute;culos 1028 y 1031, y</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>3) Recurran a pruebas falsas con el &aacute;nimo de obtener un beneficio il&iacute;cito.<br><br>
En cualquiera de estos casos, el asegurado pierde adem&aacute;s el derecho a la devoluci&oacute;n de las primas, sin perjuicio de las sanciones penales.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td align="justify"><strong>Dolo o mala fe.</strong>  Las declaraciones falsas o reticentes hechas con dolo o mala fe hacen nulo
el contrato de seguro. En este caso el asegurado no tendr&aacute; derecho a la devoluci&oacute;n de las primas pagadas.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">24.	PRESCIPCI&Oacute;N EN SEGURO DE DA&ntilde;OS</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Las acciones emergentes de un contrato de seguro de da&ntilde;os, prescriben en dos a&ntilde;os a contar de la fecha del siniestro.<br><br>
La cobranza de la prima devengada, prescribe en el mismo plazo a contar de la fecha en que ella es exigible.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">25.	EXCEPCI&Oacute;N A LA SUBROGACI&Oacute;N. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El asegurador no tiene derecho a la subrogaci&oacute;n contra personas que tengan relaci&oacute;n de parentesco o dependencia con el asegurado, de tal como que comprometan, de acuerdo con las leyes; la responsabilidad del propio asegurado. Esta disposici&oacute;n no tiene aplicaci&oacute;n si la responsabilidad proviene de dolo o mala fe.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">26.	L&Iacute;MITE DE EDAD</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La edad l&iacute;mite del conductor del veh&iacute;culo asegurado para hacer exigibles las coberturas de la presente p&oacute;liza, no debe ser menor a 18 a&ntilde;os.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">27.	PERITAJE</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Cuando se recurra al peritaje para resolver cuestiones de apreciaci&oacute;n o evaluaci&oacute;n de hechos controvertidos, las partes podr&aacute;n nombrar un perito &uacute;nico; si no hubiere acuerdo, cada una nombrar&aacute; el suyo y un tercero dirimido.  Este &uacute;ltimo ser&aacute; designado por los dos &aacute;rbitros, de mutuo acuerdo.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">28.	CONCILIACI&Oacute;N Y ABRITRAJE</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Se acuerda y establece que no obstante lo acordado en los t&eacute;rminos, exclusiones, provisiones y condiciones contenidas en la presente P&oacute;liza, las Partes intervinientes en el presente Contrato, acuerdan que las Controversias de Hecho sobre las caracter&iacute;sticas t&eacute;cnicas del presente seguro, ser&aacute;n resueltas a trav&eacute;s del Peritaje; si por esta v&iacute;a no se llegara a un acuerdo sobre dichas controversias, &eacute;stas deber&aacute;n definirse por la v&iacute;a del Arbitraje.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Del mismo modo, las Controversias de Derecho suscitadas entre ellas sobre la naturaleza, alcance, interpretaci&oacute;n o ejecuci&oacute;n de la presente P&oacute;liza o relacionadas con ella, directa o indirectamente o de sus documentos complementarios o modificatorios, ser&aacute;n resueltas en &uacute;nica e inapelable instancia por la v&iacute;a del Arbitraje de acuerdo a lo previsto en la Ley de Conciliaci&oacute;n y Arbitraje No 708 del 25 de junio de 2015.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Las partes acuerdan que todo el proceso Arbitral, se realizar&aacute; en la C&aacute;mara de Comercio del lugar donde se emiti&oacute; la presente p&oacute;liza. En caso de no existir un Centro de Conciliaci&oacute;n y Arbitraje de la C&aacute;mara de Comercio en el Departamento donde se emiti&oacute; la P&oacute;liza, este se realizar&aacute; conforme lo establecido en el Art&iacute;culo 23 de la Ley de Conciliaci&oacute;n y Arbitraje No 708 del 25 de junio de 2015.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Asimismo, las Partes convienen que las controversias objeto del presente convenio arbitral, ser&aacute;n resueltas en Arbitraje en Derecho, por un Tribunal Arbitral compuesto por tres miembros. Acord&aacute;ndose que cada una de las Partes nombrar&aacute; un &aacute;rbitro en el plazo de diez (10) d&iacute;as y debiendo entre estos &aacute;rbitros, en el plazo de diez (10) d&iacute;as elegir el tercer &aacute;rbitro. En caso de no existir acuerdo en la designaci&oacute;n del tercer &aacute;rbitro, la Autoridad Nominadora competente nombrar&aacute; al tercer &aacute;rbitro en el plazo de diez (10) d&iacute;as, conforme lo establecido en el art&iacute;culo 62 par&aacute;grafos II y III de la Ley de Conciliaci&oacute;n y Arbitraje No 708 del 25 de junio de 2015.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La existencia de la presente cl&aacute;usula importa la renuncia de las partes a iniciar proceso judicial sobre las controversias sometidas a arbitraje.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La Autoridad de Fiscalizaci&oacute;n y Control de Pensiones y Seguros podr&aacute; fungir como instancia de conciliaci&oacute;n, para todo siniestro cuya cuant&iacute;a no supere el monto de UFV100.000.- (Cien Mil 00/100 Unidades de Fomento de Vivienda), de acuerdo con el procedimiento dispuesto en el correspondiente Reglamento, si no existiera un acuerdo, la Autoridad de Fiscalizaci&oacute;n y Control de Pensiones y Seguros, podr&aacute; conocer y resolver la controversia por resoluci&oacute;n administrativa debidamente motivada.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">ART&Iacute;CULO 3.	EXCLUSIONES APLICABLES A TODAS LAS SECCIONES</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a)	Hechos provocados intencionalmente por el Asegurado conductor u ocupantes del veh&iacute;culo, a menos que hayan sido causados para evitar otros sucesos m&aacute;s graves.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">b)  Los da&ntilde;os al veh&iacute;culo asegurado que se produzcan al ser conducido por persona que, en el momento del accidente, se halle bajo el efecto de bebidas alcoh&oacute;licas por encima de 0.50 grados de dosaje et&iacute;lico.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">c)	Los da&ntilde;os al veh&iacute;culo asegurado que se produzcan al ser conducido por persona que, en el momento del accidente, se halle bajo el efecto de drogas, alucin&oacute;genos y/o estupefacientes de cualquier naturaleza, cualquiera sea el grado o cantidad de presencia de &eacute;stas en el organismo; a efectos de la presente Cobertura se entender&aacute; tambi&eacute;n como drogas, los medicamentos contraindicados para la conducci&oacute;n normal y segura del veh&iacute;culo.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">d)	Infracciones a las disposiciones de la Ley de Cargas y contravenci&oacute;n a toda otra disposici&oacute;n de cumplimiento imperativo relativo al uso y tr&aacute;fico de veh&iacute;culos.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">f)	Los da&ntilde;os al veh&iacute;culo asegurado cuando participe en competencias o preparaci&oacute;n de las mismas, apuestas y pruebas de velocidad de cualquier naturaleza, legalmente autorizadas o no.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">g)	Actos de guerra internacional o civil, revoluci&oacute;n o insurrecci&oacute;n armada.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">h)	Conmociones civiles, huelgas da&ntilde;o malicioso, sabotaje, vandalismo y terrorismo, si estos riesgos no est&aacute;n expresamente amparados mediante la emisi&oacute;n de los correspondientes Anexos.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">i)	Los da&ntilde;os al veh&iacute;culo como consecuencia de confiscaci&oacute;n, requisa, expropiaci&oacute;n, incautaci&oacute;n, decomiso, embargo, secuestro u ocupaci&oacute;n o retenci&oacute;n del veh&iacute;culo asegurado, medidas precautorias y/o cautelares sobre el mismo, as&iacute; como los da&ntilde;os causados en su traslado; en todos los casos siempre que sea ordenado por Autoridad competente.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">j)	Da&ntilde;os al veh&iacute;culo Asegurado como consecuencia de eventos originados en la naturaleza, como ser: terremoto, temblor, erupci&oacute;n volc&aacute;nica, viento huracanados, ciclones, tornados, meteorito, inundaci&oacute;n riada, deslizamientos, granizo, nieve y todo fen&oacute;meno climatol&oacute;gico, as&iacute; como sus efectos, sean directos o indirectos; salvo pacto en contrario establecido en el correspondiente Anexo.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">l)	P&eacute;rdidas y da&ntilde;os sufridos, cuando el conductor en conocimiento del peligro se exponga a sufrir da&ntilde;os a consecuencia de crecida de r&iacute;os mazamorras y/o decida cruzar o circular por calles, avenidas, canales y r&iacute;os y/o cualquier otra v&iacute;a que se encuentra anegada, inundada y/o en condiciones que impidan la circulaci&oacute;n normal.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">m)	La p&eacute;rdida por lucro cesante o cualquier otra p&eacute;rdida o gasto que experimente el Asegurado por demora en las reparaciones y/o en la obtenci&oacute;n de repuestos o por falta de ganancia o da&ntilde;os econ&oacute;micos resultantes de la paralizaci&oacute;n o la interrupci&oacute;n parcial o total en el uso del veh&iacute;culo.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">n)	Los da&ntilde;os producidos como consecuencia de que el veh&iacute;culo asegurado se encuentre remolcando o arrastrando a otro veh&iacute;culo o viceversa.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">o)	Las fallas o rotura mec&aacute;nica, los desperfectos el&eacute;ctricos, los deterioros debido a desgastes por uso, sobrecarga, sobre esfuerzo, o por la inadecuada conservaci&oacute;n y/o mantenimiento del veh&iacute;culo, y/o la deficiente instalaci&oacute;n de partes y piezas y/o defectos de transformaci&oacute;n de sus sistemas. Por otra parte, cuando las causas indicadas produzcan accidente, los da&ntilde;os resultantes estar&aacute;n cubiertos, pero no la falla, rotura, desperfectos o deterioros preexistentes, causantes del accidente.</td>
</tr>
</table><table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">p)	Los da&ntilde;os a la carga transportada, as&iacute; como los da&ntilde;os que pueda sufrir el veh&iacute;culo por la carga transportada, estando en circulaci&oacute;n, detenido o estacionado, y los da&ntilde;os como consecuencia de cargar o descargar la misma.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">q)	Los da&ntilde;os que se produzcan mientras el veh&iacute;culo asegurado circule por v&iacute;as prohibidas o no habilitadas al tr&aacute;nsito rodado.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">r)	Los da&ntilde;os que se produzcan mientras el veh&iacute;culo asegurado circule por territorio extranjero si no est&aacute; autorizado para tal efecto por las Autoridades pertinentes, aunque posea el Anexo de Extraterritorialidad.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">s)	Los da&ntilde;os que se produzcan cuando el veh&iacute;culo asegurado no se encuentre circulando por sus propios medios (sobre cami&oacute;n, plataforma de ferrocarril u otro similar, y/o remolcado), a menos que sea objeto de transporte en pontones o trasbordador, como parte inevitable de la ruta caminera.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">t)	Los da&ntilde;os que se produzcan cuando el veh&iacute;culo asegurado est&eacute; siendo conducido por una persona menor de dieciocho (18) a&ntilde;os.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">u)	Da&ntilde;os al veh&iacute;culo asegurado por haberse puesto en marcha y/o si se siguiese conduciendo despu&eacute;s de ocurrido un accidente, sin hab&eacute;rsele efectuado antes las reparaciones necesarias con car&aacute;cter de urgencia para su buen funcionamiento.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">v)	Los da&ntilde;os causados en el veh&iacute;culo asegurado, cuando se encuentre prestando servicio p&uacute;blico en forma moment&aacute;nea o permanente, se encuentre en alquiler, &eacute;ste siendo utilizado pare fines de ense&ntilde;anza o instrucci&oacute;n a menos que espec&iacute;ficamente y en todos los casos hubiese sido declarado al momento de contratarse el seguro y se hubiese pagado el respectivo recargo de prima.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">w) 	Los da&ntilde;os causados o quemaduras producidas por artefactos el&eacute;ctricos, f&oacute;sforos, cenizas de tabaco o por combustibles o inflamables.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">x)	Los gastos provenientes de multas, permanencia en garajes y/o dep&oacute;sitos oficiales de tr&aacute;nsito o cualquier costo en que incurra el asegurado como producto de las obligaciones se&ntilde;aladas en la presente p&oacute;liza y autorizada por autoridad competente, as&iacute; como el traslado del veh&iacute;culo asegurado a los predios se&ntilde;alados en el presente numeral.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">y)	Los da&ntilde;os ocasionados por el transporte de mercanc&iacute;as azarosas, inflamables o explosivas sin la previa notificaci&oacute;n y la correspondiente autorizaci&oacute;n de la Compa&ntilde;&iacute;a y de la Autoridad Competente; la autorizaci&oacute;n de una no sustituye a la otra.</td>
</tr>
    </table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">z)	Los da&ntilde;os al veh&iacute;culo asegurado originados por la energ&iacute;a nuclear.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">aa)	Robo de piezas o partes del veh&iacute;culo asegurado, si este riesgo no est&aacute; expresamente amparado por la correspondiente Secci&oacute;n de esta P&oacute;liza.</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>

<!-- Condicionamiento general  -->
<div style="page-break-after:always;"></div>
<!--  -->

<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="center" style="font-weight: bold;">T&Iacute;TULO I: COBERTURA DE RESPONSABILIDAD CIVIL EXTRACONTRACTUAL</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CLAUSULA 1	OBJETO Y ALCANCES</td>
</tr>
</table>
<br><br>
        <table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>1.a.Responsabilidad Civil Extracontractual</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a garantiza hasta el l&iacute;mite establecido en .as Condiciones Particulares de la presente P&oacute;liza, el pago de las indemnizaciones de las cuales, de acuerdo a Ley, resulte civilmente responsable el Asegurado a consecuencia de lesiones corporales y/o da&ntilde;os materiales que se causen a terceros por el uso del veh&iacute;culo asegurado, dentro la vigencia de esta P&oacute;liza, exceptuando las exclusiones establecidas en el presente seguro.</td>
</tr>
</table>
<br><br>
        <table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>1.b.Responsabilidad Civil Consecuencial</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a garantiza, adem&aacute;s, hasta el l&iacute;mite establecido en las Condiciones Particulares de la presente P&oacute;liza, el pago de las indemnizaciones, de las cuales el Asegurado resulte legalmente obligado a pagar como consecuencia del lucro cesante que pudiera resultar a consecuencia de lesiones corporales y da&ntilde;os materiales que se causen a terceros por el uso del veh&iacute;culo asegurado, dentro de la vigencia de esta p&oacute;liza, exceptuando las exclusiones que se se&ntilde;alan en el presente seguro.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA 2	LIM&Iacute;TES DE INDEMNIZACI&Oacute;N</td>
</tr>
</table><br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Los pagos efectuados por la Compa&ntilde;&iacute;a como emergencia de la Responsabilidad Civil Extracontractual del Asegurado no podr&aacute;n exceder el l&iacute;mite se&ntilde;alado en la presente P&oacute;liza.  La Compa&ntilde;&iacute;a pagar&aacute; adem&aacute;s los gastos judiciales y asumir&aacute; la defensa legal del Asegurado contra las demandas de un tercero que pretenda resarcimiento de da&ntilde;os causados por el veh&iacute;culo asegurado.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La garant&iacute;a del seguro comprende tambi&eacute;n la prestaci&oacute;n de las fianzas judiciales que se exijan para responder a las indemnizaciones que puedan incumbir al Asegurado por Responsabilidad Civil.  La Compa&ntilde;&iacute;a prestar&aacute; dichas fianzas hasta el l&iacute;mite de la Responsabilidad Civil fijado en esta P&oacute;liza, a pesar de cualquier suma que en exceso de dicho l&iacute;mite estuviese obligado a pagar el Asegurado.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Cualquier gasto, as&iacute; como las fianzas antes mencionadas, ser&aacute;n deducidas del l&iacute;mite asegurado en la presente cobertura.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CLAUSULA 3	LIQUIDACI&Oacute;N DE SINIESTROS E INDEMNIZACIONES</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El pago de la indemnizaci&oacute;n en dinero de un siniestro deber&aacute; ser efectuado dentro de los sesenta (60) d&iacute;as computables a partir de la aceptaci&oacute;n escrita del mismo por la Compa&ntilde;&iacute;a. Sin embargo, la compa&ntilde;&iacute;a puede optar por la reposici&oacute;n, reparaci&oacute;n o reconstrucci&oacute;n del bien afectado, siempre que efectuadas &eacute;stas, el bien quede en condiciones adecuadas, conforme a estimaci&oacute;n pericial en caso de desacuerdo.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a podr&aacute; a su elecci&oacute;n, indemnizar al Asegurado o al tercero damnificado por cuenta del Asegurado, las sumas a que se halle obligado, hasta el l&iacute;mite asegurado cubierto como L&iacute;mite Combinado para Da&ntilde;os a Terceros y de Bienes de Terceros.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA 4	RESPONSABILIDAD PENAL</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Los hechos intencionales del Asegurado y responsabilidades de orden penal no estar&aacute;n en ning&uacute;n caso, a cargo de la Compa&ntilde;&iacute;a.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CLAUSULA 5. GASTOS DE DEFENSA</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En la presente Secci&oacute;n de Responsabilidad Civil, en caso de siniestro el asegurador cubre, adem&aacute;s de sus obligaciones con respecto a la responsabilidad asegurada en el contrato, y a&uacute;n en exceso de la suma estipulada y hasta el monto establecido en las Condiciones Particulares, los honorarios, gastos y costas en que se incurra con motivo de la defensa del asegurado contra las pretensiones de terceros, aunque resultaran infundadas. Si el asegurador deposita la suma asegurada y las cosas devengadas hasta ese momento, se libera de los gastos que devenguen posteriormente, dejando as&iacute; al asegurado la direcci&oacute;n exclusiva de su propia defensa.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Si la responsabilidad del asegurado excede la suma asegurada, y en tal sentido, &eacute;ste debe soportar una
parte del da&ntilde;o, el asegurador responde de los honorarios, gastos y costas en proporci&oacute;n a la cuota que le corresponda pagar en la indemnizaci&oacute;n al tercero.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA 6.   AVISO DE SINIESTRO (Art. 1091. C&oacute;digo de Comercio) </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Cualquier hecho que comprometa la eventual responsabilidad del asegurado prevista en el contrato de seguro, debe ser comunicado al asegurador en el t&eacute;rmino de tres d&iacute;as de producido, o desde la demanda del tercero. En caso de demanda judicial, el asegurado dar&aacute; noticia inmediata. La retardaci&oacute;n en el aviso motivar&aacute; que el asegurado corra con los gastos adicionales por su demora. (Art. 1096 C&oacute;digo de Comercio).
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El asegurado est&aacute; obligado a proporcionar al asegurador las informaciones y pruebas necesarias para su defensa. Si asume su defensa en forma directa contra orden expresa del asegurador corren a su cargo los honorarios, gastos y costas de la acci&oacute;n.). Cualquier hecho que comprometa la eventual responsabilidad del asegurado prevista en el contrato de seguro, debe ser comunicado al asegurador en el t&eacute;rmino de tres d&iacute;as de producido, o desde la demanda del tercero. En caso de demanda judicial, el asegurado dar&aacute; noticia inmediata. La retardaci&oacute;n en el aviso motivar&aacute; que el asegurado corra con los gastos adicionales por su demora. (Art. 1096 C&oacute;digo de Comercio).</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El asegurado est&aacute; obligado a proporcionar al asegurador las informaciones y pruebas necesarias para su defensa. Si asume su defensa en forma directa contra orden expresa del asegurador corren a su cargo los honorarios, gastos y costas de la acci&oacute;n.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">T&Iacute;TULO II SEGURO DE P&Eacute;RDIDA TOTAL POR ROBO</td>
</tr>
</table>
<br><br>

<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA 1	OBJETO Y ALCANCE</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Se entiende por p&eacute;rdida total al amparo de la presente cobertura:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El robo total del veh&iacute;&iacute;culo asegurado, perpetrado por personas desconocidas y cuando transcurridos 45 d&iacute;as del aviso que haya dado el Asegurado a la Compa&ntilde;&iacute;a, no haya sido hallado ni existan indicios sobre su paradero; en cuyo caso el robo se indemnizar&aacute; como p&eacute;rdida total hasta el porcentaje establecido en las Condiciones Particulares del valor comercial del veh&iacute;culo robado en el momento del siniestro.  En caso de establecerse un Coaseguro en la P&oacute;liza, &eacute;ste quedar&aacute; a cargo del Asegurado.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Los 45 d&iacute;as de espera mencionados en el p&aacute;rrafo anterior representa la evidencia conducente a determinar la p&eacute;rdida por robo del veh&iacute;culo asegurado, de acuerdo a lo estipulado en el C&oacute;digo de Comercio, Art.  1031</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Si la recuperaci&oacute;n del veh&iacute;culo robado tuviera lugar antes del plazo arriba se&ntilde;alado, la cobertura se ampl&iacute;a a cubrir los da&ntilde;os y/o robos parciales que hubieran ocurrido durante el tiempo que fue sustra&iacute;do, de acuerdo al porcentaje de cobertura establecido en el primer p&aacute;rrafo del presente Art&iacute;culo y conforme a las estipulaciones mencionadas en los T&iacute;tulos  IV y VI de esta P&oacute;liza, referente a las condiciones de cobertura para da&ntilde;os parciales o robos parciales.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CLAUSULA  2.	INDEMNIZACI&Oacute;N</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La Compa&ntilde;&iacute;a podr&aacute; a su elecci&oacute;n optar por:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a)	Indemnizar en dinero al Asegurado, hasta el monto del valor asegurado o del valor comercial del veh&iacute;culo en el momento del siniestro, menos el Coaseguro pactado, sin embargo;</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a.1.	En caso de que el valor asegurado del veh&iacute;culo sea inferior al valor comercial del mismo en el momento del siniestro (infraseguro), la Compa&ntilde;&iacute;a indemnizar&aacute; al Asegurado hasta el l&iacute;mite del valor declarado en la P&oacute;liza, de acuerdo a los porcentajes indicados en l&iacute;neas superiores.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a.2.	En caso de que el valor asegurado del veh&iacute;culo sea superior al valor comercial del mismo, en el momento del siniestro, la Compa&ntilde;&iacute;a indemnizar&aacute; un monto equivalente al valor comercial del veh&iacute;culo en dicho momento, aplicando los porcentajes indicados.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">b)	Reemplazar el veh&iacute;culo siniestrado por otro de caracter&iacute;sticas, uso, modelo y antig&uuml;edad similares, aplicando siempre los porcentajes estipulados en l&iacute;neas superiores.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">c)	La cobertura de la P&oacute;liza por la presente Secci&oacute;n, no cubre indemnizaci&oacute;n ni responsabilidad alguna de la Compa&ntilde;&iacute;a cuando un veh&iacute;culo robado sea recuperado con los n&uacute;meros de motor o chasis alterados o remarcados y/o sin placas de circulaci&oacute;n. La regularizaci&oacute;n de los n&uacute;meros del veh&iacute;culo, el reemplaque, el tr&aacute;mite de levantamiento de la denuncia de robo y el desmarque del sistema, ser&aacute;n de total responsabilidad del Asegurado.</td>
</tr>
</table>
<br><br>    
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  3.	LIBERACI&Oacute;N DE IMPUESTOS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de que el veh&iacute;culo asegurado hubiese sido importado bajo el r&eacute;gimen de exenciones tributarias, o liberaci&oacute;n de impuestos, la Compa&ntilde;&iacute;a de acuerdo a su elecci&oacute;n podr&aacute;:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">3.1.	Indemnizar sobre la base del valor comercial o el valor asegurado (el que sea menor) del veh&iacute;culo, solicitando al Asegurado la presentaci&oacute;n de Resoluci&oacute;n Administrativa emitida por autoridad competente, mas los documentos necesarios; que consoliden la citada exenci&oacute;n tributaria, a su favor, y que contemplen expresamente la libre transferencia del veh&iacute;culo, a favor de la Compa&ntilde;&iacute;a, sin restricci&oacute;n ni carga alguna, incluyendo el pago de los impuestos municipales anuales. 
&oacute;
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">3.2.	Indemnizar sobre la base del valor comercial o valor asegurado (el que sea menor) del veh&iacute;culo, deduciendo los impuestos y grav&aacute;menes tributarios del arancel de importaci&oacute;n que correspondan, para su libre transferencia, en este caso es obligaci&oacute;n del Asegurado la entrega de toda la documentaci&oacute;n legal necesaria para la libre transferencia del veh&iacute;culo siniestrado a favor de la Compa&ntilde;&iacute;a, sin restricci&oacute;n ni carga alguna, incluyendo el pago de impuestos municipales anuales. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CLAUSULA  4.	REMISION DE DOCUMENTOS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El Asegurado, una vez declarado el siniestro como P&eacute;rdida Total y con anterioridad a la indemnizaci&oacute;n, tiene obligaci&oacute;n  de remitir la documentaci&oacute;n exigida por la Compa&ntilde;&iacute;a que acredite el derecho propietario del veh&iacute;culo,  documento alodial del mismo, adem&aacute;s del pago de impuestos al d&iacute;a, liberaci&oacute;n de hipotecas, grav&aacute;menes, multas, las llaves del veh&iacute;culo, y todos aquellos documentos exigidos por la Compa&ntilde;&iacute;a, para que &eacute;sta proceda con la indemnizaci&oacute;n, as&iacute; como otorgar el poder respectivo, cuando corresponda, para la libre disposici&oacute;n y transferencia del veh&iacute;culo asegurado. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA 	5.	SUBROGACI&Oacute;N DE DERECHOS</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Una vez indemnizado el siniestro, la Compa&ntilde;&iacute;a se subroga todos los derechos y acciones del Asegurado contra las personas que hubiesen sido causantes del robo indemnizado por la Compa&ntilde;&iacute;a. El Asegurado se obliga a facilitar todos los medios para el ejercicio de esta subrogaci&oacute;n.</td>
</tr>
</table>

<div style="page-break-after:always;"></div>

<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;" align="text-center">TITULO III  SEGURO DE P&Eacute;RDIDA TOTAL POR ACCIDENTE</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  1.	DEFINICI&Oacute;N</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td><strong>P&eacute;rdida Total:</strong> Se entiende por p&eacute;rdida total por accidente:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a)	La destrucci&oacute;n completa del veh&iacute;culo asegurado por da&ntilde;os sufridos en un evento s&uacute;bito, imprevisto y accidental.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">b)	Cuando el costo de reparaci&oacute;n de los da&ntilde;os sufridos por el veh&iacute;culo asegurado, como consecuencia de un solo accidente, excede el setenta y cinco por ciento (75%) del valor asegurado. Dicha estimaci&oacute;n porcentual, en caso de discrepancia, ser&aacute; resuelta mediante peritaje.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En estos casos, la Compa&ntilde;&iacute;a proceder&aacute; a declarar la p&eacute;rdida total y comunicar&aacute; su decisi&oacute;n al Asegurado por escrito.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  2.	INDEMNIZACI&Oacute;N</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>1.	Una vez declarado el accidente como P&eacute;rdida Total, la Compa&ntilde;&iacute;a podr&aacute;:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a)	Indemnizar en dinero, hasta el monto del valor asegurado o del valor comercial del Veh&iacute;culo.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">I.	En caso de que el valor asegurado del veh&iacute;culo sea inferior al valor comercial del mismo en el momento del siniestro (infraseguro), la Compa&ntilde;&iacute;a indemnizar&aacute; al Asegurado hasta el l&iacute;mite del valor declarado en la P&oacute;liza.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">II. 	En caso de que el valor asegurado del veh&iacute;culo sea superior al valor comercial del mismo, en el momento del siniestro, la Compa&ntilde;&iacute;a indemnizar&aacute; un monto equivalente al valor comercial del veh&iacute;culo en dicho momento.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">b)	Reemplazar el veh&iacute;culo siniestrado por otro de caracter&iacute;sticas, uso, modelo y antig&uuml;edad similares.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  3.	LIBERACI&Oacute;N DE IMPUESTOS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de que el veh&iacute;culo asegurado hubiese sido importado bajo el r&eacute;gimen de exenciones tributarias, o liberaci&oacute;n de impuestos, la Compa&ntilde;&iacute;a de acuerdo a su elecci&oacute;n podr&aacute;:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">3.1.	Indemnizar sobre la base del valor comercial o el valor asegurado (el que sea menor) del veh&iacute;culo, solicitando al Asegurado la presentaci&oacute;n de Resoluci&oacute;n Administrativa emitida por autoridad competente, m&aacute;s los documentos necesarios; que consoliden la citada exenci&oacute;n tributaria, a su favor, y que contemplen expresamente la libre transferencia del veh&iacute;culo, a favor de la Compa&ntilde;&iacute;a, sin restricci&oacute;n ni carga alguna, incluyendo el pago de impuestos municipales anuales.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">3.2.	Indemnizar sobre la base del valor comercial o valor asegurado (el que sea menor) del veh&iacute;culo, deduciendo los impuestos y grav&aacute;menes tributarios del arancel de importaci&oacute;n que correspondan, para su libre transferencia, en este caso es obligaci&oacute;n del Asegurado la entrega de toda la documentaci&oacute;n legal necesaria para la libre transferencia del veh&iacute;culo siniestrado a favor de la compa&ntilde;&iacute;a, sin restricci&oacute;n ni carga alguna, incluyendo el pago de los impuestos municipales anuales. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  4.	REMISI&Oacute;N DE DOCUMENTOS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El Asegurado, una vez declarado el siniestro como P&eacute;rdida Total y con anterioridad a la indemnizaci&oacute;n, tiene obligaci&oacute;n  de remitir la documentaci&oacute;n exigida por la Compa&ntilde;&iacute;a que acredite el derecho propietario del veh&iacute;culo,  documento alodial del mismo, adem&aacute;s del pago de impuestos al d&iacute;a, liberaci&oacute;n de hipotecas, grav&aacute;menes, multas, las llaves del veh&iacute;culo, y todos aquellos documentos exigidos por la Compa&ntilde;&iacute;a, para que &eacute;sta proceda con la indemnizaci&oacute;n, as&iacute; como otorgar el poder respectivo, cuando corresponda, para la libre disposici&oacute;n y transferencia del veh&iacute;culo asegurado.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  5.	SUBROGACI&Oacute;N DE DERECHOS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Una vez indemnizado el siniestro, la Compa&ntilde;&iacute;a se subroga todos los derechos y acciones del Asegurado contra las personas que hubiesen sido causantes de los da&ntilde;os indemnizados por la Compa&ntilde;&iacute;a. El Asegurado se obliga a facilitar todos los medios para el ejercicio de esta subrogaci&oacute;n.</td>
</tr>
</table>
<br><br>
<div style="page-break-after:always;"></div> 
        
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold; text-align: center;" >TITULO IV  SEGURO DE DA&Ntilde;OS PROPIOS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA 1 OBJETO Y ALCANCE</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a indemnizar&aacute; los da&ntilde;os que sufra el veh&iacute;culo en territorio boliviano como consecuencia de cualquier accidente, ya sea que se encuentre el veh&iacute;culo en circulaci&oacute;n o estacionado, siempre que sea conducido por el propio Asegurado o por otra persona con autorizaci&oacute;n de &eacute;ste y, en todos los casos, legalmente habilitada para conducir veh&iacute;culos conforme a las regulaciones de las autoridades de Tr&aacute;nsito.</td>
</tr>
</table><br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Todas o parte de las coberturas otorgadas por esta P&oacute;liza podr&aacute;n extenderse para el veh&iacute;culo asegurado fuera del territorio boliviano mediante la emisi&oacute;n del correspondiente Anexo y el pago de la correspondiente sobreprima.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>CL&Aacute;USULA 2	COBERTURA Y ALCANCE</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td align="justify"><strong>Da&ntilde;os Propios</strong> - Se entender&aacute; por Da&ntilde;os Propios los da&ntilde;os accidentales al veh&iacute;culo asegurado resultantes de:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a)	Choque del veh&iacute;culo con otro veh&iacute;culo, objeto m&oacute;vil o inm&oacute;vil, persona o animal localizados fuera del veh&iacute;culo asegurado.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">b)	Embarrancamiento, vuelco o ca&iacute;da accidental.</td>
</tr>
</table><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">c)	Ca&iacute;da o impacto accidental de cualquier objeto sobre el veh&iacute;culo, as&iacute; como objetos lanzados por otros veh&iacute;culos.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">d)	Hundimiento imprevisto de calzadas, carreteras o puentes.</td>
</tr>
</table><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">e)	Traslado del veh&iacute;culo asegurado en transbordadores o en medios adecuados para el efecto, por r&iacute;os o cursos de agua que interrumpan rutas y caminos usuales. Excluye expresamente el transporte fluvial y lacustre que no sea estrictamente el transbordo entre orillas contiguas.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>f)	Incendio y/o Rayo.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">g)	Rotura de Vidrios a consecuencia de cambios de temperatura.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En todos los casos necesarios, la Compa&ntilde;&iacute;a cubrir&aacute; el costo de salvataje y/o traslado, hasta el taller de servicio que autorice la misma y sea como consecuencia de un accidente indemnizable, sujeto a un l&iacute;mite que no exceda del 5% del valor asegurado del veh&iacute;culo; la diferencia ser&aacute; cubierta por el Asegurado.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El pago que efect&uacute;e la Compa&ntilde;&iacute;a por concepto de traslado y salvataje es parte del l&iacute;mite de cobertura o valor asegurado y no es en adici&oacute;n al mismo.
</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de que el costo de salvataje y/o traslado sea superior al citado porcentaje, la Compa&ntilde;&iacute;a podr&aacute; elegir entre pagar dicho costo o declarar el siniestro como p&eacute;rdida total, si sumado el costo de salvataje y/o traslado y los gastos de reparaci&oacute;n estimados alcanzan o superan el 75% de valor asegurado para p&eacute;rdida total.
</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  3.	INDEMNIZACI&Oacute;N POR DA&Ntilde;OS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a optar&aacute; por indemnizar en dinero; reparar y/o reponer las partes y/o piezas afectadas con las existentes en el mercado local y que en todos los casos est&eacute;n cubiertos por la presente cobertura, considerando su estado al momento de ocurrir el siniestro, debiendo para tal efecto y en su caso proceder con la depreciaci&oacute;n por uso, siempre que efectuada la reparaci&oacute;n y/o la reposici&oacute;n de las partes el veh&iacute;culo asegurado quede en condiciones adecuadas de funcionamiento.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a reemplazar&aacute; la parte o pieza siniestrada &uacute;nicamente cuando el costo de reparaci&oacute;n de la misma supere el 75% del valor de reposici&oacute;n de la misma pieza por otra nueva.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de desacuerdo, a solicitud de cualquiera de las partes, se proceder&aacute; con el peritaje t&eacute;cnico.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  4.	FRANQUICIA DEDUCIBLE
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En la presente cobertura, la franquicia deducible es estipulada como suma fija sobre el valor asegurado.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La franquicia se&ntilde;alada para la presente cobertura es deducible del monto de cada uno de los siniestros que se liquiden, quedando por tanto su importe a cargo del Asegurado.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CLAUSULA  5.	SUBROGACI&Oacute;N DE DERECHOS
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Una vez pagada la indemnizaci&oacute;n, la Compa&ntilde;&iacute;a se subroga todos los derechos y acciones del Asegurado contra las personas que, por acci&oacute;n u omisi&oacute;n, hubieran sido causantes de los da&ntilde;os indemnizados por la Compa&ntilde;&iacute;a.  El Asegurado se obliga a facilitar todos los medios para el ejercicio de esta subrogaci&oacute;n.
</td>
</tr>
</table>

<div style="page-break-after:always;"></div>
        
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold; text-align:center;">T&Iacute;TULO V:  SEGURO DE CONMOCI&Oacute;N CIVIL, HUELGAS, DA&Ntilde;O MALICIOSO, SABOTAJE, VANDALISMO Y TERRORISMO
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CLAUSULA 1. ALCANCE
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El presente seguro se extiende a cubrir la p&eacute;rdida o da&ntilde;o o robo con violencia al veh&iacute;culo asegurado en esta P&oacute;liza directamente causados por:
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a)	Personas que tomen parte en motines, huelgas, cierre patronal (lock-out), disturbios laborales o conmoci&oacute;n civil, sabotaje, vandalismo y terrorismo, incluyendo fuego o explosi&oacute;n causados en forma directa por cualquiera de los motivos se&ntilde;alados en este p&aacute;rrafo, as&iacute; como los da&ntilde;os y robo con violencia provocados por cualquier persona maliciosa.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">b)	Actos de Autoridad(es) legalmente constituida(s) con el prop&oacute;sito de reprimir o de atenuar las consecuencias de una alteraci&oacute;n del orden p&uacute;blico, o con el prop&oacute;sito de prevenir tales actos. 
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Siempre que no constituya, o haya sido causada por, o que sea resultante de cualesquiera de los hechos establecidos en las Exclusiones establecidas en el presente contrato.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">DEFINICIONES 
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td><strong>Motines, Huelgas, Conmoci&oacute;n Civil, Disturbios Laborales  </strong>   significar&aacute;n:
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">1.	El acto de cualquier persona que intervenga juntamente con otras personas en cualquier alteraci&oacute;n del orden p&uacute;blico (est&eacute; o no relacionada con una huelga), 
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La acci&oacute;n de cualquier autoridad legalmente constituida, cuyo prop&oacute;sito sea el de controlar dicha alteraci&oacute;n del orden p&uacute;blico, o el intento de llevar a cabo dicho control, o disminuir las consecuencias de dichas alteraciones.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La acci&oacute;n de cualquier autoridad legalmente constituida para impedir o tratar de impedir cualquier acci&oacute;n que se describe en el punto 1. anterior, o con el prop&oacute;sito de disminuir las consecuencias del mismo. 
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td><strong>Cierre Patronal (Lock Out)</strong> significar&aacute;
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El cierre del establecimiento laboral por parte de los patrones a consecuencia de un conflicto laboral. 
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td><strong>Da&ntilde;o Malicioso y Vandalismo</strong> significar&aacute;n:
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">P&eacute;rdida de la propiedad asegurada o da&ntilde;os causados a la misma, emergentes directamente de la acci&oacute;n maliciosa de cualquier persona que no sea un dependiente del Asegurado (sea que dicho acto tenga lugar durante la alteraci&oacute;n del orden p&uacute;blico o no), siempre que no sea un acto que fuera cometido en conexi&oacute;n o constituya cualquiera de los hechos establecidos en las exclusiones detalladas m&aacute;s abajo. 
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td><strong>Sabotaje significar&aacute;</strong></td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Da&ntilde;o directo a la propiedad asegurada, causado intencionalmente por obreros o empleados del Asegurado, siempre que no sea un acto que fuera cometido en conexi&oacute;n o constituya cualquiera de los hechos establecidos en las exclusiones detalladas m&aacute;s abajo. 
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td><strong>Terrorismo</strong>  significar&aacute;:
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Se entiende por Terrorismo a cualquier acto o amenaza de violencia, o cualquier acto que signifique una lesi&oacute;n contra la vida humana, bienes muebles o inmuebles, o a una infraestructura, cometida con la intenci&oacute;n de, o con efecto de ejercer influencia sobre un gobierno, o de atemorizar al p&uacute;blico o parte del mismo, siempre que no constituya, o haya sido causada por, o que sea resultante de cualesquiera de los hechos establecidos en las Exclusiones de esta P&oacute;liza.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  3.	INDEMNIZACI&Oacute;N POR DA&Ntilde;OS</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a optar&aacute; por indemnizar en dinero; reparar y/o reponer las partes y/o piezas afectadas con las existentes en el mercado local y que en todos los casos est&eacute;n cubiertos por la presente cobertura, considerando su estado al momento de ocurrir el siniestro, debiendo para tal efecto y en su caso proceder con la depreciaci&oacute;n por uso, siempre que efectuada la reparaci&oacute;n y/o la reposici&oacute;n de las partes el veh&iacute;culo asegurado quede en condiciones adecuadas de funcionamiento.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a reemplazar&aacute; la parte o pieza siniestrada &uacute;nicamente cuando el costo de reparaci&oacute;n de la misma supere el 75% del valor de reposici&oacute;n de la misma pieza por otra nueva.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>En caso de desacuerdo, a solicitud de cualquiera de las partes, se proceder&aacute; con el peritaje t&eacute;cnico.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a no se hace responsable de la compra o reposici&oacute;n de partes y piezas del veh&iacute;culo, siendo responsabilidad del Asegurado la de obtener dichos repuestos, previo consentimiento escrito de la misma. La Compa&ntilde;&iacute;a tampoco est&aacute; obligada a adquirir partes y piezas en el mercado local cuando exista una diferencia de m&aacute;s del veinte por ciento (20%) entre el precio local y el precio de importaci&oacute;n.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de requerir importar repuestos del exterior, la Compa&ntilde;&iacute;a podr&aacute; reconocer el valor de compra declarado en la factura original, adem&aacute;s de los impuestos, los recargos de ley y el flete mar&iacute;timo y/o terrestre; quedando en su caso por cuenta del Asegurado el costo de efectuar un transporte con flete a&eacute;reo u otros transportes especiales y/o con gastos extraordinarios para obtener dichos repuestos.</td>
</tr>
</table>

<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;" align="center">TITULO VI  SEGURO DE ROBO PARCIAL</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  1.	ROBO DE PARTES Y PIEZAS. -</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Mediante la presente Secci&oacute;n, la Compa&ntilde;&iacute;a cubre el robo de partes y piezas del veh&iacute;culo asegurado, siempre que las mismas se hallen formando parte del veh&iacute;culo y fijadas al mismo o hubieran sido a&ntilde;adidas en forma posterior y declaradas en forma expresa al seguro incluyendo la rueda completa de repuesto, la llave de ruedas y la gata, y est&eacute;n verificadas en la inspecci&oacute;n de pre-riesgo.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Para la aplicaci&oacute;n de la presente cobertura, el hecho de robo debe haberse consumado, con la sustracci&oacute;n de las partes y/o piezas integrantes del veh&iacute;culo asegurado; si no se hubiera dado la anterior situaci&oacute;n y solo existe un aparente intento de robo con el da&ntilde;o consecuente al veh&iacute;culo asegurado, este ser&aacute; considerado bajo la cobertura de da&ntilde;o malicioso y la indemnizaci&oacute;n respectiva ser&aacute; efectiva siempre y cuando se cuente con la cobertura correspondiente. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA   2. LIMITES DE RESPONSABILIDAD ESPECIFICOS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La cobertura de la P&oacute;liza, por la presente Secci&oacute;n, se halla limitada a la reposici&oacute;n una sola vez por cada parte o pieza robada del veh&iacute;culo, no habiendo lugar a reposici&oacute;n de capital por este concepto, salvo pacto en contrario.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  3.	COASEGURO</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Cuando se produzca un siniestro por robo de partes y piezas, cubierto por este seguro, la indemnizaci&oacute;n estar&aacute; sujeta a descontar el Coaseguro establecido en las Condiciones Particulares.  </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA  4.	EXCLUSIONES</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a)	El robo y/o sustracci&oacute;n de las partes y piezas del veh&iacute;culo asegurado, cuando se produzcan por hechos provocados intencionalmente por el Asegurado y/o por el conductor y/o sus ocupantes.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">b)	El robo y/o sustracci&oacute;n de las partes y piezas del veh&iacute;culo como consecuencia de confiscaci&oacute;n, requisa, expropiaci&oacute;n, incautaci&oacute;n, decomiso, embargo, secuestro u ocupaci&oacute;n o retenci&oacute;n del veh&iacute;culo asegurado, medidas precautorias y/o cautelares sobre el mismo, as&iacute; como los da&ntilde;os causados en su traslado; aunque sea ordenado por Autoridad Competente.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">c)	La p&eacute;rdida por lucro cesante o cualquier gasto que experimente el Asegurado por demora en la obtenci&oacute;n de los repuestos, o por falta de ganancia o da&ntilde;os econ&oacute;micos resultantes de la paralizaci&oacute;n o la interrupci&oacute;n en el uso del veh&iacute;culo.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">d)	La p&eacute;rdida o robo de las partes y/o piezas, mientras circule por territorio extranjero si no est&aacute; autorizado para tal efecto por las autoridades pertinentes.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">e)	La p&eacute;rdida o robo de las partes y/o piezas, del veh&iacute;culo asegurado cuando no se encuentre circulando por sus propios medios, (sobre cami&oacute;n, plataforma de ferrocarril y otro similar, y/o remolcado).</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">f)	La p&eacute;rdida o robo de la placa de circulaci&oacute;n, las llaves de veh&iacute;culo, equipos de m&uacute;sica o video no fijados al veh&iacute;culo, control de alarma y cualquier otra parte que no se encuentre fijada permanentemente al veh&iacute;culo</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CL&Aacute;USULA 5.	INDEMNIZACI&Oacute;N</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a optar&aacute; por indemnizar en dinero; reparar y/o reponer las partes y/o piezas afectadas con las existentes en el mercado local y que en todos los casos est&eacute;n cubiertos por la presente cobertura, considerando su estado al momento de ocurrir el siniestro, debiendo para tal efecto y en su caso proceder con la depreciaci&oacute;n por uso, siempre que efectuada la reparaci&oacute;n y/o la reposici&oacute;n de las partes el veh&iacute;culo asegurado quede en condiciones adecuadas de funcionamiento.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de desacuerdo, a solicitud de cualquiera de las partes, se proceder&aacute; con el peritaje t&eacute;cnico.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">CLAUSULA  6.	EXCLUSIONES</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a no se hace responsable de la compra o reposici&oacute;n de partes y piezas del veh&iacute;culo, siendo responsabilidad del Asegurado la de obtener dichos repuestos, previo consentimiento escrito de la misma. La Compa&ntilde;&iacute;a tampoco est&aacute; obligada a adquirir partes y piezas en el mercado local cuando exista una diferencia de m&aacute;s del veinte por ciento (20%) entre el precio local y el precio de importaci&oacute;n.</td>
</tr>
        </table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de requerir importar repuestos del exterior, la Compa&ntilde;&iacute;a podr&aacute; reconocer el valor de compra declarado en la factura original, adem&aacute;s de los impuestos, los recargos de ley y el flete mar&iacute;timo y/o terrestre; quedando en su caso por cuenta del Asegurado el costo de efectuar un transporte con flete a&eacute;reo u otros transportes especiales y/o con gastos extraordinarios para obtener dichos repuestos.</td>
</tr>
</table>
<div style="page-break-after:always;"></div>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="text-align:center; font-weight: bold;">T&Iacute;TULO VII  SEGURO DE ACCIDENTES PERSONALES</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>A OCUPANTES DE VEH&Iacute;CULOS</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Mediante la presente Secci&oacute;n, las garant&iacute;as de la P&oacute;liza del rubro se extienden a cubrir a los ocupantes se&ntilde;alados en la P&oacute;liza principal, contra los riesgos de:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">-	MUERTE, INVALIDEZ PERMANENTE (TOTAL O PARCIAL) Y GASTOS M&Eacute;DICOS COMO CONSECUENCIA DE ACCIDENTE DEL VEH&Iacute;CULO ASEGURADO HASTA LOS LIMITES ESTABLECIDOS EN LAS CONDICIONES PARTICULARES DE LA PRESENTE P&Oacute;LIZA.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td><u>Definiciones</u></td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Se entiende por accidente, toda lesi&oacute;n corporal producida por la acci&oacute;n imprevista, fortuita, ocasional y ajena a la voluntad del Asegurado, emergente de un hecho de tr&aacute;nsito, que cause da&ntilde;o al (los) ocupante(s) del veh&iacute;culo objeto del seguro.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La presente cobertura se limita a cubrir &uacute;nicamente al chofer y a los ocupantes del veh&iacute;culo descrito en la P&oacute;liza. Si al ocurrir un accidente, el n&uacute;mero de ocupantes fuera superior al n&uacute;mero de asientos declarados, las indemnizaciones correspondientes a cada ocupante se reducir&aacute;n en la proporci&oacute;n que resulte entre el n&uacute;mero de asientos declarados y el n&uacute;mero efectivo de los ocupantes.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">a)   Muerte</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Ll&aacute;mese as&iacute; a la cobertura que la Compa&ntilde;&iacute;a ofrece para los casos de p&eacute;rdida de la vida originada por un accidente de tr&aacute;nsito.  La Compa&ntilde;&iacute;a abonar&aacute; la integridad de la suma asegurada por este riesgo a los herederos   legales de la persona fallecida, o pagar&aacute; hasta el 50% del Capital asegurado como anticipo de Gastos de sepelio y el saldo se pagar&aacute; &iacute;ntegramente a los herederos legales de la persona fallecida.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Se entender&aacute; como fallecimiento inmediato aquel que ocurra a m&aacute;s tardar dentro de los trescientos sesenta y cinco d&iacute;as (365) d&iacute;as siguientes de ocurrido el Accidente.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Si el Asegurado falleciere como consecuencia de un accidente de tr&aacute;nsito, la Compa&ntilde;&iacute;a deducir&aacute; de la suma asegurada a pagar bajo esta cobertura, el importe total que hubiere pagado al Asegurado por el mismo accidente bajo la cobertura definida en los incisos b), en caso de haber sido contratadas.  Asimismo, descontar&aacute; cualquier pago realizado como servicio funerario.</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">b)  Invalidez Permanente (Total y Parcial)</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Es la imposibilidad f&iacute;sica originada por alg&uacute;n accidente y por la que el Asegurado queda total o parcialmente incapacitado en forma permanente para ejercer sus funciones normales de trabajo, quedando entendido que dicha incapacidad ser&aacute; indemnizada de acuerdo a la siguiente escala:</td>
</tr>
</table>
<br><br>
<table width=80% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0 border="1">
<tr>
<td width=70%>Ambos ojos</td>
<td width=30%>100%</td>
</tr>
<tr>
<td>Ambos brazos</td>
<td>100%</td>
</tr>
<tr>
<td>Ambas manos</td>
<td>100%</td>
</tr>
<tr>
<td>Ambas piernas</td>
<td>100%</td>
</tr>
<tr>
<td>Ambos pies</td>
<td>100%</td>
</tr>
<tr>
<td>Un brazo y una pierna</td>
<td>100%</td>
</tr>
<tr>
<td>Una mano y un pie</td>
<td>100%</td>
</tr>
<tr>
<td>En caso de enajenaci&oacute;n mental completa e incurable que impida toda ocupaci&oacute;n del Asegurado</td>
<td>100%</td>
</tr>
</table>
<br><br>
<table width=80% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>En caso de enajenaci&oacute;n mental completa e incurable que impida toda ocupaci&oacute;n del Asegurado</td>
</tr>
</table>
<br><br><br>
<table width=80% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0 border="1">     
<tr>
<td>Sordera Completa de ambos o&iacute;dos</td>
<td>50%</td>
</tr>
<tr>
<td>Ceguera total de un ojo</td>
<td>30%</td>
</tr>
<tr>
<td>Sordera Completa de un o&iacute;do</td>
<td>10%</td>
</tr>
</table>
<br><br>
<table width=80% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0 border="1">     
<tr>
<td>Detalle</td>
<td>Derecha</td>
<td>Izquierda</td>
</tr>
<tr>
<td>P&eacute;rdida total de un brazo (arriba del codo)</td>
<td>75%</td>
<td>60%</td>
</tr>
<tr>
<td>P&eacute;rdida total de un brazo (hasta el codo)</td>
<td>70%</td>
<td>55%</td>
</tr>
<tr>
<td>P&eacute;rdida total de una mano (altura de la mu&ntilde;eca)</td>
<td>60%</td>
<td>50%</td>
</tr>
<tr>
<td>P&eacute;rdida total del dedo pulgar de la mano</td>
<td>20%</td>
<td>18%</td>
</tr>
<tr>
<td>P&eacute;rdida total del dedo &iacute;ndice de la mano</td>
<td>16%</td>
<td>14%</td>
</tr>
<tr>
<td>P&eacute;rdida total del dedo medio de la mano</td>
<td>12%</td>
<td>10%</td>
</tr>
<tr>
<td>P&eacute;rdida total del dedo anular de la mano</td>
<td>10%</td>
<td>8%</td>
</tr>
<tr>
<td>P&eacute;rdida total del dedo me&ntilde;ique de la mano</td>
<td>6%</td>
<td>4%</td>
</tr>
<tr>
<td>P&eacute;rdida total de un dedo del pie</td>
<td>3%</td>
<td>2%</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso que se compruebe que el Asegurado fuera zurdo, los porcentajes antes indicados se aplicar&aacute;n en sentido opuesto.</td>
</tr>
</table>
<br>
<table width=80% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0 border="1">
<tr>
<td>P&eacute;rdida total de una pierna (por encima de la rodilla)</td>
<td>60%</td>
</tr>
<tr>
<td>P&eacute;rdida total de una pierna (por debajo de la rodilla)</td>
<td>50%</td>
</tr>
<tr>
<td>P&eacute;rdida total de un pie</td>
<td>35%</td>
</tr>
<tr>
<td>P&eacute;rdida total de todos los dedos de un pie</td>
<td>20%</td>
</tr>
<tr>
<td>P&eacute;rdida total del dedo pulgar del pie</td>
<td>10%</td>
</tr>
</table>
<nobreak></nobreak>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Por la p&eacute;rdida total de varios dedos, el grado ser&aacute; determinado sumando los porcentajes respectivos para cada uno de los dedos perdidos.  Lo mismo se har&aacute; por la p&eacute;rdida de varios miembros, cuyo porcentaje total no podr&aacute; ser superior al 100% del Capital Asegurado.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La inutilizaci&oacute;n absoluta de un miembro cualquiera, ser&aacute; considerada igual a la p&eacute;rdida del mismo; excepto en el caso de p&eacute;rdida de las falanges de los dedos, que se considerar&aacute; como un caso de invalidez, solamente cuando se haya producido su separaci&oacute;n.  La indemnizaci&oacute;n ser&aacute; igual a la mitad de la que corresponder&iacute;a por la p&eacute;rdida del dedo entero si se tratara del pulgar, y la tercera parte por cada falange si se tratara de otros dedos.</td>
</tr>
<br><br>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de p&eacute;rdida o inutilizaci&oacute;n parcial de alguno de los miembros indicados, se aplicar&aacute; un criterio de graduaci&oacute;n proporcional, en la medida que haya disminuido la capacidad para el trabajo del Asegurado a causa del accidente sufrido.  Esta p&eacute;rdida parcial debe ser calificado por el m&eacute;dico tratante.   La Compa&ntilde;&iacute;a se reserva el derecho de hacer examinar al accidentado por un m&eacute;dico elegido por ella.</td>
</tr>
</table>
<br><br> 
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Se establece el significado de los siguientes t&eacute;rminos:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td align="justify"><strong>P&eacute;rdida Total:</strong> Se entiende por P&eacute;rdida Total referida a un miembro y &oacute;rgano, su eliminaci&oacute;n del organismo al cual pertenece, en forma definitiva y en su total integraci&oacute;n anat&oacute;mica y funcional.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td align="justify"><strong>P&eacute;rdida Parcial:</strong> Se entiende por P&eacute;rdida Parcial la eliminaci&oacute;n de parte de un &oacute;rgano o miembro al cual pertenece en forma definitiva.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td align="justify"><strong>P&eacute;rdida Funcional Total:</strong> Se entiende por P&eacute;rdida Funcional Total la ausencia definitiva y total de toda capacidad de funci&oacute;n o fisiol&oacute;gica del o de los &oacute;rganos afectados, pudiendo o no estar implicado el aspecto anat&oacute;mico del miembro comprometido.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td align="justify"><strong>Miembro:</strong> Se entiende por Miembro, cualquier extremidad articulada con el tronco, destinado a efectuar los movimientos de la locomoci&oacute;n y presi&oacute;n, tales como brazos y piernas.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">c) Gastos M&eacute;dicos</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Significan los gastos originados por el accidente de tr&aacute;nsito cubierto por el presente seguro, por concepto de tratamientos hospitalarios y/o ambulatorios para su recuperaci&oacute;n, hasta el monto establecido en las Condiciones Particulares de la P&oacute;liza.  La Compa&ntilde;&iacute;a se reserva el derecho de indemnizar mediante reembolso o pago directo de los servicios requeridos.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Ser&aacute; condici&oacute;n necesaria para proceder al reembolso, la presentaci&oacute;n por parte del Asegurado, de las boletas o facturas originales, comprobatorias de los gastos efectuados.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Si el Asegurado se hubiere beneficiado del cr&eacute;dito fiscal, el reembolso de la Compa&ntilde;&iacute;a se efectuar&aacute; descontando este monto.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td style="font-weight: bold;">Discrepancias</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de discrepancia sobre el grado de incapacidad las partes se someter&aacute;n a la aplicaci&oacute;n del "Manual de Normas de Evaluaci&oacute;n y Calificaci&oacute;n del Grado de Invalidez" vigente.</td>
</tr>
</table>

<div style="page-break-after:always;"></div>
        
<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO DE COBERTURA PARA ROBO TOTAL AL 100%</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2007</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Mediante el presente Anexo que forma parte integrante e indivisible de la presente p&oacute;liza, se acuerda y establece que la cobertura de Robo Total es ampliada para cubrir hasta el 100% del valor asegurado.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>INDEMNIZACI&Oacute;N</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La Compa&ntilde;&iacute;a podr&aacute; a su elecci&oacute;n optar por:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>a)  Indemnizar en dinero al Asegurado, hasta el monto del valor asegurado o del valor comercial del veh&iacute;culo en el momento del siniestro.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a.1.	En caso de que el valor asegurado del veh&iacute;culo sea inferior al valor comercial del mismo en el momento del siniestro (infraseguro), la Compa&ntilde;&iacute;a indemnizar&aacute; al Asegurado hasta el l&iacute;mite del valor declarado en la P&oacute;liza, de acuerdo a los porcentajes indicados en l&iacute;neas superiores.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a.2.	En caso de que el valor asegurado del veh&iacute;culo sea superior al valor comercial del mismo, en el momento del siniestro, la Compa&ntilde;&iacute;a indemnizar&aacute; un monto equivalente al valor comercial del veh&iacute;culo en dicho momento, aplicando los porcentajes indicados. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>b)	Reemplazar el veh&iacute;culo siniestrado por otro de caracter&iacute;sticas, uso, modelo y antig&uuml;edad similares, aplicando siempre los porcentajes estipulados en l&iacute;neas superiores.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">c)	La cobertura de la P&oacute;liza por la presente Secci&oacute;n, no cubre indemnizaci&oacute;n ni responsabilidad alguna de la Compa&ntilde;&iacute;a cuando un veh&iacute;culo robado sea recuperado con los n&uacute;meros de motor o chasis alterados o remarcados y/o sin placas de circulaci&oacute;n. La regularizaci&oacute;n de los n&uacute;meros del veh&iacute;culo, el reemplaque, el tr&aacute;mite de levantamiento de la denuncia de robo y el desmarque del sistema, ser&aacute;n de total responsabilidad del Asegurado. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<div style="page-break-after:always;"></div>



<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:12px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO DE GASTOS DE FUNERARIOS (SEPELIO)  PARA ACCIDENTES AUTOMOTORES</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2017</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<?php
     //definimos el area geografica del cual deseamos la fecha actual
     date_default_timezone_set("America/La_Paz");
     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","S&aacute;bado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     ?>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Se acuerda y establece mediante el presente Anexo, que el presente seguro se extiende a cubrir los Gastos de Sepelio que resulten de la muerte de las personas aseguradas como conductor y pasajeros del veh&iacute;culo asegurado, por un siniestro cubierto por el presente seguro, hasta los l&iacute;mites establecidos en las Condiciones Particulares.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Los Gastos Funerarios son un beneficio que otorga el presente seguro, a la persona que acredite haber efectuado el pago del sepelio del Asegurado, al fallecimiento de este.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Si al ocurrir un accidente, el n&uacute;mero de ocupantes fuera superior al n&uacute;mero de asientos declarados, las indemnizaciones correspondientes a cada ocupante se reducir&aacute;n en la proporci&oacute;n que resulte entre el n&uacute;mero de asientos declarados y el n&uacute;mero efectivo de los ocupantes.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>

<div style="page-break-after:always;"></div>



<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">CL&Aacute;USULA DE REHABILITACI&Oacute;N DE LA SUMA ASEGURADA</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2019</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<?php
     //definimos el area geografica del cual deseamos la fecha actual
     date_default_timezone_set("America/La_Paz");
     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","S&aacute;bado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     ?>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>A consecuencia de una p&eacute;rdida indemnizada por la Compa&ntilde;&iacute;a, la suma asegurada quedar&aacute; reducida en el mismo monto indemnizable, debiendo ser rehabilitada para reestablecer el valor original asegurado.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El Asegurado deber&aacute; pagar a la Compa&ntilde;&iacute;a la prima correspondiente, calculada a prorrata por el tiempo que falta para el vencimiento de la P&oacute;liza, contando a partir de la fecha del siniestro.  De otra forma, el valor asegurado quedar&aacute; reducido por el tiempo que quede de vigencia. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!-- FINAL  -->

<div style="page-break-after:always;"></div>


<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;"></td></tr>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO PARA EL ROBO DE PARTES Y PIEZAS A&Ntilde;ADIDAS AL VEH&Iacute;CULO</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2006</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<?php
     //definimos el area geografica del cual deseamos la fecha actual
     date_default_timezone_set("America/La_Paz");
     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","S&aacute;bado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     ?>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Queda entendido y convenido mediante el presente Anexo que, la responsabilidad de la Compa&ntilde;&iacute;a por el robo de las piezas incluidas en forma adicional al veh&iacute;culo asegurado y detalladas abajo,  se sujetan a los montos  mencionados seg&uacute;n siguiente detalle:</td>
</tr>
</table>
<br><br>
<table width=80% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0 border=1>
  <tr>
    <td width=70%>Descripci&oacute;n de pieza cubierta:</td>
    <td width=30%>Hasta un m&aacute;ximo como l&iacute;mite total anual:</td>
  </tr>
  <tr>
    <td>Llanta con aro y/o accesorios</td>
    <td></td>
  </tr>
    <tr>
    <td width=70%>Llanta de auxilio con aro y/ accesorios</td>
    <td width=30%></td>
  </tr>
  <tr>
    <td>Equipo de m&uacute;sica y/o sus accesorios como ser: amplificador, ecualizador, parlantes de todo tipo, CD, MP3, DVD, y otros (excluye el robo del control remoto) </td>
    <td></td>
  </tr>
    <tr>
    <td width=70%>Mascarilla desmontable del equipo de m&uacute;sica</td>
    <td width=30%></td>
  </tr>
  <tr>
    <td>Equipo integrado de TV-pantalla-video-DVD</td>
    <td></td>
  </tr>
    <tr>
    <td width=70%>Sistema de navegaci&oacute;n GPS</td>
    <td width=30%></td>
  </tr>
  <tr>
    <td>Juego de hal&oacute;genos y/o rompenieblas (instalado como accesorio)</td>
    <td></td>
  </tr>
    <tr>
    <td width=70%>Deflectores de viento</td>
    <td width=30%></td>
  </tr>
  <tr>
    <td>Cola de pato</td>
    <td></td>
  </tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>

<div style="page-break-after:always;"></div>
        
<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO PARA CUBRIR LA RESPONSABILIDAD CIVIL A OCUPANTES</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2021</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<?php
     //definimos el area geografica del cual deseamos la fecha actual
     date_default_timezone_set("America/La_Paz");
     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","S&aacute;bado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     ?>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Queda entendido y convenido mediante el presente Anexo que la cobertura de Responsabilidad Civil se ampl&iacute;a para cubrir a los ocupantes del veh&iacute;culo hasta el l&iacute;mite de indemnizaci&oacute;n establecido en las Condiciones Particulares, por persona y como l&iacute;mite total anual</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La presente cobertura se sujeta a las siguientes condiciones: </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>a)	Que la capacidad nominal del veh&iacute;culo en relaci&oacute;n al n&uacute;mero de pasajeros transportados no se exceda; en caso de excederse el n&uacute;mero de pasajeros, la Compa&ntilde;&iacute;a solamente ser&aacute; responsable por un monto igual a la multiplicaci&oacute;n del valor asegurado individual por el n&uacute;mero de pasajeros nominal.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>b)	Que el conductor o el propietario del veh&iacute;culo sean declarados responsables del Accidente</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>En estos casos, la Compa&ntilde;&iacute;a reembolsar&aacute; al Asegurado, en proporci&oacute;n al grado de culpabilidad establecido por las autoridades pertinentes, y hasta el l&iacute;mite anteriormente mencionado, por los da&ntilde;os personales que pudieran sufrir los pasajeros a consecuencia del accidente.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Este seguro se aplica en exceso del Seguro Obligatorio de Accidentes de Tr&aacute;nsito SOAT, se haya contratado o no el mismo. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>

<!--   Inicio      -->
<div style="page-break-after:always;"></div>
        
<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO DE AUSENCIA DE CONTROL PARA EL SEGURO DE AUTOMOTORES</td></tr>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">PARA CONDUCTORES DESIGNADOS POR EL ASEGURADO</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2010</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El presente Anexo se extiende a cubrir cualquier da&ntilde;o o p&eacute;rdida accidental cubierta por las Secciones que forman parte de la presente p&oacute;liza, mientras el veh&iacute;culo asegurado se encuentre siendo conducido por un tercero designado y aprobado por el Asegurado.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Asimismo, cubre las p&eacute;rdidas que resulten del incumplimiento de las Disposiciones del Reglamento y C&oacute;digo de Tr&aacute;nsito y que hubieran sido cometidas por terceras personas designadas por el Asegurado</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">El tercero designado debe contar con licencia de conducir v&aacute;lida, vigente y de la categor&iacute;a que corresponda al veh&iacute;culo asegurado bajo la presente P&oacute;liza.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>CONDICIONES:</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">a)	El presente seguro no cubre la reincidencia por estado de ebriedad del conductor que haya ocasionado anteriormente un siniestro amparado por esta Cl&aacute;usula.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">b)	La Compa&ntilde;&iacute;a Aseguradora, tendr&aacute; derecho de repetir contra la o las personas que resultaren responsables de cualquier accidente ocurrido al amparo de esta Cl&aacute;usula. </td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">c)	Queda expresamente excluida la negligencia comprobada del Asegurado</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Se entiende por tercero designado al personal que figura en la planilla del Asegurado, y que cuente con la autorizaci&oacute;n de la empresa para conducir veh&iacute;culos de su propiedad. </td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La responsabilidad de la Compa&ntilde;&iacute;a Aseguradora quedar&aacute; limitada a los valores asegurados mencionados en las Condiciones Particulares, incluyendo el l&iacute;mite establecido para la cobertura de Responsabilidad Civil.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>


<!--   Inicio      -->
<div style="page-break-after:always;"></div>

<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO DE DA&Ntilde;OS PROPIOS PRODUCIDOS POR LA CARGA TRANSPORTADA</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2005</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La presente P&oacute;liza se extiende a cubrir los da&ntilde;os accidentales s&uacute;bitos e imprevistos que sufra el veh&iacute;culo asegurado a causa de los da&ntilde;os directos que sean producidos por la carga transportada por el mismo.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>En cualquier siniestro se aplicar&aacute; el mismo deducible que se estipula para la cobertura de Da&ntilde;os Propios.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!-- FINAL  -->

<!--   Inicio      -->
<div style="page-break-after:always;"></div>


<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-weight:bold; text-align:center;">CL&Aacute;USULA DE INCLUSIONES Y EXCLUSIONES</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2018</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Mediante la presente Cl&aacute;usula se acuerda y establece que, el Asegurado, durante el tiempo de la vigencia del seguro, seg&uacute;n sus necesidades y requerimientos, podr&aacute; incorporar o retirar del seguro, todos o algunos de los veh&iacute;culos, que pasen a formar parte o dejen de formar parte de su propiedad.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El Asegurado deber&aacute; comunicar a la Compa&ntilde;&iacute;a la realizaci&oacute;n de tal inclusi&oacute;n y/o exclusi&oacute;n, debiendo aplicarse el respectivo c&aacute;lculo a prorrata.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!-- FINAL  -->

<!--   Inicio      -->
<div style="page-break-after:always;"></div>

<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">CL&Aacute;USULA DE COBERTURA PARA FLETE A&Eacute;REO</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2015</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El presente seguro se extiende a cubrir los gastos adicionales por concepto de flete a&eacute;reo para la importaci&oacute;n de partes o piezas, siempre y cuando dichos gastos se hayan generado en conexi&oacute;n con cualquier p&eacute;rdida de o da&ntilde;o indemnizable a los objetos asegurados bajo esta P&oacute;liza.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Deducible:   10% de los gastos extras indemnizables, m&iacute;nimo para cada evento.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!-- FINAL  -->

<!--   Inicio      -->
<div style="page-break-after:always;"></div>


<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO PARA VEH&Iacute;CULOS EN EXHIBICI&Oacute;N</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2009</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>La presente P&oacute;liza se extiende a veh&iacute;culos nuevos (no inscritos) de propiedad del Asegurado, que se encuentren en el momento del accidente siendo probados para su venta.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Se entienden que son de propiedad del Asegurado los veh&iacute;culos que se encuentran como tales en sus registros y/o aquellos que est&eacute;n bajo su responsabilidad o custodia, hasta el momento de haberse formalizado su venta.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Asimismo, se deja claramente establecido que en caso de accidente el Asegurado tiene la obligaci&oacute;n de formular la respectiva denuncia a las autoridades policiales respectivas.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>El radio de acci&oacute;n de la presente cobertura ser&aacute; dentro del &aacute;rea urbana.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!-- FINAL  -->



<div style="page-break-after:always;"></div>

<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;"></td></tr>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO PARA ACCESORIOS DE VEH&Iacute;CULOS</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2001</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Se hace constar por el presente Anexo que, se deja expresamente convenido que, la cobertura de la P&oacute;liza se extiende a cubrir los da&ntilde;os y/o robo que sufran los accesorios que a continuaci&oacute;n se detallan, de acuerdo a las coberturas establecidas en la presente P&oacute;liza:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
    <td>DESCRIPCION</td>
    <td>VALOR DECLARADO</td>
</tr>
<tr>
    <td>1.-____________________________________________</td>
    <td></td>
</tr>
<tr>
    <td>_______________________________________________</td>
    <td>___________________</td>
</tr>
<tr>
    <td>2.-____________________________________________</td>
    <td></td>
</tr>
<tr>
    <td>_______________________________________________</td>
    <td>___________________</td>
</tr>
    <tr>
    <td>3.-____________________________________________</td>
    <td></td>
</tr>
<tr>
    <td>_______________________________________________</td>
    <td>___________________</td>
</tr>
    <tr>
    <td>4.-____________________________________________</td>
    <td></td>
</tr>
<tr>
    <td>_______________________________________________</td>
    <td>___________________</td>
</tr>
    <tr>
    <td>5.-____________________________________________</td>
    <td></td>
</tr>
<tr>
    <td>_______________________________________________</td>
    <td>___________________</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!--   Inicio      -->
<div style="page-break-after:always;"></div>


<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO DE LIBRE ELEGIBILIDAD DE TALLERES</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2008</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Mediante el presente Anexo queda convenido y acordado que en caso de un eventual reclamo, cubierto bajo la presente p&oacute;liza, el Asegurado tendr&aacute; la facultad de elegir el taller para el respectivo arreglo o reparaci&oacute;n del veh&iacute;culo.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Sin embargo, la Compa&ntilde;&iacute;a no estar&aacute; obligada a pagar mayor suma que la que hubiera pagado en caso de utilizarse cualquiera de los talleres autorizados por la Compa&ntilde;&iacute;a para la reparaci&oacute;n correspondiente.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!-- FINAL  -->


<!--   Inicio      -->
<div style="page-break-after:always;"></div>



<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">CL&Aacute;USULA DE ELEGIBILIDAD DE AJUSTADORES</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2012</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Queda entendido y convenido mediante la presente Cl&aacute;usula que, en caso de un eventual siniestro, que por su magnitud, se requiera la intervenci&oacute;n de un Ajustador independiente, dicho Ajustador ser&aacute; designado por el Asegurado y la Compa&ntilde;&iacute;a Aseguradora de com&uacute;n acuerdo.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>En caso de que el Asegurado, no ejerza su derecho de nombrar al Ajustador en el t&eacute;rmino de cinco d&iacute;as siguientes a la recepci&oacute;n del aviso de la Compa&ntilde;&iacute;a, esta podr&aacute; a su elecci&oacute;n designar al Ajustador que considere conveniente para la atenci&oacute;n del reclamo.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Las personas naturales o jur&iacute;dicas, para operar como Ajustadores en seguros, deber&aacute;n ser autorizadas por la Autoridad de Fiscalizaci&oacute;n y Control de Pensiones y Seguros</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!-- FINAL  -->

<div style="page-break-after:always;"></div>

<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">CL&Aacute;USULA DE ADELANTO DEL 50% DEL SINIESTRO</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2002</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<?php
     //definimos el area geografica del cual deseamos la fecha actual
     date_default_timezone_set("America/La_Paz");
     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","S&aacute;bado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     ?>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Se deja expresa constancia, mediante esta Cl&aacute;usula, que:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Ocurrido un eventual siniestro amparado por la P&oacute;liza, y habi&eacute;ndose establecido mediante peritaje o ajuste preliminar, la cuantificaci&oacute;n aproximada de los da&ntilde;os, la Compa&ntilde;&iacute;a adelantar&aacute; al Asegurado un importe equivalente al 50% (Cincuenta por ciento) de dicho monto.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Procedimiento:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Una vez realizado el ajuste final de las p&eacute;rdidas y/o da&ntilde;os acaecidos en dicho siniestro, la Compa&ntilde;&iacute;a y el Asegurado se comprometen a proceder de la siguiente manera:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>a)	Si el adelanto otorgado por la Compa&ntilde;&iacute;a, fuera menor al monto total a indemnizar, la diferencia entre ambas cantidades ser&aacute; cancelada de acuerdo al plazo establecido en las Condiciones Generales de la P&oacute;liza.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>b)	Si el adelanto otorgado por la Compa&ntilde;&iacute;a fuera superior al monto total a indemnizar, el Asegurado deber&aacute; devolver el exceso percibido, debiendo efectuar dicha devoluci&oacute;n en un plazo m&aacute;ximo de 72 horas.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<div style="page-break-after:always;"></div>

<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;"></td></tr>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">CL&Aacute;USULA DE CIRCULACI&Oacute;N EN V&Iacute;AS NO HABILITADAS
</td></tr>
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;"> PARA EL TR&Aacute;NSITO VEHICULAR </td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2004</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<?php
     //definimos el area geografica del cual deseamos la fecha actual
     date_default_timezone_set("America/La_Paz");
     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","S&aacute;bado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     ?>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Se acuerda y establece mediante la presente Cl&aacute;usula, que el presente seguro se extiende a amparar la circulaci&oacute;n en v&iacute;as no habilitadas para el tr&aacute;nsito vehicular para (el) los veh&iacute;culos(s) asegurado(s) bajo la presente P&oacute;liza.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Queda excluida de la cobertura de la presente P&oacute;liza el tr&aacute;nsito por r&iacute;os o lechos de r&iacute;os cuando estos no se constituyan en el paso obligatorio en un camino. </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<div style="page-break-after:always;"></div>

<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;"></td></tr>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">CL&Aacute;USULA DE RESCISI&Oacute;N DEL CONTRATO A PRORRATA</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2020</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<?php
     //definimos el area geografica del cual deseamos la fecha actual
     date_default_timezone_set("America/La_Paz");
     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","S&aacute;bado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     ?>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>No obstante, lo estipulado en el Art. 1024 del C&oacute;digo de Comercio en actual vigencia, en caso de que el asegurado ejerza unilateralmente su facultad de rescindir, la Compa&ntilde;&iacute;a de Seguros, se compromete a:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>a)	Devolver a pro-rata la parte de la prima de Seguro por el tiempo no corrido y no as&iacute; en base a la Tabla de Plazos Cortos.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>b)	La rescisi&oacute;n producir&aacute; sus efectos desde que el Asegurador haya recibido oficialmente la notificaci&oacute;n respectiva.

</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Salvo que, durante la vigencia del presente seguro, la Compa&ntilde;&iacute;a haya pagado al Asegurado, siniestros por un valor de cuando menos el ochenta y cinco por ciento (85%) del monto de la prima neta anual pactada.
</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>


<div style="page-break-after:always;"></div>

<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">CL&Aacute;USULA DE AMPLIACI&Oacute;N DE AVISO DE SINIESTRO A DIEZ D&Iacute;AS</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO: 116-910551-2018 02 002 2004</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Se acuerda y establece mediante el presente Anexo, que el plazo de aviso de siniestro establecido en las Condiciones Generales, se modifica como sigue:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>"El Asegurado o beneficiario, tan pronto y a m&aacute;s tardar dentro de los 10 (diez) d&iacute;as de tener conocimiento del siniestro, deben comunicar tal hecho al asegurador, salvo fuerza mayor o impedimento justificado".</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Sin embargo, se aclara que de acuerdo a lo estipulado en el Art. 1.030 del C&oacute;digo de Comercio, la Compa&ntilde;&iacute;a puede liberarse de sus obligaciones cuando el Asegurado o Beneficiario, seg&uacute;n el caso, omitan dar el aviso dentro del plazo de tres d&iacute;as estipulados en el Art 1.028 del C&oacute;digo de Comercio, con el fin de impedir la comprobaci&oacute;n oportuna de las circunstancias del siniestro y el de la magnitud de los da&ntilde;os.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>

<!--   Inicio      -->
<div style="page-break-after:always;"></div>


<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">ANEXO DE DA&Ntilde;OS A CAUSA DE RIESGOS DE LA NATURALEZA</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2011</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Queda convenido y/o acordado por medio del presente Anexo, que la Secci&oacute;n de cobertura de Da&ntilde;os Propios de la presente p&oacute;liza, se extiende a cubrir, los da&ntilde;os a consecuencia directa de los siguientes eventos extraordinarios de la naturaleza:</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Terremoto, Temblor, Erupci&oacute;n Volc&aacute;nica, Vientos Huracanados, Ciclones, Tornados, Inundaciones, Lluvias, Riadas, Deslizamiento de tierras, Granizo y Nieve para el(los) veh&iacute;culo(s) asegurado(s) en la presente P&oacute;liza.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Todos los dem&aacute;s t&eacute;rminos, condiciones y exclusiones permanecen inalterables.</td>
</tr>
</table>
<br><br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!-- FINAL  -->

<!--   Inicio      -->
<div style="page-break-after:always;"></div>


<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:14px; font-family:Calibri; font-weight:bold; text-align:center;">P&Oacute;LIZA DE SEGURO AUTOMOTORES - INDIVIDUAL</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2023</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>ANEXO DE SUBROGACI&Oacute;N DE DERECHOS</td>
</tr>
</table>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Asegurado</td>
</tr>
<tr>
<td>No P&oacute;liza</td>
</tr>
<tr>
<td>Lugar y Fecha:</td>
</tr>
<tr>
<td>Materia del Seguro Subrogada:</td>
</tr>
<tr>
<td>Ubicaci&oacute;n del Riesgo:</td>
</tr>
<tr>
<td>Vigencia del Seguro:</td>
</tr>
<tr>
<td>Vigencia de la Subrogaci&oacute;n:</td>
</tr>
</table>
<br><br>

<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Se deja constancia por el presente anexo, que a solicitud expresa de los tomadores y/o contratantes y/o asegurados, los se&ntilde;ores ...................................... ser&aacute;n considerados como beneficiarios en su condici&oacute;n de acreedores, hasta por el importe de su acreencia sin exceder la suma asegurada de Bs............................(00/100 Bolivianos) correspondiente al valor asegurado subrogado.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En consecuencia, el Asegurado no podr&aacute; ejercitar sus derechos, sino por intermedio del Subrogatario.</td>
</tr>
</table>
<br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Compa&ntilde;&iacute;a Aseguradora solo estar&aacute; obligada a pagar al Subrogatario la suma equivalente al saldo adeudado por el Asegurado y el excedente, si lo hubiera, ser&aacute; pagado al Asegurado.</td>
</tr>
</table>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Queda entendido y convenido por la aseguradora, que ninguna modificaci&oacute;n en las condiciones de la presente p&oacute;liza sean estas generales, particulares o especiales, y que afecten los intereses de .................................................., ser&aacute;n introducidas sin el previo consentimiento escrito de ............................................ Para estos efectos la Aseguradora avisar&aacute; oportunamente y por escrito de toda modificaci&oacute;n que se solicite o exigiera al original tomador y asegurado que presente la aprobaci&oacute;n de ...............................................</td>
</tr>
</table>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Consecuentemente se considera como no inserta o no puesta cualquier modificaci&oacute;n que no haya sido expresamente autorizada.</td>
</tr>
</table>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">En caso de renovaci&oacute;n de la p&oacute;liza y de no mediar solicitud en contrario del subrogatario, la aseguradora conviene que extender&aacute; autom&aacute;ticamente el tenor de esta cl&aacute;usula en la nueva p&oacute;liza, aunque no medie solicitud en ese sentido.</td>
</tr>
</table>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">La Presente cl&aacute;usula prevalecer&aacute; sobre cualquier cl&aacute;usula, anexo, condiciones generales, particulares o especiales que se opongan a la misma aun cuando sea de fecha posterior.</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:11px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>_____________________________________</td>
<td>_____________________________________</td>
</tr>
<tr>
<td>Firma de la C&iacute;a. de Seguros</td>
<td>Firma del Asegurado</td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<br><br>
<table width=90% style="font-size:9px;" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">FIRMAS AUTORIZADAS</td>
    </tr>
</table>
<!-- FINAL  -->

<!--   Inicio      -->
<div style="page-break-after:always;"></div>



<table width=90% align=center cellspacing=0 cellpadding=0>
    <tr><td style="font-size:12px; font-weight:bold; text-align:center;">ANEXO DE EXTRATERRITORIALIDAD</td></tr>
    <tr><td style="font-size:10px; text-align:center;">C&Oacute;DIGO:   116-910551-2018 02 002 2016</td></tr>
    <tr><td style="font-size:10px; text-align:center;">Aprobado por Resoluci&oacute;n Administrativa APS/DS/No 165/2018 del 7 de Febrero de 2018</td></tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>FORMA PARTE INTEGRANTE DE LA P&Oacute;LIZA DE AUTOMOTORES - INDIVIDUAL No: <?php echo $fila['nro_poliza']; ?> </td>
</tr>
</table>
<br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>LUGAR Y FECHA: La Paz <?php echo $dias=date('d')." de ".$meses[date('n')-1]. " del ".date('Y'); ?> </td>
</tr>
</table>
<br><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Nota de Cobranza.:</td>
</tr>
</table>
<br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td align="justify">Mediante la presente cl&aacute;usula se acuerda y establece que el presente seguro se extiende a cubrir la cobertura de Extraterritorialidad, mientras el veh&iacute;culo asegurado se encuentre fuera del territorio de Bolivia.
La extensi&oacute;n de cobertura territorial comprende, dentro de los alcances y condiciones de la P&oacute;liza, todas las coberturas solicitadas y amparadas en el presente Contrato de Seguro, y hasta los l&iacute;mites se&ntilde;alados. Esta extensi&oacute;n de cobertura se aplica para los siguientes pa&iacute;ses:  Argentina, Brasil, Chile, Ecuador, Paraguay, Per&uacute; y Uruguay.
</td>
</tr>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Datos del Cliente</td>
</tr>
<tr>
<td width=15%>Asegurado:</td>
<td width=35%></td>
<td width=15%>C&oacute;digo del Cliente</td>
<td width=35%></td>
</tr>
<tr>
<td>NIT/CI:</td>
<td></td>
<td>Tel&eacute;fono:</td>
<td></td>
</tr>
<tr>
<td>Celular:</td>
<td></td>
<td>Email:</td>
<td></td>
</tr>
<tr>
<td width=15%>Direcci&oacute;n:</td>
<td width=35%></td>
</tr>
</table>
<hr width=90%>

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Datos del Veh&iacute;culo</td>
</tr>
<tr>
<td>Clase:</td>
<td></td>
<td>Marca:</td>
<td></td>
<td>A&ntilde;o:</td>
<td></td>
</tr>
<tr>
<td>Modelo:</td>
<td></td>
<td>Plazas:</td>
<td></td>
<td>Placa:</td>
<td></td>
</tr>
<tr>
<td>Uso:</td>
<td></td>
<td>Tracci&oacute;n:</td>
<td></td>
<td>Distrito:</td>
<td></td>
</tr>
<tr>
<td>N&uacute;mero de Chasis:</td>
<td></td>
<td>N&uacute;mero de Motor</td>
<td></td>
<td>SRV:</td>
<td></td>
</tr>
</table>
<hr width=90%>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>

    <tr>
        <td width=55% style="font-size:10px; font-weight:bold;">Coberturas (por veh&iacute;culo)</td>
        <td width=15% style="font-size:10px; font-weight:bold;">Coberturas (Sobre valor comercial)</td>
        <td width=15% style="font-size:10px; font-weight:bold;">Suma Asegurada</td>
        <td width=15% style="font-size:10px; font-weight:bold;">Franquicia</td>

        </tr>
</table>
<hr width=90%>

<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>BENEFICIOS ADICIONALES</strong></td>
    </tr>
</table> 

<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold;">Alcance Territorial: ESTADO PLURINACIONAL DE BOLIVIA</td>
    </tr>
</table>
<hr width=90%>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td>Vigencia de cobertura extraterritorial</td>
    </tr>
    <tr>
    <td>Desde:</td>
    </tr>
    <tr>
    <td>Hasta:</td>
    </tr>
</table> 
<hr width=90%><br>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Notaa Especiales:</td>
</tr>
</table>
<table width=90% style="font-size:10px;" align="center" cellspacing=0 cellpadding=0>
<tr>
<td>Beneficios Adicionales:</td>
</tr>
</table>
<br><br><br>
<table width=90% style="font-size:9px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
    <td style="font-weight:bold; text-align:center;">UNIBIENES SEGUROS Y REASEGUROS PATRIMONIALES S.A.</td>
    </tr>
</table>
<!-- FINAL  -->

<?php
$n_poliza = $fila['nro_poliza'];
require_once("dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->load_html(utf8_encode($htmlbuffer));
$dompdf->render();
$canvas = $dompdf->get_canvas();
$canvas->page_text(1,1, "{PAGE_NUM} de {PAGE_COUNT}", $font, 10, array(0,0,0));

$pdf = $dompdf->output();
$filename = $n_poliza.'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>