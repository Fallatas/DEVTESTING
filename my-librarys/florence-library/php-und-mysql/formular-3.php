<?php
/**
 * Created by PhpStorm.
 * User: t0m
 * Date: 26.09.2016
 * Time: 06:09
 */
?>
<form action="index.php">
    Ihr Vorname: <br>
    <input maxlength="50" min="3" name="vorname"/> <br>
    Ihr Nachname: <br>
    <input maxlength="50" min="3" name="nachname"> <br>
    Ihre Adresse: <br>
    <input maxlength="50" min="3" name="adresse"/>
    <input type="submit" value="Absenden">


</form>
<?php
if (!empty(htmlspecialchars($_GET["vorname"]))){
    echo "Ihre Eingabe: <br>" . htmlspecialchars($_GET["vorname"])
        . " " . htmlspecialchars($_GET["nachname"]) . "<br>\n"
              . htmlspecialchars($_GET["adresse"]);

$vorname = htmlspecialchars($_GET["vorname"]);
$nachname = htmlspecialchars($_GET["nachname"]);
$adresse = htmlspecialchars($_GET["adresse"]);

$mysqli = new mysqli("localhost","root","","profil");
if($mysqli->connect_error){
    echo "Fehler bei der Verbindung";
}

$mysqli->query("INSERT INTO `Benutzer` (`Vorname`, `Nachname`, `Adresse`) VALUES ('$vorname', '$nachname', '$adresse');"); // Send Querry

$mysqli->close();
}
?>