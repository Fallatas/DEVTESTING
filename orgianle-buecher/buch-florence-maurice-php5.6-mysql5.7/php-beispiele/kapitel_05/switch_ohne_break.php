<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>switch</title>
</head>
<body>
<?php
$dasda = "Apfel";
switch ($dasda) {
  case "Apfel":
    echo "$dasda ist ein Obst<br />";
  case "Karotte":
    echo "$dasda ist ein Gemüse<br />";
  case "Käse":
    echo "$dasda ist ein Milchprodukt<br />";
  default:
    echo "Kenne ich nicht";
}
?>
</body>
</html>