<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Datenbankabfrage ausgeben lassen</title>
</head>
<body>
<?php
$db = mysql_connect("localhost", "root", "geheim");
if (!$db) {
  echo "Fehler bei der Verbindung: " . mysql_connect_error();
  exit();
}
mysql_select_db("garten") or exit ("Konnte Datenbank nicht auswählen");
$ergebnis = mysql_query("SELECT name, beschreibung, preis FROM pflanzen;");
echo "<table border='1'>\n";
while($zeile = mysql_fetch_array($ergebnis)) {
  echo "<tr><td>" . htmlspecialchars($zeile["name"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["beschreibung"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["preis"]) . "</td>"
       . "</tr>\n";
}
echo "</table>";

mysql_close($db);
?>


</body>
</html>

