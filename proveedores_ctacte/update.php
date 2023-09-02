<?php
include("base.php");
include ('conectar.php');
$fecha=date("Y-n-d");
$hora=date("H:i:s");

$array1=explode("/",$_POST["fecha_emision"]);
$array2=explode("/",$_POST["fecha_vencimiento"]);

$fecha_emision=$array1[2]."-".$array1[1]."-".$array1[0];
$fecha_vencimiento=$array2[2]."-".$array2[1]."-".$array2[0];


if($_POST["accion"]=="ingreso"){
	$query='insert into banco set 
	numero="'.$_POST["numero"].'",
	cuenta="'.$_POST["cuenta"].'",
	fecha_emision="'.$fecha_emision.'",
	fecha_vencimiento="'.$fecha_vencimiento.'",
	importe="'.$_POST["importe"].'",
	detalle="'.$_POST["detalle"].'",
	cobrado="N"
	';
}

if($_POST["accion"]=="modificacion"){
	$query='update banco set 
	numero="'.$_POST["numero"].'",
	cuenta="'.$_POST["cuenta"].'",
	fecha_emision="'.$fecha_emision.'",
	fecha_vencimiento="'.$fecha_vencimiento.'",
	importe="'.$_POST["importe"].'",
	detalle="'.$_POST["detalle"].'",
	cobrado="N" where id="'.$_POST["id"].'"
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