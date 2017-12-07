<?php
if (!empty($_COOKIE['test']))
  print_r($_COOKIE['test']);
else
{
  setcookie("test", "abc", time()+3600*24*3);
  header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
}
?>
<html>
  <body>
    <p>Das Cookie wurde &uuml;bertragen.</p>
  </body>
</html>
