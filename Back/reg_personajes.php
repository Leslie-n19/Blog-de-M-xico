<?php
require "conecta.php";
///Recibe Variables

$file_name = $_FILES['archivo']['name'];	//Nombre real del archivo
$file_tmp  = $_FILES['archivo']['tmp_name'];//Nombre temporal del archivo
$cadena    = explode(".", $file_name);		//Separa el nombre para obtener la extension
$ext       = $cadena[1];					//Extension
$dir       = "../img/";                      //carpeta donde se guardan los archivos
$file_enc  = md5_file($file_tmp);			//Nombre del archivo encriptado




    /*imagen ->>>Dragon.jpg

    nombre(real) ->Dragon.jpg
    nombre(temporal) ->Dragon.jpg
                [0       1]
    Cadena -> Dragon | jpg
    extension -> jpg
    direccion -> ../img/
    encriptar -> Dragon.jpg -> 123455
    nombre de archivo = 123455.jpg*/

$nombre         = $_POST['nombre'];
$lugarNac       = $_POST['lugarNac'];
$Nacimiento     = $_POST['Nacimiento'];
$Fallecimiento  = $_POST['Fallecimiento'];
$LugarFac       = $_POST['LugarFac'];
$descripcion    = $_POST['descripcion'];


$fileName1  = "$file_enc.$ext";	



//Inserta en DB
$sql = "INSERT INTO personajes VALUES (0,'$nombre','$lugarNac','$Nacimiento','$Fallecimiento','$LugarFac','$descripcion','$fileName1','$file_name')";


$res = mysqli_query($con, $sql);

if ($file_name != '') {
	$fileName1  = "$file_enc.$ext";	
	@copy($file_tmp, $dir.$fileName1);	
}


if ($res)
    echo 1;
else 
    echo 0;
?>