<?php
include("cabecera2.inc.php");
include("conectar.php");
?>
<center>


<?php

//<body bgcolor="#424043"></body>

//$fecha=date("Y-n-d");
$fecha2=date("d/n/Y");
$fecha=date("d/n/Y");
$hora=date("H:i:s");
?>

<font2>INGRESO DE CHEQUES<font2>
<form action="update.php" method="post">

<table class="t1">
<tr>
<td>cuenta</td>

<?php
include("select_cuenta.inc.php");
?>
<tr>
<td>Proveedor</td>
<td>
<?php
include("proveedores.inc.php");
?>
</td>
</tr>

<td>Numero</td>
<td><input type="text" name="numero"></td>
</tr>

<tr>
<td>Fecha emision</td>
<td><input type="text" name="fecha_emision"  value="<?php echo $fecha2; ?>" ></td>
</tr>

<tr>
<td>Fecha vencimiento</td>
<td><input type="text" name="fecha_vencimiento" value="<?php echo $fecha2; ?>" ></td>
</tr>

<tr>
<td>Importe</td>
<td><input type="text" name="importe"></td>
</tr>

<tr>
<td>Detalle</td>
<td><input type="text" name="detalle"></td>
</tr>

<tr>
<td>Cobrado s/n</td>
<td><input type="checkbox" name="cobrado" value="si"></td>
</tr>

</tr>

</table>


<input type="hidden" name="accion" value="ingreso">
<input type="submit" name="Aceptar" value="Aceptar">

</form>






