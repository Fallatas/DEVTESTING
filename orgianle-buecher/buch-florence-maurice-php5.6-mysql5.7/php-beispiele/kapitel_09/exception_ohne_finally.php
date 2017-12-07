<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Exception</title>
</head>
<body>
<?php
function teilen($x) {
  if($x==0) {
    throw new Exception("Teilen durch 0! ");
  } else {
    return 1/$x;
  }
}
try {
  echo teilen(5) . "<br />\n";
  echo "auf jeden Fall ausgeführt<br />\n";
} catch (Exception $e) {
  echo "Exception gefangen: " . $e->getMessage() . "<br />\n";
  echo "auf jeden Fall ausgeführt<br />\n";
}
?>
</body>
</html>