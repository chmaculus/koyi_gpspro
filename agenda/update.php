<?php
include("base.php");
include ('conectar.php');
$fecha=date("Y-n-d");
$hora=date("H:i:s");


if($_POST["accion"]=="ingreso"){
	$query='insert into gastos.agenda set 
	proveedor="'.$_POST["proveedor"].'",
	direccion="'.$_POST["direccion"].'",
	telefono="'.$_POST["telefono"].'",
	mail="'.$_POST["mail"].'",
	celular="'.$_POST["celular"].'",
	web="'.$_POST["web"].'",
	contacto="'.$_POST["contacto"].'"
	';
	}









if($_POST["accion"]=="modificacion"){
$query='insert gastos.agenda set id="'.$_POST["id"].'",
	proveedor="'.$_POST["proveedor"].'",
	direccion="'.$_POST["direccion"].'",
	telefono="'.$_POST["telefono"].'",
	mail="'.$_POST["mail"].'",
	celular="'.$_POST["celular"].'",
	web="'.$_POST["web"].'",
	contacto="'.$_POST["contacto"].'"
	where id="'.$_POST["id"].'"
	';

}


mysql_query($query);

if(mysql_error()){
    echo $query."<br>";
    echo mysql_error()."<br>";
}else {
	echo "Los datos se grabaron correctamente";
	}
	


?>