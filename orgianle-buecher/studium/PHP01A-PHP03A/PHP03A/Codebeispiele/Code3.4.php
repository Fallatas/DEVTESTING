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
  $result = $dbh->query($sql);
  $tmp = $result->fetchAll(PDO::FETCH_ASSOC);
  foreach($tmp as $key => $value)
  {
    print $key.". Artikel: ".$value['a_name']." Preis: ".
          $value['a_preis']."<br />\n";
  }
$dbh = null;
}
catch(PDOException $e)
{
  echo $e->getMessage();
}
?>
