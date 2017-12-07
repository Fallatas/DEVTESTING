<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" />
  <title>list()</title>
</head>
<body>
<?php
$array = [
    [11, 12, 13],
    [21, 22, 23]
];
foreach ($array as list($a, $b, $c)) {
    echo "A: $a; B: $b, C: $c<br />\n";
}
?>
</body>
</html>