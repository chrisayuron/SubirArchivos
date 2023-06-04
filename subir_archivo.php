<?php
/*Cuando enviamos post se genera $_POST
Cuando enviamos get se genera $_GET
Cuando enviamos archivos se genera $_FILES
Cuando enviamos un archivo al servidor se generan 5 propiedades


foreach($_FILES["archivo"] as $propiedad => $valor){
se coloca el name del input tipo file
echo "Propiedad: {$propiedad} - valor {$valor} <br />";
} 
//con estas lineas de codigo podemos observar las propiedades de un archivo

name => Nombre del archivo
type => Tipo de archivo (image/jpeg)
tmp_name => Ruta temporal del archivo
error => 0 o 1 indicando si hay error o no. 0 False
size => Tamano del archivo en bytes

*/
$archivo = $_FILES["archivo"]["tmp_name"]; //tomamos el archivo temporal
$destino = "archivos/{$_FILES["archivo"]["name"]}"; //asignamos la ruta e incluimos el nombre del archivo
if($_FILES["archivo"]["type"]=="text/plain"){ //Aqui podemos verificar que el archivo sea de un tipo especifico
    move_uploaded_file($archivo,$destino); //funcion que almacena el archivo, le pasamos el archivo y la ruta de destino como parametro
    echo "Archivo subido ";
}else{
    echo "Formato incorrecto  <br />";
    echo "<a href='enviar_archivo.php'>REGRESAR</a>";
}
 

?>