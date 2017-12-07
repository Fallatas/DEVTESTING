<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Lambda-Funktionen</title> 
</head>
<body>
<?php
$lambda = function($a) { return $a / 2; };
$zahlen = array (4, 33, 2);
$ergebnis = array_map($lambda, $zahlen);
print_r($ergebnis);
?>
</body>
</html>