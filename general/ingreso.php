<?php
$fecha=date("Y-n-d");
?>



<table>
<form action="update.php" method="post">
<tr>
<td>valor</td><td><input type="text" name="valor"></td>
</tr>


<tr>
<td>detalle</td><td><input type="text" name="detalle"></td>
</tr>


<tr>
<td>sucursal</td><td><input type="text" name="sucursal"></td>
</tr>


<tr>
<td>fecha</td><td><input type="text" name="anio_mes" value="<?php echo $fecha; ?>"></td>
</tr>

</table>

<input type="submit" name="ACEPTAR" value="ACEPTAR">
<input type="hidden" name="accion" value="ingreso">
</form>
