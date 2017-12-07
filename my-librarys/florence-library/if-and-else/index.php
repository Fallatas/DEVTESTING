<?php
echo "<strong style='color: red'>If and Else</strong>";
echo "<br>";
echo "<strong style='color: red'>1.If</strong>";
echo "<hr style='color: red'>";

$i = 5;
if($i > 4){
    echo "$i ist groesser als 4";
    /* Hier können Anweisungen folgen */
}else{
    echo "$i ist auch nicht groesser als 4";
    /*  Weitere Anweiseungen bei Bedarf */
}

echo "<br>";

$i = 5;
if($i > 4){
    echo "$i ist groesser als 4";
}elseif ($i == 4){
    echo "$i ist gleich 4";
}else{
    echo "$i ist kleiner als 4";
}
?>

<?php
$i = 5;

if($i > 4){
?>
<p>Die Bedingung ist wahr.</p>
<?php
}else {
?>
<p>Die Bedingung ist nicht wahr</p>
<?php
}
?>
<?php

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Doppeltes ist-Gleich-Zeichen fuer Vergleiche:</strong>";
echo "<br>";

$i = 5;
echo "Vor if ist \$i $i <br>\n";
if($i = 4){
   echo  "\$i gleich 4<br>\n";
}
echo "Nach if ist \$i $i<br>\n";

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Modulo-Operator die Zahl ueberpruefen.</strong>";
echo "<br>";
echo "<strong style='color: red'>Uebung 1:</strong>";
echo "<br>";

$i = rand(1,100);


if($i %2){
    echo "Zahl lautet: $i und ist gerade.";
}else{
    echo "Zahl lautet: $i und ist ungerade";
}

echo "<hr style='color: red'>";

$zufall = rand(1,2);

if($zufall == 1){
    foreach ($_SERVER as $info){
        echo "$info<br>";
    }
}else{
    echo "funktioniert nicht";
}

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Meine Ausgabe:</strong>";
echo "<br>";

$filme = array("Battleship","Roadtrip","Urlaubsreif","Anaconda","Anatomie");

echo "<table border='1'>";
foreach ($filme as $film){
    echo "<tr><td>$film</td></tr>";
}
echo "</table>";
echo "<hr style='color: red'>";

