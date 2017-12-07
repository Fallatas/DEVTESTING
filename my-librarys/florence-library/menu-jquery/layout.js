$(document).ready(function () {

    function Responsive() {
        if( $('ul.firstlvl').children('li').length * 151 > $(window).width() ){

            $('ul.firstlvl').css('width','100%');
            $('ul.firstlvl').css('background-color','#00C365');
                $('ul.firstlvl li').css('width','100%');
                $('ul.firstlvl li').css('border-bottom','1px solid #66D494');
                $('ul.firstlvl li').css('border-right','none');
        }else {
            $('ul.firstlvl').css('display','block');
            $('ul.firstlvl').css('width','auto');
            $('ul.firstlvl').css('background-color','none');
                $('ul.firstlvl li').css('width','150px');
                $('ul.firstlvl li').css('border-bottom','none');
                $('ul.firstlvl li').css('border-right','1px solid #66D494');
        }
    }

    Responsive();

    $('nav ul li').stop().hover(
        function () {
            $(this).children('ul').stop().slideDown(500)
        },
        function () {
            $(this).children('ul').stop().slideUp(500)
        }
    );

    $(window).resize(function () {
       Responsive();
    })

});