<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Objekte verschachteln</title>
</head>
<body>
<?php

class BeispielA
{
  public function ausgabe()
  {
    echo "Ausgabe aus BeispielA";
  }
}
class BeispielB
{
  public $a;
  public function __construct() 
  {
    $this->a = new BeispielA();
  }
}
$b = new BeispielB();
$b->a->ausgabe();

?>
</body>
</html>