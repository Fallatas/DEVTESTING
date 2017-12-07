<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Zeitdifferenz</title>
</head>
<body>
<?php
date_default_timezone_set("Europe/Berlin");
function zeitdifferenz($t1, $t2, $einheit) 
{
  $differenz = abs($t1 - $t2);
  $anzSek = array (
    "Sekunden" => 1,
    "Minuten"  => 60,
    "Stunden"  => 3600,
    "Tage"     => 86400,
    "Wochen"   => 604800
  );
  if (isset($anzSek[$einheit])) {
    return floor($differenz/$anzSek[$einheit]);
  } else {
    return "Ungültige Eingabe";
  }
}
$vorgestern = mktime(0, 0, 0, intval(date("m")), intval(date("d")-2));
$heute      = time();
echo zeitdifferenz($heute, $vorgestern, "Tage");
echo "<br />\n";
echo zeitdifferenz($vorgestern, $heute, "Tage");
?>
</body>
</html>
