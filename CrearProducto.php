<?php
include("Conexion.php");
	
	$codigo_seccion=$_POST['codigo_seccion'];
	$nombre=$_POST['nombre'];
	$cantidad=$_POST['cantidad'];
	
	$NombreFoto=$_FILES['imagen']['name'];
	$Ruta=$_FILES['imagen']['tmp_name'];	
    $Destino="Productos/".$NombreFoto;
	copy($Ruta,$Destino);	
		
	$tipo=$_POST['tipo'];
	$descripcion=$_POST['descripcion'];
	
	
				
$consulta=$cn->prepare('INSERT INTO producto(codigo_seccion,nombre,cantidad,imagen,tipo,descripcion)VALUES(:codigo_seccion,:nombre,:cantidad,:imagen,:tipo,:descripcion)');
$consulta->execute(array(':codigo_seccion'=>$codigo_seccion,':nombre'=>$nombre,':cantidad'=>$cantidad,':imagen'=>$Destino,':tipo'=>$tipo,':descripcion'=>$descripcion));

	



//header("Location: RegistrarCuenta.php");
?>

