<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>preg_match()</title>
</head>
<body>
<?php
$muster = "/und/";
$in = "Der Hund hat einen Knochen";
if(preg_match($muster, $in, $treffer)) {
  echo "$muster passt auf '$in'<br />\n";
  print_r($treffer);
}


?>
</body>
</html>