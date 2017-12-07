$(document).ready(function () {

    /* Bei einem Click auf ein Listitem wird eine Funktion ausgeführt.*/
    $('li').on("click",function () {
        /* In der Funktion wird bei einem Click auf ein einzelnes Listitem diesem eine Klasse hinzugefügt. */
        /* Durch This wird nur ein einzelnes verwendet und bei li alle. */
        $(this).addClass('complete');
    });


    /*  */
    $(function () {
        var ids = "";
        /*Jquery Variable wenn man öffter mit etwas arbeitet.*/
        var $listitems = $('li');

        /* Beim darüberfahren oder klicken von allen Listitems */
        $listitems.on("mouseover click", function () {
            ids = this.id;
            $listitems.children('span').remove();
            $(this).append('<span>' + ids + "</span>");
        });
    });

    $listitems.on("mouseout",function () {
        /* Alle Kindelemente von span werden gelöscht bzw alle mit dem Tag <span></span>*/
        $(this).children('span').remove();
    });

});

