<?php
include("funciones.php");

$email=$_POST["email"];
$documento=$_POST["documento"];
$direccion=$_POST["direccion"];
$ciudad=$_POST["ciudad"];
$facultad=$_POST["facultad"];
$intercampus=(int)$_POST["intercampus"];

echo $intercampus;
echo "<br>";
echo $facultad;

$tabla="usuario(direccion, correo, documento, ciudad, facultad, intercampus)";

$parametros= "'".$direccion."','".$email."', '".$documento."', '".$ciudad."',  '".$facultad."',  '".$intercampus."'
";
insertar($tabla, $parametros);
header("location: CRUD");

?>