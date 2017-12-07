<?php
class apfel
{
  private $kernanzahl = 10;
  public $ist_reif = TRUE;

  public function getKernanzahl()
  {
    return($this->kernanzahl);
  }
  public function setKernanzahl($anzahl)
  {
    $this->kernanzahl = $anzahl;
  }
}
?>