<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Objekte vergleichen</title>
</head>
<body>
<?php
class Beispiel
{
  public $farbe;
  public function info() 
  {
    echo "Farbe ist {$this->farbe}<br />\n";
  }
}
$obj1 = new Beispiel();
$obj1->farbe = "blau";

$obj2 = $obj1;
$obj3 = clone $obj1;

echo "<pre>";
var_dump($obj1 == $obj2);
var_dump($obj1 === $obj2);

var_dump($obj1 == $obj3);
var_dump($obj1 === $obj3);
echo "</pre>";
?>
</body>
</html>