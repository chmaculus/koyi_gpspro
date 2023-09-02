


<?php
include("cabecera2.inc.php");
?>
<center>


<?php

include("conectar.php");

if($_POST["eliminar"]){
	$query='delete from gastos where id='.$_POST["id"];

	mysql_query($query);
	if(!mysql_error()){
		echo "Los datos se han eliminado correctamente!";
	}else{
		echo mysql_error();
	}
	exit;
}

$query='select * from gastos where id='.$_GET["id"];
$result=mysql_query($query);

$array=mysql_fetch_array($result);
echo "categoria: ".$array['categoria']."<br>";
echo "fecha: ".$array['fecha']."<br>";
echo "detalle: ".$array['detalle']."<br>";
echo "monto: ".$array['monto']."<br>";
echo "hora: ".$array['hora']."<br>";
echo 'Eliminar S/N';
?>


<form action="eliminar.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
<input type="hidden" name="eliminar" value="eliminar">
<input type="submit" name="aceptar" value="aceptar">
</form>




