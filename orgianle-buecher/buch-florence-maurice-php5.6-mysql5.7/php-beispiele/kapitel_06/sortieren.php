<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Sortieren</title>
</head>
<body>
<?php
$liste = array ("Kapern", "Oliven", "Ananas");
sort($liste);
echo "<pre>";
print_r($liste);
rsort($liste);
print_r($liste);
echo "</pre>";
?>
</body>
</html>