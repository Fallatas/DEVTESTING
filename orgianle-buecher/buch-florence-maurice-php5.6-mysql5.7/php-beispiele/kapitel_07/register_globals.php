<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8" />
  <title>Gefahr von Register Globals</title>
</head>
<body>
<?php
if (false) {
  $superuser = true;
}
if (isset($superuser) && $superuser == true) {
  echo "Sie dürfen rein";
} else {
  echo "Sie dürfen nicht rein";
}

?>
</body>
</html>

