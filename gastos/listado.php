<?php
include("cabecera2.inc.php");
?>
<center>


<form action="<?php echo $_SERVFER["SCRIPT_NAME"]; ?>" method="post">
Categoria

<?php
include("categoria.inc.php");
?>
<br>
Desde<input type="text" name="fechadesde" value="<?php echo $fecha=date("1-n-d");?>"><br>
Hasta<input type="text" name="fechahasta" value="<?php echo $fecha=date("31-n-d");?>"><br>
<input type="submit" name="Aceptar" value="Aceptar">
</form>
<?php
if(!$_POST["categoria"]){
	exit;
}
include("conectar.php");
$query='select * from gastos where categoria="'.$_POST["categoria"].'" and fecha>="'.$_POST["fechadesde"].'" and fecha<="'.$_POST["fechahasta"].'" limit 0,100';
$result=mysql_query($query)or die(mysql_error());
$rows=mysql_num_rows($result);
echo "cantidad de registros: ".$rows;
?>


<table class="t1">
<tr>
    <th>id</th>
    <th>categoria</th>
    <th>fecha</th>
    <th>hora</th>
    <th>detalle</th>
    <th>monto</th>
</tr>

<?php
while($row=mysql_fetch_array($result)){
    echo "<tr>";
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["categoria"].'</td>';
    echo '<td>'.$row["fecha"].'</td>';
    echo '<td>'.$row["hora"].'</td>';
    echo '<td>'.$row["detalle"].'</td>';
    echo '<td>'.$row["monto"].'</td>';
    echo "</tr>".chr(13);
}
echo "</table>";
$q='select sum(monto) from gastos where categoria="'.$_POST["categoria"].'" and fecha>="'.$_POST["fechadesde"].'" and fecha<="'.$_POST["fechahasta"].'"';
$r=mysql_query($q);
$total=mysql_result($r,0,0);
echo "Total: ".$total;

?>
</center>