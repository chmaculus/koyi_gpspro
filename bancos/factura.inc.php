<select name="varios">
	echo '<option value="">Seleccione</option>';
<?php
//include_once("conectar.php");
$q='select proveedores.proveedor,
				proveedores_ctacte.numero_cheque_deposito,
				proveedores_ctacte.debito
					from proveedores,proveedores_ctacte 
						where proveedores_ctacte.id_proveedor=proveedores.id and proveedores_ctacte.debito >0 
				';

$r=mysql_query($q);
while($row=mysql_fetch_array($r)){
	echo '<option value="'.$row["0"]."|".$row["1"].'">'.$row["0"]."|".$row["1"]."|".$row["2"].'</option>';
}

?>
</select>

	