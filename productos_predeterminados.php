<?php
$con = new mysqli('localhost','root','','unibienes');
$con->query("SET NAMES 'utf8'");
$intermediario = $_POST['intermediario'];
echo $uso = $_POST['uso'];

$ben = $con ->query("SELECT * FROM intermediarios WHERE intermediario='$intermediario'");
$benef = $ben -> fetch_assoc();
echo $inter = $benef['tipo'];

?>

<?php
if(isset($_POST['enviar'])){
?>
<hr width=90%>
<?php
    if($tipo=='BROKER'){
    $beneficios = $con ->query("SELECT * FROM ben_adic_au WHERE intermediario='$intermediario'");
    }elseif($tipo=='AGENTE'){
    $beneficios = $con ->query("SELECT * FROM ben_adic_au WHERE intermediario='AGENTE' and uso='$uso'");
    }else{
    $beneficios = $con ->query("SELECT * FROM ben_adic_au WHERE intermediario='CARTERA DIRECTA'");
    }
    ?>
<table width=90% style="font-size:8px;" align="center" cellspacing=0 cellpadding=0>
    <tr>
        <td><strong>BENEFICIOS ADICIONALES</strong></td>
    </tr>
    <?php
	while ($bene = $beneficios -> fetch_assoc()) {
    ?>   
        <tr>
        <td border="1" width=60% style="font-size:7px;"><?php echo $bene['nombre'];?></td>
        <td border="1" width=10% style="font-size:7px;"><strong><?php echo $bene['cubre'];?></strong></td>
        </tr>
    <?php } ?>
</table>
<hr width=90%>
<?php
echo $intermediario;
}
?>


<br><br>
<form method="post">
  <div class="form-group">
    <label for="exampleFormControlSelect2">Intermediario</label>
    <select class="form-control" id="intermediario" name="intermediario">
      <option value="CORRESUR S.R.L. Corredores y Asesores de Seguros.">CORRESUR S.R.L. Corredores y Asesores de Seguros.</option>
      <option value="Estrategica S.R.L. Corredores y Asesores de Seguros y Riesgos.">Estrategica S.R.L. Corredores y Asesores de Seguros y Riesgos.</option>
      <option value="CARTERA DIRECTA">CARTERA DIRECTA</option>
      <option value="MARIELA ZABALA SALVATIERRA">MARIELA ZABALA SALVATIERRA</option>
    </select>
  </div>
 <div class="form-group">
    <label for="exampleFormControlSelect2">Uso</label>
    <select class="form-control" id="uso" name="uso">
      <option value="PARTICULAR">PARTICULAR</option>
      <option value="PUBLICO">PUBLICO</option>
    </select>
  </div>
    <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
</form>