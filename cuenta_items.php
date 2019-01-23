<?php
$linea = 0;
//Abrimos nuestro archivo
$archivo = fopen("Procesamiento/archivos_csv_procesados/2018-12_Guayaquil_robo_asalto_delito_universo.csv", "r");
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
?>