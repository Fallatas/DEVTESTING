<html>
<head>
    <title>MYSQL und PHP</title>
</head>
<body>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <h3>Bitte gib deinen Namen an.</h3>
        <label>Nachne:</label> <br>
        <input name="name"> <br>
        <label>Nachname:</label> <br>
        <input name="nachname"> <br>
        <input type="submit" value="Senden">
    </form>
</div>
<?php
if(isset($_POST["name"]) && isset($_POST["nachname"])){
    echo "Deine Eingaben: <br>\n"
        . "Dein Name: " . htmlspecialchars($_POST["name"]) . "<br>\n"
        . "Dein Nachname: " . htmlspecialchars($_POST["nachname"]) ."<br>\n";

    $name = htmlspecialchars($_POST["name"]);
    $nachname = htmlspecialchars($_POST["nachname"]);

    $mysql = new mysqli("localhost","root","","testi4");

    if ($mysql->connect_error){
        echo "Fehler bei der Verbindung. <br>\n" . $mysql->connect_error;
    }

    if (!$mysql->set_charset("utf8")){
        echo "Fehler bei der Verbindung.";
    }

    /* Namen in die Datenbank eintragen. */
    $mysql->query("INSERT INTO `tutorial` (`name`,`nachname`) VALUE ('$name','$nachname');");


    /* Namen aus der Datenbank laden */
    $auswaehlen = $mysql->query("SELECT name,nachname FROM tutorial");
    $speichern = $auswaehlen->fetch_array();

    /* Namen aus der Datenbank ausgeben lassen */
    while ($speichern = $auswaehlen->fetch_array()){
        echo "<ul><li>" . $speichern["name"]
            . "<li>" . $speichern["nachname"]  . "</li></ul>";

    }
    $mysql->close();
}

?>
</body>
</html>