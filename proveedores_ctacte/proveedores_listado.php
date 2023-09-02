<?php
include("cabecera2.inc.php");
?>
<center>



<?php

$fecha=date("Y-n");


echo '<center>';
/*
<form action="listado.php" method="post">

Desde<input type="text" name="fecha_desde" value="<?php if($_POST["fecha_desde"]){ echo $_POST["fecha_desde"];}else{ echo $fecha."-01";} ?>"><br>
Hasta<input type="text" name="fecha_hasta" value="<?php if($_POST["fecha_hasta"]){ echo $_POST["fecha_hasta"];}else{ echo $fecha."-31";} ?>"><br>


<input type="submit" name="aceptar" value="aceptar">
</form>
*/

include("conectar.php");
$query="select * from proveedores order by proveedor limit 0,1000";
$result=mysql_query($query);
if(mysql_error()){echo mysql_error()."<br>".$query."<br>";}

echo '<table class="t1">';
echo "<tr>";
    echo "<th>id</th>";
    echo "<th>comprcbantes</th>";
    echo "<th>CtaCte</th>";
    echo "<th>proveedor</th>";
    echo "<th>direccion</th>";
    echo "<th>telefono</th>";
    echo "<th>mail</th>";
    echo "<th>celular</th>";
    echo "<th>web</th>";
    echo "<th>contacto</th>";
    echo "<th>postal</th>";
    echo "<th>Categoria</th>";
    echo "</tr>";

while($row=mysql_fetch_array($result)){
	$categ=($row["relacion"] + $row["condicion_pago"] + $row["compra_directa"] + $row["margen"] + $row["exclusividad"]) / 5;
	if($categ >=0 AND $categ <9){
		$categ2=1;
	} 
	if($categ >9 AND $categ <13){
		$categ2=2;
	} 
	if($categ >14 AND $categ <18){
		$categ2=3;
	} 
	if($categ >19 AND $categ <23){
		$categ2=4;
	} 
	if($categ >24 AND $categ <=26){
		$categ2=5;
	} 
    echo "<tr>";
    echo '<td>'.$row["id"].'</td>';
    echo '<td><a href="ctacte_ingreso.php?id_proveedor='.$row["id"].'">ingreso</a></td>';
    echo '<td><a href="ctacte_listado.php?id_proveedor='.$row["id"].'">listado</a></td>';
    echo '<td>'.$row["proveedor"].'</td>';
    echo '<td>'.$row["direccion"].'</td>';
    echo '<td>'.$row["telefono"].'</td>';
    echo '<td>'.$row["mail"].'</td>';
    echo '<td>'.$row["celular"].'</td>';
    echo '<td>'.$row["web"].'</td>';
    echo '<td>'.$row["contacto"].'</td>';
    echo '<td>'.$row["postal"].'</td>';
	 echo '<td>'.$categ2.'</td>';   
    echo "</tr>".chr(10);
}







?>
</center>