<?php 
include("Conexion.php");

$sql=$cn->prepare('SELECT * FROM tienda');
$sql->execute();
	
		header("Access-Control-Allow-Origin: *");
		$data = array();
		$i=0;
		while($op=$sql->fetch())
		{
		$data[$i]=array(
		'codigo_tienda' => $op['codigo_tienda'],
		'nombre' => $op['nombre'],
		'tipo' => $op['tipo'],
		'latitud' => $op['latitud'],
		'longitud' => $op['longitud']
		);	
		$i++;
		}
	
echo json_encode($data);
?>

 