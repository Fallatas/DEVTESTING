<?php
session_start();
if(!empty($_SESSION['test']))
  print_r($_SESSION);
else
  $_SESSION['test'] = "Hallo";
?>
<html>
  <body>
    <a href="<?php print $_SERVER['SELF_PHP']?>">Session-Cookie gesetzt?</a>
  </body>
</html>
