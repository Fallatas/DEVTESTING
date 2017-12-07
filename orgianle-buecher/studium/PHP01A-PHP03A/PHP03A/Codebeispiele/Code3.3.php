<?php
$DB = array('dbname'=>"u12345678", 'user'=>"abc",
            'passwort' => "geheim");

$connect = "mysql:dbname=".$DB['dbname'].";host=localhost";
try
{
  $dbh = new PDO($connect, $DB['user'], $DB['passwort'] );
  $sql = "SELECT a_name, a_preis
            FROM ws_artikel
           WHERE a_menge > 0";
  foreach($dbh->query($sql) as $row)
  {
    print "Artikel: ".$row['a_name']." Preis: ".
                      $row['a_preis']."<br />\n";
  }
  $dbh = null; # Zerstört das Objekt und schließt die Verbindung
}
catch(PDOException $e)
{
  echo $e->getMessage();
}
?>
