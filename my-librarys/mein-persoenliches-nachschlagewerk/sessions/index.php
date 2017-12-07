<?php
session_start();
?>
<html>
<head>
    <title>Sessions</title>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <script src="js/jquery-1.11.0.js"></script>
</head>
<body>
    <h4>Sessions</h4>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label id="name">Vorname</label> <br>
        <input name="vorname"> <br>
        <label id="nachname">Nachname:</label> <br>
        <input name="nachname"> <br>
        <input type="submit" value="Senden">
    </form>
    <?php
    if (isset($_POST["vorname"]) && isset($_POST["nachname"])){
        echo "Ihre Eingaben: <br>"
        . "Ihr Vorname: " . htmlspecialchars($_POST["vorname"]) . "<br>"
        . "Ihr Nachname: " . htmlspecialchars($_POST["nachname"]) . "<br>";
    }
    $_SESSION["vorname"] = htmlspecialchars($_POST["vorname"]);
    $_SESSION["nachname"] = htmlspecialchars($_POST["nachname"]);
    print_r($_SESSION);
    ?>
    <script src="js/my-script.js"></script>
</body>
</html>
