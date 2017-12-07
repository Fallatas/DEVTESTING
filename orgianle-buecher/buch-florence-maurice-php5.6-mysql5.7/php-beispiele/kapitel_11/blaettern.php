<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Datenbankabfrage ausgeben lassen</title>  
  <style>
    table {
      width: 800px;
    }
  </style>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "geheim", "garten");
if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung: " . mysqli_connect_error();
  exit();
}
if (!$mysqli->set_charset("utf8")) {
  echo "Fehler beim Laden von UTF8 ". $mysqli->error;
}

if(!isset($_GET["seite"]) || !is_numeric($_GET["seite"])) {
 $_GET["seite"] = 1;
}
$temp = $mysqli->query("SELECT COUNT(*) as anzahl FROM pflanzen") or die($mysqli->error);
$z = $temp->fetch_array();
$anzahl = $z["anzahl"];

$eintraege_pro_seite = 4;

if ($anzahl % $eintraege_pro_seite == 0) {
  $hoechst = $anzahl / $eintraege_pro_seite;
}
else {
 $hoechst = $anzahl / $eintraege_pro_seite + 1;
}
  
if ($_GET["seite"] > $hoechst || $_GET["seite"] < 1) {
  $_GET["seite"] = 1;
}
$start = $_GET["seite"] * $eintraege_pro_seite - $eintraege_pro_seite;

$ergebnis = $mysqli->query("SELECT name, beschreibung, preis FROM pflanzen LIMIT $start, $eintraege_pro_seite ");
echo "<table border='1'>\n";
while($zeile = $ergebnis->fetch_array()) {
  echo "<tr><td>" . htmlspecialchars($zeile["name"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["beschreibung"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["preis"]) . "</td>"
       . "</tr>\n";
}
echo "</table>";

$ausgabe = "";
for($i=1; $i <= $hoechst; $i++) {
  $ausgabe .= " <a href='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "?seite=$i'>$i</a> ";
}
echo $ausgabe;

$ergebnis->close();
$mysqli->close();
?>
</body>
</html>