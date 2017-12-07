<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>XML laden</title>
</head>
<body>
<?php
$xml = simplexml_load_file("http://www.php.net/feed.atom");
echo "<pre>";
print_r($xml);
echo "</pre>";

?>
</body>
</html>