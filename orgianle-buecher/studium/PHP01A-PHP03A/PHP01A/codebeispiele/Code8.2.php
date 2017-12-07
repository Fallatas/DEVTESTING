<html>
  <body>
<?php
  if(!($fh = fopen("test.txt", "w+")))
  {
    print "Datei \"test.txt\" konnte nicht ge&ouml;ffnet werden!\n";
  }
  else
  {
    fputs($fh, "Alles klar.\n");
    fclose($fh);
    print "Datei wurde geschrieben.\n";
  }
?>
  </body>
</html>