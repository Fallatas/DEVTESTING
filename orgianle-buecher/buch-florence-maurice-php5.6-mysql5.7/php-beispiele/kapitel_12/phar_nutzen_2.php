<?php
$phar = new Phar("phar_beispiel.phar", 0, "mein.phar");
foreach ($phar as $datei) {
  echo $datei->getFilename() . "<br/>";
  echo htmlspecialchars(file_get_contents($datei->getPathName()));
}
?>
