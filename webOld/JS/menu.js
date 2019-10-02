/*Menu despegable*/
$(document).ready(main);
var contador = 1;

function main() {
    $('.menu_bar').click(function () {
        //$('nav').toggle();
        if (contador == 1) {
            $('nav').animate({
                left: '0'
            });
            contador = 0;
        }
        else {
            $('nav').animate({
                left: '-100%'
            });
            contador = 1;
        }
    });
    $('.botonm1').click(function () {
        //$('nav').toggle();
        if (contador == 1) {
            $('nav').animate({
                left: '0'
            });
            contador = 0;
        }
        else {
            $('nav').animate({
                left: '-100%'
            });
            contador = 1;
        }
    });
}




/*cambio de color del menu*/
$(document).ready(function () {


    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('header').addClass('header2');
            document.getElementById('imgcam').src = "IMAGES/GENERAL/LOGO.png";

        } else {
            $('header').removeClass('header2');
            document.getElementById('imgcam').src = "IMAGES/GENERAL/LOGO.png";

        }
    });


    var height = $(window).height();
    var width = $(window).width();
    ajustesIniciales();
    function ajustesIniciales() {
        $(".bodys").css({ "margin-top": height - 390 + "px" });
        $(".logos").css({
            "top": (height / 2) - 75 + "px",
            "left": (width / 2) - 150 + "px",
        });
        $(".menus").css({
            "background-color": "rgb(255,255,255)",
        });

    }
    $(document).scroll(function () {
        var scrollTop = $(this).scrollTop();
        var pixels = scrollTop / 70;
        if (scrollTop < height) {
            $(".ContG").css({
                "-webkit-filter": " blur(" + pixels + "px) ",
                "-moz-filter": " blur(" + pixels + "px) ",
                "-o-filter": "blur(" + pixels + "px) ",
                "-ms-filter": "blur(" + pixels + "px) ",

            });
        }

    });

});




$(function () {

    $('a[href*=#]').click(function () {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            && location.hostname == this.hostname) {

            var $target = $(this.hash);

            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

            if ($target.length) {

                var targetOffset = $target.offset().top;

                $('html,body').animate({ scrollTop: targetOffset }, 1000);

                return false;

            }

        }

    });

});






