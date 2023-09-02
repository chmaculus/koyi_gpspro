<?php

include ('conectar.php');


if($_POST["accion"]=="ingreso"){
	$query='insert into gastos.valores set 
	valor="'.$_POST["valor"].'",
	detalle="'.$_POST["detalle"].'", 
	sucursal="'.$_POST["sucursal"].'",
	anio_mes="'.$_POST["anio_mes"].'" 
	';
}

if($_POST["accion"]=="modificacion"){
	$query='update gastos.valores set 
	valor="'.$_POST["valor"].'",
	detalle="'.$_POST["detalle"].'", 
	sucursal="'.$_POST["sucursal"].'",
	anio_mes="'.$_POST["anio_mes"].'" 
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