<?php
require_once("forumsfunktionen4.php");
?>
<html>
  <head><title>Forum 4</title></head>
  <body>
    <h1>Willkommen beim Forum</h1>
<?php formular_ausgeben(); ?>
    <hr />
<?php
  for ($i = count($beitraege)-1; $i >= 0; $i--)
  {
    beitrag_ausgeben($beitraege[$i]);
    print "<hr>\n";
  }
?>
    <p>Thats all folks.</p>
  </body>
</html>
