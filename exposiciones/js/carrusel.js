$(document).ready(function() {

    var actual = 1;
    var nImagenes = $(".slider").find('img').length;
    $(".slider img:nth-of-type(" + actual + ")").attr("class", "actual");

    $(".anterior").click(function(evento) {
        if(actual == 1) {
            actual = nImagenes;
            $(".slider img:nth-of-type(" + 1 + ")").removeAttr("class");
            $(".slider img:nth-of-type(" + actual + ")").attr("class", "actual");
        }
        else {
            $(".slider img:nth-of-type(" + actual + ")").removeAttr("class");
            $(".slider img:nth-of-type(" + (actual - 1) + ")").attr("class", "actual");
            actual -= 1;
        }
    });

    $(".siguiente").click(function(evento) {
        if(actual == (nImagenes)) {
            actual = 1;
            $(".slider img:nth-of-type(" + nImagenes + ")").removeAttr("class");
            $(".slider img:nth-of-type(" + actual + ")").attr("class", "actual");
        }
        else {
            $(".slider img:nth-of-type(" + actual + ")").removeAttr("class");
            $(".slider img:nth-of-type(" + (actual + 1) + ")").attr("class", "actual");
            actual += 1;
        }
    });
});
