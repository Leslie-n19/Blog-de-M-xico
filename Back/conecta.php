<?php
if(!defined ('HOST')) define('HOST', 'localhost'); ///El almacenamiento de la BD esta dentro de la computadora 

if(!defined ('BD')) define('BD', 'historiabd'); ///Definir el nombre de la BD

if(!defined ('USER_BD')) define('USER_BD', 'root'); ///Definir usuario 

if(!defined ('PASS_BD')) define('PASS_BD', ''); ///Definir contraseña del usuario

$con = mysqli_connect(HOST,USER_BD,PASS_BD,BD) or die ("Error".mysqli_error($con));

?>