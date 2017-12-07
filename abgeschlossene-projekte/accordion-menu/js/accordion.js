$(document).ready(function () {
    /*Durch das Klicken wird eine Funktion ausgelöst.*/
    $("#ud_accordion dt").stop().click(function () {
        /*Wenn ud_active vergeben ist führe das aus.*/
        if($(this).hasClass('ud_active')){
            $(this).removeClass('ud_active');
            $(this).next().slideUp(300);
        }else {
            $(this).parent().children().removeClass('ud_active');
            $(this).addClass('ud_active');
            if($(this).next().is('dd')){
                $(this).parent().children('dd').slideUp(300);
                $(this).next().slideDown(300);
            }
        }
    });

});
