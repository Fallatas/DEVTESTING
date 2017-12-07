<?php
/**
 * Created by PhpStorm.
 * User: Fallatas
 * Date: 11.10.2016
 * Time: 06:15
 */?>
<html>
<head>
    <title>Time Slideshow</title>
    <link type="text/css" href="style.css" rel="stylesheet">
    <script type="text/javascript">
        var bilder = new Array("bild1.jpg","bild2.jpg");
        document.write(bilder);

        var naechstesBild = 0;
        var verzoegerung = 1000;

        function animation(){
        document.ani.src = bilder[0];
        naechstesBild++
        }

    </script>
</head>
<body>
<div class="border">
    <p>Login</p>
</div>
</body>
</html>
