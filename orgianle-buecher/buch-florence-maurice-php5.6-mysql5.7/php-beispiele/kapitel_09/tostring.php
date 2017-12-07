<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>toString</title>
</head>
<body>
<?php
require_once "kunde.php";
class Premiumkunde extends Kunde
{
  public $speicherGesamt = 100;
  public $farbSchema;
  public function __construct($name, $speicherVerbraucht = 0, $farbSchema = "Sonnenaufgang") 
  {
    $this->name = $name;
    $this->speicherVerbraucht = $speicherVerbraucht;
    $this->farbSchema = $farbSchema;
  }
  public function __toString()
  {
    $string = "Instanz von Premiumkunde<br />\n"
            . "Folgende Eigenschaften sind definiert: <br />\n"
            . "<ul>\n"
            . "<li>Name: " . $this->name . "</li>\n"
            . "<li>speicherVerbraucht: " . $this->speicherVerbraucht . "</li>\n"
            . "<li>farbSchema: " . $this->farbSchema . "</li>\n"
            . "</ul>\n";
    return $string;
  }
}

$pk = new Premiumkunde("Hans-Heinerich");
echo $pk;

?>



</body>
</html>
