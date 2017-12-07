<?php
$beitraege = array();
$beitraege[0]['text'] = "Erster Text";
$beitraege[0]['autor'] = "Erster Autor";
$beitraege[1]['text'] = "Zweiter Text";
$beitraege[1]['autor'] = "Zweiter Autor";

$naechster_Eintrag = count($beitraege);

if (isset($_REQUEST['text']))
{
  $beitraege[$naechster_Eintrag]['text'] = $_REQUEST['text'];
}
if (isset($_REQUEST['autor']))
{
  $beitraege[$naechster_Eintrag]['autor'] = $_REQUEST['autor'];
}

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
