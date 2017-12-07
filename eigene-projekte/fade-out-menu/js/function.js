$(document).ready(function () {

    $('#menu-button').on("mouseover",function () {
        $('.wl-line1').css("background","#FF7900");
        $('.wl-line2').css("background","#FF7900");
        $('.wl-line3').css("background","#FF7900");
    });

    $('#menu-button').on("mouseleave",function () {
        $('.wl-line1').css("background","black");
        $('.wl-line2').css("background","black");
        $('.wl-line3').css("background","black");
    });

    $('#menu-button').on("click",function () {
        $('nav').fadeIn(1500);
        $('nav').on("mouseleave",function () {
            $('nav').fadeOut(1500);
        });
    });

});