<?php
require_once("class_artikel.php");
require_once("class_sitzungsSeite.php");

$seite = new sitzungsSeite();
$art = new artikel();
$seite->setTitel("Webshop 01");
$seite->kopf();

$art->anzeigen();

$seite->fuss();
?>