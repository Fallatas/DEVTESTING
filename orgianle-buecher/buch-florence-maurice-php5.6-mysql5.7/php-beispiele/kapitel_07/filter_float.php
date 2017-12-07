<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Eingaben mit der filter-Erweiterung filtern</title>
</head>
<body>
<?php
$zahl = 1.2;
var_dump(filter_var($zahl, FILTER_VALIDATE_FLOAT));

//Komma als Trennzeichen
$betrag = "1,4";
$optionen = array(
  "options" => array("decimal"=>","));
var_dump(filter_var($betrag, FILTER_VALIDATE_FLOAT, $optionen));


?>

</body>
</html>