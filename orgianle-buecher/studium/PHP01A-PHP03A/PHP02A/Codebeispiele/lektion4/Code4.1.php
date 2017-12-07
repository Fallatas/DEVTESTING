<html>
  <body>
<?php
$data = simplexml_load_file("artikeldaten.xml");
print "<pre>\n";
print_r($data);
print "</pre>\n";
?>
  </body>
</html>