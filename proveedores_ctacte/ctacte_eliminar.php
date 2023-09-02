<?php
include("cabecera2.inc.php");
include("conectar.php");
?>
<center>
<?php


//echo "get: ".$_GET["id_proveedor"]."<br>";

if($_GET["id_ctacte"]){
	$q='select * from proveedores_ctacte where id="'.$_GET["id_ctacte"].'"';
//	echo $q;
	$res=mysql_query($q);
	$array_ctacte=mysql_fetch_array($res);
}


if(!$_POST["eliminar"]){
	echo '<table class="t1">';

	echo "<tr>";
	echo '<td>tipo</td><td>'.$array_ctacte["tipo"].'</td>'; 
	echo "</tr>";


	echo "<tr>";
	echo '<td>Numero</td><td>'.$array_ctacte["numero_cheque_deposito"].'</td>'; 
	echo "</tr>";


	echo "<tr>";
	echo '<td>Fecha pago</td><td>'.$array_ctacte["fecha_pago"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>Fecha facturacion</td><td>'.$array_ctacte["fecha_facturacion"].'</td>'; 
	echo "</tr>";

	echo "<tr>";
	echo '<td>Fecha recepcion</td><td>'.$array_ctacte["fecha_recepcion"].'</td>'; 
	echo "</tr>";


	echo "<tr>";
	echo '<td>debito</td><td>'.$array_ctacte["debito"].'</td>'; 
	echo "</tr>";


	echo "<tr>";
	echo '<td>credito</td><td>'.$array_ctacte["credito"].'</td>'; 
	echo "</tr>";


	echo '</table>';
	
	echo '<form action="ctacte_eliminar.php" method="post">';
	echo '<input type="submit" name="ACEPTAR" value="ACEPTAR">';
	echo '<input type="hidden" name="eliminar" value="eliminar">';
	echo '<input type="hidden" name="id_ctacte" value="'.$_GET["id_ctacte"].'">';
	
	echo '</form>';
}




if($_POST["eliminar"]){
	$query='delete from proveedores_ctacte where id='.$_POST["id_ctacte"];

	mysql_query($query);
	if(!mysql_error()){
		echo "Los datos se han eliminado correctamente!";
	}else{
		echo mysql_error();
	}
	exit;
}

?>
