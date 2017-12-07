<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>call</title>
</head>
<body>
<?php
class Beispiel 
{
  public $vorname;
  public function halloSagen() 
  {
    echo "Hallo {$this->vorname}";
  }
  public function __call($methode, $argumente) 
  {
    echo "Sie haben $methode aufgerufen. Die gibts nicht.  ";
    if (!empty($argumente)) {
      echo "Die übergebenen Argumente: ";
      foreach ($argumente as $el) {
        echo "$el ";
      }
    }
  }
}

$bsp = new Beispiel();
echo "<br />\n";
$bsp->verabschieden("tschüss", "morgen");
?>

</body>
</html>
