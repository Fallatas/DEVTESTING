<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Zufallsbilder</title>
</head>
<body>
<?php
$bilder = array("blumen.jpg", "boot.jpg", 
                "landschaft.jpg", "stadt_am_meer.jpg", 
                "strand.jpg");
$zufallszahl = array_rand($bilder);
echo "<img src='$bilder[$zufallszahl]' height='200' width='150' />\n";
?>
</body>
</html>
