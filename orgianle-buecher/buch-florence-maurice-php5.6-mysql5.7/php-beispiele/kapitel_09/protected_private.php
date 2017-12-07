<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>protected-private</title>
</head>
<body>
<?php
/* $eigenschaft ist in abgeleiteter Klasse nicht definiert, deswegen wird eine Notice ausgegeben */
class BeispielklasseA 
{
  private $eigenschaft = 50;
}

class BeispielklasseB extends BeispielklasseA
{
  public function test() {
    echo "Versuch Zugriff auf private-Eigenschaft ";
    echo $this->eigenschaft;
  }
}
$objekt = new BeispielklasseB();
$objekt->test();
?>
</body>
</html>
