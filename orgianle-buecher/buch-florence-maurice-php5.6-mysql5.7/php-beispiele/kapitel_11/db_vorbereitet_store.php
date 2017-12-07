<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Vorbereitete Anweisung: SELECT</title>
</head>
<body>
<?php
require_once "db_daten.php";
$suche = "%beere%";
if($stmt = $mysqli->prepare("SELECT name, beschreibung, preis FROM pflanzen
			     WHERE name LIKE ?")) {
  $stmt->bind_param("s",  $suche);
  $stmt->execute();
  $stmt->store_result();
  $anzahl = $stmt->num_rows;
  $stmt->bind_result($name, $beschreibung, $preis);
  echo "<h2>Insgesamt $anzahl Ergebnisse für '$suche'</h2>\n";
  echo "<table border='1'>\n";
  while($stmt->fetch()) {
    echo "<tr>\n\t<td>" 
       . htmlspecialchars($name)
       . "</td>\n\t<td>"
       . htmlspecialchars($beschreibung)
       . "</td>\n\t<td>"
       . htmlspecialchars($preis)
       . "</td>\n</tr>\n";
    }
  $stmt->free_result();
  $stmt->close();
}
$mysqli->close();
?>
</table>
</body>
</html>