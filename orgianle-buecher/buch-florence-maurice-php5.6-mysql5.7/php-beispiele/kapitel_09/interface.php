<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
  <title>Interface</title>
</head>
<body>
<?php
interface Schreiben
{
  public function oeffnen();
  public function schreiben();
  public function schliessen();
}
class Dateischreiben implements Schreiben
{ 
   public function oeffnen()
  {
    echo "Datei geöffnet. ";
  }
  public function schreiben() 
  {
    echo "In Datei schreiben. ";
  }
  public function schliessen()
  {
    echo "Datei geschlossen. ";
  }
}
$beispiel = new Dateischreiben();
$beispiel->oeffnen();
$beispiel->schreiben();
$beispiel->schliessen();

?>
</body>
</html>