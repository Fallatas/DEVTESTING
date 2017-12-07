<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
  <title>protected-private</title>
</head>
<body>
<?php
class BeispielklasseA 
{
  protected $eigenschaft = 50;
}

class BeispielklasseB extends BeispielklasseA
{
  public function test() {
    echo "Versuch Zugriff auf protected-Eigenschaft ";
    echo $this->eigenschaft;
  }
}
$objekt = new BeispielklasseB();
$objekt->test();


?>

</body>
</html>


