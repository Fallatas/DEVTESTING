<?php
$zip = new ZipArchive();
if ($zip->open("meinArchiv.zip", ZipArchive::CREATE)!== TRUE) {
  exit("konnte Datei nicht öffnen");
 }
 $zip->addFile("lieferanten.csv");
 $zip->addFile("xml_foreach.php");
 $zip->close();
 echo "ok";

?>