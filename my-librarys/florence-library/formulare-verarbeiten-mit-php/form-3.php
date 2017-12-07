<?php
echo "<strong style='color: red'>Radiobuttons,Auswahllisten und mehrzeilige Textfelder</strong>";
echo "<br>";
echo "<hr style='color: red'>";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="get">
<input type="radio" name="anrede" value="Frau" checked="checked" /> Frau
<input type="radio" name="anrede" value="Herr" /> Herr
<input type="radio" name="anrede" value="Firma" /> Firma <br>
Nachname: <br>
<input type="text" name="nachname" size="20" maxlength="30" />
<br>
Themen: <br>
<select name="thema">
    <option value="HTML">HTML</option>
    <option value="CSS">CSS</option>
    <option value="JavaScript">JavaScript</option>
    <option value="PHP">PHP</option>
</select>
<br>
Kommentar: <br>
<textarea name="kommentar" rows="3" cols="20"></textarea>
<br>
<input type="submit" value="Abschicken">
</form>

<?php
if(!empty($_GET["nachname"])){
    echo "Ihre Eingaben: <br>\n";
    if(!empty($_GET["anrede"])){
        echo htmlspecialchars($_GET["anrede"]);
    }
    echo " " . htmlspecialchars($_GET["nachname"]) . "<br>\n";
    if(!empty($_GET["thema"])){
        echo "Das gewaehlte Thema: " . htmlspecialchars($_GET["thema"]) . "<br>\n";
    }
    if(!empty($_GET["kommentar"])){
        echo "Ihr Kommentar: " . htmlspecialchars($_GET["kommentar"]) . "<br>\n";
    }
}

echo "<strong style='color: red'>Weitere Formularelemente</strong>";
echo "<br>";
echo "<hr style='color: red'>";
?>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
Ihr Nachname: <br>
<input type="text" name="nachname" size="20" maxlength="30" />
<br>
<input type="checkbox" name="thema[]" value="HTML" />HTML
<input type="checkbox" name="thema[]" value="CSS" />CSS
<input type="checkbox" name="thema[]" value="JavaScript" />JavaScript
<input type="checkbox" name="thema[]" value="PHP" />PHP <br>
<input type="submit" value="Abschicken">
</form>

<?php
if (!empty($_GET["nachname"])){
    echo "Ihre Eingaben: <br>\n"
     . "Name: " . htmlspecialchars($_GET["nachname"]) . "<br>\n";
    if(isset($_GET["thema"]) && is_array($_GET["thema"])){
        echo "Das gewaehlte Thema: <br>\n";
        foreach ($_GET["thema"] as $th){
            echo htmlspecialchars($th) . "<br>\n";
        }
    }
}

echo "<strong style='color: red'>Themen als untergeordnete Liste ausgeben lassen.</strong>";
echo "<br>";
echo "<hr style='color: red'>";
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Ihr Vorname: <br>
    <input type="text" name="vorname" size="20" maxlength="30" />  <br>
    Ihr Nachname: <br>
    <input type="text" name="nachname" size="20" maxlength="30" /> <br>
    Ihre Email: <br>
    <input type="email" name="email" maxlength="30" /> <br>
    Ihre Telefonnummer: <br>
    <input name="telefon" maxlength="30" /> <br>
    <input type="checkbox" name="thema[]" value="HTML">HTML <br>
    <input type="checkbox" name="thema[]" value="CSS">CSS <br>
    <input type="checkbox" name="thema[]" value="JavaScript">JavaScript <br>
    <input type="checkbox" name="thema[]" value="PHP">PHP <br>
    <input type="submit" value="Abschicken"> <br>
</form>
<?php
if(!empty($_GET["vorname"])){
    print "Ihre Eingaben: <br>\n";
    if(!empty($_GET["vorname"]) && !empty($_GET["nachname"]) && !empty($_GET["email"]) && !empty($_GET["telefon"])){
        print "Ihr Vorname: " . htmlspecialchars($_GET["vorname"]) . "<br>\n"
            .   "Ihr Nachname: " . htmlspecialchars($_GET["nachname"]) . "<br>\n"
            . "Ihre Emailadresse: " . htmlspecialchars($_GET["email"]) . "<br>\n"
            . "Ihre Telefonnummer: " . htmlspecialchars($_GET["telefon"]) . "<br>\n";
        if(isset($_GET["thema"]) && is_array($_GET["thema"])){
            print "Ihre gewählten Themen lauten: <br>\n";
        foreach ($_GET["thema"] as $th){
            print "<ul><li style='color: deepskyblue'>" . htmlspecialchars($th) . "</li></ul>";
        }
      }
    }
}
echo "<hr style='color: red'>";
echo "<strong style='color: red'>Eintraege mit UTF-8 und Mysqli</strong>";
echo "<br>";
echo "<hr style='color: red'>";
?>

<form action="form-3.php" method="post">
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
    if (!$mysqli->set_charset("utf8")){
        echo "Fehler beim laden von UTF-8.";
    }
    $select = $mysqli->query("INSERT INTO `testitabelle4`(`zahl1`,`zahl2`,`zahl3`) VALUE ('$zahl1','$zahl2','$zahl3');");


    $select = $mysqli->query("SELECT zahl1,zahl2,zahl3 FROM testitabelle4");
    $ausgabe = $select->fetch_assoc();
}

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Ende des Karpitels</strong>";
echo "<br>";
echo "<hr style='color: red'>";

