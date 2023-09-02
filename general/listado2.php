<center>
GPS PRO II <br>
<br>
<?

include ("conectar.php");
$query='select distinct fecha from ventas where fecha like "2014-10-%"';

$result	=mysql_query($query)or die(mysql_error());
 echo '<table border="1">';




	echo "<tr>";
		echo '<td></td><td></td>';
	
		echo '<td>';
		echo "8";	
		echo '</td>';
	
		echo '<td>';
		echo "z8";	
		echo '</td>';
	
		echo '<td>';
			echo "44";		
		echo '</td>';
	
		echo '<td>';
			echo "z44";		
		echo '</td>';
	
		echo '<td>';
			echo "47";		
		echo '</td>';
	
		echo '<td>';
			echo "z47";		
		echo '</td>';
	
		echo '<td>';
			echo "49";		
		echo '</td>';
	
		echo '<td>';
			echo "z49";		
		echo '</td>';
	
		echo '<td>';
			echo "51";		
		echo '</td>';
	
		echo '<td>';
			echo "z51";		
		echo '</td>';
	
		echo '<td>';
			echo "56";		
		echo '</td>';
	
		echo '<td>';
			echo "z56";		
		echo '</td>';
	
		echo '<td>';
			echo "59";		
		echo '</td>';
	
		echo '<td>';
			echo "z59";		
		echo '</td>';
	
		echo '<td>';
			echo "66";		
		echo '</td>';
	
		echo '<td>';
			echo "z66";		
		echo '</td>';
	
		echo '<td>';
			echo "88";		
		echo '</td>';
	
		echo '<td>';
			echo "z88";		
		echo '</td>';
	
		echo '<td>';
			echo "150";	
		echo '</td>';
	
		echo '<td>';
			echo "z150";	
		echo '</td>';
	
	echo "</tr>";




while($row=mysql_fetch_array($result)){
	echo "<tr>";
	echo '<td>'.$row["fecha"].'<td>';





		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="8"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("8",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------

		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="44"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("44",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------


		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="47"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("47",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------


		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="49"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("49",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------


		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="51"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("51",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------
		
		
		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="56"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("56",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------



		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="59"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("59",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------



		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="66"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("66",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------


		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="88"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("88",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------



		echo '<td>';
		$q3='select sum(cantidad * precio_unitario) from ventas where fecha="'.$row["fecha"].'" and sucursal="150"';
		$res=mysql_query($q3);
		$tot=mysql_result($res,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		echo trae_valor("150",$row["fecha"],"z");
		echo '</td>';
		#--------------------------------------------


	echo "</tr>";
	

}

	echo '<tr>';
		echo '<td>TOTAL</td><td></td>';


	
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="8"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';

		echo '<td>';
		$q4='select sum(valor) from gastos.valores where anio_mes like "2014-10-%" and sucursal="8" and detalle="z"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
	
	
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="44"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
		
		echo '<td>';
		echo '</td>';
	
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="47"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
		echo '<td>';
		echo '</td>';
	
			echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="49"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
		echo '<td>';
		echo '</td>';
	
	
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="51"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
		echo '<td>';
		echo '</td>';
	
	
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="56"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
		echo '<td>';
		echo '</td>';
	
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="59"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
		echo '<td>';
		echo '</td>';
	
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="66"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
		echo '<td>';
		echo '</td>';
	
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="88"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
		echo '<td>';
		echo '</td>';
	
	
		echo '<td>';
		$q4='select sum(cantidad * precio_unitario) from ventas where fecha like "2014-10-%" and sucursal="150"';
		$res4=mysql_query($q4);
		$tot=mysql_result($res4,0);
		echo $tot;
		echo '</td>';
		echo "</tr>";
		echo "<tr>";
		echo '<td></td><td></td>';

		echo '<td>';
		echo trae_valor("8","2014-10", "valor1" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("44","2014-10", "valor1" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("47","2014-10", "valor1" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("49","2014-10", "valor1" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("51","2014-10", "valor1" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("56","2014-10", "valor1" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("59","2014-10", "valor1" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("66","2014-10", "valor1" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("88","2014-10", "valor1" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("150","2014-10", "valor1" );
		echo '</td>';
echo "</tr>";


#----------------------------------------------------------------------
echo "<tr>";
		echo '<td></td><td></td>';

		echo '<td>';
		echo trae_valor("8","2014-10", "valor2" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("44","2014-10", "valor2" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("47","2014-10", "valor2" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("49","2014-10", "valor2" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("51","2014-10", "valor2" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("56","2014-10", "valor2" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("59","2014-10", "valor2" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("66","2014-10", "valor2" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("88","2014-10", "valor2" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("150","2014-10", "valor2" );
		echo '</td>';
echo "</tr>";
#----------------------------------------------------------------------



#----------------------------------------------------------------------
echo "<tr>";
		echo '<td></td><td></td>';

		echo '<td>';
		echo trae_valor("8","2014-10", "valor3" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("44","2014-10", "valor3" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("47","2014-10", "valor3" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("49","2014-10", "valor3" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("51","2014-10", "valor3" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("56","2014-10", "valor3" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("59","2014-10", "valor3" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("66","2014-10", "valor3" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("88","2014-10", "valor3" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("150","2014-10", "valor3" );
		echo '</td>';
echo "</tr>";
#----------------------------------------------------------------------



#----------------------------------------------------------------------
echo "<tr>";
		echo '<td></td><td></td>';

		echo '<td>';
		echo trae_valor("8","2014-10", "valor4" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("44","2014-10", "valor4" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("47","2014-10", "valor4" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("49","2014-10", "valor4" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("51","2014-10", "valor4" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("56","2014-10", "valor4" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("59","2014-10", "valor4" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("66","2014-10", "valor4" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("88","2014-10", "valor4" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("150","2014-10", "valor4" );
		echo '</td>';
echo "</tr>";
#----------------------------------------------------------------------



#----------------------------------------------------------------------
echo "<tr>";
		echo '<td></td><td></td>';

		echo '<td>';
		echo trae_valor("8","2014-10", "valor5" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("44","2014-10", "valor5" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("47","2014-10", "valor5" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("49","2014-10", "valor5" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("51","2014-10", "valor5" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("56","2014-10", "valor5" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("59","2014-10", "valor5" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("66","2014-10", "valor5" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("88","2014-10", "valor5" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("150","2014-10", "valor5" );
		echo '</td>';
echo "</tr>";
#----------------------------------------------------------------------



#----------------------------------------------------------------------
echo "<tr>";
		echo '<td></td><td></td>';

		echo '<td>';
		echo trae_valor("8","2014-10", "valor6" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("44","2014-10", "valor6" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("47","2014-10", "valor6" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("49","2014-10", "valor6" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("51","2014-10", "valor6" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("56","2014-10", "valor6" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("59","2014-10", "valor6" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("66","2014-10", "valor6" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("88","2014-10", "valor6" );
		echo '</td>';


		echo '<td>';
		echo trae_valor("150","2014-10", "valor6" );
		echo '</td>';
echo "</tr>";
#----------------------------------------------------------------------





function trae_valor($sucursal,$anio_mes,$detalle){
	$q='select valor from gastos.valores where sucursal="'.$sucursal.'" and anio_mes="'.$anio_mes.'" and detalle="'.$detalle.'"';
	$r=mysql_query($q);
	$res=mysql_result($r,0);
	return $res;
	//return $q;
	
	
}





?>