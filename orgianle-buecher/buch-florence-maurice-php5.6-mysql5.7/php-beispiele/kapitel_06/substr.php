<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>substr()</title>
</head>
<body>
<?php
$satz = "Der Hund hat einen Knochen";
$ausschnitt = substr($satz, 4, 8);
echo $ausschnitt;
echo "<br />\n";
$gekuerzt = substr($satz, 0, 12);
echo $gekuerzt;
echo "<br />\n";
$ende = substr($satz, -13);
echo $ende;
echo "<br />\n";
$kuerzer = substr($satz, 0, -7);
echo $kuerzer;
?>

</body>
</html>