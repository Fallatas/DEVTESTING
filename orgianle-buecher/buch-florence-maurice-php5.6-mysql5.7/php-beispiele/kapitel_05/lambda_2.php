<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Lambda-Funktionen</title>
</head>
<body>
<?php
$zahlen = array (4, 33, 2);
$ergebnis = array_map(function($a) { return $a / 2; }, $zahlen);
print_r($ergebnis);
?>
</body>
</html>

