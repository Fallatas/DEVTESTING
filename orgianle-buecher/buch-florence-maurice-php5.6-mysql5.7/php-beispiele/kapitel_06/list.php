<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" />
  <title>list()</title>
</head>
<body>
<?php
$liste = array ("Kapern", "Oliven", "Ananas");
list($a, $b, $c) = $liste;
echo "mit $a, $b und $c ...";
?>
</body>
</html>