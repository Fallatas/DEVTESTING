<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Fehlerhafte Query</title>
</head>
<body>
<?php
require_once "db_daten.php";
$ergebnis = $mysqli->query("SELECT name as Pflanzenname beschreibung AS Kurzbeschreibung, preis AS Nettopreis FROM pflanzen WHERE preis < 7;");
if (!$ergebnis) {
  echo "Der folgende Fehler ist aufgetreten: <strong>" . $mysqli->error
          . ".</strong><br />\n Die Fehlernummer: " . $mysqli->errno;
} else {
  echo "hat geklappt";
  $ergebnis->close();
}
$mysqli->close();
?>

</body>
</html>

