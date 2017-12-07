<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Vererbung: Premiumkunde</title>  
</head>
<body>
<?php
require_once "kunde.php";
class Premiumkunde extends Kunde
{
  public $speicherGesamt= 100;
  public $farbSchema;
  public function __construct($name, $speicherVerbraucht = 0, $farbSchema = "Sonnenaufgang") 
  {
    $this->name = $name;
    $this->speicherVerbraucht = $speicherVerbraucht;
    $this->farbSchema = $farbSchema;
  }
}
$kunde3 = new Premiumkunde ("Julian", 20, "Wüstenstimmung");
$kunde3->halloSagen();
echo "<br />Das gewählte Farbschema ist: {$kunde3->farbSchema}<br />";
$kunde3 ->zustandAusgeben();



?>

</body>
</html>


