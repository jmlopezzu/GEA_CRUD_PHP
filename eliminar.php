<?php include("funciones.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Consultar</title>
</head>
<body>
<h1 class="text-center">Eliminar registros</h1>
<div class="row justify-content-center">
    <div class="col-auto">
      <table class="table table-responsive" >
      <table class="center" border="1">  
        <thead>
        <tr>
            <th>Documento</th>
            <th>Correo</th>
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
    <?php 
            $tabla="usuario";
            $resultado=consultarSinWhere($tabla);
            while($extraer = pg_fetch_array($resultado)) {
            $nombre=$extraer['documento'];
            $correo=$extraer['correo'];
            $id=$extraer['id_usuario'];
    ?>
            <tr id="borrar<?php echo $id; ?>">
            <td><?php echo $nombre;  ?></td>
            <td><?php echo $correo;  ?></td>
            <td> <button onclick="eliminarConAjax(<?php  echo $id; ?>)" class="btn btn-danger">Eliminar</button></td>
            <?php
    }
    ?>
    </tbody>
  </table>


<script src="eliminarAjax.js"></script>
<a href="CRUD" class="btn btn-secondary">Ir Inicio</a>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<br>
</body>
</html>