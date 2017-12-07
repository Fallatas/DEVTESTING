<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Einmaleins</title>
</head>
<body>
<table border="1">
<?php
for   (   $i   =   1   ;    $i   <=   10   ;   $i++   )   {
  echo   "<tr>\n"   ;
  for    (   $j   =   1   ;   $j   <=   10   ;   $j++   )   {
    $zahl   =   $i   *   $j   ;
    echo   "\t<td>$zahl</td>\n"   ;
  }
  echo    "</tr>\n"   ;
}

?>
</table>
</body>
</html>

