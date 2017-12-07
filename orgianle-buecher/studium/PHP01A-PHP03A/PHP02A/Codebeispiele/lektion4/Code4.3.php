<html>
  <body>
<?php
$data = simplexml_load_file("artikeldaten.xml");
foreach($data as $k => $v)
{
  $artNr = $v->attributes();
  foreach($v as $k1 => $v2)
  {
    print "$artNr $k1: $v2.<br>\n";
  }
}
?>
  </body>
</html>
