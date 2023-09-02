<?php
include("cabecera2.inc.php");
?>
<center>




<?php

$fecha=date("Y-n");
?>
<center>
<form action="listado.php" method="post">
<select name="cuenta" >
<option value="NG" >NG</option>
<option value="CSM" >CSM</option>
<option value="COM" >COM</option>
<option value="Efectivo" >EFECTIVO</option>
<option value="Falso" >FALSO</option>
</select>

Desde<input type="text" name="fecha_desde" value="<?php if($_POST["fecha_desde"]){ echo $_POST["fecha_desde"];}else{ echo $fecha."-01";} ?>"><br>
Hasta<input type="text" name="fecha_hasta" value="<?php if($_POST["fecha_hasta"]){ echo $_POST["fecha_hasta"];}else{ echo $fecha."-31";} ?>"><br>

Pagados<input type="radio" name="pagado" value="si" <?php if($_POST["pagado"]=="si"){ echo 'checked="checked"';} ?> >
Pendientes de pago<input type="radio" name="pagado" value="no" <?php if($_POST["pagado"]=="no"){ echo 'checked="checked"';} ?> >
Todos<input type="radio" name="pagado" value="todos" <?php if($_POST["pagado"]=="todos"){ echo 'checked="checked"';} ?> >

<input type="submit" name="aceptar" value="aceptar">
</form>

<?php




include("conectar.php");

$query='select * from banco  order by fecha_vencimiento';

$result	=mysql_query($query)or die(mysql_error());
$rows=mysql_num_rows($result);
echo "cantidad de registros: ".$rows;
?>


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
    echo '<td><a href="modificar.php?id='.$row["id"].'">modificar</a></td>';
    echo '<td><a href="eliminar.php?id='.$row["id"].'">eliminar</a></td>';
        
    


    echo "</tr>".chr(13);
}
echo '</table>';






$aa=base64_encode($query);
echo '<input type="hidden" name="query" value="'.$aa.'">';
echo '<input type="submit" name="ACEPTAR" value="ACEPTAR">';
echo '</form>';


echo "Total: ".$total."<br>";
echo "Total cobrado: ".$totaln."<br>";


function trae_proveedor($id_proveedor){
	$q='select * from proveedores where id="'.$id_proveedor.'"';
	$r=mysql_query($q);
	$array=mysql_fetch_array($r);
	return $array;
}





?>
</center>