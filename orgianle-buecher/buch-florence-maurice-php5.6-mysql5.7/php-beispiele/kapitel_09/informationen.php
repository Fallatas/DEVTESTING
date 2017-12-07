<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
  <title>Informationen über Objekte</title> 
</head>
<body>
<?php
require_once "kunde.php";
$neuerKunde = new Kunde ("Anja");
$neuerKunde->speichern(20);
echo "<pre>";
echo "Infos über var_dump()\n";
var_dump($neuerKunde);
echo "Infos über print_r()\n";
print_r($neuerKunde);
echo "</pre>";
echo "Objekte lassen sich wie ein Array durchlaufen<br />\n";
foreach($neuerKunde as $k => $v) {
  echo "$k: $v<br />\n";
}




?>

</body>
</html>