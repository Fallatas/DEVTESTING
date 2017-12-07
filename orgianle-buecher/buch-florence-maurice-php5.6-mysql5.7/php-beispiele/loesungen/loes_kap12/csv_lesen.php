<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
  <title>CSV-Dateien lesen</title> 
</head>
<body>
<?php
$datei="lieferanten.csv";
$dh = fopen($datei, "r");
echo "<table>\n";
while (!feof($dh)) {
  $zeile = fgetcsv($dh);
  echo "<tr>\n";
  foreach ($zeile as $z) {
    echo "<td>$z</td>";
  }
  echo "</tr>\n";
}
echo "</table>\n";
fclose($dh);

?>
</body>
</html>