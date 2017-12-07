<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Gesamtspeicher direkt setzen</title>
</head>
<body>
<?php
require_once "kunde.php";
$neuerKunde = new Kunde("Anja");
$neuerKunde->speicherGesamt = 500;
$neuerKunde->speicherVerbraucht = 150;
$neuerKunde->zustandAusgeben();

?>

</body>
</html>


