<html>
  <body>
<?php
  $fh = fopen("test.txt", "r");
  if (!$fh)
  {
    print "Datei \"test.txt\" konnte nicht ge&ouml;ffnet werden!\n";
  }
  else
  {
    while(!feof($fh))
    {
      $zeile = fgets($fh);
      print $zeile."<br />\n";
    }
    fclose($fh); # schliessen der Datei nicht vergessen!
  }
?>
  </body>
</html>