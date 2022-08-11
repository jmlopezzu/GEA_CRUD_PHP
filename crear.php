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
        <form action="insertarRegistros.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Correo electrónico</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Correo electrónico" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Documento</label>
                <input type="number" name="documento" class="form-control" id="inputPassword4" placeholder="Documento" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Dirección</label>
                <input type="text" name="direccion" class="form-control" id="inputAddress" placeholder="Ejemplo: Carrera 1234"required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputCity">Ciudad</label>
                <input type="text" name="ciudad" class="form-control" id="inputCity" required>
                </div>
                <div class="form-group col-md-8">
                <label for="inputState">Facultdad</label>
                <select id="inputState" class="form-control" name="facultad" >
                    <option selected >Seleccione su facultad</option>
                    <option>Ciencias Exactas y Naturales</option>
                    <option>Ingeniería</option>
                    <option>Administración</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="intercampus" value="1">
                <label class="form-check-label" for="gridCheck">
                    ¿Usa el servicio de Intercampus?
                </label>
                </div>
            </div>
        <button type="submit" class="btn btn-success">Almacenar</button>
        <a href="CRUD" class="btn btn-secondary">Ir Inicio</a>
        </form>
    </div>
</body>
</html>