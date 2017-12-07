<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Destruktor</title>
</head>
<body>
<?php
class Beispielklasse
{
  public function __construct() 
  {
    echo get_class($this) . " wurde erstellt<br />";
  }
  public function __destruct() 
  {
    echo get_class($this) . " wurde zerstört";
  }
}
$objekt = new Beispielklasse();
unset($objekt);

?>


</body>
</html>

