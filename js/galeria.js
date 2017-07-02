$(document).ready(function() {
    $(".foto").click(function() {
        var fotoSeleccionada = $(this).children().attr("src");
        $(".principal").children().attr("src", fotoSeleccionada);
    });

    $(".principal").click(function() {
        var fotoPrincipal = $(".principal").children().attr("src");
    });
});
