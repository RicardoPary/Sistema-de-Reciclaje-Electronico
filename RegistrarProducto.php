<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registro de Datos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" media="all" href="css/RegistrarCuenta.css" />
<style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo15 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #000099; font-weight: bold; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

</style>

<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css"/>
<link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables_themeroller.css"/>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>




<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" language="javascript" src="DataTables/jquery.dataTables.js"></script>


        <script type="text/javascript">
            $(document).ready(function(){
                $('#CodigoDepartamento').change(function(){
                    var id=$('#CodigoDepartamento').val();
                    $('#seccion').load('ajax.php?id='+id);
                });    
            });
        </script>

			

  
    <script>
    $(function(){
        $("#formuploadajax").on("submit", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("formuploadajax"));
            formData.append("dato", "valor");
            //formData.append(f.attr("name"), $(this)[0].files[0]);
            $.ajax({
                url: "CrearProducto.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
	            processData: false,
				success:  function() {   alert('Producto registrado con exito');  }
            })               
        });
    });
    </script>


		
		
<script>
$(document).ready(function() {
    $('#example').dataTable( {
        "language": {         	
	"processing": "cargando......",
	"lengthMenu": "Mostrar _MENU_ registros",
	"zeroRecords": "No existen registros",
		"info": "pagina _PAGE_ de _PAGES_",
	"infoEmpty": "Ningun registro disponible",
	"infoFiltered": "(filtrado de  _MAX_ total registros)",
	"infoPostFix": "",
	"search": "Buscar",
	"url": "",
	"paginate": {
		"first":    "Primero",
		"previous": "Anterior",
		"next":     "Siguiente",
		"last":     "Ultimo"
				}				
        }
    } );
} );
</script>





</head>

<body bgcolor="#F4F4F4">
<?php 
include('Conexion.php');

$consulta=$cn->prepare('SELECT * FROM departamento');
$consulta->execute();
?>


<form enctype="multipart/form-data" id="formuploadajax" method="post">

<fieldset>
<legend><strong>Informacion Producto Electronico</strong></legend>
<table width="776" height="74" border="0" cellpadding="2" cellspacing="0">
          
 <tr>
   <td scope="row">&nbsp;</td>
   <td height="26" scope="row"><label for="label2">Departamento:</label></td>
   <td>
   
    <select size="1" name="Genero" id="CodigoDepartamento">
	
	<?php 
		
	while($result=$consulta->fetch())
	{
	?>
	<option value="<?php echo $result['codigo_departamento']?>"><?php echo $result['nombre'];?></option>
    <?php 
	}
	?>
      </select>    </td>
   <td>&nbsp;</td>
   <td><label for="label3">Tipo:</label></td>
   <td>
   
     <select size="1" name="tipo" id="Tipo">
	 
	 <option value="Celular">Celular</option>
	 <option value="Computadora">Computadora</option>
	 <option value="Dron">Dron</option>
	 <option value="Circuito">Circuito</option>
	 <option value="Televisor">Televisor</option>
	 <option value="Radio">Radio</option>
	 <option value="Cable">Cable</option>
	 <option value="Otros">Otros</option>
	 </select>   </td>
   <td>&nbsp;</td>
  </tr>
 
 <tr>
     <td width="11" scope="row">&nbsp;</td>
     <td width="145" height="26" scope="row"><label for="label">Seccion:</label></td>
     <td width="180">
	  <div id="seccion">
	 <select name="edo">
       <option value="">seccion</option>
     </select>
	 </div>	 </td>
     <td width="21">&nbsp;</td>
     <td width="121"><label for="label3">Descripcion:</label></td>
     <td width="180" rowspan="3">
	 <textarea name="descripcion" id="Descripcion" cols="35" rows="5"></textarea>	</td>
     <td width="22">&nbsp;</td>
  </tr>
 
 <tr>
     <td width="11" scope="row">&nbsp;</td>
     <td width="145" height="26" scope="row"><label for="label">Nombre:</label></td>
     <td width="180"><input type="text" name="nombre"  size="30" maxlength="100" id="Nombre" /></td>
     <td width="21">&nbsp;</td>
     <td width="121"></td>
     <td width="22">&nbsp;</td>
  </tr>
          
 <tr>
     <td height="22" scope="row">&nbsp;</td>
     <td scope="row"><label for="label3">Cantidad:</label></td>
     <td><input type="text" name="cantidad"  size="30" maxlength="128" id="Cantidad"/></td>
	 
	 
	 
     <td>&nbsp;</td>
     <td></td>
     <td>&nbsp;</td>
  </tr>
 
 <tr>
     <td height="22" scope="row">&nbsp;</td>
     <td scope="row"><label for="label3">Imagen:</label></td>
     <td colspan="5"><input type="file" name="imagen" id="Imagen"/></td>
    </tr>
