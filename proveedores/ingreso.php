<?php
include("cabecera2.inc.php");
?>
<center>
<?php


if($_GET["id_proveedor"]){
	include("conectar.php");
	$q='select * from proveedores where id="'.$_GET["id_proveedor"].'"';
	$res=mysql_query($q);
	$array_proveedor=mysql_fetch_array($res);
}


//$fecha=date("Y-n-d");
$fecha=date("d/n/Y");
$hora=date("H:i:s");
//echo "id: ".$array_proveedor["id"]."<br>";
?>



<form action="update.php" method="post">

<table class="t1">
<tr>
<td>Proveedor</td>
<td><input type="text" name="proveedor" value="<?php if($array_proveedor["proveedor"]){ echo $array_proveedor["proveedor"]; } ?>"></td>
</tr>


<tr>
<td>Direccion</td>
<td><input type="text" name="direccion" size="30"  value="<?php if($array_proveedor["direccion"]){ echo $array_proveedor["direccion"]; } ?>"></td>
</tr>

<tr>
<td>Telefono</td>
<td><input type="text" name="telefono"  value="<?php if($array_proveedor["telefono"]){ echo $array_proveedor["telefono"]; } ?>"></td>
</tr>

<tr>
<td>Mail</td>
<td><input type="text" name="mail"  value="<?php if($array_proveedor["mail"]){ echo $array_proveedor["mail"]; } ?>"></td>
</tr>

<tr>
<td>Celular</td>
<td><input type="text" name="celular"  value="<?php if($array_proveedor["celular"]){ echo $array_proveedor["celular"]; } ?>"></td>
</tr>

<tr>
<td>web</td>
<td><input type="text" name="web"  value="<?php if($array_proveedor["web"]){ echo $array_proveedor["web"]; } ?>"></td>
</tr>


<td>Contacto</td>
<td><input type="text" name="contacto"  value="<?php if($array_proveedor["contacto"]){ echo $array_proveedor["contacto"]; } ?>"></td>
</tr>



<td>Postal</td>
<td><input type="text" name="postal"  value="<?php if($array_proveedor["postal"]){ echo $array_proveedor["postal"]; } ?>"></td>
</tr>

<td>Margen Real</td>
<td><input type="text" name="margen_real" size="5"  value="<?php if($array_proveedor["margen_real"]){ echo $array_proveedor["margen_real"]; } ?>"></td>
</tr>




<td>Margen</td>
<td>
<select name="margen">
<option  value="10">50-70</option>
<option <?php if($array_proveedor["margen"]==""){ echo "selected"; } ?>>seleccione</option>
<option <?php if($array_proveedor["margen"]=="20"){ echo "selected"; } ?>  value="20">70-90</option>
<option <?php if($array_proveedor["margen"]=="30"){ echo "selected"; } ?>  value="30">90-100</option>
<option <?php if($array_proveedor["margen"]=="40"){ echo "selected"; } ?>  value="40">100-120</option>
<option <?php if($array_proveedor["margen"]=="50"){ echo "selected"; } ?>  value="50">120 o mas</option>


</select>
</td>
</tr>


<td>Exclusividad</td>
<td>
<select name="exclusividad">
<option  <?php if($array_proveedor["exclusividad"]==""){ echo "selected"; } ?>>seleccione</option>
<option  <?php if($array_proveedor["exclusividad"]=="10"){ echo "selected"; } ?> value="10">Si</option>
<option  <?php if($array_proveedor["exclusividad"]=="0"){ echo "selected"; } ?> value="0">No</option>
</select>
</td>
</tr>


<td>Compra directa</td>
<td>
<select name="compra_directa">
<option  <?php if($array_proveedor["compra_directa"]==""){ echo "selected"; } ?>>seleccione</option>
<option  <?php if($array_proveedor["compra_directa"]=="10"){ echo "selected"; } ?> value="10">Si</option>
<option  <?php if($array_proveedor["compra_directa"]=="0"){ echo "selected"; } ?> value="0">No</option>
</select>
</td>
</tr>


<td>Condicion pago</td>
<td>
<select <?php ?> name="condicion_pago">
<option  <?php if($array_proveedor["condicion_pago"]==""){ echo "selected"; } ?>>seleccione</option>
<option  <?php if($array_proveedor["condicion_pago"]=="20"){ echo "selected"; } ?> value="20">anticipado</option>
<option  <?php if($array_proveedor["condicion_pago"]=="10"){ echo "selected"; } ?> value="10">Contrareembolso</option>
<option  <?php if($array_proveedor["condicion_pago"]=="30"){ echo "selected"; } ?> value="30">30 dias</option>
<option  <?php if($array_proveedor["condicion_pago"]=="40"){ echo "selected"; } ?> value="40">30-60 dias</option>
<option  <?php if($array_proveedor["condicion_pago"]=="50"){ echo "selected"; } ?> value="50">30-60-90 o mas dias</option>
</select>
</td>
</tr>


<td>Relacion</td>
<td>
<select name="relacion">
<option  <?php if($array_proveedor["relacion"]==""){ echo "selected"; } ?>>seleccione</option>
<option  <?php if($array_proveedor["relacion"]=="2"){ echo "selected"; } ?> value="2">Mala</option>
<option  <?php if($array_proveedor["relacion"]=="4"){ echo "selected"; } ?> value="4">Regular</option>
<option  <?php if($array_proveedor["relacion"]=="6"){ echo "selected"; } ?> value="6">Buena</option>
<option  <?php if($array_proveedor["relacion"]=="8"){ echo "selected"; } ?> value="8">Muy buena</option>
<option  <?php if($array_proveedor["relacion"]=="10"){ echo "selected"; } ?> value="10">Excelente</option>
</select>
</td>
</tr>

</table>



<?php
if($_GET["id_proveedor"]){
	echo '<input type="hidden" name="accion" value="modificacion">';
	echo '<input type="hidden" name="id_proveedor" value="'.$_GET["id_proveedor"].'">';
}else{
	echo '<input type="hidden" name="accion" value="ingreso">';
}

?>

<input type="submit" name="Aceptar" value="Aceptar">

</form>






