<?php
echo "Formulardaten";
?>

<h1>WM-Ticketservice</h1>
<form>
    <input type="radio" name="Anrede" value="HR."/>Herr
    <input type="radio" name="Anrede" value="FR."/>Frau
    <input type="radio" name="Anrede" value="Frl."/>Fr&auml;ulein<br>
    Vorname: <input type="text" name="Vorname" /><br>
    Nachname: <input type="text" name="Nachname"/><br>
    E-Mail-Adresse: <input type="text" name="Email"/><br>
    Promo-Code: <input type="password" name="Promo"/><br>
    Anzahl Karten:
    <select name="Anzahl">
        <option value="0">Bitte w&auml;hlen</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
     </select><br>
    Gew&uuml;nschte Sektion im Stadion:
    <select>
        <option value="nord">Nordkurve</option>
        <option value="sued">S&uuml;dkurve</option>
        <option value="haupt">Haupttrib&uuml;ne</option>
        <option value="gegen">Gegentrib&uuml;ne</option>
    </select><br>
    Kommentare/Anmerkungen:
    <textarea cols="70" rows="10" name="Kommentare"></textarea><br>
    <input type="checkbox" name="AGB" value="ok"/>
    Ich akzeptiere die AGB.<br>
    <input type="submit" name="Submit" value="Bestellung aufgeben"/>
</form>

<?php

echo "Anrede: $Anrede<br>";
echo "Vorname: $Vorname<br>";
echo "Nachname: $Nachname";
echo "E-Mail: $Email<br>";
echo "Promo: $Promo<br>";
echo "Anzahl Karten: $Anzahl";
echo "Sektion: $Sektion<br>";
echo "Kommentare: $Kommentare<br>";
echo "AGB: $AGB<br>";

// Start MySQL connect
$mysqli = new mysqli("localhost", "root", "", "floremaure");
// MySQL connection done

if ($mysqli->connect_error) { // If Error diplay Error message
    echo "Fehler bei der Verbindung: " . mysqli_connect_error();
    exit();
}
if (!$mysqli->set_charset("utf8")) { // IF Charset is not set, than set charset
    echo "Fehler beim Laden von UTF8 " . $mysqli->error;
}

$mysqli->query("INSERT INTO `formluardaten2` (`Anrede`, `Vorname`, `Nachname`, `Email`, `Promo`, `Anzahl`,`Sektion`, `Kommentare`, `AGB`) VALUES ('$Anrede', '$Vorname', '$Nachname', '$Email', '$Promo', '$Anzahl', '$Sektion', '$Kommentare', '$AGB');"); // Send Querry

$mysqli->close();
?>
<?php

echo "<hr>";

?>

<form>
        <input type="radio" name="anrede" value="Frau" checked="checked"/> Frau
        <input type="radio" name="anrede" value="Herr" checked="checked"/> Herr
        <input type="radio" name="anrede" value="Firma" checked="checked"/> Firma </br />
        Vorname: <br/>
        <input type="text" name="vorname" size="20" maxlength="30">
        <br/>
        Nachname: <br />
        <input type="text" name="nachname" size="20" maxlength="30">
        <br/>
        Telefon: <br />
        <input type="text" name="telefon" size="20" maxlength="30">
        <br/>
        Themen: <br />
        <select name="thema">
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="JavaScript">JavaScript</option>
            <option value="PHP">PHP</option>
        </select>
        <br/>
        Kommentar: <br />
        <textarea name="kommentar" rows="3" cols="20"></textarea>
        <br/>
        <input type="submit" value="Abschicken"/>
    </form>

<?php
if (!empty($_GET["nachname"])) {
    echo "Ihre Eingaben <br />\n";
    if (!empty($_GET["anrede"])) {
        echo htmlspecialchars($_GET["anrede"]);
    }
    echo " " . htmlspecialchars($_GET["vorname"]) . "<br />\n";
    echo " " . htmlspecialchars($_GET["nachname"]) . "<br />\n";
    echo " " . htmlspecialchars($_GET["telefon"]) . "<br />\n";
    if(!empty($_GET["thema"])){
        echo "Das gewaehlte Thema: ". htmlspecialchars($_GET["thema"]) . "<br />\n";
    }
    if (!empty($_GET["kommentar"])){
        echo " Ihr Kommentar: " . htmlspecialchars($_GET["kommentar"]) . "<br />\n";
    }

    $anrede = htmlspecialchars($_GET["anrede"]);
    $vorname = htmlspecialchars($_GET["vorname"]);
    $nachname = htmlspecialchars($_GET["nachname"]);
    $telefon = htmlspecialchars($_GET["telefon"]);
    $thema = htmlspecialchars($_GET["thema"]);
    $kommentar = htmlspecialchars($_GET["kommentar"]);

    // Start MySQL connect
    $mysqli = new mysqli("localhost", "root", "", "meinedaten");
    // MySQL connection done

    if ($mysqli->connect_error) { // If Error diplay Error message
        echo "Fehler bei der Verbindung: " . mysqli_connect_error();
        exit();
    }
    if (!$mysqli->set_charset("utf8")) { // IF Charset is not set, than set charset
        echo "Fehler beim Laden von UTF8 " . $mysqli->error;
    }

    $mysqli->query("INSERT INTO `formluardaten` (`anrede`, `vorname`, `nachname`, `telefon`, `thema`, `kommentar`) VALUES ('$anrede', '$vorname', '$nachname', '$telefon', '$thema', '$kommentar');"); // Send Querry

    $mysqli->close();
}