</table>
</fieldset>
	
	 <fieldset>
 <table width="776" height="34" border="0" cellpadding="0" cellspacing="0">
   
 <tr>
  <td width="25" height="32" scope="row">&nbsp;</td>
  <td width="96"><input name="submit" type="submit" class="submit" value="Registrar"/></td>
  <td width="28">&nbsp;</td>
  <td width="99"><input type="reset" name="submit12"id="submit12"value="Limpiar"class="submit"/></td>
  <td width="247">&nbsp;</td>
 </tr>
 </table>
 </fieldset>

</form>



<div style="width:790px; margin:10px auto;">
  <table width="786"  border="0" id="example">
    <thead>
      <tr >
        <td width="111" height="25"><span class="Estilo15">Imagen</span></td>
        <td width="84" height="25"><span class="Estilo15">Codigo</span></td>
        <td width="105"><span class="Estilo15">Codigo Seccion</span></td>
        <td width="103"><span class="Estilo15">Nombre</span></td>
        <td width="90"><span class="Estilo15">Cantidad</span></td>
        <td width="89"><span class="Estilo15">Tipo</span></td>
        <td width="174"><span class="Estilo15">Descripcion</span></td>
		<td width="174"><span class="Estilo15">Acciones</span></td>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td width="111" height="25"><span class="Estilo15">Imagen</span></td>
        <td width="84" height="25"><span class="Estilo15">Codigo</span></td>
        <td width="105"><span class="Estilo15">Codigo Seccion</span></td>
        <td width="103"><span class="Estilo15">Nombre</span></td>
        <td width="90"><span class="Estilo15">Cantidad</span></td>
        <td width="89"><span class="Estilo15">Tipo</span></td>
        <td width="174"><span class="Estilo15">Descripcion</span></td>
		<td width="174"><span class="Estilo15">Acciones</span></td>
      </tr>
    </tfoot>
    <tbody>
      <?php 


	$sql=$cn->prepare('SELECT * FROM producto');	
	$sql->execute();		
	
  while($op=$sql->fetch())	 	
   { ?>
      <tr>
        <td><span class="Estilo3"><img src=<?php echo $op['imagen'];?> width="100" height="91" /></span></td>
        <td><span class="Estilo3"><?php echo $op['codigo_producto'];?></span></td>
        <td><span class="Estilo3"><?php echo $op['codigo_seccion'];?></span></td>
        <td><span class="Estilo3"><?php echo $op['nombre'];?></span></td>
        <td><span class="Estilo3"><?php echo $op['cantidad'];?></span></td>
        <td><span class="Estilo3"><?php echo $op['tipo'];?></span></td>
        <td><span class="Estilo3"><?php echo $op['descripcion'];?></span></td>
      	<td>
		<span class="Estilo3"><a href="EliminarProducto"></a></span>
		<a href="EliminarProducto.php">Eliminar<i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a>
		<a href="">Modificar<i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>

		</td>
      </tr>
      <?php		
}	
?>
    </tbody>
  </table>
</div>




</body>
</html>
