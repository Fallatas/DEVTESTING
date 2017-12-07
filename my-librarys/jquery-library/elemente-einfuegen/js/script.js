$(document).ready(function () {


    /* Neue Produkte werden erstellt */
    $newProdukt1 = "Apfel";
    $newProdukt2 = "Eisbergsalat";

    /* Hier wird durch append() ein neues Produkt aufgenommen */
    /* Es wird der Unordered list ein neues Listitem hinzugefügt */
    /* Vor dem schließenden Tag */
    $("ul").append("<li style='color: green'>" + $newProdukt1 + "</li>");

    /* ------------------------------------------------------------------------- *

    /* Hier wird durch prepend() ein neues Produkt aufgenommen */
    /* Es wird der Unordered list ein neues Listitem hinzugefügt */
    /* Hinter dem öffnenden Tag*/
    $("ul").prepend("<li style='color: green'>" + $newProdukt2 + "</li>")




});

