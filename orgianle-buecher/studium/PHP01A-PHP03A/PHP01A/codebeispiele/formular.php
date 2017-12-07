<?php
  if (!empty($_REQUEST['name'])) print "Guten Tag ".$_REQUEST['name'].".\n";
?>
<html>
  <body>
    <h3>Willkommen</h3>
    Bitte geben Sie Ihren Namen an.
    <form method="post" action="formular.php">
      <input type="text" name="name">
      <input type="submit" value="absenden">
    </form>
    <p>Danke.</p>
  </body>
</html>
