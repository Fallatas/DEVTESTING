$(document).ready(function () {

    function UD_BOX_TEST(){
        UD_WIDTH = $(window).width();
        console.log(UD_WIDTH);

        if(UD_WIDTH < 1800){
            $(".header").addClass("header-2");
        }
    }

    $(window).resize(function () {
        UD_BOX_TEST();
    });




});
