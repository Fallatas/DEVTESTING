<?php
$datei = "bilder/strand.jpg";
$bild = imagecreatefromjpeg($datei);

imageflip($bild, IMG_FLIP_VERTICAL);

header("Content-type: image/jpg");
imagejpeg($bild);
imagedestroy($bild);
?>