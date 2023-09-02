<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" />
  <title>SISTEMA GASTOS</title>
</head>
<body bgcolor="#C4C4C4"></body>
<?php

include ('conectar.php');
$fecha=date("Y-n-d");
$hora=date("H:i:s");

$query='insert into gastos set 
categoria="'.$_POST["categoria"].'",
fecha="'.$_POST["fecha"].'",
hora="'.$_POST["hora"].'",
detalle="'.$_POST["detalle"].'",
monto="'.$_POST["importe"].'"';


echo "Los datos se grabaron correctamente!";

mysql_query($query);

if(mysql_error()){
    echo $query."<br>";
    echo mysql_error()."<br>";
}


?>