$(document).ready(function () {

    /* Hier wird mit den Methoden .addClass() und .removeClass() gearbeitet. */

    /* Hier wird eine in CSS befindliche Klasse mit .addClass() festgelegt. */
    $('li#one').addClass('favorite');

    /* Hier wird mit der Methode .removeClass() die festgelegte Klasse wiederrufen. */
    $('li#one').removeClass('favorite');

    /* ------------------------------------------------------------------------------- */

    /* Hier wird mit den Methoden .attr() und .removeAttr() gearbeitet*/

    /* Hier wird der Wert von einem listitem abgerufen. */
    $abrufenId = $('li#two').attr('id');
    console.log($abrufenId);

    /* Hier wird dem Listitem ein neuer Wert zugewiesen. */
    /* Erster Parameter bestimmt was geändert werden soll */
    /* Zweiter Parameter gibt den neuen Wert an. */
    $neuerWert = $('#two').attr('id','new');
    console.log($neuerWert);

    /* Mit der Methode .removeAttr() wird das Attribut das angegeben wurde wieder entfernt. */
    /* Die ID wird dadurch entfernt. */
    $entfernt = $('#three').removeAttr('id');
});

