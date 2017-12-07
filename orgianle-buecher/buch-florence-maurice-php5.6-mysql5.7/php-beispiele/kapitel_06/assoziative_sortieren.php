<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Sortieren</title>
</head>
<body>
<?php
$farben = array ("hellblau" =>  "lightblue", 
                 "schwarz" => "black", 
                 "gelb" => "yellow", 
                 "himmelblau" => "skyblue",
                 "rot" => "red");
echo "<strong>asort()</strong>: ";
asort($farben);
print_r($farben);
echo "<br /><strong>arsort()</strong>: ";
arsort($farben);
print_r($farben);
echo "<br /><strong>ksort()</strong>: ";
ksort($farben);
print_r($farben);
echo "<br /><strong>krsort()</strong>: ";
krsort($farben);
print_r($farben);
?>
</body>
</html>