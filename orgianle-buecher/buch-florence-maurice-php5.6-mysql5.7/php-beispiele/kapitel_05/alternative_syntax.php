<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
  <title>Alternative Syntax</title>
</head>
<body>
<?php
$i = 5;
if ($i > 4):
  echo "$i ist größer als 4<br />\n";
endif;
$j = 1; 
while ($j < 6):
  echo "$j: hallo<br />\n";
  $j++; 
endwhile;


?>


</body>
</html>
