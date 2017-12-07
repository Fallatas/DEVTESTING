<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
  <title>Eingaben mit der filter-Erweiterung filtern</title>
</head>
<body>
<?php
$arr = array(4, "5","-6", "", "text");
$gefiltert = filter_var_array($arr, FILTER_VALIDATE_INT);

foreach($gefiltert as $k=>$v) {
  echo "$k: $v<br />\n";
}

?>

</body>
</html>