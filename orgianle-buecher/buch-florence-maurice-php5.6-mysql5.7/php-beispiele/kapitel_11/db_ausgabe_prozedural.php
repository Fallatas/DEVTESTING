<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Datenbankabfrage ausgeben lassen</title>
</head>
<body>
<?php
$db = mysqli_connect("localhost", "root", "geheim", "garten");
if (!$db) {
  echo "Fehler bei der Verbindung: " . mysqli_connect_error();
  exit();
}
$ergebnis = mysqli_query($db, "SELECT name, beschreibung, preis FROM pflanzen;");
echo "<table border='1'>\n";
while($zeile = mysqli_fetch_array($ergebnis)) {
  echo "<tr><td>" . htmlspecialchars($zeile["name"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["beschreibung"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["preis"]) . "</td>"
       . "</tr>\n";
}
echo "</table>";

mysqli_close($db);
?>


</body>
</html>

