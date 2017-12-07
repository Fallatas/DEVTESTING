<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Funktion auf alle Elemente anwenden</title>
</head>
<body>
<?php
$liste = array (" Kapern ", "  Oliven ", "  Ananas ");
foreach($liste as $el) {
 echo "'$el'";
}
$liste = array_map("trim", $liste);
echo "<br />\n nach trim <br />\n";
foreach($liste as $el) {
 echo "'$el'";
}
?>

</body>
</html>