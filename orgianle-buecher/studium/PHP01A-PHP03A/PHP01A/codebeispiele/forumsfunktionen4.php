<?php
if ($_REQUEST['text'] != "")
{
  $datei = fopen("beitraege.txt", "a");
  if (!$datei)
  {
    print "Kann Datei nicht &ouml;ffnen!\n";
  }
  else
  {
    fputs($datei, $_REQUEST['text']."\n");
    if (isset($_REQUEST['autor']) && $_REQUEST['autor'] != "")
    {
      fputs ($datei, $_REQUEST['autor']."\n");
    }
    else
    {
      fputs ($datei, "unbekannt\n");
    }
    fclose ($datei);
  }
}

$beitraege = array();
$beitraege[0]['text'] = "Erster Text";
$beitraege[0]['autor'] = "Erster Autor";
$beitraege[1]['text'] = "Zweiter Text";
$beitraege[1]['autor'] = "Zweiter Autor";

function beitrag_ausgeben($beitrag)
{
    print "Eintrag: ".$beitrag['text']."\n";
    print "<br>";
    print "Autor: ".$beitrag['autor']."\n";
}

function formular_ausgeben()
{
?>
      <form method="POST" action="<?php print $_SERVER['PHP_SELF'] ?>">
        <b>Text : </b><input type="text" name="text">
        <br />
        <b>Autor : </b><input type="text" name="autor">
        <br />
        <input type="submit" value="absenden">
      </form>
<?php
}
?>