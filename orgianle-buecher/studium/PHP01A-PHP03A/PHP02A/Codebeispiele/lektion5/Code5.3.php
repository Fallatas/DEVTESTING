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
}
?>