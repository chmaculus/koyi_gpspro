<?php
include("conectar.php");

$fecha=date("Y-n");
?>
<center>
<img src="bank.jpg" width="1100" height="90" alt="">
<form action="resumen.php" method="post">
<select name="cuenta" >
<option value="NG" >NG</option>
<option value="CSM" >CSM</option>
<option value="COM" >COM</option>
<option value="Efectivo" >EFECTIVO</option>
<option value="5" >5</option>
</select>

Desde<input type="text" name="fecha_desde" value="<?php if($_POST["fecha_desde"]){ echo $_POST["fecha_desde"];}else{ echo $fecha."-01";} ?>"><br>
Hasta<input type="text" name="fecha_hasta" value="<?php if($_POST["fecha_hasta"]){ echo $_POST["fecha_hasta"];}else{ echo $fecha."-31";} ?>"><br>

Si<input type="radio" name="pagado" value="si" <?php if($_POST["pagado"]=="si"){ echo 'checked="checked"';} ?> >
No<input type="radio" name="pagado" value="no" <?php if($_POST["pagado"]=="no"){ echo 'checked="checked"';} ?> >
Todos<input type="radio" name="pagado" value="todos" <?php if($_POST["pagado"]=="todos"){ echo 'checked="checked"';} ?> >

<input type="submit" name="aceptar" value="aceptar">
</form>

<?php



if(!$_POST["cuenta"]){
	exit;
}

$aa=explode("-",$_POST["fecha_desde"]);
$dia=$aa[2];
$mes=$aa[1];
$anio=$aa[0];
/*
echo "Dia:".$dia." ";
echo "mes:".$mes." ";
echo "Ano:".$anio." ";
*/
$nom_dia  = date("l", mktime(0, 0, 0, $mes, 01, $anio));

$nom_dia=substr($nom_dia, 0, 2);

if($nom_dia=="Mo"){$pos=1;}
if($nom_dia=="Tu"){$pos=2;}
if($nom_dia=="We"){$pos=3;}
if($nom_dia=="Th"){$pos=4;}
if($nom_dia=="Fr"){$pos=5;}
if($nom_dia=="Sa"){$pos=6;}
if($nom_dia=="Su"){$pos=7;}


$sema=1;
$ant=1;

//echo '<table border="1">';

for($i=1;$i<=31;$i++){
	if($pos==8){
		
		$f1=$anio.'-'.$mes.'-'.$ant;
		$f2=$anio.'-'.$mes.'-'.($i -1 );
		
		$q3='select distinct cuenta from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'"';
		$res=mysql_query($q3);
		//echo "count:".mysql_num_rows($res);
		
		while($row2=mysql_fetch_array($res)){
			echo '<table border="1">';
			echo "<tr>";
			calcular_total($row2[0],$f1,$f2);
			echo "</tr>";
			echo "</table>";
			$total1=total_semana($f1,$f2);
			
			echo "Tot pagado: ".$total1[0]."<br>";	
			echo "Tot pendiente: ".$total1[1]."<br>";	
			echo "Tot chequeado: ".$total1[0]."<br><br>";	
			
		}
		
		
		$ult=(($i) -1);
	//	echo "q3:$q3";
		$ant=(($i));
		$sema++;
		$pos=1;
//		echo "dia: ".$i."Ant: $ant<br>";
		
		$f3=$anio.'-'.$mes.'-'.($i );
		}
	//echo "dia: ".$i." Semana: ".$sema."<br>";
	$pos=$pos+1;
}


$f4=$anio.'-'.$mes.'-31' ;
$q3='select distinct cuenta from banco where fecha_vencimiento>="'.$f3.'" and fecha_vencimiento<="'.$f4.'"';
$res=mysql_query($q3);

if(mysql_error()){
	echo mysql_error();
}

//echo "q3:$q3";

while($row2=mysql_fetch_array($res)){
		echo '<table border="1">';
	echo "<tr>";
	calcular_total($row2[0],$f3,$f4);	
	echo "</tr>";
	echo "</table>";
}
			$total1=total_semana($f3,$f4);

			echo "Tot pagado: ".$total1[0]."<br>";	
			echo "Tot pendiente: ".$total1[1]."<br>";	
			echo "Tot chequeado: ".$total1[0]."<br>";	



/*
while($row2=mysql_fetch_array($res)){
	calcular_total($row[0],$f1,$f2);	
}
*/

function calcular_total($cuenta,$f1,$f2){
	$q3='select sum(importe) from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'" and cuenta="'.$cuenta.'" and cobrado="S"';
	$res=mysql_query($q3);
	//echo "<br>Count: ".mysql_num_rows($res)."<br>";
	$tot=mysql_fetch_array($res);
	if($tot[0]==0){ 		$tot[0]="0"; 	}
	echo "<td>".$f1."</td><td>".$f2."</td>";
	echo "<td>Cuenta: ".$cuenta." Pagado ".$tot[0]."</td>";

	$q3='select sum(importe) from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'" and cuenta="'.$cuenta.'" and cobrado="N"';
	$res=mysql_query($q3);
	//echo "<br>Count: ".mysql_num_rows($res)."<br>";
	$tot=mysql_fetch_array($res);
	if($tot[0]==0){ 		$tot[0]="0"; 	}
	echo "<td>Cuenta: ".$cuenta." No Pagado ".$tot[0]."</td>";

	$q3='select sum(importe) from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'" and cuenta="'.$cuenta.'"';
	$res=mysql_query($q3);
	//echo "<br>Count: ".mysql_num_rows($res)."<br>";
	$tot=mysql_fetch_array($res);
	if($tot[0]==0){ 		$tot[0]="0"; 	}
	echo "<td>Cuenta: ".$cuenta." total: ".$tot[0]."</td>";
} 



#-------------------------------------------------
function total_semana($f1,$f2){
	$q3='select sum(importe) from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'" and cobrado="S"';
	$res=mysql_query($q3);
	$tot=mysql_fetch_array($res);
	if($tot==0){ 		$tot="0"; 	}
	$total[0]=$tot[0];

	$q3='select sum(importe) from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'" and cobrado="N"';
	$res=mysql_query($q3);
	$tot=mysql_fetch_array($res);
	if($tot[0]==0){ 		$tot[0]="0"; 	}
	$total[1]=$tot[0];

	$q3='select sum(importe) from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'"';
	$res=mysql_query($q3);
	//echo "<br>Count: ".mysql_num_rows($res)."<br>";
	$tot=mysql_fetch_array($res);
	if($tot==0){ 		$tot="0"; 	}
	$total[0]=$tot[0];
return $total;
} 
#-------------------------------------------------


echo "</table>";


?>
</center>