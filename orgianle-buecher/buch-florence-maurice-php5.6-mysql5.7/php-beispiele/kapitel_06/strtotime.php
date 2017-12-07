<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>strtotime</title>
</head>
<body>
<?php
date_default_timezone_set("Europe/Berlin");
echo date("d.m.Y H:i:s", strtotime("+1 day"));
echo "<br />\n";
echo date("d.m.Y H:i:s", strtotime("+2 day"));
echo "<br />\n";
echo date("d.m.Y H:i:s", strtotime("+1 week"));
echo "<br />\n";
echo date("d.m.Y H:i:s", strtotime("next Monday"));
echo "<br />\n";
?>
</body>
</html>