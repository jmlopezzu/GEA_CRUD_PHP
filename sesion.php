<?php

echo session_id();
session_start();

$varSeccion=$_SESSION['documento'];

if($varSeccion== null || $varSeccion==''){

    header("Location: login");

}

?>