<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Identitätsoperator</title>
<style>
  body { font-family: monospace; }
</style>
</head>
<body>
<?php
$i = "4";
if ($i == 4) {
  var_dump($i);
  echo " == 4<br />\n";
}
if ($i === 4) {
  var_dump($i);
  echo " === 4<br />\n";
} elseif ($i !== 4) {
  var_dump($i);
  echo " !== 4<br />\n";
}
?>
</body>
</html>
