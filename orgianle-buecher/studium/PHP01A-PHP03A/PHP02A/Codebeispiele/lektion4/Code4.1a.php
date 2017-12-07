<html>
  <body>
<?php
$data = simplexml_load_file("artikeldaten.xml");
foreach($data as $k => $v)
{
  foreach($v as $k1 => $v2)
  {
    print "$k1: $v2.<br>\n";
  }
}
?>
  </body>
</html>