<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Type Hint</title>
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
class Anders
{
}


$test = new Anders();

function direktschreiben(Schreiben $obj) 
{
  $obj->oeffnen();
  $obj->schreiben();
}
direktschreiben($test);

?>
</body>
</html>