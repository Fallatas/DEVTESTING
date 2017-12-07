<?php
require_once("class_webshop.php");
require_once("texte.php");

$art = new webshop();
if(isset($_REQUEST['pdf']))
{
  $art->pdfliste();
}

if(isset($_REQUEST['neuanmeldung']))
  $art->setKundenDaten(
        array('name' => $_REQUEST['name'],
              'vorname' => $_REQUEST['vorname'],
              'plz' => $_REQUEST['plz'],
              'passwort' => $_REQUEST['passwort'],
              'ort' => $_REQUEST['ort'],
              'strasse' => $_REQUEST['strasse'],
              'kennung' => $_REQUEST['kennung'],
              'email' => $_REQUEST['email']
              ));

$art->setTitel($titeltext);
$art->kopf();

if (!empty($_REQUEST['kennung']) && !empty($_REQUEST['passwort']))
{
  $art->setKundenNummer($_REQUEST['kennung'], $_REQUEST['passwort']);
}

if($art->getKundenNummer() == 0)
{
  if(!isset($_REQUEST['neu']))
    $art->inhalt($text[5]);
  else
    $art->inhalt($text[6]);
}
elseif(isset($_REQUEST['wk']))
{
  $art->inhalt($text[3]);
  $art->auswahl($art->getKundenNummer()); # neuer Parameter!
  $art->inhalt($text[2]);
}
elseif(isset($_REQUEST['order']))
{
  $art->bestellen($art->getKundenNummer());
  $art->inhalt($text[4]);
}
else
{
  if(!empty($_REQUEST['id']))
  {
    $art->waehlen($_REQUEST['id'],
    $art->getKundenNummer()); # neuer Parameter!
  }
  $art->inhalt($text[0]);
  $art->anzeigen();
  $art->inhalt($text[1]);
}
$art->fuss();
?>
