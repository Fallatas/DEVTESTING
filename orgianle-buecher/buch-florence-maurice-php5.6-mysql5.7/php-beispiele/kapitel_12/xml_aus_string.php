<!DOCTYPE html>
<html>
 <head>
  <title>XML laden</title>
  <meta charset="UTF-8" />
</head>
<body>
<?php
$xmldatei = "<gruss>Hallo</gruss>";
$xml = simplexml_load_string($xmldatei);
print_r($xml);

?>
</body>
</html>
