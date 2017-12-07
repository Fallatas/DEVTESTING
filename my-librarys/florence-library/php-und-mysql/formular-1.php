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












?>