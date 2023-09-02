<?php
include("cabecera2.inc.php");
?>
<center>

<?php
include("base.php");
include("conectar.php");

$query='select * from banco where id='.$_GET["id"];
$result=mysql_query($query);

$array=mysql_fetch_array($result);








$fecha=date("Y-n-d");
$hora=date("H:i:s");
?>
<center>
<form action="update.php" method="post">

<table class="t1" > 
<tr>
<td>cuenta</td>

<td>
include("categoria.inc.php");
</td>

<tr>
<td>Numero</td>
<td><input type="text" name="numero" value="<?php echo $array["numero"];?>"></td>
</tr>

<tr>
<td>Fecha emision</td>
<td><input type="text" name="fecha_emision" value="<?php echo $array["fecha_emision"];?>"></td>
</tr>

<tr>
<td>Fecha vencimiento</td>
<td><input type="text" name="fecha_vencimiento" value="<?php echo $array["fecha_vencimiento"];?>"></td>
</tr>

<tr>
<td>Importe</td>
<td><input type="text" name="importe" value="<?php echo $array["importe"];?>"></td>
</tr>

<tr>
<td>Detalle</td>
<td><input type="text" name="detalle" value="<?php echo $array["detalle"];?>"></td>
</tr>

<tr>
<td>Cobrado s/n</td>
<td><input type="checkbox" name="cobrado" value="S"></td>
</tr>

</tr>

</table>

<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
<input type="hidden" name="accion" value="modificacion">

<input type="submit" name="Aceptar" value="Aceptar">

</form>






