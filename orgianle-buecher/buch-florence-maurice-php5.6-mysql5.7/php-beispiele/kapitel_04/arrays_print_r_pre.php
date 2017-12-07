<!DOCTYPE html>
<html>
 <head>
  <title>Arrays</title>
  <meta charset="UTF-8" />
</head>
<body>
<?php
$antworten = array("nie", "manchmal", "oft", 42);
$antworten[] = "aus Prinzip nicht";
echo "<pre>";
print_r($antworten);
echo "</pre>";

?>
</body>
</html>
