<?php
echo "<strong style='color: red'>Arbeiten mit strelen</strong>";
echo "<br>";
echo "<hr style='color: red'>";

/*Hier wird ein Text erstellt mit insgesamt 17 Zeichen.*/
$text = "Das ist ein Test.";

/*Strelen ermittelt die genaue Anzahl der in der Variable befindlichen Zeichen*/
echo "Die genaue Anzahl der Buchstaben lautet: " . strlen($text);
