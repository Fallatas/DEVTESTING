<?php
$titeltext="Webshop - Datenbankversion";
$text = array();
$text[0][0]= "></p>";
$text[0][1]="<h1>Willkommen beim Webshop</h1>";
$text[0][2] = "<p>Folgende Artikel können Sie bei uns bestellen</p>";
$text[0][3] = "<p><a href=\"".$_SERVER['PHP_SELF']."?pdf\">Artikelliste als PDF</a></p>";
$text[1][0] = "<br /><a href=\"".$_SERVER['PHP_SELF']."?wk\">Zum Warenkorb</a>";
$text[2][0] = "<br /><a href=\"".$_SERVER['PHP_SELF']."?order\">Bestellen</a>";
$text[2][1] = "<p><a href=\"".$_SERVER['PHP_SELF']."\">zur&uuml;ck zur Artikelauswahl</a></p>";
$text[3][0] = "<h1>Warenkorb</h1>";
$text[3][1] = "<br><a href=\"".$_SERVER['PHP_SELF']."?re\">Rechnung als PDF</a>";
$text[3][2] = "<p>Im Warenkorb liegen:</p>";
$text[4][0]="<p>Ihre Bestellung wurde aufgenommen.";
$text[4][1]="<br>Vielen Dank.</p>";
$text[4][2]="<p><a href=\"".$_SERVER['PHP_SELF']."\">Zurück zur Artikelauswahl</a></p>";

$text[5][0]="<h3>Bitte melden Sie sich an.</h3>";
$text[5][1]="<form method=\"post\" accept-charset=\"utf-8\">";
$text[5][3]="<table>";
$text[5][4]="<tr>\n<td>Anmeldename: </td><td><input name=\"kennung\" type=\"text\"></td>\n</tr>";
$text[5][5]="<tr>\n<td>Passwort: </td><td><input name=\"passwort\" type=\"password\"></td>\n</tr>";
$text[5][6]="<tr>\n<td colspan=\"2\" align=\"center\"><hr><input type=\"submit\" value=\"anmelden\"></td>\n</tr>";
$text[5][7]="</table>";
$text[5][8]="</form>\n<br />";
$text[5][9]="<a href=\"".$_SERVER['PHP_SELF']."?neu\">Neuer Kunde?</a>";

$text[6][0]="<h3>Bitte geben Sie ihre Daten ein.</h3>\n<p>Diese werden selbstverständlich vertraulich behandelt.</p>";
$text[6][1]="<form method=\"post\" accept-charset=\"utf-8\">";
$text[6][2]="<input type=\"hidden\" name=\"neuanmeldung\">";
$text[6][3]="<table>";
$text[6][4]="<tr>\n<td>Name: </td><td><input name=\"name\" type=\"text\"></td>\n</tr>";
$text[6][5]="<tr>\n<td>Vorname: </td><td><input name=\"vorname\" type=\"text\"></td>\n</tr>";
$text[6][6]="<tr>\n<td>PLZ: </td><td><input type=\"text\" name=\"plz\"></td>\n</tr>";
$text[6][7]="<tr>\n<td>Ort: </td><td><input name=\"ort\" type=\"text\"></td>\n</tr>";
$text[6][8]="<tr>\n<td>Stra&szlig;e: </td><td><input name=\"strasse\" type=\"text\"></td>\n</tr>";
$text[6][9]="<tr>\n<td>EMail-Adresse: </td><td><input name=\"email\" type=\"text\"></td>\n</tr>";
$text[6][10]="<tr>\n<td>Anmeldename: </td><td><input name=\"kennung\" type=\"text\"></td>\n</tr>";
$text[6][11]="<tr>\n<td>Passwort: </td><td><input name=\"passwort\" type=\"password\"></td>\n</tr>";
$text[6][12]="<tr>\n<td colspan=\"2\" align=\"center\"><hr><input type=\"submit\" value=\"anmelden\"></td>\n</tr>";
$text[6][13]="</table>";
$text[6][14]="</form>"

/*
$seite = array();
$seite[0][2]="<p>Folgende Artikel stehen zur Auswahl ";
$seite[0][3]="<a href=\"".$_SERVER['PHP_SELF']."?pdf\">Liste als PDF</a>:</p>";

$seite[1][0]="<br /><a href=\"".$_SERVER['PHP_SELF']."?wk\">Zum Warenkorb</a>";

$seite[2][0]="<h1>Ausgewählte Artikel</h1>";
$seite[2][1]="<p>Folgende Artikel haben Sie ausgewählt.</p>";

$seite[3][0]="<p><a href=\"".$_SERVER['PHP_SELF']."?order\">Bestellen</a></p>";
$seite[3][1]="<p><a href=\"".$_SERVER['PHP_SELF']."\">Zu Artikelauswahl</a></p>";


$seite[5][0]="<p>Ihre Bestellung konnte nicht aufgenommen werden.";
$seite[5][1]="<br>Es ist leider ein Fehler aufgetreten.</p>";
$seite[5][2]="<p><a href=\"".$_SERVER['PHP_SELF']."\">Zurueck zur Artikelauswahl</a></p>";
*/
?>