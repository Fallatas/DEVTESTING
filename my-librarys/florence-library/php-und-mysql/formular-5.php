<form action="formular-5.php" method="post">
    <label>Zahl1:</label> <br>
    <input name="zahl1"> <br>
    <label>Zahl2:</label> <br>
    <input name="zahl2"> <br>
    <label>Zahl3:</label> <br>
    <input name="zahl3"> <br>
    <input type="submit" value="Senden"> <br>
</form>
<?php
if (isset($_POST["zahl1"]) && isset($_POST["zahl2"]) && isset($_POST["zahl3"])){
    echo "Ihre Eingaben: <br>"
        . "Zahl1: " . htmlspecialchars($_POST["zahl1"]) . "<br>"
        . "Zahl2: " . htmlspecialchars($_POST["zahl2"]) . "<br>"
        . "Zahl3: "  . htmlspecialchars($_POST["zahl3"]) . "<br>";

    $zahl1 = htmlspecialchars($_POST["zahl1"]);
    $zahl2 = htmlspecialchars($_POST["zahl2"]);
    $zahl3 = htmlspecialchars($_POST["zahl3"]);

    $mysqli = new mysqli("localhost","root","","test4");

    if ($mysqli->connect_error){
        echo "Fehler bei der Verbindung.";
    }
    /*Beim vergeben einer ID nicht im Query angeben.*/
    $mysqli->query("INSERT INTO `testitabelle4`(`zahl1`,`zahl2`,`zahl3`) VALUE ('$zahl1','$zahl2','$zahl3');");
}