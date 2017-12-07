<?php
require_once("class_seite.php");

class sitzungsSeite extends seite
{
  private $korb = array();

  public function __construct()
  {
    session_start();
    if (!is_array($_SESSION['korb']))
    {
      $_SESSION['korb'] = array();
    }
    $this->korb = $_SESSION['korb'];
  }

  public function __destruct()
  {
    print "im Destruktor";
    $_SESSION['korb'] = $this->korb;
  }

  function setSessionDaten($dataArray)
  {
    $this->korb = $dataArray;
  }

  function getSessionDaten()
  {
    return $this->korb;
  }
}
?>