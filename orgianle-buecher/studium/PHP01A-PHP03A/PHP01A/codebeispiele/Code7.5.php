<?php
require_once("forumsfunktionen3.php");
?>
<html>
  <head><title>Forum</title></head>
  <body>
    <h1>Willkommen beim Forum</h1>
    <p><b>Sagen Sie uns Ihre Meinung</b></p>
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
