<?php
require_once("forumsfunktionen2.php");
?>
<html>
  <head><title>Forum</title></head>
  <body>
    <h1>Willkommen beim Forum</h1>
    <p><b>Sagen Sie uns Ihre Meinung</b></p>
    <form method="POST" action="<?php print $_SERVER['PHP_SELF'] ?>">
      <b>Text: </b><input type="text" name="text">
      <br />
      <b>Autor: </b><input type="text" name="autor">
      <br />
      <input type="submit" value="absenden">
    </form>
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
