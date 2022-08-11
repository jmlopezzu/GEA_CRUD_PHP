<?php require("sesion.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>GEA</title>
</head>
<body>
<br>

<div class="d-flex justify-content-center">
Por medio de estas opciones se podrán realizar las operaciones básicas en toda aplicación
</div>
<br>
<h2>Actualmente el usuario con el documento número <?php echo  $_SESSION['documento']; ?> está online </h2>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <a href="crear" class="btn btn-primary">Insertar registros</a>
    </div>
    <div class="col-sm">
    <a href="consultar" class="btn btn-success">Consultar registros</a>
    </div>
    <div class="col-sm">
    <a href="actualizar"class="btn btn-info">Actualizar registros</a>
    </div>
    <div class="col-sm">
      <a href="eliminar" class="btn btn-danger">Eliminar registros</a>
    </div>
  </div>
</div>

  

  <div class="container">
      <a href="cerrarSesion" class="btn btn-danger">Cerrar sesión</a>
    </div>
</body>
</html>