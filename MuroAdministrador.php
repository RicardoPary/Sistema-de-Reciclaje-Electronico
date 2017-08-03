<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Muro Administrador</title>

<link rel="stylesheet" href="css/MuroAdministrador.css" type="text/css"/> 

<script type="text/javascript">
	$(document).ready(function() 
	{							
		CargarMuro();	
		function CargarMuro()
		{  	$("#Medio").load('Secciones.php');	}
	});


$(document).ready(function()
{
   $("p a").each(function(){
      var href = $(this).attr("href");
	 
	  $(this).attr({ href: "#"});
      $(this).click(function(){	    
	  $("#Medio").load(href);		 
		 
      });
   });
});
</script>

</head>

<body>
<?php   
include('Conexion.php');
  $cod=$_POST['CodigoCuenta'];  
 
  $sql=$cn->prepare('SELECT * FROM cuenta WHERE codigo_cuenta=:Codigo');
  $sql->execute(array(':Codigo'=>$cod));
  $op=$sql->fetch(); 
?>

<div class="Menudiv">
  <span><img src=<?php echo $op['foto'];?> width="130" height="106" class="foto1"/></span>
  <p class="letra1"><strong>Administracion Personas</strong></p>
		 
	
<p><a href="RegistrarAdministrador.php" class="letra2">Registrar Administrador</a></p>

	
		
		<p><a href="RegistrarATrabaja.php" class="letra2">Registrar A Trabaja</a>	</p>
	
	
	
	
	<p><a href="RegistrarCuenta.php" class="letra2">Registrar Cuenta</a>	</p>
	
	
	
	
		<p><a href="RegistrarEmpleado.php" class="letra2">Registrar Empleado</a>	</p>
	
		
	
		
		
	
							
			<p><a href="RegistrarPersona.php" class="letra2">Registrar Persona</a>	</p>
	
		<p class="letra1"><strong>Administracion Productos</strong></p>
			<p><a href="RegistrarProducto.php" class="letra2">Registrar Producto</a>	</p>
			<p><a href="RegistrarAlmacenadoEn.php" class="letra2">Almacenado de Productos</a>	</p>

	
	
	
	
	
	<p class="letra1"><strong>Administracion Tiendas</strong></p>
			<p><a href="RegistrarTienda.php" class="letra2">Registrar Tienda</a>	</p>
			<p><a href="RegistrarAlmacen.php" class="letra2">Registrar Almacen</a></p>
			<p class="letra1"><strong>Departamentos</strong></p>
			
	<p><a href="RegistrarDepartamento.php" class="letra2">Registrar Departamento</a>	</p>
				<p><a href="RegistrarSeccion.php" class="letra2">Registrar Seccion</a>	</p>
	
	
			
	
			
	
	
	
	
</div>

<div id="Medio" style="width:1040px; margin:10px; padding:0px; float:left; margin-left:5px;border:1px #E5E5E5 solid;">					 
</div>

</body>
</html>
