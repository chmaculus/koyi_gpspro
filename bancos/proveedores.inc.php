<select name="id_proveedor">
	echo '<option value="">Seleccione</option>';
<?php



//include_once("conectar.php");
$q='select * from proveedores order by proveedor ';

$r=mysql_query($q);
while($row=mysql_fetch_array($r)){
	echo '<option value="'.$row["id"].'">'.$row["proveedor"].'</option>';
	if($array["id_proveedor"]==$row["id"]){
		echo '<option selected value="'.$row["id"].'">'.$row["proveedor"].'</option>';
	}
}

?>
</select>

	