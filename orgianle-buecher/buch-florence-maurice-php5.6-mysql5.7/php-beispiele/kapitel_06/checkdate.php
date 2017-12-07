<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
  <title>checkdate()</title>
</head>
<body>
<?php
function datumpruefen($t, $m, $j) 
{
  if (is_numeric($t) && is_numeric($m) && is_numeric($j)) {
    return checkdate($m, $t, $j);
  } else {
    return false;
  }
}

if (datumpruefen("a", 2, 2009)) {
  echo "Termin gibt es";
} else {
  echo "Termin gibt es nicht";
}
?>
</body>
</html>
