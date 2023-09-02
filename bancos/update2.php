<?php

include ('conectar.php');
$fecha=date("Y-n-d");
$hora=date("H:i:s");

$array1=explode("/",$_POST["fecha_emision"]);
$array2=explode("/",$_POST["fecha_vencimiento"]);

$fecha_emision=$array1[2]."-".$array1[1]."-".$array1[0];
$fecha_vencimiento=$array2[2]."-".$array2[1]."-".$array2[0];

/*

DROP TABLE IF EXISTS datos_banco;
create table datos_banco(
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	anio_mes varchar(8),
	tipo varchar(20),
	valor double,
	PRIMARY KEY (id)
);
*/

if($_POST["accion"]=="ingreso"){
	$query='insert into datos_banco set 
	anio_mes="'.$_POST["anio_mes"].'",
	tipo="'.$_POST["tipo"].'",
	valor="'.$_POST["importe"].'"
	';
}

if($_POST["accion"]=="modificacion"){
	$query='update datos_banco set 
	anio_mes="'.$_POST["anio_mes"].'",
	tipo="'.$_POST["tipo"].'",
	valor="'.$_POST["importe"].'"
	where id="'.$_POST["id"].'"
	';
}
//echo $query;


mysql_query($query);

if(mysql_error()){
    echo $query."<br>";
    echo mysql_error()."<br>";
}else {
	echo "Los datos se grabaron correctamente";
	}
	


?>