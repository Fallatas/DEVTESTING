<?php
$DB = array('dbname'=>"u12345678", 'user'=>"abc",
            'passwort' => "geheim");

$connect = "mysql:dbname=".$DB['dbname'].";host=localhost";
try
{
  $dbh = new PDO($connect, $DB['user'], $DB['passwort'] );
  echo "PDO-Verbindung hergestellt.<br />";
  $dbh = null; # Zerst�rt das Objekt und schlie�t die Verbindung
}
catch(PDOException $e)
{
  echo $e->getMessage();
}
?>