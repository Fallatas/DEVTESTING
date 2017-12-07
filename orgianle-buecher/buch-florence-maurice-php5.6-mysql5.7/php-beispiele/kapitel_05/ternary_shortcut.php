<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Ternary Shortcut</title>
</head>
<body>
<?php
echo "<pre>";
var_dump(false ?: "Hallo"); 
var_dump(true ?: "Hallo");
$erg = (5 ?: 4);
echo $erg;
echo "</pre>";
?>
</body>
</html>