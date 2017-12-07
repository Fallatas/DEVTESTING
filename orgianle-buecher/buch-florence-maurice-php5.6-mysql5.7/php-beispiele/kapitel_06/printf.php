<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>printf</title>
</head>
<body>
<?php
$name = "Ben"; 
$alter  = 4;
$format = "%s ist %d Jahre alt";
printf($format, $name, $alter);
echo "<br />\n";
printf("%d", 2.567);
echo "<br />\n";
//Füllzeichen
printf("%03d", 7);
echo "<br />\n";
printf("%.2f", 34.567);
echo "<br />\n";
printf("%07.2f", 34.567); //Achtung 7 bestimmt die Gesamtlänge
echo "<br />\n";
$genau    = true;
$ergebnis = 9.123456;
if ($genau) {
  $format = "%.4f";
} else {
  $format = "%.2f";
}
printf($format, $ergebnis);
?>
</body>
</html>
