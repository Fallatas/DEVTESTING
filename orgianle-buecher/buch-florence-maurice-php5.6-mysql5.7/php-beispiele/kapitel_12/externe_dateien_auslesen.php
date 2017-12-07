<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Webseite auslesen</title>
</head>
<body>
<?php
$url="http://dpunkt.de/";
$inhalt = @file_get_contents($url);
if ($inhalt === false) {
  echo "Hat nicht geklappt";
}
else {
  $panfang = strpos($inhalt, "<p>");
  $pende   = strpos($inhalt, "</p>") + 5;
  $absatz = strip_tags(substr($inhalt, $panfang, $pende-$panfang));
  echo "Der erste Absatz von $url ist:<br />\n $absatz";
}
?>
</body>
</html>
