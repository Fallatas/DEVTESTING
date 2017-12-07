<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Late Static Binding</title>
</head>
<body>
<?php
class Elternklasse {
    public function test() {
        static::ausgabe();
    }

    public static function ausgabe() {
        echo "Elternklasse: Klassenname ist: " . __CLASS__;
    } 
}


class Kindklasse extends Elternklasse {
    public static function ausgabe() {
      echo "Abgeleitete Klasse: Klassenname ist: " . __CLASS__;
    }
}

$a = new Elternklasse();
$a->test();
echo "<br />\n";
$b = new Kindklasse();
$b->test();
  
   

?>

</body>
</html>


