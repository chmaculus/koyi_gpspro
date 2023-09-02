<?php
include("cabecera2.inc.php");
?>
<center>
<?php
$fecha=date("Y-n-d");
$hora=date("H:i:s");
?>
<center>
<form action="update.php" method="post">

<table class="t1">
<tr>
<td>
<?php
include("categoria.inc.php");
?>
</td>
</tr>

<tr>
<td>Fecha</td>
<td><input type="text" name="fecha" value="<?php echo $fecha;?>"></td>
</tr>

<tr>
<td>Detalle</td>
<td><input type="text" name="detalle"></td>
</tr>

<tr>
<td>Importe</td>
<td><input type="text" name="importe"></td>
</tr>

</table>


<input type="submit" name="Aceptar" value="Aceptar">

</form>