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
