<select name="id_banco">
	echo '<option value="">Seleccione</option>';
<?php
//include_once("conectar.php");
$q='select * from banco where id_proveedor="'.$id_proveedor.'"';

$r=mysql_query($q);
while($row=mysql_fetch_array($r)){
	echo '<option value="'.$row["id"].'">'.$row["fecha_vencimiento"]." Numero:".$row["numero"]." $".$row["importe"]." ".$row["proveedor"].'</option>';
}

?>
</select>

	