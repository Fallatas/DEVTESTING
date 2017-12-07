<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Inhalt in Datei schreiben</title>
  
</head>
<body>
<?php
$datei = "beschreibbar/zaehler.txt";
$anzahl = @file_get_contents($datei);
if ($anzahl !== false) {
  $anzahl++;
  @file_put_contents($datei, $anzahl);
  echo "Dies ist der $anzahl. Aufruf";
}
?>
</body>
</html>