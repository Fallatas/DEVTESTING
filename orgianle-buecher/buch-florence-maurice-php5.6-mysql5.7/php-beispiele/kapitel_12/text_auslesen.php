<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Text auslesen</title>

</head>
<body>
<?php
$datei="beispieldatei.txt";
$inhalt = file_get_contents($datei);
echo strtoupper($inhalt);
?>
</body>
</html>