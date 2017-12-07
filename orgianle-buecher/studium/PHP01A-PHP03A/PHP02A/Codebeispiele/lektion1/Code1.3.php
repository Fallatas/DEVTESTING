<html>
  <body>
<?php
include_once("class_apfel01.php");
$a = new apfel();
$b = new apfel();
$b->setKernanzahl(5);
print "In Apfel 'a' sind ".$a->getKernanzahl()." Kerne.<br />\n";
print "In Apfel 'b' sind ".$b->getKernanzahl()." Kerne.\n";
?>
  </body>
</html>
