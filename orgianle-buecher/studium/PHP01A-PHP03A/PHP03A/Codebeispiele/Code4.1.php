<?php
require_once ("class_sitzungsSeite.php");

class artikel extends sitzungsSeite
{
  protected $artikelArray = array();
  private $DB = array('database' => 'u12345678',
                      'user'     => 'u12345678',
                      'password' => 'u12345678');
  protected $dbh;  # Database-Handle

  public function __construct()
  {
    parent::__construct();
    if(!is_array($this->DB) && empty($this->DB['database']))
      throw new Exception("Daten für Datenbankverbindung fehlen!");
    else
    {
      $connectString = "mysql:dbname=".$this->DB['database'].
                       ";host=localhost";
      try
      {
        $this->dbh = new PDO($connectString, $this->DB['user'], $this->DB['password']);
        echo "Datenbankobjekt erzeugt.<br />";
      }
      catch(PDOException $e)
      {
        echo $e->getMessage();
      }
    }
  }
}

# Zum Testen!
$a = new artikel();
?>