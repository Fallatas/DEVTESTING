<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Groß/Kleinschreibung</title>
</head>
<body>
<?php
$str = "Im Münchner Hofbräuhaus trinken Leute Bier in Maßkrügen<br />\n";
echo "Am Anfang: $str";
echo "<br />----mit strotoupper()---<br />\n";
echo strtoupper($str);

echo "<br />----mit Multibyte-Funktion ---<br />\n";
echo mb_strtoupper($str, "UTF-8");

echo "<br />----händisch ß umgewandelt ---<br />\n";
echo mb_strtoupper(str_replace("ß", "SS", $str), "UTF-8");

?>
</body>
</html>