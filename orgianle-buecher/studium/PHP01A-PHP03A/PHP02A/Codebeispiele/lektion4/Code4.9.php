<?php
require_once("class_artikel03.php");

$art = new artikel("artikeldaten.xml");
$art->setTitel("Webshop 03");
$art->kopf();

if(!empty($_REQUEST['id']))
  $art->waehlen($_REQUEST['id']);
if(isset($_REQUEST['order']))
  $art->bestellen();

$art->anzeigen();
$text[0] = "<p><a href=\"".$_SERVER['PHP_SELF']."?order\">bestellen</a></p>";
$art->inhalt($text);
$art->fuss();
?>