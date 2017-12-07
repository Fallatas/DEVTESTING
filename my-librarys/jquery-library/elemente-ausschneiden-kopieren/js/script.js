$(document).ready(function () {

    copytext = $('#copyme').clone();

    /* Der Text wird entfernt und im Arbeitsspeicher gespeichert */
    $('#copyme').detach();
    /* Hier wird der zu kopierende Text eingefügt */
    $('#pasteme').append(copytext);

});

