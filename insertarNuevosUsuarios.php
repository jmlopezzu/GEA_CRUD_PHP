<?php
include("funciones.php");

$email=$_POST["email"];
$documento=$_POST["documento"];
$password=$_POST["password1"];

$passHash = password_hash($password,  PASSWORD_DEFAULT, [15]);

$tabla="registro(correo, documento, password)";

$parametros= "'".$email."','".$documento."', '".$passHash."'";
insertar($tabla, $parametros);
header("location: login");

?>