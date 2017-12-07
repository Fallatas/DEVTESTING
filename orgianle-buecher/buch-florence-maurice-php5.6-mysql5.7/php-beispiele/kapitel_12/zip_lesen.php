<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Zip-Archiv auslesen</title>
</head>
<body>
<pre>
<?php
$zip = new ZipArchive();
$zip->open("MeinArchiv.zip");
echo "Anzahl an Dateien " . $zip->numFiles . "<br />";

for ($i=0; $i < $zip->numFiles; $i++) {
    echo "<br />Name: " . $zip->statIndex($i)["name"];
    echo "<br />Größe: " .  $zip->statIndex($i)["size"];
}
?>
</pre>
</body>
</html>