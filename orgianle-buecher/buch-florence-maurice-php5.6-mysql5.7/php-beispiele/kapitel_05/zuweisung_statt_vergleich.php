<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Zuweisung statt Vergleich</title>
</head>
<body>
<?php
$i = 5;
echo "Vor if ist \$i $i<br />\n";
if ($i = 4) {
  echo "\$i gleich 4<br />\n";
}
echo "Nach if ist \$i $i<br />\n";
?>
</body>
</html>
