<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Verarbeitung Formulardaten</title>
</head>
<body>
<?php
echo "Ihre Eingaben<br />\n";
echo "Vorname: " . htmlspecialchars($_GET["vorname"]) . "<br />\n";
echo "Name: " . htmlspecialchars($_GET["nachname"]) . "<br />\n";
?>
</body>
</html>