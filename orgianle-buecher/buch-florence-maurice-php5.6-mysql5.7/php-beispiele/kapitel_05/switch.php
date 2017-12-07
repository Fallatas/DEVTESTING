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
    echo "$dasda ist ein Obst";
    break;
case "Karotte":
    echo "$dasda ist ein Gemüse";
    break;
case "Käse":
    echo "$dasda ist ein Milchprodukt";
    break;
default:
    echo "Kenne ich nicht";
}
?>
</body>
</html>
