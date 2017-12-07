<?php
require_once("class_seite.php");

class sitzungsSeite extends seite
{
  public function __construct()
  {
    print "Setze Cookie.</br>\n"; # Ausgabe nur zu Testzwecken
  }
}
?>