<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Instanzen zählen</title>
</head>
<body>
<?php

class Beispiel 
{
  static $count = 0;
  public function __construct()
  {
    self::$count++;
    echo "Nummer der Instanz: " . self::$count;
  }
}
$a = new Beispiel();
echo "<br />\n";
$b = new Beispiel();

?>
</body>
</html>
