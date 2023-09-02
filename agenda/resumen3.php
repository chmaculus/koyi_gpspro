<?php
include("conectar.php");

$fecha=date("Y-n");
?>
<center>
<img src="bank.jpg" width="1100" height="90" alt="">
<form action="resumen3.php" method="post">

Desde<input type="text" name="fecha_desde" value="<?php if($_POST["fecha_desde"]){ echo $_POST["fecha_desde"];}else{ echo $fecha."-01";} ?>"><br>
Hasta<input type="text" name="fecha_hasta" value="<?php if($_POST["fecha_hasta"]){ echo $_POST["fecha_hasta"];}else{ echo $fecha."-31";} ?>"><br>

Si<input type="radio" name="pagado" value="si" <?php if($_POST["pagado"]=="si"){ echo 'checked="checked"';} ?> >
No<input type="radio" name="pagado" value="no" <?php if($_POST["pagado"]=="no"){ echo 'checked="checked"';} ?> >
Todos<input type="radio" name="pagado" value="todos" <?php if($_POST["pagado"]=="todos"){ echo 'checked="checked"';} ?> >

<input type="submit" name="aceptar" value="aceptar">
</form>


<table border="1">
<?php

			$total1=total_semana($_POST["fecha_desde"],$_POST["fecha_hasta"]);
		
			echo "Tot chequeado: ".round($total1[2],2)."<br>";	
			echo "Tot pagado: ".round($total1[0],2)."<br>";	
			echo "Tot pendiente: ".round($total1[1],2)."<br>";	



function calcular_total2($f1,$f2){
	$q3='select sum(importe) from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'" and cobrado="S"';
	$res=mysql_query($q3);
	//echo "<br>Count: ".mysql_num_rows($res)."<br>";
	$tot=mysql_fetch_array($res);
	if($tot[0]==0){ 		$tot[0]="0"; 	}
	echo "<td>".$f1."</td><td>".$f2."</td>";
	echo "<td>Cuenta: ".$cuenta." total: ".round($tot[0],2)."</td>";

	$q3='select sum(importe) from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'"  and cobrado="N"';
	$res=mysql_query($q3);
	//echo "<br>Count: ".mysql_num_rows($res)."<br>";
	$tot=mysql_fetch_array($res);
	if($tot[0]==0){ 		$tot[0]="0"; 	}
	echo "<td>Cuenta: ".$cuenta." total: ".round($tot[0],2)."</td>";

	$q3='select sum(importe) from banco where fecha_vencimiento>="'.$f1.'" and fecha_vencimiento<="'.$f2.'"';
	$res=mysql_query($q3);
	//echo "<br>Count: ".mysql_num_rows($res)."<br>";
	$tot=mysql_fetch_array($res);
	if($tot[0]==0){ 		$tot[0]="0"; 	}
	echo "<td>Cuenta: ".$cuenta." total: ".round($tot[0],2)."</td>";
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
	$total[2]=$tot[0];
return $total;
} 
#-------------------------------------------------


echo "</table>";


?>
</center>