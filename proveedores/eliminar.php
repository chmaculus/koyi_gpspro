<?php
include("cabecera2.inc.php");
include("conectar.php");
?>
<center>
<?php


//echo "get: ".$_GET["id_proveedor"]."<br>";

if($_GET["id_proveedor"]){
	$q='select * from proveedores where id="'.$_GET["id_proveedor"].'"';
//	echo $q;
	$res=mysql_query($q);
	$array_proveedor=mysql_fetch_array($res);
}


if(!$_POST["eliminar"]){
	echo '<table class="t1">';

	echo "<tr>";
	echo '<td>Proveedor</td><td>'.$array_proveedor["proveedor"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>direccion</td><td>'.$array_proveedor["direccion"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>telefono</td><td>'.$array_proveedor["telefono"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>mail</td><td>'.$array_proveedor["mail"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>celular</td><td>'.$array_proveedor["celular"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>web</td><td>'.$array_proveedor["web"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>margen</td><td>'.$array_proveedor["margen"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>exclusividad</td><td>'.$array_proveedor["exclusividad"].'</td>'; 
	echo "</tr>";


	echo "<tr>";
	echo '<td>compra_directa</td><td>'.$array_proveedor["compra_directa"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>condicion_pago</td><td>'.$array_proveedor["condicion_pago"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>relacion</td><td>'.$array_proveedor["relacion"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>postal</td><td>'.$array_proveedor["postal"].'</td>'; 
	echo "</tr>";

	echo '</table>';
	
	echo '<form action="eliminar.php" method="post">';
	echo '<input type="submit" name="ACEPTAR" value="ACEPTAR">';
	echo '<input type="hidden" name="eliminar" value="eliminar">';
	echo '<input type="hidden" name="id_proveedor" value="'.$_GET["id_proveedor"].'">';
	
	echo '</form>';
}




if($_POST["eliminar"]){
	$query='delete from proveedores where id='.$_POST["id_proveedor"];

	mysql_query($query);
	if(!mysql_error()){
		echo "Los datos se han eliminado correctamente!";
	}else{
		echo mysql_error();
	}
	exit;
}

?>
