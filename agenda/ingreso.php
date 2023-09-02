<center>


<?php
include("base.php");

$fecha=date("d/n/Y");
$hora=date("H:i:s");
?>


<form action="update.php" method="post">

<table>
<tr>
<td>Contacto</td>
<td><input type="text" name="proveedor"></td>
</tr>

<tr>
<td>Direccion</td>
<td><input type="text" name="direccion" size="30"></td>
</tr>

<tr>
<td>Telefono</td>
<td><input type="text" name="telefono" ></td>
</tr>

<tr>
<td>Mail</td>
<td><input type="text" name="mail"></td>
</tr>

<tr>
<td>Celular</td>
<td><input type="text" name="celular"></td>
</tr>

<tr>
<td>web</td>
<td><input type="text" name="web"></td>
</tr>


<td>Contacto</td>
<td><input type="text" name="contacto"></td>
</tr>





</table>


<input type="hidden" name="accion" value="ingreso">
<input type="submit" name="Aceptar" value="Aceptar">

</form>






