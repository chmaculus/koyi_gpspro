<?php
include("conectar.php");
$query=base64_decode($_POST["query"]);
echo $query;
$result=mysql_query($query)or die(mysql_error());



while($row=mysql_fetch_array($result)){
	if($_POST["pagado".$row["id"]]=="S"){
		$q2='update banco set cobrado="S" where id="'.$row["id"].'"';
	}else{
		$q2='update banco set cobrado="N" where id="'.$row["id"].'"';
	}
	mysql_query($q2);
	if(mysql_error()){
		echo mysql_error();
	}
}

?>
