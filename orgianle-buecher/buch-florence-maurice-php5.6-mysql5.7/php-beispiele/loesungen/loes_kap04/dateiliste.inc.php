<?php
$dateien = array ("arrays.php", "array_liste.php", "operatoren.php", "server_array.php", "server_array_tabelle.php",
"variablendefinitionen.php", "zufallstexte.php");

foreach ($dateien as $datei) {
  echo "<a href='$datei'>$datei</a><br />\n";
}
?>