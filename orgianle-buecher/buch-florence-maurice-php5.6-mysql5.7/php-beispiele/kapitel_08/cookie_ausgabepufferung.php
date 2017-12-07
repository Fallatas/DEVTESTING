<?php
ob_start();
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8" />
  <title>Cookie setzen mit Ausgabepufferung</title>
</head>
<body>
<?php
setcookie("stadt", "München", time()+3600);
echo "Cookies werden mitten im Skript gesetzt und es funktioniert!";
ob_end_flush();
?>
</body>
</html>