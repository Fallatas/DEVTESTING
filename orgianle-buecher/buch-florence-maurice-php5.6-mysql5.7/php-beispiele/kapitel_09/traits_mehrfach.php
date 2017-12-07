<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Traits</title>
</head>
<body>
<?php
trait traitA  {
  public function eins() {
     echo "A eins<br />\n";
  }
  public function zwei() {
     echo "A zwei<br />\n";
  }
}
trait traitB  {
  public function eins() {
     echo "B eins<br />\n";
  }
  public function zwei() {
     echo "B zwei<br />\n";
  }
}

class Beispiel {
  use traitA, traitB {
    traitB::eins insteadof traitA;
	traitB::zwei insteadof traitA;
	traitA::zwei as zweiA;
  }
}
$b = new Beispiel();
$b->eins();
$b->zwei();
$b->zweiA();


?>
</body>
</html>