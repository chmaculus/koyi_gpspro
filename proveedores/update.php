<?php
include("cabecera2.inc.php");
include ('conectar.php');
$fecha=date("Y-n-d");
$hora=date("H:i:s");

echo "<center>";

if($_POST["accion"]=="ingreso"){
	$query='insert into gastos.proveedores set 
	proveedor="'.$_POST["proveedor"].'",
	direccion="'.$_POST["direccion"].'",
	telefono="'.$_POST["telefono"].'",
	mail="'.$_POST["mail"].'",
	celular="'.$_POST["celular"].'",
	web="'.$_POST["web"].'",
	contacto="'.$_POST["contacto"].'",
	margen="'.$_POST["margen"].'",
	exclusividad="'.$_POST["exclusividad"].'",
	compra_directa="'.$_POST["compra_directa"].'",
	condicion_pago="'.$_POST["condicion_pago"].'",
	relacion="'.$_POST["relacion"].'",
	postal="'.$_POST["postal"].'",
	fecha="'.$_POST["fecha"].'",
	hora="'.$_POST["hora"].'"';
	}





if($_POST["accion"]=="modificacion"){
$query='update proveedores set
	proveedor="'.$_POST["proveedor"].'",
	direccion="'.$_POST["direccion"].'",
	telefono="'.$_POST["telefono"].'",
	mail="'.$_POST["mail"].'",
	celular="'.$_POST["celular"].'",
	web="'.$_POST["web"].'",
	contacto="'.$_POST["contacto"].'",
	margen="'.$_POST["margen"].'",
	exclusividad="'.$_POST["exclusividad"].'",
	compra_directa="'.$_POST["compra_directa"].'",
	condicion_pago="'.$_POST["condicion_pago"].'",
	relacion="'.$_POST["relacion"].'",
	postal="'.$_POST["postal"].'",
	fecha="'.$_POST["fecha"].'",
	hora="'.$_POST["hora"].'"
		where id="'.$_POST["id_proveedor"].'"
	';
//echo "<br>q: ".$query."<br>";

}


mysql_query($query);

if(mysql_error()){
    echo $query."<br>";
    echo mysql_error()."<br>";
}else {
	echo "Los datos se grabaron correctamente";
	}
	


?>