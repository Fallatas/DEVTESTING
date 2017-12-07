<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>preg_match_all()</title>
 </head> 
<body>
<?php
$muster = "/\b\d{3}\b/";
$str = "123 456 7890 123";
if(preg_match_all($muster, $str, $treffer)) {
  echo "$muster passt auf '$str'<br />\n";
  echo "<pre>";
  print_r($treffer); 
  echo "</pre>";
}
?>
</body>
</html>