<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Konstante</title>
</head>
<body>
<?php
class Klasse {
  const KONST_WERT = 42;
  public function ausgabe()
  {
    echo self::KONST_WERT;
  }
}

echo Klasse::KONST_WERT;
echo "<br />\n";
$obj = new Klasse();
$obj->ausgabe();
?>
</body>
</html>