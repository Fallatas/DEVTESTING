<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>date()</title>
 
</head>
<body>
<?php
date_default_timezone_set("Europe/Berlin");
echo date("d.m.Y H:i:s");
echo "<br />\n";
echo date("d.m.Y, \u\m H  \U\h\\r i");
echo "<br />\nDer aktuelle Monat hat ";
echo date("t") . " Tage.<br />\n";
if (date("I") == 1) {
   echo "Es ist Sommerzeit.";
} else {
  echo "Es ist keine Sommerzeit.";
}
?>
</body>
</html>
