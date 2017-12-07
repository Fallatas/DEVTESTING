<?php
echo "<strong style='color: red'>Funktionen:</strong>";
echo "<br>";
echo "<strong style='color: red'>1.Saghallo</strong>";
echo "<br>";
function Saghallo(){
    echo "Hallo";
}

Saghallo();

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Print R Funktion</strong>";
echo "<br>";

function Arrayausgabe($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$test = array("Hallo","das","ist","ein","Test");
$array = array("eins","zwei","drei");
Arrayausgabe($array);

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Übergabe per Wert und per Referenz</strong>";
echo "<br>";

echo "<h3>Uebergabe per Wert</h3>\n";
function veraendern($a){
    $a++;
}
$c = 2;
echo "Vor Funktionsaufruf: \$c ist $c<br>\n";
veraendern($c);
echo "Nach Funktionsaufruf: \$c ist $c<br>\n";
echo "<h3>Uebergabe per Referenz</h3>\n";
function veraendern2(&$a){
    $a++;
}
echo "Vor Funktionsaufruf: \$c ist $c<br>\n";
veraendern2($c);
echo "Nach Funktionsaufruf: \$c ist $c<br>\n";

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Meine Tagesfunktion</strong>";
echo "<br>";

function Tagodernacht(){
    $bild1 = "<img src='bilder/tag/tag.jpg'>";
    $bild2 = "<img src='bilder/nacht/nacht.jpg'>";
    $uhrzeit = date("G");
    
    if($uhrzeit < 18){
        echo $bild1;
        echo "<br>";
        echo "Es ist gerade: " . $uhrzeit . " Uhr.";
        echo "<br>";
        echo " Es ist Tag !";
    }else{
        echo $bild2;
        echo "<br>";
        echo "Es ist gerade: " . $uhrzeit . " Uhr.";
        echo "<br>";
        echo " Es ist Nacht !";
    }
}

echo "<br>";


Tagodernacht();

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Geschaeft geoefnet</strong>";
echo "<br>";

function Geschaeftgeoeffnet(){
    $uhrzeit1 = date("G");
    $uhrzeit2 = date("H:i:s");
    $wochentage = date("N");

    if($uhrzeit1 > 8 && $uhrzeit1 < 20 && $wochentage < 6)  {
        echo "Es ist $uhrzeit2 Uhr. <br>";
        echo "Geschaeft hat geoeffnet.";
    }else{
        echo "Es ist $uhrzeit2 Uhr. <br>";
        echo "Geschaeft hat geschlossen.";
    }
}

Geschaeftgeoeffnet();

echo "<hr style='color: red'>";
echo "<strong style='color: red'>PHP Sildeshow</strong>";
echo "<br>";



$bilder = array("bilder/tag/tag.jpg","bilder/nacht/nacht.jpg","bilder/gleise/gleise.jpg");

$sec = date("s");
$max = count($bilder)-1;
$zufallszahl = rand(0,$max);


echo "<img src='$bilder[$zufallszahl]'>";


if($sec < 33){
for($i = 1 ; $i < 1;$i++ ) {
    echo "<img src='$bilder[$zufallszahl]'>";
}

}





/*php Slideshow
    *gesteuert über sekunden
    *in Div boxen ausgeben.  
    *Array schreiben
    *mit if und schleife gestalten 


*/
