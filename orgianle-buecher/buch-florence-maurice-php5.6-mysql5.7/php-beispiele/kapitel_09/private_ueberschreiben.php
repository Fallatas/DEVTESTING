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
  private $eigenschaft = 50;
}
class BeispielklasseB extends BeispielKlasseA
{
  protected $eigenschaft = 20;
  public function test() {
    echo " Zugriff auf Eigenschaft ";
    echo $this->eigenschaft;
  }
}
$objekt = new BeispielklasseB();
$objekt->test();


?>

</body>
</html>


