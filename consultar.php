<?php include("funciones.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Consultar</title>
</head>
<body>
<h1 class="text-center">Consulta de registros</h1>
    <table  id="gea"  class="display nowrap" style="width:100%">  
        <thead>
        <tr>
            <th>Documento</th>
            <th>Dirección</th>
            <th>Correo</th>
            <th>Facultdad</th>
        </tr>
        </thead>
        <tbody>
    <?php 
            $tabla="usuario";
            $resultado=consultarSinWhere($tabla);
            while($extraer = pg_fetch_array($resultado)){
            $direccion=$extraer['direccion'];
            $correo=$extraer['correo'];
            $facultdad=$extraer['facultad'];
            $documento=$extraer['documento'];
    ?>
            <tr>
            <td><?php echo $documento; ?></td>
            <td><?php echo $direccion;  ?></td>
            <td><?php echo $correo;  ?></td>
            <td><?php echo $facultdad; ?></td>
            <?php
    }
    ?>
    </tbody>
  </table>

<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"  type="text/javascript"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"  type="text/javascript"></script>
<script>
$(document).ready(function() {
    $('#gea').DataTable( {
        responsive: true
    } );
} );
</script>



<a href="CRUD" class="btn btn-secondary">Ir Inicio</a>

<br>
</body>
</html>