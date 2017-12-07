<?php
class kunde
{
  private $KndNr;

  public function __construct()
  {
    $this->KndNr = time();
  }

  public function getKundenNummer()
  {
    return $this->KndNr;
  }
}
?>