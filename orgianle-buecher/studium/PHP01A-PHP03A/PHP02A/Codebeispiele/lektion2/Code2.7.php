<?php
require_once("class_artikel01.php");
require_once("class_seite02.php");

$seite = new seite(); # Objekt der Klasse "seite" erzeugen
$art = new artikel(); # Objekt der Klasse "artikel" erzeugen

# zwei Artikel in das Array des artikel-Objektes eintragen
$art->artikelArray['1010']['name'] = "Herr der Ringe";
$art->artikelArray['1010']['preis'] = "39.80";
$art->artikelArray['2020']['name'] = "Der kleine Hobbit";
$art->artikelArray['2020']['preis'] = "19.95";

# Webseite ausgeben
$seite->setTitel("Webshop 01");
$seite->kopf();
$art->anzeigen(); # Alle Artikel anzeigen
$seite->fuss();
?>