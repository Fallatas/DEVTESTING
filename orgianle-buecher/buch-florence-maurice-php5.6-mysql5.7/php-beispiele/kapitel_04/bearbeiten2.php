<?php

$entfernen = 1;
$datei = "variablen_ausgeben.php";
$inhalt = file_get_contents($datei);
$muster = "/[0-9]{2} /";
$inhaltneu = preg_replace($muster, "", $inhalt);

file_put_contents($datei, $inhaltneu);


?>