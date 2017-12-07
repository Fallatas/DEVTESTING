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
  $i = 0;
  while ($i < count($beitraege))
  {
    print "    <hr />".($i+1).". Eintrag: ".$beitraege[$i]['text']."\n";
    print "    <br />".($i+1).". Autor: ".$beitraege[$i]['autor']."\n";
    $i++;
  }
?>
    <p>Thats all folks.</p>
  </body>
</html>
