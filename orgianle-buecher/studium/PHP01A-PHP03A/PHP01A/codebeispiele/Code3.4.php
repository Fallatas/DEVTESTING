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
  foreach ($beitraege as $wert)
  {
    foreach ($wert as $key => $value)
    {
      print "    ".ucwords($key).": ".$value."<br />\n";
    }
    print "<hr />\n";
  }
?>
    <p>Thats all folks.</p>
  </body>
</html>
