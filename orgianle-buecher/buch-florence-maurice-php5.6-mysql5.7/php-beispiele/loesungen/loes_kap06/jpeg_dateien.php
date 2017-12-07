<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>JPEG-Dateien erkennen</title> 
</head>
<body>
<?php

$datei ="blume.jpg";
if (preg_match("/\.jpe?g$/", $datei)) {
  echo "passt";
}
?>
</body>
</html>