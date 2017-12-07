<?php
class artikel
{
  private $artikelArray = array();

  public function __construct()
  {
    $this->artikelArray['1010']['name']  = "Herr der Ringe";
    $this->artikelArray['1010']['preis'] = "39.80";
    $this->artikelArray['2020']['name']  = "Der kleine Hobbit";
    $this->artikelArray['2020']['preis'] = "19.95";
  }

  public function anzeigen()
  {
    foreach($this->artikelArray as $key => $value)
    {
      foreach($value as $subKey => $subVal)
      {
        if ($subKey == "name")
        {
          print "<a href=\"".$_SERVER['PHP_SELF']."?id=".$key."\">".$subVal."</a>\n";
        }
        else
          print $subVal." Euro\n";
      }
      print "<br />\n";
    }
  }
  public function waehlen()
  {
  }
  public function bestellen()
  {
  }
}
?>