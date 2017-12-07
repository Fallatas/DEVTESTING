<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Debuggen mit FirePHP</title>
</head>
<body>
<?php
require "FirePHPCore/FirePHP.class.php";
ob_start();
$firephp = FirePHP::getInstance(true);
 
$beispiel = array("a"=> 44, "b"=>22);
 
$firephp->log($beispiel);
$firephp->log($beispiel, "Beispielarray");
$firephp->trace($beispiel);

?>
</body>
</html>