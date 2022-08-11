<?php
$nombre="AB";
$documento=$_POST["documento"];
$password=$_POST["password"];
$passwordConfirmacion=$_POST["passwordConfirmacion"];

echo $nombre;
echo "<br>";
echo $documento;
echo "<br>";
echo $password;
echo "<br>";
echo $passwordConfirmacion;
echo "<br>";

if(isset($nombre, $documento, $password, $passwordConfirmacion)){
    $nombreConvertido = strtoupper($nombre);
        if(strlen($nombreConvertido)>3 && $passwordConfirmacion==$password){
        echo "El nombre es: ".$nombreConvertido." "."y cumple con lo necesario (más de 3 caracteres y menos de 30)";
        echo "<br>";
        echo "Las contraseñas son iguales";
    }else{
        echo "Algo está mal en la contraseña o en el texto";
    	header("Location:formulario");
    }
}else{
    echo "No existen todos los datos";
	header("Location:formulario");

}


?>