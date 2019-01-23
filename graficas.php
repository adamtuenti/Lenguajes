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


   
	  
    </div>
	

	<? 



	<input type="submit" name="" value="Busca" id="boton1" onclick = "funcion();">
	
	
	<?php
	

    
	if($_POST["pais"]==1){
		
			echo "El universo" ;
			ContarLineas("Procesamiento/archivos_csv_procesados/2018-12_Guayaquil_robo_asalto_delito_universo.csv");
		}else{
			echo "El super" ;


		}


	
	function ContarLineas($ruta){
		$linea = 0;
//Abrimos nuestro archivo
		$archivo = fopen($ruta, "r");
		//Lo recorremos
		while (($datos = fgetcsv($archivo, ",")) == true) 
		{
		  $num = count($datos);
		  $linea++;
		  //Recorremos las columnas de esa linea
		 
		}
		//Cerramos el archivo
		fclose($archivo);
		echo $linea-1;



	}

		

	

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

    <?php
		require_once("phpChart_Lite/conf.php");
	?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpChart - A Basic Chart</title>
</head>
<body>
    
<?php
$pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14)),'basic_chart');
$pc->draw();
?>

  
</body>
</html>