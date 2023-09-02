<?php
include ('conectar.php');
$fecha=date("Y-n-d");
$hora=date("H:i:s");


$array_cheque=trae_cheque($_POST["id_banco"]);

$array1=explode("/",$_POST["fecha_emision"]);
$array2=explode("/",$_POST["fecha_vencimiento"]);

$fecha_emision=$array1[2]."-".$array1[1]."-".$array1[0];
$fecha_vencimiento=$array2[2]."-".$array2[1]."-".$array2[0];


if($_POST["accion"]=="ingreso"){
	$query='insert into proveedores_ctacte set 
	id_proveedor="'.$_POST["id"].'",
	tipo="'.$_POST["tipo"].'",
	numero_cheque_deposito="'.$_POST["numero_cheque_deposito"].'",
	fecha_pago="'.$_POST["fecha_pago"].'",
	fecha_facturacion="'.$_POST["fecha_facturacion"].'",
	fecha_recepcion="'.$_POST["fecha_recepcion"].'",
	id_banco="'.$_POST["id_banco"].'",
	credito="'.$array_cheque["importe"].'",
	debito="'.$_POST["debito"].'"
	';
}

if($_POST["accion"]=="modificacion"){
	$query='update proveedores_ctacte set 
	tipo="'.$_POST["tipo"].'",
	numero_cheque_deposito="'.$_POST["numero_cheque_deposito"].'",
	fecha_pago="'.$_POST["fecha_pago"].'",
	fecha_facturacion="'.$_POST["fecha_facturacion"].'",
	fecha_recepcion="'.$_POST["fecha_recepcion"].'",
	credito="'.$array_cheque["importe"].'",
	id_banco="'.$_POST["id_banco"].'",
	debito="'.$_POST["debito"].'"
	 where id="'.$_POST["id"].'"
	';
}
echo $query;

mysql_query($query);

if(mysql_error()){
    echo $query."<br>";
    echo mysql_error()."<br>";
}else {
	echo "Los datos se grabaron correctamente";
	}
	
function trae_cheque($id_cheque){
	$q='select * from banco where id="'.$id_cheque.'"';
	$r=mysql_query($q);
	$array=mysql_fetch_array($r);
	return $array;
}



?>