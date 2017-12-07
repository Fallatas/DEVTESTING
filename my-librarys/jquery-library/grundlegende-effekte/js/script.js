$(document).ready(function () {

$(function () {
    /* Hier wird die H2 Überschrift versteckt und mit der Methode slideDown() wieder eingebelndet */
    $('h2').hide().slideDown();

    /* Hier wird über die ID angesporchen und wieder versteckt dann mit der Methode delay() eine Verzögerung erreicht */
    $('#delay').hide().delay(2000).fadeIn();

    /* Hier werden alle Listitem Elemente durch die Methode hide() versteckt und eine each() Schleife erstellt */
    $('li').hide().each(function (index) {
        /* Hier wird über this jedes einzelne Listitem angesprochen und mit eine Verzögerung wieder eingeblendet */
        $(this).delay(700 + index).fadeIn(700);
    });

    /* Hier alle Listitems druch einen click darauf eine Funktion ausgeführt */
    $('li').on("click", function () {
        /* Hier werden wieder alle Listitems einzeln angesprochen und mit 700 Millisekunden ausgeblendet */
        $(this).fadeOut(700);
    });
});

});

