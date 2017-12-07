<html>
<head>
    <?php
        session_start();
    ?>
    <title>Sessions</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $_SESSION["name"] = "Marie";
        $_SESSION["farbe"] = "Rot";
    ?>
    <a href="sessions_verwenden.php">Hier wird die Session ausgegeben.</a>
</body>
</html>