<?php
class artikel
{
  public $artikelArray = Array();

  public function anzeigen()
  {
    foreach($this->artikelArray as $key => $value)
    {
      foreach($value as $subKey => $subVal)
      {
        if ($subKey == "name")
        {
          print "<a href=\"".$_SERVER['PHP_SELF']."?id".$key."\">".$subVal."</a>\n";
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