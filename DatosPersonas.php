<?php 
include("Conexion.php");
$sql=$cn->prepare('SELECT * FROM persona');	
$sql->execute();			

		header("Access-Control-Allow-Origin: *");
		$data = array();
		$i=0;
		while($op=$sql->fetch())
		{
		$data[$i]=array(
		'codigo_persona' => $op['codigo_persona'],
		'nombre' => $op['nombre'],
		'genero' => $op['genero'],
		'fecha_nacimiento' => $op['fecha_nacimiento'],
		'telefono' => $op['telefono']
		);	
		$i++;
		}
	
echo json_encode($data);
?>

