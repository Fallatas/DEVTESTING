<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>get und set</title>
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
  public function __set($eigenschaft, $wert)
  {
    if ($eigenschaft == "alter") {
      echo "Das Alter ist hier nicht relevant.";
    } else {
      echo "Sie wollen die Eigenschaft $eigenschaft setzen, die es nicht gibt.";
    }
  }
  public function __get($eigenschaft)  
  {
    echo "Die Eigenschaft $eigenschaft gibt es nicht.";
  }
}

$bsp = new Beispiel();
$bsp->vorname = "Amina";

$bsp->halloSagen();
echo "<br />\n";
$bsp->alter = 2;
echo "<br />\n";
echo $bsp->name;
?>

</body>
</html>