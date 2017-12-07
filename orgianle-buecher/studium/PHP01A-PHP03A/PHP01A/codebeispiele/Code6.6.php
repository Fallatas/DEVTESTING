<html>
  <head>
    <title>Das dritte dynamische Programm</title>
  </head>
  <body>
    <p>Heute ist
<?php
  $datum = time();
#  $datum = 946681199
  if (is_int($datum))
  {
    if ($datum >= 946681200)
    {
      $text = "Willkommen im 21. Jahrhundert"; 
    }
    else
    {
      $text = "Immer noch im 20. Jahrhundert";
    }
  }
  print date("r", $datum);
  print "<br>$text";
?>
  </body>
</html>
