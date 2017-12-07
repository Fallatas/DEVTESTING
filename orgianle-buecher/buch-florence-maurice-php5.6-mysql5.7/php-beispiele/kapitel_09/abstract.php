<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>abstract</title>
  
</head>
<body>
<?php
abstract class GanzAbstrakt 
{
  abstract public function begruessen();
  public function ausgabe() 
  {
    echo "nicht abstrakt";
  }
}

class NeueKlasse extends GanzAbstrakt
{
  public function begruessen()
 {
   echo "Schönen Tag auch!";
  }
}
/* das geht nicht: */
/*$beispiel = new GanzAbstrakt;
$beispiel->begruessen(); */

$beispiel = new NeueKlasse();
$beispiel->begruessen();
?>
</body>
</html>
