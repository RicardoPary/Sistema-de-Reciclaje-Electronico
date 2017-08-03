<?php
	header("Access-Control-Allow-Origin: *");
$cn=new PDO('mysql:host=localhost;dbname=sistema_reciclaje_electronico','root','');
$sql=$cn->prepare('SELECT * FROM producto');	
$sql->execute();	

 	
	$data = array(
		array('codigo_producto' => '1','nombre' => 'Cynthia'),
		array('codigo_producto' => '2','nombre' => 'Keith'),
		array('codigo_producto' => '3','nombre' => 'Robert'),
		array('codigo_producto' => '4','nombre' => 'Theresa'),
		array('codigo_producto' => '5','nombre' => 'Margaret')
	);
 
	echo json_encode($data);
?>