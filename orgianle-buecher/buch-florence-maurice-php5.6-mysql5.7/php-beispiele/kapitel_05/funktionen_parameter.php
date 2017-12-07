<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Funktionen</title>
</head>
<body>
<?php

function brutto($netto) 
{
  return $netto * 1.19;
}
$betrag = 25;
$bruttowert = brutto($betrag);
echo "$betrag ergibt $bruttowert inkl. MWSt<br />\n";

function brutto2($netto, $mwstSatz) 
{
  return $netto * (100 + $mwstSatz) / 100;
}
$betrag = 25;
$bruttowert = brutto2($betrag, 7);
echo "$betrag ergibt $bruttowert inkl. MWSt<br />\n";

$bruttowert2 = brutto2($betrag, 19);
echo "$betrag ergibt $bruttowert2 inkl. MWSt<br />\n";

?>
</body>
</html>