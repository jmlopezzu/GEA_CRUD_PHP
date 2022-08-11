function validarCampos() {

    //Se recibe el documento
    var documento = document.getElementById("documento").value;
    // console.log("El documento es: "+documento);

    //Div para el mensaje del documento
    var mensajeDocumento = document.getElementById('mensajeDocumento');

     //Se recibe el nombre
    var nombre = document.getElementById("nombre").value;

    //Div para el mensaje del nombre
    var mensajeNombre = document.getElementById('mensajeNombre');

    //Se recibe el password
    var password = document.getElementById("password").value;

    //Se recibe la confirmación del password
    var passwordConfirmación = document.getElementById("passwordConfirmacion").value;

   //Div para el mensaje del password
    var passwordDiv = document.getElementById('passwordDiv');

    //Se seleccionan los botones para los atributos
    var button = document.querySelector("button");
    var form = document.querySelector("form");


    button.setAttribute("disabled", "disabled");
    
    if (isNaN(documento)==true || (documento.length<8) || (nombre.length<3) || (password!==passwordConfirmación)) {
        //Si el documento no es un número o el nombre tiene menos de 3 caracteres entonces se deshabilita el botón
        button.setAttribute("disabled", "disabled");
    
        if(isNaN(documento)==true || documento.length<8){
            mensajeDocumento.innerHTML=`<label> El documento debe ser un valor numérico sin puntos y tener por lo menos 8 dígitos</label>`;
        }else{
            mensajeDocumento.innerHTML=``;
        }
        if (nombre.length<3) {
            mensajeNombre.innerHTML=`<label> El nombre debe tener más de 3 caracteres y menos de 30 </label>`;
        }else{
            mensajeNombre.innerHTML=``;
        }
        if (password!==passwordConfirmación) {
            passwordDiv.innerHTML=`<label> Las contraseñas no son iguales </label>`;
        }else{
            passwordDiv.innerHTML=``;
        }
    }else{
        button.removeAttribute("disabled", "disabled");
        mensajeDocumento.innerHTML=``;
        mensajeNombre.innerHTML=``;
        passwordDiv.innerHTML=``;
        button.setAttribute("type", "submit");
        form.setAttribute("action", "servidor.php");
        form.setAttribute("method", "post");
    }
}






