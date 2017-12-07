<?php
$beitraege = array();
beitrag_schreiben();
beitraege_einlesen();

function beitrag_schreiben($datei = "beitraege.txt")
{
  if (!empty($_REQUEST['text']))
  {
    $dh = fopen($datei, "a");
    if (!$dh)
    {
      print "Kann Datei nicht erstellen!\n";
    }
    else
    {
      fputs($dh, $_REQUEST['text']."\n");
      if (!empty($_REQUEST['autor']))
      {
        fputs ($dh, $_REQUEST['autor']."\n");
      }
      else
      {
        fputs ($dh, "unbekannt\n");
      }
      fclose ($dh);
    }
  }
}

function beitraege_einlesen($datei = "beitraege.txt")
{
  global $beitraege;

  $dh = fopen($datei, "r");
  if(!$dh)
  {
    print "Kann Datei \"$datei\" nicht &ouml;ffnen!\n";
  }
  else
  {
    for ($i = 0; !feof($dh); $i++)
    {
      $zeile = fgets($dh);
      if ($zeile != "")
      {
        $beitraege[$i]['text'] = $zeile;
        $beitraege[$i]['autor'] = fgets($dh);
      }
    }
    fclose($dh);
  }
}

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
        <b>Text: </b><input type="text" name="text">
        <br />
        <b>Autor: </b><input type="text" name="autor">
        <br />
        <input type="submit" value="absenden">
      </form>
<?php
}
?>
