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
  echo teilen(5) ;
} catch (Exception $e) {
  echo "Exception gefangen: " . $e->getMessage();
} finally {
  echo "<br />\n Ausgeführt";
}  


?>

</body>
</html>
