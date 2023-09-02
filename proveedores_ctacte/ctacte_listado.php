<?php

include("cabecera2.inc.php");
include("conectar.php");



echo "<center>";


$q2='select sum(credito - debito) from proveedores_ctacte where id_proveedor="'.$_GET["id_proveedor"].'"';
//echo "<br>".$q2."<br>";
$res2=mysql_query($q2);
$saldo=mysql_fetch_array($res2);

$q2='select sum(importe) from banco where id_proveedor="'.$_GET["id_proveedor"].'"';
//echo "<br>".$q2."<br>";
$res2=mysql_query($q2);
$saldo2=mysql_fetch_array($res2);


$saldo1=round($saldo[0],2);
$saldo2=round($saldo2[0],2);

echo "<font2>Total Saldo: ".($saldo1 + $saldo2)."</font2><br>";







$query='select * from proveedores_ctacte where id_proveedor="'.$_GET["id_proveedor"].'" order by id';


$result=mysql_query($query);
if(mysql_error()){echo mysql_error()."<br>".$query."<br>";}

echo '<table class="t1">';
echo "<tr>";
    echo "<th>id</th>";
    echo "<th>tipo</th>";
    echo "<th>numero_cheque_deposito</th>";
    echo "<th>fecha_pago</th>";
    echo "<th>Detalle cheque</th>";
    echo "<th>fecha_facturacion</th>";
    echo "<th>fecha_recepcion</th>";
    echo "<th>debito</th>";
    echo "<th>credito</th>";
    echo "<th></th>";
    echo "</tr>";

while($row=mysql_fetch_array($result)){
	$array_cheque=trae_cheque($row["id_banco"]);
    echo "<tr>";
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["tipo"].'</td>';
    echo '<td>'.$array_cheque["numero"].'</td>';
    echo '<td>'.$array_cheque["fecha_vencimiento"].'</td>';
    echo '<td>'.$array_cheque["detalle"].'</td>';
    echo '<td>'.$row["fecha_facturacion"].'</td>';
    echo '<td>'.$row["fecha_recepcion"].'</td>';
    echo '<td>'.$row["debito"].'</td>';
    echo '<td>'.$row["credito"].'</td>';
    echo '<td><a href="ctacte_eliminar.php?id_ctacte='.$row["id"].'">Eliminar</a></td>';
    echo "</tr>".chr(10);
}



$q='select * from banco where id_proveedor="'.$_GET["id_proveedor"].'"';
$result=mysql_query($q);
while($row=mysql_fetch_array($result)){
    echo "<tr>";

    echo "<td></td>";
    echo "<td></td>";
    echo '<td>'.$row["numero"].'</td>';
    echo '<td>'.$row["fecha_vencimiento"].'</td>';
    echo '<td>'.$row["detalle"].'</td>';
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo '<td>'.$row["importe"].'</td>';
    echo "</tr>".chr(10);
}

echo '</table>';







function trae_cheque($id_cheque){
	$q='select * from banco where id="'.$id_cheque.'"';
	$r=mysql_query($q);
	$array=mysql_fetch_array($r);
	return $array;
}

?>
