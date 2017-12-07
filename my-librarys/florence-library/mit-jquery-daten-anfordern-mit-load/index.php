<html>
<head>
    <title></title>
    <script src="jquery.inview.min.js"></script>
</head>
<body>
    <div id="testid-1">TXT Datei geladen...</div>
    <div id="testid-2">PHP Datei geladen...</div>
    <div id="testid-3">Eine Zeile aus PHP Datei geladen...</div>
</body>
<script>
    /* Hier wird der Inhalt einer TXT und einer PHP Datei über Jquery Load() geladen*/

    $("#testid-1").load("test");
    $("#testid-2").load("test.php");

    /*Man K*/

    $("#testid-3").load("test.php #select");
</script>
</html>
