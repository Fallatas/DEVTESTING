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
  public $speicherGesamt = 100;
}

$kunde2 = new Premiumkunde ("Fritz");
$kunde2->halloSagen();
$kunde2 ->zustandAusgeben();
$kunde2 ->speichern(20);
$kunde2 ->zustandAusgeben();
$kunde2 ->speichern(40);
$kunde2 ->zustandAusgeben();


?>

</body>
</html>


