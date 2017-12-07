<?php
$beitraege = array();
$beitraege[0]['text'] = "Erster Text";
$beitraege[0]['autor'] = "Erster Autor";
$beitraege[1]['text'] = "Zweiter Text";
$beitraege[1]['autor'] = "Zweiter Autor";
#print "<pre>";
#print_r($beitraege);
#print "</pre>";

?>
<html>
  <head><title>Forum</title></head>
  <body>
    <h1>Willkommen beim Forum</h1>
    <p>Sagen Sie uns Ihre Meinung</p>
<?php
  echo "    <hr />1. Eintrag: ".$beitraege[0]['text']."\n";
  echo "    <br />1. Autor: ".$beitraege[0]['autor']."\n";
  echo "    <hr />2. Eintrag: ".$beitraege[1]['text']."\n";
  echo "    <br />2. Autor: ".$beitraege[1]['autor']."\n";
?>
  </body>
</html>
