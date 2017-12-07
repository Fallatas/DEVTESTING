<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Closures</title>
</head>
<body>
<?php
$faktor = 2;
$lambda = function($a) use($faktor) { 
  return $a / $faktor; 
};
$erg1 = $lambda(33);
echo "\$erg1 ist $erg1<br />\n";

$faktor = 3;
$erg2 = $lambda(33);
echo "\$erg2 ist $erg2<br />\n";

?>
</body>
</html>

