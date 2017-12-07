<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Arrays</title>
</head>
<body>
<?php
$orte = array("Ambach", "Berg", "Starnberg", "Tutzing", "Seeshaupt");
echo "<ul>\n";
foreach ($orte as $ort) {
  echo "\t<li>$ort</li>\n";
}
echo "</ul>\n";
?>
</body>
</html>