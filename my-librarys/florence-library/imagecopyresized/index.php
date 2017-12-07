<?php
echo "<strong style='color: red'>Arbeiten mit imagecopyresized</strong> <br>\n";
echo "<strong style='color: red'>Wird verwendet um Bilder zu skalieren.</strong> <br>\n";
echo "<hr style='color: red'>";

// Datei und Faktor der Größenänderung
$filename = 'test.jpg';
$percent = 0.5;

// Typ der Ausgabe
header('Content-Type: ');

// Neue Größe berechnen
list($width, $height) = getimagesize($filename);
$newwidth = $width * $percent;
$newheight = $height * $percent;

// Bild laden
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Skalieren
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Ausgabe
imagejpeg($thumb);

/*Infos für Bilder skalieren*/
/*http://php.net/manual/de/function.imagecopyresized.php*/
?>

