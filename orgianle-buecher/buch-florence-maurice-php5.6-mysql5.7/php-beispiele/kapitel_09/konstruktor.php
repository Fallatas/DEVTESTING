<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Klasse Kunde mit Objekt</title>
</head>
<body>
<?php
class Kunde 
{
  public $name;
  public function __construct($name) 
  {
    $this->name=$name;
  }
  public function halloSagen()
 {
    echo "Hallo {$this->name}";
  }
}
$neuerKunde = new Kunde("Anja");
$neuerKunde->halloSagen();

?>

</body>
</html>