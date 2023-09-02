<?php
include("cabecera2.inc.php");
?>
<center>
<?php
include("conectar.php");
//<body bgcolor="#424043"></body>

//$fecha=date("Y-n-d");
$fecha=date("d/n/Y");
$hora=date("H:i:s");

if($_GET["id"]){
	$q='select * from datos_banco where id="'.$_GET["id"].'"';
	//echo "q:".$q."<br>";
	$res=mysql_query($q);
	if(mysql_error()){
		echo mysql_error();
	}
	//echo "rs:".mysql_num_rows($res);
	$array=mysql_fetch_array($res);
}


?>


<form action="update2.php" method="post">

<table>
<tr>
<td>dato</td>

<td><select name="tipo" >
<option <?php if($array["tipo"]=="venta"){echo "selected";}?> value="venta" >Venta</option>
<option <?php if($array["tipo"]=="gasto"){echo "selected";}?> value="gasto" >Gasto</option>
<option <?php if($array["tipo"]=="Limite por gasto"){echo "selected";}?> value="Limite por gasto" >Limite Por Gasto</option>
<option <?php if($array["tipo"]=="Limite por venta"){echo "selected";}?> value="Limite por venta" >Limite por Venta</option>
<option <?php if($array["tipo"]=="Estadistica"){echo "selected";}?> value="Estadistica" >Estadistica</option>
<option <?php if($array["tipo"]=="Proyeccion"){echo "selected";}?> value="Proyeccion" >Proyeccion</option>
<option <?php if($array["tipo"]=="sBANK"){echo "selected";}?> value="sBANK" >sBANK</option>
<option <?php if($array["tipo"]=="ResEFE"){echo "selected";}?> value="ResEFE" >ResEFE</option>
<option <?php if($array["tipo"]=="SS"){echo "selected";}?> value="SS" >SS</option>
<option <?php if($array["tipo"]=="Ch"){echo "selected";}?> value="Ch" >Ch</option>
<option <?php if($array["tipo"]=="Doc"){echo "selected";}?> value="doc" >Doc</option>
<option <?php if($array["tipo"]=="Cheq"){echo "selected";}?> value="Cheq" >Cheq</option>
<option <?php if($array["tipo"]=="TotalRES"){echo "selected";}?> value="TotalRES" >TotalRES</option>

</select></td>

<tr>
<td>Fecha</td>
<td><input type="text" name="anio_mes" value="<?php echo $array["anio_mes"]; ?>"></td>
</tr>



<tr>
<td>Importe</td>
<td><input type="text" name="importe"  value="<?php echo $array["valor"]; ?>"></td>
</tr>


</table>


<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
<input type="hidden" name="accion" value="modificacion">
<input type="submit" name="Aceptar" value="Aceptar">

</form>






