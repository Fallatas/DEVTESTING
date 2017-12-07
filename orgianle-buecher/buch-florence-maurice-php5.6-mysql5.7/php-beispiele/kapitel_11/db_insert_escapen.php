<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>INSERT mit real_escape_string()</title>
</head>
<body>
<?php
require_once "db_daten.php";
$firma = "O'Briens Gartenbedarf";
$strasse = "Holzweg 2";
$plz = "12345";
$ort = "Dort";

$firma = $mysqli->real_escape_string($firma);
$strasse = $mysqli->real_escape_string($strasse);
$plz = $mysqli->real_escape_string($plz);
$ort = $mysqli->real_escape_string($ort);
$insert = "INSERT INTO lieferanten 
                                    (firma, strasse, plz, ort)
				    VALUES ('$firma', '$strasse', '$plz', '$ort')";
echo $insert;
if($ergebnis = $mysqli->query($insert)) {  
  echo "<br />\nAnzahl der veränderten Datensätze: " . $mysqli->affected_rows;
} else {
  echo $mysqli->error;
}
$mysqli->close();
?>


</body>
</html>
