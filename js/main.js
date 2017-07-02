$(document).ready(function() {
    $(window).scroll(function() {
        if ($("body").scrollTop() > 500) {
            $("header h1").css("font-size", "0px");
            $("header h1").css("padding", "0px");
            $("header h1").css("transition", "all 0.25s ease");
            $(".subir").css("width", "75px");
            $(".subir").css("height", "75px");
            $(".subir").css("transition", "all 0.25s ease");
        } else {
            $("header h1").css("font-size", "30px");
            $("header h1").css("padding", "10px");
            $("header h1").css("transition", "all 0.25s ease");
            $(".subir").css("width", "0");
            $(".subir").css("height", "0");
            $(".subir").css("transition", "all 0.25s ease");
        }
    });
    $(".boton-responsive").click(function(evento) {
        evento.preventDefault()
        var posicion = $(".submenu-responsive").position().top;
        if (posicion == -500) {
            $(".submenu-responsive").animate({
                top: "100px"
            });
        }
        if (posicion == 100) {
            $(".submenu-responsive").animate({
                top: "-500px"
            });
        }

    });

    $(".subir").click(function() {
        $('body').animate({
            scrollTop: $("section").offset().top
        }, 'slow');
    });
});
