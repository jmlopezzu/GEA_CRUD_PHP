<?php 
include("funciones.php"); 
$id=(int)$_POST["eliminar_dato"];
$tabla="usuario";
$where="id_usuario=$id";
eliminar($tabla, $where);

?>