<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>strftime()</title> 
</head>
<body>
<?php
date_default_timezone_set("Europe/Berlin");
setlocale(LC_TIME, "de_DE@euro", "de_DE", "deu_deu");

echo strftime("Heute ist %A.<br />\n");
echo utf8_encode(strftime("Monat: %B<br />\n"));
echo strftime("Datum: %x<br />\n");
echo strftime("Uhrzeit: %X<br />\n");
?>
</body>
</html>