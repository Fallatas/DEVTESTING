<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Text zeilenweise auslesen</title>
</head>
<body>
<?php
$datei="beispieldatei.txt";
$dh = fopen($datei, "r");
echo "<ul>\n";
while (!feof($dh)) {
  $zeile = fgets($dh);
  echo "<li>" . htmlspecialchars($zeile) . "</li>\n";
}
echo "</ul>\n";
fclose($dh);
?>
</body>
</html>