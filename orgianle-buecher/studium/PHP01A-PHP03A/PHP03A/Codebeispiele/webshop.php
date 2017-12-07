<?php
require_once("class_webshop.php");
require_once("texte.php");

$art = new webshop("artikeldaten.xml");
if(isset($_REQUEST['pdf']))
{
  $art->pdfliste();
}
$art->setTitel("Webshop 03");
$art->kopf();

if(isset($_REQUEST['wk']))
{
  $art->inhalt($text[3]);
  $art->auswahl();
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
    $art->waehlen($_REQUEST['id']);
  }
  $art->inhalt($text[0]);
  $art->anzeigen();
  $art->inhalt($text[1]);
}
$art->fuss();
?>