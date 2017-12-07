<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>htmlspecialchars()</title>
</head>
<body>
<?php
$behauptung = "2 < 4 && \"5\" == '5'";
echo htmlspecialchars($behauptung);
echo "<br />\n";
echo htmlspecialchars($behauptung, ENT_QUOTES);
echo "<br />\n";
echo htmlspecialchars($behauptung, ENT_NOQUOTES);
echo "<br />\n";
$mit = htmlspecialchars($behauptung);
$ohne = htmlspecialchars_decode($mit);
echo $ohne;
?>
</body>
</html>