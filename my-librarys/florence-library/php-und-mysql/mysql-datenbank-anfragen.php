<?php
echo "<strong style='color: red'>Eine Datenbank erstellen mit einer Query Anfrage.</strong>";
echo "<br>";
echo "<hr>";


$mysqli = new mysqli("localhost","root","","mein_cms");

if ($mysqli->connect_error){
    echo "Fehler bei der Verbindung <br>\n.";
}else{
    echo "Datenbank wird erstellt. <br>\n";
    $mysqli->query("CREATE DATABASE meinetestdatenbank");
    $mysqli->close();
}

/*Bei weiteren Fragen zu diesem Thema finde ich auf http://de.html.net/tutorials/php/lesson18.php*/

echo "<hr>";
echo "<strong style='color: red'>Eine Datenbank löschen mit einer Query Anfrage.</strong>";
echo "<br>";
echo "<hr>";

$mysqli = new mysqli("localhost","root","","mein_cms");

if ($mysqli->connect_error){
    echo "Fehler bei der Verbindung. <br>\n.";
}else{
    echo "Datenbank wird gelöscht. <br>\n";
    $mysqli->query("DROP DATABASE meinetestdatenbank2");
    $mysqli->close();
}
echo "<hr>";
echo "<strong style='color: red'>Eine Datenbank zeitversetzt erstellen.<br>Die Datenbank soll um 07.35.00 erstellt werden.</strong>";
echo "<br>";
echo "<hr>";

$aktuelle_zeit = date("H:i:s");
$starten_zeit = "07:35:00";
$starten_datum = "23.01.2017";
$aktuelles_datum = date("d.m.Y");
$mysqli = new mysqli("localhost","root","","mein_cms");

if ($aktuelle_zeit == $starten_zeit && $aktuelles_datum == $starten_datum){
    echo "Um 07:35:00 Uhr wird am" . $aktuelles_datum . "eine Datenbank erstellt.";
    $mysqli->query("CREATE DATABASE meinetestdatenbank3") or die($mysqli->error);
    $mysqli->close();
}else{
    echo "Die Datenbank wird am ". $aktuelles_datum . " um " . $starten_zeit . " erstellt. <br>\n";
    echo "Es ist ". $aktuelles_datum . " - " . $aktuelle_zeit . " Uhr. <br>\n";
    echo "Datenbank wurde schon erstellt. <br>\n";
}

/*Bei weiteren Fragen zu diesem Thema finde ich auf http://de.html.net/tutorials/php/lesson18.php*/

echo "<hr>";
echo "<strong style='color: red'>Eine Tabelle in einer Datenbank erstellen mit einer Query Anfrage.</strong>";
echo "<br>";
echo "<hr>";

$mysqli = new mysqli("localhost","root","","meinetestdatenbank3");

if($mysqli->connect_error){
    echo "Fehler bei der Verbindung.";
}else {
    $mysqli->select_db("meinetestdatenbank3");
    $mysqli->query("CREATE TABLE
    `MeineTabelle` (
    `ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Name` TEXT NOT NULL,
    `Groesse` INT NOT NULL
) ");
    echo "Tabelle wurde in der Datenbank erstellt.";
}

/* Bei weiteren Fragen http://www.use-media.com */

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Eintraege mit UTF-8 und Mysqli</strong>";
echo "<br>";
echo "<hr style='color: red'>";
?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
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

