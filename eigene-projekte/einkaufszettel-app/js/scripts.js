$(document).ready(function () {

    /* Produkt 1 */
    $('#select1').on("click",function () {

        var $inhalt = $('#select1').text();

        $('ul').stop().append("<li id='one'>" + $inhalt + "</li>");

        $('#select1').fadeOut(0);

    });

    /* Produkt 2 */
    $('#select2').on("click",function () {

        var $inhalt = $('#select2').text();

        $('ul').stop().append("<li id='one'>" + $inhalt + "</li>");

        $('#select2').fadeOut(0);

    });

    /* Produkt 3 */
    $('#select3').on("click",function () {

        var $inhalt = $('#select3').text();

        $('ul').stop().append("<li id='one'>" + $inhalt + "</li>");

        $('#select3').fadeOut(0);

    });

    /* Produkt 4 */
    $('#select4').on("click",function () {

        var $inhalt = $('#select4').text();

        $('ul').stop().append("<li id='one'>" + $inhalt + "</li>");

        $('#select4').fadeOut(0);

    });

/*
    $('#entfernen').on("click",function () {

        $('#one').remove();

    })
*/

    $("#senden").on("click",function () {
            $(".content-left").removeClass()
    });


    $('li').each(function () {


    });


});
