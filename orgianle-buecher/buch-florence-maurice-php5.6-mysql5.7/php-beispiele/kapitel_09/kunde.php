<?php
class Kunde 
{
  public $name;
  public $speicherGesamt= 50;
  public $speicherVerbraucht;

  public function __construct($name, $speicherVerbraucht=0) 
  {
    $this->name=$name;
    $this->speicherVerbraucht = $speicherVerbraucht;
  }

  public function halloSagen()
  {
   echo "Hallo {$this->name}";
  }

  public function speichern($speicherBedarf) 
  {
    if (($this->speicherGesamt - $this->speicherVerbraucht) 
        >= $speicherBedarf) {
       $this->speicherVerbraucht= 
        $this->speicherVerbraucht+$speicherBedarf;
       echo "$speicherBedarf gespeichert";
     } else {
       echo "$speicherBedarf nicht gespeichert. Nicht genügend Speicher mehr frei.";
     }
  }
  public function speicherFreigeben($speicher) 
  {
    $this->speicherVerbraucht= $this->speicherVerbraucht - 
    $speicher;
    echo "$speicher Speicher frei gegeben";
  }
  public function zustandAusgeben() 
  {
   $speicherFrei = $this->speicherGesamt - 
   $this->speicherVerbraucht;
    echo "<p>Derzeit sind {$this->speicherVerbraucht} Speicher verbraucht<br />";
    echo "Es sind damit noch $speicherFrei frei</p>\n";  
  }
}
?>