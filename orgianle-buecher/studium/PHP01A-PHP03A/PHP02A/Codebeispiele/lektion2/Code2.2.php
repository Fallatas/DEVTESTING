<?php
require_once("class_seite.php");
$a = new seite();
$a->kopf();
print "Hallo\n"; # Der sichtbare Inhalt dieser Webseite.
$a->fuss();
?>