<?php

function trae_proveedor($id_proveedor){
	$q='select * from proveedores where id="'.$id_proveedor.'"';
	$id_proveedor=$_GET["id_proveedor"];
	$res=mysql_query($q);
	if(mysql_error()){
		echo mysql_error();
	}
	$array_proveedor=mysql_fetch_array($res);
	return $array_proveedor;
	
	
}
?>