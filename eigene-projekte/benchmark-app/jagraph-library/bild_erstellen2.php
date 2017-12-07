<?php
$bild = imagecreatetruecolor(300, 400);
imagejpeg($bild, "bild.jpg");
imagedestroy($bild);
?> 