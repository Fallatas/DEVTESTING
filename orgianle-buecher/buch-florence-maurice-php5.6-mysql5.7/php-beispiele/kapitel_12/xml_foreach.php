<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>XML laden</title>
</head>
<body>
<?php
$xmldatei= "xml_beispiel_2.xml";
$xml = simplexml_load_file($xmldatei);
/* alle durchlaufen */
foreach($xml->adresse as $adr) {
  echo $adr["art"]
       . ": " 
       . $adr->plz
       . " " 
       . $adr->ort 
       . "<br />\n";
}
/* auf die erste Adresse zugreifen */
echo "Die erste Adresse ist ";
echo $xml->adresse[0]->plz
     . " " 
     . $xml->adresse[0]->ort;
?>
</body>
</html>