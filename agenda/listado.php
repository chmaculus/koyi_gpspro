<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" />
  <title>AGENDA</title>
</head>
<body bgcolor="#ffffff"></body>

<center>




<?php
include("base.php");
$fecha=date("Y-n");
?>
<center>

<?php

include("conectar.php");
$query="select * from agenda order by proveedor limit 0,1000";
$result=mysql_query($query);
if(mysql_error()){echo mysql_error()."<br>".$query."<br>";}

echo '<table class="t1">';
echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Contacto</th>";
    echo "<th>direccion</th>";
    echo "<th>telefono</th>";
    echo "<th>mail</th>";
    echo "<th>celular</th>";
    echo "<th>web</th>";
    echo "<th>contacto</th>";
/*
    echo "<th>margen</th>";
    echo "<th>exclusividad</th>";
    echo "<th>compra_directa</th>";
    echo "<th>condicion_pago</th>";
    echo "<th>relacion</th>";
*/    
 
echo "</tr>";

while($row=mysql_fetch_array($result)){


    echo "<tr>";
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["proveedor"].'</td>';
    echo '<td>'.$row["direccion"].'</td>';
    echo '<td>'.$row["telefono"].'</td>';
    echo '<td>'.$row["mail"].'</td>';
    echo '<td>'.$row["celular"].'</td>';
    echo '<td>'.$row["web"].'</td>';
    echo '<td>'.$row["contacto"].'</td>';
    echo "</tr>".chr(10);
}





?>
</center>