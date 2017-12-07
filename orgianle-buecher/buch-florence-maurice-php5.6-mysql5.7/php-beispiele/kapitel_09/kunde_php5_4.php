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
  public function halloSagen()
  {
    echo "Hallo";
  }
}
(new Kunde)->halloSagen();
?>
</body>
</html>