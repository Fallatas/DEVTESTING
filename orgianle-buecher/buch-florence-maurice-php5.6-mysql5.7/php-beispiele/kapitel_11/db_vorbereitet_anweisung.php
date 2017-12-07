<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Prepared Statements</title>
</head>
<body>
<?php
require_once "db_daten.php";
if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung: " . mysqli_connect_error();
  exit();
}
$name = "Schmetterlingsstrauch";
$beschreibung = "schöne Blüten";
$preis = 6;
if($stmt = $mysqli->prepare("INSERT INTO pflanzen 
                                    (name, beschreibung, preis)
				    VALUES (?, ?, ?)")) {
  $stmt->bind_param("ssd", $name, $beschreibung, $preis);
  $stmt->execute();
  echo "Anzahl der veränderten Datensätze : " . $stmt->affected_rows;
  $stmt->close();
}

$mysqli->close();
?>

</body>
</html>