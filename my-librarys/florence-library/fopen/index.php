<?php
echo "<strong style='color: red'>Arbeiten mit fopen</strong>";
echo "<br>";
echo "<hr style='color: red'>";

/*Für fopen werden 2 Parameter gebraucht.Einmal den Dateinamen und zum anderen den Mode.
  Die Modes stehen weiter unten.
*/
$handle = fopen("test.txt","w+");

/*Existiert $handle nicht wird abgebrochen.*/
if(!$handle){
    print "Datei konnte nicht geoeffnet werden.";
}else{
    /*Für fputs braucht man 2 Parameter.Zum einen die Variable in der fopen gespeichert wurde und zum anderen den Text der ausgegben werden soll.*/
    print "Datei wurde erstellt und befindet sich im Ordner.";
    fputs($handle,"Alles klar\n");
    /*Am Ende wird alles über fclose geschlossen.*/
    fclose($handle);
}

/*Eine Liste der möglichen Modi von fopen() mittels mode

/* 'r' 	Nur zum Lesen geöffnet; platziere Dateizeiger auf Dateianfang.
   'r+' Zum Lesen und Schreiben geöffnet; platziere Dateizeiger auf Dateianfang.
   'w' 	Nur zum Schreiben geöffnet; platziere Dateizeiger auf Dateianfang und kürze die Datei auf eine Länge von 0. Existiert die Datei nicht, versuche, diese zu erzeugen.
   'w+' Zum Schreiben und Lesen geöffnet; platziere Dateizeiger auf Dateianfang und kürze die Datei auf eine Länge von 0. Existiert die Datei nicht, versuche, diese zu erzeugen.
   'a' 	Nur zum Schreiben geöffnet; platziere Dateizeiger auf Dateiende. Existiert die Datei nicht, versuche, diese zu erzeugen. In diesem Modus ist fseek() wirkungslos; beim Schreiben wird immer angehängt.
   'a+' Zum Schreiben und Lesen geöffnet; platziere Dateizeiger auf Dateiende. Existiert die Datei nicht, versuche, diese zu erzeugen. In diesem Modus wirkt sich fseek() nur auf die Leseposition aus; beim Schreiben wird immer angehängt.
   'x' 	Erzeuge und Öffne nur zum Schreiben; platziere Dateizeiger auf Dateianfang. Falls die Datei schon existiert, wird der fopen() Aufruf fehlschlagen durch Rückgabe von FALSE und dem Auslösen eines Fehlers der Stufe E_WARNING. Existiert die Datei nicht, versuche, diese zu erzeugen. Dies ist zur Angabe der O_EXCL|O_CREAT Flags für den darunterliegenden open(2) System Aufruf äquivalent.
   'x+' Erzeuge und Öffne zum Schreiben und Lesen; ansonsten ist das Verhalten gleich wie bei 'x'.
   'c' 	Öffne Datei nur zum Schreiben. Wenn die Datei nicht existiert, wird diese erzeugt. Wenn sie existiert, wird sie weder gekürzt (im Gegensatz zu 'w'), noch schlägt der Aufruf dieser Funktion fehl (wie dies mit 'x' der Fall ist). Der Dateizeiger wird auf den Dateianfang platziert. Dies kann nützlich sein, wenn man eine "beratende" (kooperative) Sperre erhalten möchte (siehe flock()) bevor man versucht, die Datei zu ändern, da die Nutzung von 'w' die Datei kürzen könnte, bevor die Sperre erhalten wurde (falls Kürzen gewünscht ist, kann ftruncate() genutzt werden, nachdem die Sperre angefragt wurde).
   'c+' Öffne Datei zum Lesen und Schreiben; ansonsten ist das Verhalten gleich wie bei 'c'.
*/
/*  Unterstützte Protokolle und Wrapper
    fclose() - Schließt einen offenen Dateizeiger
    fgets() - Liest eine Zeile von der Position des Dateizeigers
    fread() - Liest Binärdaten aus einer Datei
    fwrite() - Binär-sicheres Dateischreiben
    fsockopen() - Stellt eine Internet- oder Unix-Domain-Socket-Verbindung her
    file() - Liest eine komplette Datei in ein Array
    file_exists() - Prüft, ob eine Datei oder ein Verzeichnis existiert
    is_readable() - Prüft, ob eine Datei existiert und lesbar ist
    stream_set_timeout() - Set timeout period on a stream
    popen() - Öffnet einen Prozesszeiger
    stream_context_create() - Creates a stream context
    umask() - Changes the current umask
*/

/*Mehr über dieses Thema erfahre ich auf http://php.net/manual/de/function.fopen.php*/