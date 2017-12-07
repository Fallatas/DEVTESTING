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
foreach ($antworten as $aw) {
  echo "$aw <br />";
}
echo $aw; // letztes gespeicherte Element
?>
</body>
</html>
