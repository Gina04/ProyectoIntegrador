<?php session_start();

$usuario_ingreso=$_POST['usuario'];
$clave_ingreso=$_POST['clave'];

include("conexion.php");


$validar_datos=mysqli_query($datos_base,"SELECT usuario, clave FROM login_alumnos WHERE usuario='$usuario_ingreso' AND clave='$clave_ingreso'");



if(mysqli_num_rows($validar_datos)==1){

	$_SESSION['registro']=$usuario_ingreso;


	header("Location:segundo_documento.php");


}else{
	header("Location:index.php?i=error");
}






 ?>