$(document).ready(function () {

    /* Abmessungen von Fenstern */

    /* Browserweite */
    var browserweite = $(window).width();
    console.log("Unsere Fensterbreite lautet: " + browserweite);

    /* Browserhöhe */
    var browserhoehe = $(window).height();
    console.log("Unsere Fensterhöhe lautet: " + browserhoehe);

    /* -------------------------------------------------------------------------------- */

    /* Abmessung des gesamten Dokuments */

    /* Dokumentrweite */
    var dokumentweite = $(document).width();
    console.log("Unsere Dokumentbreite lautet: " + dokumentweite);

    /* Dokumenthöhe */
    var dokumenthoehe = $(document).height();
    console.log("Unsere Dokumenthöhe lautet: " + dokumenthoehe);

    /* --------------------------------------------------------------------------------- */


    /* Abrufen des Rollbalkens */

    /* Scrollbreite */
    var scrollhorizontal = $(window).scrollLeft();

    console.log(scrollhorizontal);

    /* Scrollhöhe */
    var scrollvertical = $(window).scrollTop;
    console.log(scrollvertical);
});

