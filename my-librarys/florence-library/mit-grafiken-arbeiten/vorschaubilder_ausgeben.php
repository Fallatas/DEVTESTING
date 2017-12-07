<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
  <title>Grafikbearbeitung mit PHP</title>
  <style>
  a img { border: 0; }
  #bilder { box-shadow: 1px 0px 2px gray; width: 450px; overflow: hidden; background-color: #ccc; padding-bottom: 20px;}
  #bilder img { float: left; padding: 15px;  box-shadow: 1px 0px 4px gray; margin: 15px; background-color: white; border-radius: 2px;}
  </style>
</head>
<body>
<div id="bilder">
<?php
$bv = "bilder";
$verzeichnis = opendir($bv);
$bilder = array();
while (($datei = readdir($verzeichnis)) !== false) {
  if (preg_match("/\.jpe?g$/", $datei)) {
    $bilder[] = $datei;
  }
}
closedir($verzeichnis);
foreach($bilder as $bild) {
  echo "<a href='bilder/$bild'><img src='vorschaubilder/$bild' alt='' /></a>\n";
}
?>
</div>
</body>
</html>