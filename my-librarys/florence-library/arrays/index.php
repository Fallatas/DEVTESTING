<?php

echo "<strong style='color: red;'>Arrays</strong>";
echo "<br>";
echo "<strong style='color: red'>1.Array in Tabelle ausgeben:</strong>";

echo "<hr style='color: red'>";
echo "<table border='1' >\n";
    foreach($_SERVER as $k => $v){
    echo"\t<tr><td>$k</td><td>$v</td></tr>\n";
    }
    echo "</table>\n";

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Assoziative Arrays:</strong>";
echo "<br>";
$farben = array("rot" => "#FF000",
                "gruen" => "#00FF00",
                "blau" => "#000FF");

echo $farben["rot"];
echo "<br>";
echo $farben ["gruen"];
echo "<br>";
echo $farben["blau"];
echo "<br>";
foreach ($farben as $k => $v){
    echo "Schluessel: $k, Wert: $v<br>\n";
}

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Array als Bild oder Text ausgeben.</strong>";
echo "<br>";

$bilder = array("karo/karo3.jpg","karo/karo4.jpg","lkaro/karo5.jpg","karo/karo6.jpg","karo/karo6.jpg");
$text = array("Hallo","hier","sind","ein","paar");

$maxbilder = count($bilder) - 1;
$maxtext = count($text) - 1;

$zufallsbilder = rand(0,$maxbilder);
$zufallstext = rand(0, $maxtext);

echo "<img src='$bilder[$zufallsbilder]' height='200' width='150'>";
echo $text[$zufallstext];

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Verschachtelte Arrays:</strong>";
echo "<br>";

$bilder = array(
        array(  "pfad" => "karo/karo3.jpg",
                "alt" => "Karte mit Nummer 3",
                "titel" => "Eine schwarze Karte 3 "),
        array(  "pfad" => "karo/karo4.jpg",
                "alt" => "Eine Karte mit Nummer 4",
                "titel" => "Eine schwarze Karte 4"),
        array(  "pfad" =>"karo/karo4.jpg",
                "alt" => "Karte mit Nummer 4",
                "titel" => "Eine schwarte Karte 5"),
        array(  "pfad" => "karo/karo5.jpg",
                "alt" => "Eine Karte mit Nummer 5",
                "titel" => "Eine schwarte Karte 5"),
        array(  "pfad" => "karo/karo6.jpg",
                "alt" => "Eine Karte mit Nummer 6",
                "titel" => "Eine schwarze Karte 6")
);

echo $bilder[4]["titel"];
echo "<br>";
echo "";

/*Definiton des verschachtelten Arrays wie oeben */

$max = count($bilder)-1;
$zufallszahl = rand(0, $max);

echo "<img src='{$bilder[$zufallszahl]['pfad']}'
        height='200' width='200'
        alt='{$bilder[$zufallszahl]['alt']}'
        title='{$bilder[$zufallszahl]['titel']}'>\n";

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Uebung 8:</strong>";
echo "<br>";
echo "<strong style='color: red'>Erstelle ein Array das links ausgibt.</strong>";
echo "<br>";
$dateien = array("submit-event.html","index.php","style.css","index.js");

foreach ($dateien as $datei){
    echo "<a href='$datei'>$datei</a><br>\n";
}


echo "<strong style='color: red'>Forreach in Tabelle und Frabe ausgegeben.</strong>";


echo "<table border='1'>";
foreach ($dateien as $datei){
    echo  "<tr><td style='color: #0ca3d2'>$datei</td></tr>";
}
echo "</table>";

echo "<hr style='color: red'>";

echo "<strong style='color: red'>Ein Array mit einer For - Schleife ausgabe.</strong>";

$zahlen = array(10,20,30,40,50,60,70,80,90); /* Ein ganz normales Array mit Zahlen. */
$anzahl = count($zahlen); /* Überprüft die Anzahl der Zahlen in einem Array */

for ($i = 0;$i < $anzahl; $i++){
    echo $zahlen[$i] . "<br>";
}

echo "<hr style='color: red'>";























