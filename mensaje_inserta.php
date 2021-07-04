<?php 
session_start();
include("conexion.php");

$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
$usuario=$_SESSION['registro'];



$insertar_mensaje=mysqli_query($datos_base,"INSERT INTO mensajes_tabla (usuario, Asunto, Mensaje) VALUES('$usuario', '$asunto','$mensaje')");

echo $insertar_mensaje;
header("location:foro_social.php");


?>