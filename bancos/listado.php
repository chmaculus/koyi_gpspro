<?php
include("cabecera2.inc.php");
include("../includes/connect.php");
?>
<center>




<?php

$fecha=date("Y-n");
?>
<center>
<form action="listado.php" method="post">
<?php
include("select_cuenta.inc.php");
?>
Desde<input type="text" name="fecha_desde" value="<?php if($_POST["fecha_desde"]){ echo $_POST["fecha_desde"];}else{ echo $fecha."-01";} ?>"><br>
Hasta<input type="text" name="fecha_hasta" value="<?php if($_POST["fecha_hasta"]){ echo $_POST["fecha_hasta"];}else{ echo $fecha."-31";} ?>"><br>

Pagados<input type="radio" name="pagado" value="si" <?php if($_POST["pagado"]=="si"){ echo 'checked="checked"';} ?> >
Pendientes de pago<input type="radio" name="pagado" value="no" <?php if($_POST["pagado"]=="no"){ echo 'checked="checked"';} ?> >
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

//echo "Dia:".$dia." ";
//echo "mes:".$mes." ";
//echo "Ano:".$anio." ";

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

for($i=1;$i<=31;$i++){
	if($pos==8){
		$sema++;
		$pos=1;
		//echo "dia: ".$i."<br>";
		
		}
	//echo "dia: ".$i." Semana: ".$sema."<br>";
	$pos=$pos+1;
	}



include("conectar.php");

if($_POST["pagado"]=="si"){
	$query='select * from banco  where cuenta="'.$_POST["cuenta"].'" and fecha_vencimiento>="'.$_POST["fecha_desde"].'" and fecha_vencimiento<="'.$_POST["fecha_hasta"].'" and cobrado="S" order by fecha_vencimiento';
}

if($_POST["pagado"]=="no"){
	$query='select * from banco  where cuenta="'.$_POST["cuenta"].'" and fecha_vencimiento>="'.$_POST["fecha_desde"].'" and fecha_vencimiento<="'.$_POST["fecha_hasta"].'" and cobrado="N" order by fecha_vencimiento';
	
}

if($_POST["pagado"]=="todos"){
	$query='select * from banco  where cuenta="'.$_POST["cuenta"].'" and fecha_vencimiento>="'.$_POST["fecha_desde"].'" and fecha_vencimiento<="'.$_POST["fecha_hasta"].'" order by fecha_vencimiento';
}


$result	=mysql_query($query)or die(mysql_error());
$rows=mysql_num_rows($result);
echo "cantidad de registros: ".$rows;
?>


<form action="guardar.php" method="post">
<table class="t1">
<tr>
    <th>id</th>
    <th>Numero</th>
    <th>Cuenta</th>
    <th>Fecha Emision</th>
    <th>Fecha vencimiento</th>
    <th>Importe</th>
    <th>Detalle</th>
    <th>proveedor</th>
    <th>Pagado</th>
    <th>s/n</th>
    <th>Modificar</th>
    <th>Eliminar</th>
    
</tr>
<?php
while($row=mysql_fetch_array($result)){
	$array_proveedor=trae_proveedor($row["id_proveedor"]);
    echo "<tr>";
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["numero"].'</td>';
    echo '<td>'.$row["cuenta"].'</td>';
    echo '<td>'.$row["fecha_emision"].'</td>';
    echo '<td>'.$row["fecha_vencimiento"].'</td>';
    echo '<td>'.$row["importe"].'</td>';
    echo '<td>'.$row["detalle"].'</td>';
    echo '<td>'.$array_proveedor["proveedor"].'</td>';
    echo '<td>'.$row["cobrado"].'</td>';
    
    
    
    if($row["cobrado"]=="S"){
	    echo '<td><input type="checkbox" name="pagado'.$row["id"].'" value="S" checked="checked"></td>';
	}else{
	    echo '<td><input type="checkbox" name="pagado'.$row["id"].'" value="S"></td>';
	}
    
	if($row["cobrado"]!="S"){
		$total=$total+$row["importe"];
	}
	if($row["cobrado"]=="S"){
		$totaln=$totaln+$row["importe"];
	}

    echo '<td><a href="modificar.php?id='.$row["id"].'">modificar</a></td>';
    echo '<td><a href="eliminar.php?id='.$row["id"].'">eliminar</a></td>';
        
    


    echo "</tr>".chr(13);
}
echo '</table>';






$aa=base64_encode($query);
echo '<input type="hidden" name="query" value="'.$aa.'">';
echo '<input type="submit" name="ACEPTAR" value="ACEPTAR">';
echo '</form>';


echo "T: ".($total + $totaln)."<br>";
echo "TP: ".$total."<br>";
echo "TC: ".$totaln."<br>";


function trae_proveedor($id_proveedor){
	$q='select * from proveedores where id="'.$id_proveedor.'"';
	$r=mysql_query($q);
	$array=mysql_fetch_array($r);
	return $array;
}


?>
</center>