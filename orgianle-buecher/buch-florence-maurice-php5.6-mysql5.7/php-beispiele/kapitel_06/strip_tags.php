<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>strip_tags()</title>
</head>
<body>
<?php
$string = "<p>Ein Absatz mit <em>mehrfacher</em> <strong>Betonung</strong></p>";
echo $string;
echo "\n";
echo strip_tags($string);
echo "\n";
echo strip_tags($string, "<p><em>");
?>
</body>
</html>