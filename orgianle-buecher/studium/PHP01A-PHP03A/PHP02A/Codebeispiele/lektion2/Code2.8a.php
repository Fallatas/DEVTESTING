<?php
require_once("class_artikel03.php");
require_once("class_seite02.php");

$seite = new seite(); # Objekt der Klasse "seite" erzeugen
$art = new artikel(); # Objekt der Klasse "artikel" erzeugen

#Webseite ausgeben
$seite->setTitel("Webshop 02");
$seite->kopf();
$art->anzeigen(); # Alle Artikel anzeigen
$seite->fuss();
?>