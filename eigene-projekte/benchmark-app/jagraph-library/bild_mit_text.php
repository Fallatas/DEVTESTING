<?php
header ("Content-type: image/png");
$bild = imagecreatetruecolor(200, 50);
$weiss = imagecolorallocate($bild, 255, 255, 255);
$rot = imagecolorallocate($bild, 255, 0, 0);
$text = "Grafik mit Text";
imagefilledrectangle($bild, 10, 10, 190, 40, $rot);
imagestring($bild, 5, 30, 15, $text, $weiss);
imagepng($bild);
imagedestroy($bild);
?>