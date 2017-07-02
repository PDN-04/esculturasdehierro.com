$(document).ready(function() {
    $("form").submit(function(event) {
        var errores = false;

        $(".error").css("display", "none");
        $(".error").html("");
        $(".respuesta").html("");
        $(".respuesta").css("display", "none");
        $(".loading").css("display", "inline");

        var nombre = $("#nombre").val();
        var email = $("#email").val();
        var mensaje = $("#mensaje").val();

        if ($("#nombre").val() == "") {
            $("#errorNombre").html("El nombre no puede estar vacío");
            $("#errorNombre").css("display", "block");
            $("#nombre").focus();
            errores = true;
        }

        if ($("#email").val() == "") {
            $("#errorEmail").html("El correo electrónico no puede estar vacío");
            $("#errorEmail").css("display", "block");
            $("#email").focus();
            errores = true;
        } else {
            var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (!patron.test(email)) {
                $("#errorEmail").html("La dirección de correo electrónico que has introducido no es válida.");
                $("#errorEmail").css("display", "block");
                $("#email").focus();
                errores = true;
            }
        }

        if ($("#mensaje").val() == "") {
            $("#errorMensaje").html("El mensaje no puede estar vacío");
            $("#errorMensaje").css("display", "block");
            $("#mensaje").focus();
            errores = true;
        }

        var data = "nombre" + "=" + nombre + "&" + "email" + "=" + email + "&" + "mensaje" + "=" + mensaje;
        if(errores) {
            data += "&" + "error" + "=" + true;
        }

        $.ajax({
            type: "post",
            url: "enviar.php",
            data: {
                'data': data
            },
            success: function(respuesta) {
                $(".loading").css("display", "none");
                if (!errores) {
                    $(".respuesta").html("Mensaje enviado correctamente.");
                   $(".respuesta").css("background-color", "#005000");
                }
                else {
                    $(".respuesta").html("Algunos campos del formulario contienen errores. Por favor, revíselos y vuelva a intentarlo.");
                    $(".respuesta").css("background-color", "#750000");
                }
                $(".respuesta").css("display", "block");
            }
        });

        return false;
    });
});
