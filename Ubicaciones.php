<?php 
include("Conexion.php");

$sql=$cn->prepare('SELECT * FROM tienda');
$sql->execute();
	
		header("Access-Control-Allow-Origin: *");
				
		echo "[";
		while($op=$sql->fetch())
		{
		echo "{";
		echo "nombre:\"".$op['nombre']."\"";
		echo ",";
		echo "latitud:".$op['latitud'];
		echo ",";
		echo "longitud:".$op['longitud'];
		echo "},";
		}
		
		echo "]";

?>

 