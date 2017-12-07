<form>
    <label>Vorname:</label> <br>
    <input name="vorname"> <br>
    <label>Nachname:</label> <br>
    <input name="nachname"> <br>
    <label>Registriert</label> <br>
    <input name="registriert"> <br>
    <input type="submit" value="Senden">
</form>
<?php
if(isset($_GET["vorname"]) && isset($_GET["nachname"]) && isset($_GET["registriert"])){
    echo "Meine Eingaben: <br>"
    . "Vorname: " . htmlspecialchars($_GET["vorname"]) . "<br>"
    . "Nachname: " . htmlspecialchars($_GET["nachname"]) . "<br>"
    . "Registriert: " . htmlspecialchars($_GET["registriert"]);

    $vorname = htmlspecialchars($_GET["vorname"]);
    $nachname = htmlspecialchars($_GET["nachname"]);
    $registriert = htmlspecialchars($_GET["registriert"]);



}