mediumint(8) unsignedvarchar(6)varchar(10)varchar(15)varchar(2)datedatevarchar(6)double(14,2)<?php
include("inf_contable_base.php");
?>

<form method="post" action="inf_contable_update.php" name="form_inf_contable">

<center>
<table class="t1" border="1">
	<tr>
		<th>id</th>
		<td><input type="text" name="id" id="id" value="" size="10"></td>
	</tr>
	<tr>
		<th>tipo1</th>
		<td><input type="text" name="tipo1" id="tipo1" value="" size="10"></td>
	</tr>
	<tr>
		<th>sociedad</th>
		<td><input type="text" name="sociedad" id="sociedad" value="" size="10"></td>
	</tr>
	<tr>
		<th>proveedor</th>
		<td><input type="text" name="proveedor" id="proveedor" value="" size="10"></td>
	</tr>
	<tr>
		<th>tipo2</th>
		<td><input type="text" name="tipo2" id="tipo2" value="" size="10"></td>
	</tr>
	<tr>
		<th>fecha</th>
		<td><input type="text" name="fecha" id="fecha" value="" size="10"></td>
	</tr>
	<tr>
		<th>fecha_sistema</th>
		<td><input type="text" name="fecha_sistema" id="fecha_sistema" value="" size="10"></td>
	</tr>
	<tr>
		<th>tipo3</th>
		<td><input type="text" name="tipo3" id="tipo3" value="" size="10"></td>
	</tr>
	<tr>
		<th>importe</th>
		<td><input type="text" name="importe" id="importe" value="" size="10"></td>
	</tr>
</table>
<input type="hidden" name="accion" value="ingreso" />
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>
</center>