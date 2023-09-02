<?php
include("cabecera2.inc.php");

include("conectar.php");

if($_GET["id_proveedor"]){
	$q='select * from proveedores where id="'.$_GET["id_proveedor"].'"';
	$id_proveedor=$_GET["id_proveedor"];
	$res=mysql_query($q);
	if(mysql_error()){
		echo mysql_error();
	}
	$array_proveedor=mysql_fetch_array($res);
}

?>
<center>

<?php
echo "Proveedor: ".$array_proveedor["proveedor"]."<br>";
?>


<form action="ctacte_update.php" method="post">

<table class="t1">



<tr>
<td>Tipo</td><td>
<select name="tipo">
<option value="">Seleccione</option>
<option value="fc">FC</option>
<option value="re">RE</option>
<option value="nc">NC</option>
<option value="cheque">Cheque</option>
<option value="deposito">Deposito</option>
<option value="efectivo">Efectivo</option>
<option value="tarjeta">Tarjeta</option>
</select>
</td>

</tr>

<tr>
<td>Cheque</td>
<td>
<?php
include("cheques.inc.php");
?>
</td>
</tr>

<tr>
<td>Fecha de pago</td><td><input type="text" name="fecha_pago"></td>
</tr>

<tr>
<td>Fecha de facturacion</td><td><input type="text" name="fecha_facturacion"></td>
</tr>

<tr>
<td>Fecha de recepcion</td><td><input type="text" name="fecha_recepcion"></td>
</tr>


<tr>
<td>Debito</td><td><input type="text" name="debito"></td>
</tr>

<tr>
<td>Credito</td><td><input type="text" name="credito"></td>
</tr>



</table>
<input type="hidden" name="accion" value="ingreso">
<input type="hidden" name="id" value="<?php echo $_GET["id_proveedor"]; ?>">
<input type="submit" name="ACEPTAR" value="ACEPTAR">
</form>