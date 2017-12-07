<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Traits</title>
</head>
<body>
<?php
trait beispieltrait  {
  public function eins() {
     echo "eins<br />\n";
  }
  public function zwei() {
     echo "zwei<br />\n";
  }
}
class Beispiel {
  use beispieltrait;
}
$b = new Beispiel();
$b->eins();
$b->zwei();

?>
</body>
</html>
