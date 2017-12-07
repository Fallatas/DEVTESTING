<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>callStatic()</title>
</head>
<body>
<?php
class Beispiel
{
  static function __callStatic($methode, $argumente)
  {
    echo "Sie haben die statische Methode '$methode' aufgerufen. ";
  }
}
Beispiel::etwas();

?>
</body>
</html>


