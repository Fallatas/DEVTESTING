<?php
require_once "smarty_beispiel/smarty_initialize.php";

$meintitel = "Ein erster Test mit Smarty";
$meinestadt = "München";

$smarty->assign("neuertitel", $meintitel);
$smarty->assign("stadt", $meinestadt);

$smarty->display("index.tpl");
?>