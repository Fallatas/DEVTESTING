<?php
if (!empty($_COOKIE['test']))
{
  setcookie("test", "abc", time()-3600*24*100);
  print_r($_COOKIE['test']);
}
else
  setcookie("test", "abc", time()+3600*24*3);
?>
<html>
  <body>
    <a href="<?php print $_SERVER['PHP_SELF']?>">Wurde das Cookie &uuml;bertragen? </a>
  </body>
</html>
