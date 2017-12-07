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
    <script>
        var bild1;
        var bild2;

        function vorladen() {
            bild1 = new Image();
            bild1.src = "handy-1.jpg";
            bild2 = new Image();
            bild2.src = "handy-2.jpg";
        }

        function Nachvorne() {
            document.getElementById("bilderrahmen").src = bild2.src;
        }

        function Back() {
            document.getElementById("bilderrahmen").src = bild1.src;
        }

        window.onload = vorladen();
    </script>
</head>
<body>
    <div class="gesamt">
        <div class="left">
            <img src="pfeil-links.png" id="pfeil-left" onclick="Back()">
        </div>
        <div class="mid" id="bilderrahmen">
            <img src="handy-1.jpg">
        </div>
        <div class="right">
            <img src="peil-rechts.png" id="pfeil-right" onclick="Nachvorne()">
        </div>
    </div>
    <script src="layout.js"></script>
</body>
</html>
