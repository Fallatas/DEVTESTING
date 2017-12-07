<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Das geht nicht</title>
</head>
<body>
<?php
/* das geht nicht - kein Zugriff auf als private deklarierte Eigenschaft!*/
class Beispielklasse 
{
  private $eigenschaft = 50;
}
$objekt = new Beispielklasse();
$objekt->eigenschaft = 500;


?>

</body>
</html>


