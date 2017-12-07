<?php
$beitraege = array();
$beitraege[0]['text'] = "Erster Text";
$beitraege[0]['autor'] = "Erster Autor";
$beitraege[1]['text'] = "Zweiter Text";
$beitraege[1]['autor'] = "Zweiter Autor";
#print "<pre>";
#print_r($beitraege);
#print "</pre>";

function beitrag_ausgeben($beitrag)
{
    print "Eintrag: ".$beitrag['text']."\n";
    print "<br>";
    print "Autor: ".$beitrag['autor']."\n";
}

?>
<html>
  <head><title>Forum</title></head>
  <body>
    <h1>Willkommen beim Forum</h1>
    <p>Sagen Sie uns Ihre Meinung</p>
<?php
  for ($i = 0; $i < count($beitraege); $i++)
  {
    beitrag_ausgeben($beitraege[$i]);
    print "<hr>\n";
  }
?>
    <p>Thats all folks.</p>
  </body>
</html>
