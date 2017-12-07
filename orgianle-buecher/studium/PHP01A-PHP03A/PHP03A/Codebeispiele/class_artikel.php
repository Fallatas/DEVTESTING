<?php
require_once ("class_sitzungsSeite.php");

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

  public function bestellen($kunde, $datei = "bestellung.xml")
  {
    if(!is_integer($kunde))  # Gueltigen Kundennummer?
      throw new Exception('Keine Kundennummer'); # Fehler ausgeben
    else
    {
      if(count($this->korb) > 0)
      {
        $xml = new SimpleXMLElement("<bestellung></bestellung>");
        # Attribut "kunde" schreiben
        $xml->addAttribute("kunde", $kunde); 
        foreach($this->korb as $key => $value) # Artikel bearbeiten
        {
          $art = $xml->addChild("artikel"); # Neues <artikel>-Element
          $art->addAttribute("name", $key);
          $art->addAttribute("anzahl", $value);
        }
        $error = $xml->asXML($datei);  # Datei schreiben.
        $this->korb = array();    # Auswahl löschen.
        return $error;
      }
      return false; # keine Artikel ausgewählt
    }
  }
}
?>
