$(document).ready(function () {

    /* Alle listitems werden in einer Variable gespechert */
    var listitems = $("li");

    /* Druch each wird eine Schleife auf alle im befindlichen listitems angewendet */
    listitems.each(function () {

         var $this = $(this);

         if ($this.is("#four")){
            $this.append(" <- Hier befindet sich das gesuchte Element.");
         }

    });

    /* Druch each wird eine Schleife auf alle im befindlichen listitems angewendet */
    listitems.each(function () {
        /* Wie zum Beispiel hier */
        $(this).css("color","green");
    });

});

