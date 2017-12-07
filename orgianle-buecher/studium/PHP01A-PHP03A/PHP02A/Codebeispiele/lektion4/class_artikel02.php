<?php
require_once("class_sitzungsSeite03.php");

class artikel extends sitzungsSeite
{
  protected $artikelArray = array();
  private $gewaehlt = array();

  public function __construct($dateiname)
  {
    parent::__construct();
    $data = simplexml_load_file($dateiname);
    foreach($data as $k => $v)
    {
      $artNr = intval($v->attributes());
      foreach($v as $k1 => $v2)
      {
        $this->artikelArray[$artNr][$k1] = (string)$v2;
      }
    }
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

  public function waehlen($artikelnummer)
  {
    $this->korb[$artikelnummer]++;
  }

  public function bestellen()
  {
  }
}
?>
