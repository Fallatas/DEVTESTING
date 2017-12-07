<html>
<head>
    <title>Input</title>
    <link charset="UTF-8">
    <script src="jquery.inview.min.js"></script>
    <script>

        /*Jquery mit Inputfelder*/

        $(document).ready(function () {

            /*In diesem Beispiel wird beim eingeben in alle Formularfelder der Inhalt ermittelt.*/

            $("input").on("keyup",function () {

                var inhalt = $("input").val();
                var inhaltslaenge = inhalt.length;

                if (inhaltslaenge < 1){
                    $("input").css("border","2px solid red");
                }
                else{
                    $("input").css("border","2px solid black");
                }
                console.log(inhalt);
            });

            /* Ende */

            /* Alle Input Felder werden angesprochen. */
            /* Beim klicken wird eine Meldung ausgegeben. */

            $("input").on("click",function () {
                alert("Bitte Felder ausfüllen");
            });

            /* Ende */

            /* Resize reagiert auf Veränderungen des Browserfensters */
            /* In diesem Beispiel wird die Browserweite ausgegeben. */

            $("input").resize(function () {
                weite = $(window).width();
                console.log(weite);
            });

            /* Ende */

        });



    </script>
</head>
<body>
    <span id="results">In 3 Sekunden erscheint ein anderer Text</span> <br>
    <form>
        <label>Vorname:</label> <br>
        <input id="feld-1"> <br>
        <label>Nachname:</label> <br>
        <input id="feld-2"> <br>
        <input type="submit" value="Senden">
    </form>
</body>
</html>
