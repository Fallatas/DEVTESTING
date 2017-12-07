<html>
<head>
    <title>Bilderwechsel</title>
    <style type="text/css">
        .Titel {
            color:#345376;
            font-size:24px;
        }
        .text {
            color:#6483a6;
            font-size:18px; }

        .rahmen {
            width:700px;
            height:500px;
            background-color:#8EAEB9;
        }

    </style>
    <script type="text/javascript">
        var bild1;
        var bild2;
        var bild3;

        function vorladen()
        {
            bild1 = new Image();
            bild1.src = "bild1.jpg";
            bild2 = new Image();
            bild2.src = "bild2.jpg";
            bild3 = new Image();
            bild3.src = "bild3.jpg";
        }
        function wechselHin()
        {
            document.getElementById("bilderrahmen").src = bild2.src;
        }
        function wechselZurueck()
        {
            document.getElementById("bilderrahmen").src = bild1.src;
        }
        window.onload = vorladen();
    </script>
</head>
<body bgcolor="#323C4E">
    <br />
    <div align="center">
    <div class="rahmen"> <br />
        <br />
        <div class="Titel">Bilderwechsel</div>
        <br />
        <br />
        <img src="bild1.jpg"
             id="bilderrahmen"
             onmouseover="wechselHin()"
             onmouseout="wechselZurueck()" />
    </div>
</body>
</html>