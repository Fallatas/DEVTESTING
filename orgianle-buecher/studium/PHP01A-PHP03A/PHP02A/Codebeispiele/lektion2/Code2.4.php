<?php
require_once("class_seite02.php");
$a = new seite(); 
$a->setTitel("Testseite");
$a->kopf();
$daten[0]= "Hallo"; # Der Inhalt dieser Webseite.
$a->inhalt($daten);
$a->fuss();
?>