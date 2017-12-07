<?php
echo "<strong style='color: red'>Eine Datei loeschen</strong>";
echo "<hr style='color: red'>";
echo "<br>\n";


/*Es wird überprüft ob eine Datei Namens datei_zum_loeschen.php existiert*/
/*Wenn ja wird die Datei gelöscht.*/
if (is_file("datei_zum_loeschen.php")){
    unlink("datei_zum_loeschen.php");
    echo "Datei wurde geloescht.";
}else{
    $handle = fopen("datei_zum_loeschen.php","w+");
    echo "Datei existiert nicht mehr.Erstelle neue Datei.";
}

/*1.Benutzer registriert sich über ein Formular*/
/*2.Vorname,Nachname,Geburtstag,Anschrift,Wann registiert?*/
/*3.Für jeden neuen User der sich anmeldet wird ein eigener Ordner erstellt.*/
/*4.Darin wird automatisch eine Datei erstellt mit den Daten des Users.*/
/*5.Danach wird automatsich eine E-Mail verschickt mit der Information das sich ein Neuer User registiert hat.*/
/*6.Falls ein User sein Konto löschen will werden automatisch seine Dateien gelöscht.*/
/*7.Und man wird benachrichtigt das ein User seine Konto gelöscht hat*/


