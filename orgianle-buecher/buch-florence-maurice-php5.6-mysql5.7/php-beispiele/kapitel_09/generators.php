<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Generator </title>
</head>
<body>
<?php
function generator_beispiel() {
    for ($i = 1; $i <= 6; $i++) {      
        yield $i;
    }
}
//$erg = generator_beispiel();
print_r (generator_beispiel());
foreach (generator_beispiel() as $wert) {
  echo "$wert ";
}
?>
</body>
</html>
