<?php
require_once "smarty_beispiel/meinsmarty.php";
$smarty = new MeinSmarty;

$meintitel = "Ein erster Test mit Smarty";
$meinestadt = "München";

$smarty->assign("neuertitel", $meintitel);
$smarty->assign("stadt", $meinestadt);

$smarty->display("index.tpl");
?>
