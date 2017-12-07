<?php
require_once("class_webshop.php");
require_once("texte02.php");

$art = new webshop("artikeldaten.xml");
$art->setTitel("Webshop 03");
$art->kopf();

$art->inhalt($text[0]);
if(isset($_REQUEST['wk']))
{
  $art->auswahl();
  $art->inhalt($text[2]);
}
if(!empty($_REQUEST['id']))
  $art->waehlen($_REQUEST['id']);
if(isset($_REQUEST['order']))
  $art->bestellen();

$art->anzeigen();
$art->inhalt($text[1]);
$art->fuss();
?>