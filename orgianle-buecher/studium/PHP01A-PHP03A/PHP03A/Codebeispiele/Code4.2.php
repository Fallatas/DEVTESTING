<?php
require_once ("class_sitzungsSeite.php");

class artikel extends sitzungsSeite
{
  private $artikelArray = array();
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
        $this->dbh = new PDO($connectString, $this->DB['user'], $this->DB['password'] );
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT a_artikelnr, a_name, a_preis
                  FROM ws_artikel
                 WHERE a_menge > 0";
        $result = $this->dbh->query($sql);
        $tmp = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($tmp as $key => $value)
        {
          foreach($value as $ky => $val)
          {
            $name = split("_", $ky);
            if ($ky != 'a_artikelnr')
              $this->artikelArray[$value['a_artikelnr']][$name[1]] = $val;
          }
        }
print_r($this->artikelArray);  ### zum Testen!
      }
      catch(PDOException $e)
      {
        echo $e->getMessage();
      }
    }
  }
}

# zum Testen!
$a = new artikel();
?>