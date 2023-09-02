

<?

include ("conectar.php");
$query='select distinct fecha from ventas where fecha like "2014-10-%"';

$result	=mysql_query($query)or die(mysql_error());
 echo '<table border="1">';



	$q2='select * from sucursales order by sucursal';
	$res2=mysql_query($q2);
	echo "<tr>";
		echo '<td></td><td></td>';
	while($row2=mysql_fetch_array($res2)){
		echo '<td>';
		echo $row2["sucursal"];	
		echo '</td>';
	}
	echo "</tr>";




while($row=mysql_fetch_array($result)){
	echo "<tr>";
	echo '<td>'.$row["fecha"].'<td>';


	$q2='select * from sucursales order by sucursal';
	$res2=mysql_query($q2);

	while($row2=mysql_fetch_array($res2)){
		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="'.$row2["sucursal"].'"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';
	}



	echo "</tr>";
	

}

	echo '<tr>';
		echo '<td></td><td></td>';

	$q3='select * from sucursales order by sucursal';
	$res3=mysql_query($q3);

	while($row3=mysql_fetch_array($res3)){
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="'.$row3["sucursal"].'"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
	}

	echo "</tr>";







?>