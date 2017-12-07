<?php
/**
 * Created by PhpStorm.
 * User: Fallatas
 * Date: 11.10.2016
 * Time: 06:15
 */?>
<html>
<head>
    <title>Slideshow Modul Standart</title>
    <link type="text/css" href="style.css" rel="stylesheet">
    <script type="text/javascript">
        var bild1;
        var bild2;

        function vorladen()
        {
            bild1 = new Image();
            bild1.src = "bild1.jpg";
            bild2 = new Image();
            bild2.src = "bild2.jpg";
        }
        function vorne()
        {
            document.getElementById("bilderrahmen").src = bild2.src;
        }
        function hinten()
        {
            document.getElementById("bilderrahmen").src = bild1.src;
        }
        window.onload = vorladen();
    </script>
</head>
<body>
    <div class="gesamt">
        <div class="left">
            <img src="pfeil-links.png" id="pfeil-left" onclick="hinten()">
        </div>
        <div class="mid">
            <img src="bild1.jpg" id="bilderrahmen">
        </div>
        <div class="right">
            <img src="peil-rechts.png" id="pfeil-right" onclick="vorne()">
        </div>
    </div>
</body>
</html>
