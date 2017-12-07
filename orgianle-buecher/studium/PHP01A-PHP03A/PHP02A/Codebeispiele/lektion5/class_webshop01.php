<?php
require_once("class_artikel.php");

class webshop extends artikel
{
  public function __construct($dateiname)
  {
    parent::__construct($dateiname);
  }

  public function auswahl() # zeigt ausgewählte Artikel
  {
    if (count($this->korb) > 0)
    {
      print "<table>\n";
      print "  <tr>\n   <th>Artikel</th><th>Anzahl</th>\n  </tr>\n";
      foreach($this->korb as $key => $value)
      {
        print "  <tr>\n";
        print "    <td>".$this->artikelArray[$key]['name']."</td><td>".$value."</td>\n";
        print "  </tr>\n";
      }
      print "</table>\n";
    }
    else
      print "Keine Artikel im Warenkorb gefunden.";
  }
  public function anzeigen()
  {
    print " <table>\n":
    print "  </tr>\n  <th>Artikel</th><th>Preis</th>\n </tr>\n";
    foreach($this->artikelArray as $key => $value)
    {
      print "  <tr>\n";
      foreach($value as $subKey => $subVal)
      {
        if ($subKey == "name")
        {
          print "   <td>".$subVal."</td>";
        }
        else
        {
          print "<td>".$subVal." Euro</td>";
          print "<td><a href=\"".$_SERVER['PHP_SELF']."?id=".$key."\">In den Warenkorb</a></td>\n";
        }
      }
      print "  </tr>\n";
    }
    print " </table>\n";
  }
}
?>