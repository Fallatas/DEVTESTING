<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Arrays</title>
</head>
<body>
<?php
$antworten = array("nie", "manchmal", "oft", 42);
$antworten[] = "aus Prinzip nicht";
echo "<pre>";
var_dump($antworten);
echo "</pre>";
?>
</body>
</html>
