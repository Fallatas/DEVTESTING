<?php
require_once "smarty_beispiel/meinsmarty.php";
$smarty = new MeinSmarty;

$meintitel = "Ein erster Test mit Smarty";
$meinestadt = "München";
$meinemeldung = "Aufgrund des schönen Wetters ändern wir unsere Pläne. Wir gehen ins Schwimmbad statt ins Kino";

$meineliste = array("Sonne", "Mond", "Sterne");
$meinefarben = array("red"=>"rot", "green"=>"grün");
$smarty->assign("farbe", $meinefarben);


$bilder = array("blumen.jpg", "boot.jpg", 
                "landschaft.jpg", "stadt_am_meer.jpg", 
                "strand.jpg");
$max = count($bilder)-1;
$zufallszahl = rand(0, $max);
$meinbild = $bilder[$zufallszahl];



$smarty->assign("neuertitel", $meintitel);
$smarty->assign("stadt", $meinestadt);
$smarty->assign("meldung", $meinemeldung);
$smarty->assign("liste", $meineliste);
$smarty->assign("bild", $meinbild);


$smarty->display("beispiel_erweitert.tpl");
?>