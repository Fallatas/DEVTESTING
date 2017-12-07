<html>
<head>
    <?php
        session_start();
    ?>
    <title>Sessions verwenden</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
        if(isset($_SESSION["name"]) && isset($_SESSION["farbe"])){
            echo "Hier werden die Daten ausgegeben. <br>";
            echo "Name: {$_SESSION['name']} <br>\n";
            echo "Farbe: {$_SESSION['farbe']} <br>\n";
        }else {
            echo "Noch keine Session gesetzt.";
        }
    ?>
</body>
</html>