<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Abfrage ausführen</title>
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
$ergebnis = $mysqli->query("SELECT name, beschreibung, preis FROM pflanzen;");
$zeile = $ergebnis->fetch_array();
echo "<pre>";
print_r($zeile);
echo "</pre>";
$ergebnis->close();
$mysqli->close();
?>
</body>
</html>

