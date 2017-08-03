<?php 
include("Conexion.php");
$sql=$cn->prepare('SELECT * FROM producto');	
$sql->execute();			

		header("Access-Control-Allow-Origin: *");
		$data = array();
		$i=0;
		while($op=$sql->fetch())
		{
		$data[$i]=array(
		'codigo_producto' => $op['codigo_producto'],
		'codigo_seccion' => $op['codigo_seccion'],
		'nombre' => $op['nombre'],
		'cantidad' => $op['cantidad'],
		'imagen' => $op['imagen'],
		'tipo' => $op['tipo'],
		'descripcion' => $op['descripcion']
		);	
		$i++;
		}
	
echo json_encode($data);
?>

 
