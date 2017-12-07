<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>XML laden</title>
</head>
<body>
<?php
$xmldatei = "xml_beispiel.xml";
$xml = simplexml_load_file($xmldatei);
echo "<pre>";
print_r($xml);
echo "</pre>"; 

?>
</body>
</html>