<?php
require("sesion.php");
require("funciones.php");


//Recibo por post
$email_user = $_POST['correo'];
$pass_user = $_POST['password'];


//Saco los datos de Usuario para validar
$consulta_login = "
SELECT correo, password, documento
FROM   registro
WHERE  correo='$email_user'";

$ejecutar_consulta_login = pg_query($consulta_login);

//Consulta
$extraer = pg_fetch_array($ejecutar_consulta_login);

$documento = $extraer['documento'];
$password = $extraer['password'];
$email = $extraer['correo'];



if (password_verify($pass_user, $password) AND $email_user==$email) {
        //La contraseña y el Email son iguales}
	$_SESSION['documento'] = $documento;
	header("Location:CRUD");



}else{
        //La contraseña y el Email NO son iguales
	header("Location:login");    


}

