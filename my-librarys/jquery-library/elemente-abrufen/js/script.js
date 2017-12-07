$(document).ready(function () {

    /* Speichert alle unteren Elemente in einer Variable. */
    /* Mit .html() werden die HTML Tags auch eingespeichrt */

    $listHTML = $('ul').html();

    /* Siehe Console */
    console.log($listHTML);

    /* Speichert das erste Elemente in einer Variable. */
    /* Mit .text() wird nur der Text eingespeichrt */

    $listTEXT = $('ul').text();

    /* Siehe Console */
    console.log($listTEXT);
});

