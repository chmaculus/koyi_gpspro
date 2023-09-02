<?php

include("conectar.php");

if($_POST["eliminar"]){
	$query='delete from banco where id='.$_POST["id"];

	mysql_query($query);
	if(!mysql_error()){
		echo "Los datos se han eliminado correctamente!";
	}else{
		echo mysql_error();
	}
	exit;
}

$query='select * from banco where id='.$_GET["id"];
$result=mysql_query($query);

$array=mysql_fetch_array($result);
echo "Numero: ".$array['numero']."<br>";
echo "Cuenta: ".$array['cuenta']."<br>";
echo "Importe: ".$array['importe']."<br>";

echo 'Eliminar S/N';
?>


<form action="eliminar.php" method="post">
<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
<input type="hidden" name="eliminar" value="eliminar">
<input type="submit" name="aceptar" value="aceptar">
</form>




