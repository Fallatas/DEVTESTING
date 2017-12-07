<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>str_replace()</title>
</head>
<body>
<?php
$satz = "außerhalb der Straße";
$erg  = str_replace("ß", "ss", $satz);
echo "Vorher: $satz, nachher: $erg";

echo "<br />\n";

$text = "Schöne Grüße";
$sonder = array("ö", "ä", "ü", "ß", "Ö", "Ü", "Ä");
$ohne = array("oe", "ae", "ue", "ss", "Oe", "Ue", "Ae");
echo str_replace($sonder, $ohne, $text);

?>
</body>
</html>