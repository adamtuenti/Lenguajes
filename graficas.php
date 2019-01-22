<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
  <title>Gráficas</title>
</head>
<body background="/fondoadam.jpg" style="background-attachment: fixed" >
  <legend  style="font-size: 14pt; color: #8000FF;"><h2 style="color: #FF3333"><center><strong>Gráficas Dinámicas</strong></center></h2></legend>
  <fieldset>
  <h3 style="font-size: 20pt; color: #B43104;"><center><strong>Seleccione la acción a ejecutar</strong></center></h3>
    <center><div class="Ingreso">

  <table border="0" align="center" valign="middle">
    <tr>
    <td rowspan=5>
    <form action="validacion.php" method="post">

    <table border="0">
	
	<div class="form-group">
    <tr><td><label style="font-size: 15pt"><b>Ingresar palabra para busqueda: </b></label></td>
      <td width=50 class="align-middle"> <input class="form-control" style="border-radius:15px;" require type="text" name="usuario" required placeholder="Dato......"></td></tr>
	  
	  
    </div>
	<select name="periodico">
	<option value="1">El Universo</option>
	<option value="2">El Comercio</option>
	
	<input type="submit" name="" value="Busca" id="boton1" onclick = "funcion();">
	
	
	<?php
	
	function validar($usuario){
		
	if(strlen($usuario)>1){
		echo strlen($usuario);

	}
	}
	
	
	echo "El pais elejido : ".$_POST["periodico"] ;
	
	?>
     
	
    
	<script>
		  function funcion(){
			alert('<?php echo validar($usuario); ?>');
			
			/* Escribir en el Documento*/

		  }
</script>

    
    <tr><td></td>
		<td width=50 class="align-middle"><p><a class="btn btn-danger" href="index.php">Regresar</a></p></td>
		
     
	  </tr></tr>
</fieldset>
    </table>
<table border="0" align="center" valign="middle">

     
</table>
    </form>

<!-- formulario registro -->

</form>
</div></center>

<!--Fin formulario registro -->

    </td>
    </tr>
    </table>
    </div></center></div></center>

  
</body>
</html>