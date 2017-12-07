<?php
require_once("class_artikel.php");
require_once("texte01.php");

$art = new artikel("artikeldaten.xml");
$art->setTitel("Webshop 03");
$art->kopf();

$art->inhalt($text[0]);
if(!empty($_REQUEST['id']))
  $art->waehlen($_REQUEST['id']);
if(isset($_REQUEST['order']))
  $art->bestellen();

$art->anzeigen();
$art->inhalt($text[1]);
$art->fuss();
?>