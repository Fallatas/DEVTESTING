<?php
header ("Content-type: image/jpg");
$bild = imagecreatetruecolor(100, 50);
imagejpeg($bild);
imagedestroy($bild);
?> 