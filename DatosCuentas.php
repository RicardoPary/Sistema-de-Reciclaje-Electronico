<?php 
include("Conexion.php");

$sql=$cn->prepare('SELECT * FROM cuenta');

$sql->execute();

$sql->execute();
	
		header("Access-Control-Allow-Origin: *");
		$data = array();
		$i=0;
		while($op=$sql->fetch())
		{
		$data[$i]=array(
		'codigo_cuenta' => $op['codigo_cuenta'],
		'codigo_persona' => $op['codigo_persona'],
		'correo_electronico' => $op['correo_electronico'],
		'contrasena' => $op['contrasena'],
		'nick' => $op['nick'],
		'tipo' => $op['tipo'],
		'foto' => $op['foto']
		);	
		$i++;
		}
	
echo json_encode($data);
?>

 