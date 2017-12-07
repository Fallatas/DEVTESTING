<?php
class seite
{
  private $titeltext;

  public function kopf()
  {
    print "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"".
           " \"http://www.w3.org/TR/html4/strict.dtd\">\n";
    print "<html>\n";
    print "  <head>\n";
    print "    <meta http-equiv=\"content-type\"".
               "content=\"text/html; charset=utf-8\">\n";
    if ($this->titeltext != "")
      print "    <title>".$this->titeltext."</title>\n";
    print "  </head>\n";
    print "  <body>\n";
  }

  public function setTitel($text)
  {
    $this->titeltext = $text; 
  }

  public function inhalt($daten)
  {
    foreach ($daten as $value)
    {
       print $value."\n";
    }
  }

  public function fuss()
  {
    print "  </body>\n";
    print "</html>\n";
  }
}
?>