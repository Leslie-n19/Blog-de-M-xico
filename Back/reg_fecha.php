<?php
require "conecta.php";
///Recibe Variables

$file_name = $_FILES['archivo']['name'];	//Nombre real del archivo
$file_tmp  = $_FILES['archivo']['tmp_name'];//Nombre temporal del archivo
$cadena    = explode(".", $file_name);		//Separa el nombre para obtener la extension
$ext       = $cadena[1];					//Extension
$dir       = "../img/";                      //carpeta donde se guardan los archivos
$file_enc  = md5_file($file_tmp);			//Nombre del archivo encriptado


$titulo         = $_POST['titulo'];
$fecha       = $_POST['fecha'];
$lugar     = $_POST['lugar'];
$descripcion  = $_POST['descripcion'];

$fileName1  = "$file_enc.$ext";	

//Inserta en DB
$sql = "INSERT INTO fechas VALUES (0,'$titulo','$fecha','$lugar','$descripcion','$fileName1','$file_name')";


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