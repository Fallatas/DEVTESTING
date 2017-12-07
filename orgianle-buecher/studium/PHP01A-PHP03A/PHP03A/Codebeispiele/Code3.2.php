<?php
$DB = array('dbname'=>"u12345678", 'user'=>"abc",
            'passwort' => "geheim");

$connect = "mysql:dbname=".$DB['dbname'].";host=localhost";
try
{
  $dbh = new PDO($connect, $DB['user'], $DB['passwort'] );
  $sql = "INSERT INTO ws_artikel (a_name, a_preis, a_menge)
               VALUES ('Herr der Ringe', 22.33, 5)";
  $result = $dbh->query($sql);
  $fehler = $dbh->errorInfo();
  if ($fehler[0] > 0) {
    echo "SQL-Fehler: Code=".$fehler[1]."Text='".$fehler[2]."'";
  }
  $dbh = null; # Zerstört das Objekt und schließt die Verbindung
}
catch(PDOException $e)
{
  echo $e->getMessage();
}
?>