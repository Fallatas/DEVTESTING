<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Variadische Funktion</title>
</head>
<body>
<?php
function kofferpacken(...$dinge) {
  foreach($dinge as $ding) {
    echo "$ding ";
  }
}
echo "Ich nehme mit: ";
echo kofferpacken("Zahnbürste", "Bluse", "Bergschuhe");

echo "<br />\n";
//Vor PHP 5.6
function kofferpacken2() {
  $dinge = func_get_args();
  foreach($dinge as $ding) {
    echo "$ding ";
  }
}
echo "Ich nehme mit: ";
echo kofferpacken2("Zahnbürste", "Bluse", "Bergschuhe");

?>
</body>
</html>