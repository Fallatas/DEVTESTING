<!DOCTYPE html>
<html>
 <head>
  <title>Dateiprüfung mit Ausnahmen</title>
  <meta charset="UTF-8" />
</head>
<body>
<?php
class Dateilesen
{
  protected $datei;
  protected $dh;
   public function __construct($datei) 
  {
   $this->datei = $datei;
  }
  public function oeffnen() 
  {
    if (!file_exists($this->datei)) {
      throw new Exception("Datei gibts nicht");
    }
    if (!is_readable($this->datei)) {
      throw new Exception("nicht lesbar");
    }
    $this->dh = @fopen($this->datei, "r");
    if ($this->dh == false) {
      throw new Exception("ging nicht");
    }
  }
  public function lesen() 
  {
    $zeile = fgets($this->dh, 1024);
    if ($zeile === false) {
      throw new Exception("Lesen gescheitert");
    }
    return htmlspecialchars($zeile);
  }
  public function schliessen() 
  {
    fclose($this->dh);
  }
}
try {
  $meinedatei = new Dateilesen("beschreibbar/zaehler.txt");
  $meinedatei->oeffnen();
  echo $meinedatei->lesen();
  $meinedatei->schliessen();
} catch (Exception $e) {
  echo "Folgender Fehler ist aufgetreten: " 
         . $e->getMessage();
}

?>
</body>
</html>
