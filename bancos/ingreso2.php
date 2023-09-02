<?php
include("cabecera2.inc.php");
?>
<center>
<?php

//<body bgcolor="#424043"></body>

//$fecha=date("Y-n-d");
$fecha=date("d/n/Y");
$hora=date("H:i:s");

?>


<form action="update2.php" method="post">

<table class="t1">
<tr>
<td>dato</td>

<td><select name="tipo" >
<option value="venta" >Venta</option>
<option value="gasto" >Gasto</option>
<option value="limite por gasto" >Limite Por Gasto</option>
<option value="Limite poor venta" >Limite por Venta</option>
<option value="estadistica" >Estadistica</option>
<option value="Proyeccion" >Proyeccion</option>
<option value="sBANK" >sBANK</option>
<option value="ResEFE" >ResEFE</option>
<option value="SS" >SS</option>
<option value="Ch" >Ch</option>
<option value="Doc" >Doc</option>
<option value="Cheq" >Cheq</option>
<option value="TotalRES" >TotalRES</option>

</select></td>

<tr>
<td>Fecha</td>
<td><input type="text" name="anio_mes" ></td>
</tr>



<tr>
<td>Importe</td>
<td><input type="text" name="importe"></td>
</tr>


</table>


<input type="hidden" name="accion" value="ingreso">
<input type="submit" name="Aceptar" value="Aceptar">

</form>






