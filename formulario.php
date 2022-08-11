<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ejemplo GEA</title>
</head>


<body>
    <form>
        <div class="container register-form">
                    <div class="form">
                        <div class="note">
                            <p>Ejemplo de formulario.</p>
                        </div>
                        <div class="form-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre"  onchange="validarCampos()" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="documento" name="documento" placeholder="Documento de identidad" onchange="validarCampos()" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="password" type="password" name="password" class="form-control" placeholder="Contraseña" onchange="validarCampos()" required>
                                    </div>
                                    <div class="form-group">
                                        <input id="passwordConfirmacion" name="passwordConfirmacion" type="password" class="form-control" placeholder="Confirme su contraseña" onchange="validarCampos()" required>
                                    </div>
                                </div>
                            </div>
                            <button onchange="validarCampos()" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </div>
    </form>
    
         <div id="mensajeDocumento" class="mensajes"></div>
         <div id="mensajeNombre" class="mensajes"></div>
         <div id="passwordDiv" class="mensajes"></div>
</body>
<script src="validacion.js"></script>
</html>


