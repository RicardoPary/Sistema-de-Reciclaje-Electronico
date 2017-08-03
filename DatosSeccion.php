<?php 
include("Conexion.php");

$sql=$cn->prepare('SELECT * FROM seccion');

$sql->execute();

		header("Access-Control-Allow-Origin: *");
		$data = array();
		$i=0;
		while($op=$sql->fetch())
		{
		$data[$i]=array(
		'codigo_secccion' => $op['codigo_seccion'],
		'codigo_departamento' => $op['codigo_departamento'],
		'nombre' => utf8_encode($op['nombre']),
		'tipo' => $op['tipo']
		);	
		$i++;
		}	
echo json_encode($data);
?>



 