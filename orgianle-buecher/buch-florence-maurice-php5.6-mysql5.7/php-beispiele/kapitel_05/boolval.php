<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>boolval()</title>
</head>
<body>
<?php
$a = 0.0;
$b = "nix";
$c = "false";
$d = false;

echo var_dump($a), ": " , var_dump(boolval($a)), "<br />";
echo var_dump($b), ": " , var_dump(boolval($b)), "<br />";
echo var_dump($c), ": " , var_dump(boolval($c)), "<br />";
echo var_dump($d), ": " , var_dump(boolval($d));


?>
</body>
</html>
