<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Dateien mit Klassen bei Bedarf laden</title> 
</head>
<body>
<?php
function __autoload($klasse) {
  require_once strtolower($klasse) . ".php";
}

$obj  = new Beispiel1();
$obj->info();

//$ob3 = new Gibtsnichts();
?>

</body>
</html>
