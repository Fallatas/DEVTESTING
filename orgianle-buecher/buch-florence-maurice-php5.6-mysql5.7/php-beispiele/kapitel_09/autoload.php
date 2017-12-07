<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Dateien mit Klassen bei Bedarf laden</title>
</head>
<body>
<?php
function __autoload($klasse) {
    require_once $klasse . ".php";
}
$obj  = new Beispiel1();
$obj->info();
$obj2 = new Beispiel2();
$obj2->info();
//$ob3 = new Gibtsnichts();
?>

</body>
</html>
