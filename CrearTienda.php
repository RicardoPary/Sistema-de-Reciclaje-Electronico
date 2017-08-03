<?php
include("Conexion.php");



	$Nombre=$_POST['nombre'];
	$Tipo=$_POST['tipo'];
	$Ubicacion=$_POST['ubicacion']; 
	$Latitud=$_POST['latitud'];
	$Longitud=$_POST['longitud'];


	$consulta=$cn->prepare('INSERT INTO tienda(nombre,tipo,ubicacion,latitud,longitud)VALUES(:Nombre,:Tipo,:Ubicacion,:Latitud,:Longitud)');
	$consulta->execute(array(':Nombre'=>$Nombre,':Tipo'=>$Tipo,':Ubicacion'=>$Ubicacion,':Latitud'=>$Latitud,':Longitud'=>$Longitud));
	$resultado=$consulta->fetch();


?>