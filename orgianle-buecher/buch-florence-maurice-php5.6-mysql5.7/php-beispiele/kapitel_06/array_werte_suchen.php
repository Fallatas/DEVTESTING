<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Vorhandensein von Werten prüfen</title>
</head>
<body>
<?php

$farben = array ("hellblau" =>  "lightblue", 
                 "schwarz" => "black", 
                 "gelb" => "yellow", 
                 "himmelblau" => "skyblue",
                 "rot" => "red");
$such = "yellow";
if (in_array($such, $farben)) {
  echo "$such vorhanden. Zugehöriger Schlüssel: ";
  echo array_search($such, $farben);
}

?>
</body>
</html>