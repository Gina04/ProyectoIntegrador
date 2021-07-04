<?php 
include("conexion.php");

$correo=$_POST['correo'];


$buscar_clave=mysqli_query($datos_base,"SELECT usuario, mail, clave FROM login_alumnos WHERE mail='$correo'");

 if(mysqli_num_rows($buscar_clave)==0){

	header("Location:recuperar_clave.php?h=error");

 } else {

	$res= mysqli_fetch_array($buscar_clave);
  
	
	$usuario2= $res['usuario'];
	$clave= $res['clave'];
	$mail= $res['mail'];
	
    

	$destino=$mail;

	$asunto="Mensaje enviado de Aula virtual";


	$cuerpo="Correo:".$mail."\r\n";
	$cuerpo.="Usuario:".$usuario."\r\n";
	$cuerpo.="Clave:".$clave;

	$remitente= "FROM: Aula Virtual <georginabosque@gmail.com>";

	mail($destino, $asunto, $cuerpo, $remitente);

	header("Location:mensaje_enviado.php");

}


?>
	








