$(document).ready(function () {

    /* Bei einem Click auf ein Listitem wird die Eigenschaft des Event Objekts angezeigt */
    /* Übergebener Parametername e */
    $('li').on("click",function (e) {

        /* In unserem Fall lautet das Ergebnis click */
        eventType = e.type;

        /* Das Ergebnis wird in der Console ausgegeben */
        console.log(eventType);

    });

    /* Beispiel aus dem Buch (Seite 331) */

    $(function () {

            /* Parametername vergeben */
        $('li').on("click",function (e) {
            /* Entfernt alle span Elemente aus den li Elementen */
            $('li span').remove();

            /* Ein neus Date Objekt wurde erstellt */
            var date = new Date();
            date.setTime(e.timeStamp);

            /* Date wird in ein lesbare Datumsanzeige umgewandelt. */
            var clicked = date.toDateString();

            /* Hier wird in den Listitems ein Span Tag erstellt mit den Infomationen über Zeit und Art des verwendeten Types */
            $(this).append('<span>'+ " " + clicked + " " + e.type + "</span>");

        });

    });

    $(function () {

        $('ul').on("click", function (e) {

            /* -------------------------------------------------------------------------------------------------------- */

            /* Art des Ereignisses zB click */
            type = e.type;
            console.log( "Art des Ereignisses ist: " + type);

            /* Betätigte Schaltfläche oder Taste */
            which = e.which;
            console.log("Betätigte Schlatfläche oder Taste: " + which);

           /* Info´s zum Ereignis */
            data = e.data;
            console.log("Info´s zum Ereignis lautet: " + data);

            /* Das DOM Element, in dem das Ereignis aufgetreten ist. */
            target = e.target;
            console.log(target);

            /* Mausposition vom linken Rand des Viewports */
            pagex = e.pageX;
            console.log(pagex);

            /* Mausposition vom rechten Rand des Viewports */

            pagey = e.pageY;
            console.log(pagey);

            /* Anzahl der Millisekunden die beim eintreten des Ereignisses seit dem 1. Januar 1970 verstrichen sind. */

            timestamp = e.timeStamp;
            console.log(timestamp);

            /* -------------------------------------------------------------------------------------------------------- */
        });

    });
});

