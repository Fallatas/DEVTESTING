<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>strlen() mit UTF-8</title>
</head>
<body>
<?php
$str = "Mäßigung";
$anz = strlen($str);
echo "'$str' hat $anz Zeichen";

echo "<br />\n";

$anz = strlen(utf8_decode($str));
echo "'$str' hat $anz Zeichen";
?>
</body>
</html>