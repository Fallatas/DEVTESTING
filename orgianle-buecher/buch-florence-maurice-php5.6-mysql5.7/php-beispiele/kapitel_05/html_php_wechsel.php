<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Wechsel zwischen PHP- und HTML-Modus</title>
</head>
<body>
<?php
$i = 5;
if ($i > 4) {
?>
<p>Die Bedingung ist wahr.</p>
<?php
} else {
?>
<p>Die Bedingung ist nicht wahr.</p>
<?php
}
?>
</body>
</html>