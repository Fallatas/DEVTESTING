<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Grafikbearbeitung mit PHP</title>
</head>
<body>
<?php
$bv = "bilder";
$vb = "vorschaubilder";
$verzeichnis = opendir($bv);
$bilder = array();
while (($datei = readdir($verzeichnis)) !== false) {
  if (preg_match("/\.jpe?g$/", $datei)) {
    $bilder[] = $datei;
  }
}
closedir($verzeichnis);
foreach ($bilder as $bild) {
  $b = imagecreatefromjpeg("$bv/$bild");
  $originalbreite = imagesx($b);
  $originalhoehe = imagesy($b);
  $neuebreite = 80;
  $neuehoehe = floor($originalhoehe * ($neuebreite / $originalbreite));
  $neuesbild = imagecreatetruecolor($neuebreite, $neuehoehe);
  imagecopyresampled($neuesbild, $b, 0, 0, 0, 0, $neuebreite, $neuehoehe, $originalbreite, $originalhoehe);
  echo "Thumbnail erzeugt für $bild<br />";
  imagejpeg($neuesbild, "$vb/$bild");
  imagedestroy($neuesbild);
}
?>
</body>
</html>