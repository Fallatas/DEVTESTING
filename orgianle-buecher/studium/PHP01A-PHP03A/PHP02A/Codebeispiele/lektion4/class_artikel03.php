<?php
require_once("class_sitzungsSeite03.php");

class artikel extends sitzungsSeite
{
  protected $artikelArray = array();

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

  public function bestellen($file = "bestellung.xml")
  {
    if(count($this->korb) > 0)
    {
      $xml = new SimpleXMLElement("<bestellung></bestellung>");
      foreach($this->korb as $key => $value) # Alle Artikel bearbeiten
      {
        $art = $xml->addChild("artikel"); # Neues <artikel>-Element
        $art->addAttribute("nummer", $key);
        $art->addAttribute("anzahl", $value);
      }
      $error = $xml->asXML($file);  # Datei schreiben.
      $this->korb = array();    # Auswahl löschen.
      return $error;
    }
    return false; # keine Artikel ausgewählt
  }
}
?>
