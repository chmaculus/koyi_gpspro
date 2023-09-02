<?php
include("cabecera2.inc.php");
?>
<center>



<?php

include("../includes/connect.php");

$fecha=date("Y-n");
?><body>

<form action="listado2.php" method="post">

Desde<input type="text" name="fecha_desde" value="<?php if($_POST["fecha_desde"]){ echo $_POST["fecha_desde"];}else{ echo $fecha."-01";} ?>"><br>
Hasta<input type="text" name="fecha_hasta" value="<?php if($_POST["fecha_hasta"]){ echo $_POST["fecha_hasta"];}else{ echo $fecha."-31";} ?>"><br>

<input type="submit" name="aceptar" value="aceptar">
</form>

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


if(!$_POST["fecha_desde"]){
	exit;
}

$query='select * from gastos where fecha>="'.$_POST["fecha_desde"].'" and fecha<="'.$_POST["fecha_hasta"].'" order by fecha';
$result=mysql_query($query)or die(mysql_error());
$rows=mysql_num_rows($result);
echo "cantidad de registros: ".$rows."<br>";


while($row=mysql_fetch_array($result)){
    echo "<tr>";
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["categoria"].'</td>';
    echo '<td>'.$row["fecha"].'</td>';
    echo '<td>'.$row["hora"].'</td>';
    echo '<td>'.$row["detalle"].'</td>';
    echo '<td>'.$row["monto"].'</td>';
    echo '<td><a class="button-link" href="modificar.php?id='.$row["id"].'">modificar</a></td>';
    echo '<td><a class="button-link" href="eliminar.php?id='.$row["id"].'">eliminar</a></td>';    
    echo "</tr>".chr(13);
}
$q='select sum(monto) from gastos  where fecha>="'.$_POST["fecha_desde"].'" and fecha<="'.$_POST["fecha_hasta"].'"';
$r=mysql_query($q);
$total=mysql_result($r,0,0);
//echo "Total: ".$total;
$total=round($total,2);
$total=str_replace('.',',',$total);
echo '<span style="font-size: 30px">Total: '.$total.'</span>';

?>
</center>