<!DOCTYPE html>
<html>
 <head>
  <title>XML laden</title>
  <meta charset="UTF-8" />
</head>
<body>
<?php
$xmldatei = "xml_beispiel.xml";
$xml = simplexml_load_file($xmldatei);
echo "<p>"  
     . $xml->name->vorname 
     . " " 
     . $xml->name->nachname
     . " wohnt in " 
     . $xml->adresse->plz 
     . " " 
     . $xml->adresse->ort
     . ". <br /> Diese Adresse ist " 
     . $xml->adresse["art"] 
     . ".</p>";

?>
</body>
</html>