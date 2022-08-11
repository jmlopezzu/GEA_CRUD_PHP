<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Crear</title>
</head>
<body>

    <h1 class="text-center">Formulario de registro</h1>
    <div class="d-flex justify-content-center">
        <form action="insertarNuevosUsuarios.php" method="post">
        <div class="form-row">
                <div class="form-group col-md-12">
                <label for="documento">Documento de Identidad</label>
                <input type="number" name="documento" class="form-control" id="documento" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico" required>
                </div>
               
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="password1">Contraseña</label>
                <input type="password" name="password1" class="form-control" id="password1" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="password2">Confirme su Contraseña</label>
                <input type="password" name="password2" class="form-control" id="password2" required>
                </div>
            </div>
      
     
        <button type="submit" class="btn btn-success">Almacenar</button>
        <a href="cerrarSesion.php" class="btn btn-secondary">Ir Inicio</a>
        </form>
    </div>
</body>
</html>