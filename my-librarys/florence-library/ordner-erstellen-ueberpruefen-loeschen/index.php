<?php


/*Erstellt ein Verzeichnis*/
/* mkdir("img"); */
/*Infos: http://php.net/manual/de/function.mkdir.php*/

/*Prüft, ob der angegebene Dateiname ein Verzeichnis ist*/
/* is_dir("img"); */
/*Infos: http://php.net/manual/de/function.is-dir.php*/

/*Löscht ein Verzeichnis*/
/* rmdir("img"); */
/*Infos: http://php.net/manual/de/function.rmdir.php*/

echo "<strong style='color: red'>Erstellt einen Ordner nach einer bestimmten Zeit.</strong>";
echo "<br>";
echo "<hr style='color: red'>";

$date = date("H.i.s");
echo $date . "<br>";

if ($date > "14.34.00"){
    echo "Ordner wird erstellt.<br>";
    echo "Wenn eine Fehlermeldung kommt existiert der Ordner bereits. <br>";
    mkdir("img");
}


echo "<strong style='color: red'>Prueft, ob der angegebene Dateiname ein Verzeichnis ist.</strong>";
echo "<br>";
echo "<hr style='color: red'>";

if (is_dir("img")){
    echo "Ist ein Verzeichnis. <br>";
}

echo "<strong style='color: red'>Loescht ein Verzeichnis.</strong>";
echo "<br>";
echo "<hr style='color: red'>";

if (rmdir("img")){
    echo "Ordner wurde geloescht.";
}