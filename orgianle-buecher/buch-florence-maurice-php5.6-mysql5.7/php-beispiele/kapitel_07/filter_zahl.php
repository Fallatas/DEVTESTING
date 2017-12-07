<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Eingaben mit der filter-Erweiterung filtern</title>
</head>
<body>
<?php
$min = 3;
$max = 99;
$test = "4";
$optionen = array("options" => array("min_range"=>$min, "max_range"=>$max));
var_dump(filter_var($test, FILTER_VALIDATE_INT, $optionen));

?>

</body>
</html>