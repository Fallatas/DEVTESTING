<?php
require_once("class_artikel03.php");

$art = new artikel("artikeldaten.xml");
$art->setTitel("Webshop 03");
$art->kopf();

if(!empty($_REQUEST['id']))
  $art->waehlen($_REQUEST['id']);

$art->anzeigen();
$art->fuss();
?>
