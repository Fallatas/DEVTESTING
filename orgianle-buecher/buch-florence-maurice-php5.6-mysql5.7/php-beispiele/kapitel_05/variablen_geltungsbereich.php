<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Geltungsbereich von Variablen</title>
</head>
<body>
<?php
$vorname = "Lilli";
function gruss() {
  global $vorname;
  echo "Hallo $vorname<br />\n";
}
gruss();

?>
</body>
</html>

