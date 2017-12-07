<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Wochenende oder nicht</title>
</head>
<body>
<?php
date_default_timezone_set("Europe/Berlin");
$tag = date("w");
if ($tag == 0 || $tag == 6) {
  echo "Schönes Wochenende";
}
else {
  echo "Gute Woche";
}
?>
</body>
</html>