<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>mktime</title>
</head>
<body>
<?php
date_default_timezone_set("Europe/Berlin");
$tage = array (
        "Mon" => "Montag",
        "Tue" => "Dienstag",
        "Wed" => "Mittwoch",
        "Thu" => "Donnerstag",
        "Fri" => "Freitag", 
        "Sat" => "Samstag",
        "Sun" => "Sonntag");
$weihnachten = mktime(17, 0, 0, 12, 24, 2015);
$wochentag = $tage[date("D", $weihnachten)];
echo "$wochentag, den ";
echo date("d.m.Y H:i:s", $weihnachten);


?>
</body>
</html>
