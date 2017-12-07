<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Math</title>
</head>
<body>
<?php
class Math 
{
  public static function wurzel($zahl)
  {
   return sqrt($zahl);
  }
 
  public static function absolut($zahl)
  {
   return abs($zahl);
  }
}

echo Math::wurzel(9);
echo "<br />\n";
echo Math::absolut(-54);

?>
</body>
</html>