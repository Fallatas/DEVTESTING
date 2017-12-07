<?php
class artikel
{
  private $artikelArray = array(
    '1010' => array('name' => 'Herr der Ringe', 'preis' => '29.90'),
    '2020' => array('name' => 'Der kleine Hobbit', 'preis' => '22.95'));

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