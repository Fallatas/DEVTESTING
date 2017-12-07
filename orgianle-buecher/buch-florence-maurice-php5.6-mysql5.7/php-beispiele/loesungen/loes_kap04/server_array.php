<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>$_SERVER</title>
</head>
<body>
<?php
foreach ($_SERVER as $k => $v){
  echo "Schlüssel: $k, Wert: $v<br />\n";
}
?>
</body>
</html>