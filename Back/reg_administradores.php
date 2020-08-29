<?php 
require "conecta.php"; 

$nombre         =$_POST['nombre'];
$email          =$_POST['email'];
$password       =$_POST['password'];
$nacimiento     =$_POST['nacimiento'];

$sql = "INSERT INTO administradores VALUES (0,'$nombre','$email','$password','$nacimiento')"; //Se toman los datos del formulario y se insertan en la tabla de SQL

$respuesta = mysqli_query($con, $sql); //Verificar si el código de SQL es correcto, sí es correcto va a guardar 1 y si es incorrecto 0 (True o false)

if($respuesta)
    echo 1;
else
    echo 0;
?>