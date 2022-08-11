
<?php
$conexion=pg_connect("user=postgres password=root port=5432 dbname=GEA host=localhost");
	if(!$conexion){
		echo "Conexión no exitosa";
	}else{
	}

?>