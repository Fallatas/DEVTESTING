<?php
require_once("class_artikel.php");
require_once("class_sitzungsSeite03.php");

$seite = new sitzungsSeite();
$art = new artikel();
$seite->setTitel("Webshop 03");
$seite->kopf();

print_r($seite->getSessionDaten());
$sessData = array('artikel' => '123', 'preis' => '12.55');
$seite->setSessionDaten($sessData);

$art->anzeigen();
$seite->fuss();
?>