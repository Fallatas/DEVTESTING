<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>XML laden</title>
</head>
<body>
<?php
$xml = simplexml_load_file("http://www.php.net/feed.atom");
echo "<ul>\n";
foreach($xml->entry as $artikel) {
  $titel = htmlspecialchars((string)$artikel->title);
  $link = htmlspecialchars((string)$artikel->link["href"]);
  echo "<li><a href=\"$link\">$titel</a></li>\n";
}
echo "</ul>\n";

?>
</body>
</html>