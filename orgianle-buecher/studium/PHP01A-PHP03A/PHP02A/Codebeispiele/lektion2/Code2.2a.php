<?php
require_once("class_seite01.php");
$a = new seite();
$a->setTitel("Testseite");
$a->kopf();
print "Hallo\n"; # Der sichtbare Inhalt dieser Webseite.
$a->fuss();
?>