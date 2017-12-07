<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>static bei Eigenschaften</title>
</head>
<body>
<?php
class Beispiel
{
  public static $zahl = 42;
  public function ausgeben() 
  {
    return self::$zahl;
  }
}
echo Beispiel::$zahl;
echo "<br />\n";

/*Folgendes erzeugt einen Hinweis, wenn Fehlerlevel Strict */
/*echo Beispiel::ausgeben();*/

$bsp = new Beispiel();
echo $bsp->ausgeben();

?>
</body>
</html>