<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Serialisieren</title>
 
</head>
<body>
<?php
$farben = array ("hellblau" =>  "lightblue", 
                 "schwarz" => "black", 
                 "gelb" => "yellow", 
                 "himmelblau" => "skyblue",
                 "rot" => "red");
$serial = serialize($farben);
echo $serial;
$arr = unserialize($serial);
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
</body>
</html>
