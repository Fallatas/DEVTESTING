<?php
echo "<strong style='color:red;'>Wie werden die Informationen in einem Cookie gespeichert?</strong>";
echo "<br>";
echo "<hr>";

// Den Cookie setzen:
echo "<p>Den Cookie setzen:</p><br>";

setcookie("HTML-TEST","Das ist ein Test-Cookie.");

echo '<p>Standardmäßig wird der Cookie beibehalten, bis der Browser geschlossen wird. Das kann aber einfach geändert werden, indem man einen weiteren Parameter, den "Ablaufzeitpunkt", hinzufügt:</p> <br>';

// Den Cookie setzen

setcookie("Name","C.Wings", time()+3600);
setcookie("Interessen","Flugzeuge beobachten",time()+3600);

echo "<strong style='color:red;'>Wie bekommt man die Informationen aus dem Cookie?</strong>";
echo "<br>";
echo "<hr>";

// Werte des Cookies auslesen:
$strname = $_COOKIE["Name"];
$strinteressen = $_COOKIE["Interessen"];

// Auf dem Client ausgeben:
echo "<p>" . $strname . "</p>";
echo "<p>" . $strinteressen . "</p>";

echo "<strong style='color:red;'>Wer kann das Cookie lesen?</strong>";
echo "<br>";
echo "<hr>";

// setcookie(Name, Wert, Ablaufzeit, Pfad, Domain); //

setcookie("HTML-TEST","C:Wings",time()+60*60*24*365,"/mein-persoenliches-my-library/cookies-mit-php/","www.html.net");
echo $_COOKIE["HTML-TEST"];