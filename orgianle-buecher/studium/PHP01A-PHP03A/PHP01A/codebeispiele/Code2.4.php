<?php
$beitraege = array();
$beitraege[0] = "Erster Text";
$beitraege[1] = "Zweiter Text";
?>

<html>
  <head><title>Forum</title></head>
  <body>
  <?php print "<h1>Willkommen beim Forum</h1>\n";
    echo "<hr />1. Eintrag: $beitraege[0]\n";
    echo "<hr />2. Eintrag: $beitraege[1]\n";
   ?>
  </body>
</html>
