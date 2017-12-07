<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>if - elseif -else</title> 
</head>
<body>
<?php
$i = 5;
if ($i > 4) {
  echo "$i ist größer als 4";
  /* hier können weitere Anweisungen folgen */
} elseif ($i == 4) {
  echo "$i gleich 4";
} else {
  echo "$i ist kleiner als 4";
  /* weitere Anweisungen bei Bedarf */
}
?>
</body>
</html>
