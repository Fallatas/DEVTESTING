<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Funktionen</title>  
</head>
<body>
<?php

function ausgabe() 
{
  echo "Hallo München";
}

ausgabe();

echo "<br />\n";
 
function copyright() {
  return "Copyright 2014";
}

$c = copyright();
echo strtoupper($c);

echo "<br />\n";

function copyright2() {
  return "Copyright 2014";
  echo "Hallo, hallo, warum hört mich denn niemand"; 
}
echo copyright2();

echo "<br />\n";

?>
</body>
</html>