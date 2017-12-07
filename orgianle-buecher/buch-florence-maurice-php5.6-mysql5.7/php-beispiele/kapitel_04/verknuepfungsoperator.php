<!DOCTYPE html>
<html>
 <head>
  <title>Verknüpfungsoperator</title>
  <meta charset="UTF-8" />
</head>
<body>
<?php
$vorname = "Denis"; 
echo "Hallo " . " Welt. "; /* Hallo Welt */
echo "Hallo " . $vorname; /* Hallo Denis */
echo "<br />\nGuten Morgen " . $vorname . " - gut geschlafen?"; 

echo "<br />\n";

$koffer = "Zahnbürste, ";
$koffer = $koffer . "Hose ";
$koffer = $koffer . "und T-Shirt";
echo "Ich nehme $koffer mit."; 

echo "<br />\n";

$koffer = "Zahnbürste, ";
$koffer .= "Hose ";
$koffer .= "und T-Shirt";
echo "Ich nehme $koffer mit."; 

?>
</body>
</html>

