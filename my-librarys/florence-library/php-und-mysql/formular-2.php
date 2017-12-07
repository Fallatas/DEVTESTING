<?php
echo "<strong style='color: red;'>PHP und Mysql:</strong>";
echo "<br>";
echo "<hr style='color: red'>";
echo "<br>";
echo "<strong style='color: red'>1. und 2. Verbindung erstellen und Datenbank auswaehlen.</strong>";
echo "<br>";

$mysqli = new mysqli("localhost","root","","garten");
if($mysqli->connect_error){
    echo"Felhr bei der Verbindung" . $mysqli->connect_error;
    exit();
}
echo "Verbindung hat geklappt";

echo "<br>";
echo "<strong style='color: red;'>3.Abfrage durchfuehren.</strong>";
echo "<br>";

//** Abfrage durchgeführt. **//
$ergebnis = $mysqli->query("SELECT name, beschreibung, preis FROM pflanzen;");

//**  Ausgabe wird ausgegeben. **//
$zeile = $ergebnis->fetch_array();

//** Am Ende wird natürlich die Verbindung zu Mysql geschlossen **//
$mysqli->close();

//** Hier kann das Array mit print_r() ausgegben werden **//
echo"<pre>";
print_r($zeile);
echo "</pre>";


echo "<strong style='color: red'>Zusammenfassung:</strong>";
echo "<hr style='color: red'>";
echo "<br>";

$mysqli = new mysqli("localhost","root","","garten");
if($mysqli->connect_error){
    echo"Felhr bei der Verbindung" . $mysqli->connect_error;
    exit();
}if($mysqli->set_charset("utf8")){
    echo "Fehler beim laden von UTF8. <br>"
        . $mysqli->error;
}
$ergebnis = $mysqli->query("SELECT name, beschreibung,preis FROM pflanzen");
$zeile = $ergebnis->fetch_array();

while($zeile = $ergebnis->fetch_array()){
    echo "<strong>{$zeile['name']}</strong>: {$zeile['beschreibung']}
    {$zeile['preis']}<br>\n";
}

echo "<strong style='color: red;'>In Tabelle ausgegeben</strong>";
echo "<hr style='color: red'>";

$ergebnis = $mysqli->query("SELECT name, beschreibung,preis FROM pflanzen");
$zeile = $ergebnis->fetch_array();

echo "<table border='1'>";
while($zeile = $ergebnis->fetch_array()){
  echo "<tr><td>" . htmlspecialchars($zeile['name']) . "</td>"
        . "<td>" . htmlspecialchars($zeile['beschreibung']) . "</td>"
        . "<td>" . htmlspecialchars($zeile['preis']) . "</td>"
        . "</tr>\n";
}
echo "</table>";
$ergebnis->close();
$mysqli->close();