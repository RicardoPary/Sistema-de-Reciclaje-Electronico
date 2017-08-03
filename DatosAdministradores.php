<?php 
include("Conexion.php");

$sql=$cn->prepare('SELECT * FROM trabajador');
$sql->execute();
	
		header("Access-Control-Allow-Origin: *");
		$data = array();
		$i=0;
		while($op=$sql->fetch())
		{
		$data[$i]=array(
		'codigo_persona' => $op['codigo_persona']
		);	
		$i++;
		}
	
echo json_encode($data);
?>

 
