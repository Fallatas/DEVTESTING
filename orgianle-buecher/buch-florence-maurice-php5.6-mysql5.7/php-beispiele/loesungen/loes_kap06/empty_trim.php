<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>empty - trim</title>
</head>
<body>
<?php
$eingabe = "   ";
$eingabe = trim($eingabe);
if (empty($eingabe)) {
  echo "das ist zu wenig";
}
?>
</body>
</html>