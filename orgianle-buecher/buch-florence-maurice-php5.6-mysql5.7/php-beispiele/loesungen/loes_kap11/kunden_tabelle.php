<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Kunden als Tabelle ausgeben lassen</title>
  <style>
    .gerade {
      background-color: #aaa;
    }
  </style>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "geheim", "pizzaservice");
if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung: " . mysqli_connect_error();
  exit();
}
if (!$mysqli->set_charset("utf8")) {
  echo "Fehler beim Laden von UTF8 ". $mysqli->error;
}
$ergebnis = $mysqli->query("SELECT vorname, name, strasse, plz, ort FROM kunde;");
$i = 0;
echo "<table border='1'>\n";
while($zeile = $ergebnis->fetch_array()) {
  if ($i % 2 == 0) {
     $class = " class='gerade' ";
  }
  else {
     $class= "";
  }
  echo "<tr $class><td>" . htmlspecialchars($zeile["vorname"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["name"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["strasse"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["plz"]) . "</td>"
       . "<td>" . htmlspecialchars($zeile["ort"]) . "</td>"
       . "</tr>\n";
   $i++;
}
echo "</table>";

$ergebnis->close();
$mysqli->close();
?>

</body>
</html>