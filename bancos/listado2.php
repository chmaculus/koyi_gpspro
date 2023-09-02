

<?php
include("cabecera2.inc.php");
?>
<center>

<?php

include("conectar.php");

$fecha=date("Y-n");
?><body>


<table class="t1">
<tr>
    <th>id</th>
    <th>anio_mes</th>
    <th>tipo</th>
    <th>valor</th>
    </tr>




<?php



$query='select * from datos_banco order by anio_mes, tipo';
$result=mysql_query($query);
if(mysql_error()){
	echo mysql_error();
}

$rows=mysql_num_rows($result);



while($row=mysql_fetch_array($result)){
    echo "<tr>";
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["anio_mes"].'</td>';
    echo '<td>'.$row["tipo"].'</td>';
    echo '<td>'.$row["valor"].'</td>';
    echo '<td><a class="button-link" href="modifica22.php?id='.$row["id"].'">modificar</a></td>';
    echo '<td><a class="button-link" href="eliminar2.php?id='.$row["id"].'">eliminar</a></td>';    
    echo "</tr>".chr(13);
}
?>
</center>