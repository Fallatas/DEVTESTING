<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>strpos()</title>
</head>
<body>
<?php
$satz = "Der Hund hat einen Knochen";
$suche = "noch";
$pos = strpos($satz, $suche);
if ($pos === false) {
    echo "$suche ist nicht in $satz";
} else {
    echo "$suche befindet sich an Position $pos in '$satz'";
}
echo "<br />\n";
$satz = "Der Hund hat einen Knochen";
$suche = "Der";
$pos = strpos($satz, $suche);
if ($pos === false) {
    echo "$suche ist nicht in $satz";
} else {
    echo "$suche befindet sich an Position $pos in '$satz'";
}


?>

</body>
</html>
