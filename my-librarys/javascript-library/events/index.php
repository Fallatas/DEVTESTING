<html>
<head>
    <title>Events</title>
</head>
<body>
    <span id="results">Hier erscheind ein Text in 3 Sekunden.</span> <br>
</body>
<script>

    /* Bei diesem Beispiel wird eine einfache Funktion mit einer Verzögerung von 3 Sekunden ausgegeben. */

    function ausgabe() {

        var text = "<p style='color: #00A8C6'>Hier kommt der Text.</p>";

        var ausgabe = document.getElementById("results").innerHTML = text;
    }

    window.setInterval("ausgabe()",3000);

    /* Ende */

    /* Bei diesem Beispiel wird ein Bild geladen */



</script>
</html>
