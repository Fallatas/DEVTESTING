$(document).ready(function () {

    $('#dots').delay(750).fadeOut(300,function () {

       $('#bg_left').animate({left: '-50%'},300);
       $('#bg_right').animate({right: '-50%'},300,function () {
           $('#preloader').fadeOut(10);
       });

    });

});
