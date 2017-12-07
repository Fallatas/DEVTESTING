<?php 
  date_default_timezone_set("Europe/Berlin");
  $uhrzeit = date("H");
  if ($uhrzeit < 5 || $uhrzeit > 20) {
     $gruss = "Gute Nacht";
  } elseif ($uhrzeit < 11) {
     $gruss = "Guten Morgen";
  } elseif ($uhrzeit < 15) {
     $gruss = "Guten Mittag";
  } elseif ($uhrzeit < 18) {
     $gruss = "Guten Nachmittag";
  } else  {
     $gruss = "Guten Abend";
  } 
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Unterschiedliche Begrüßung </title>
</head>
<body>
<?php
  echo $gruss;
?>
</body>
</html>