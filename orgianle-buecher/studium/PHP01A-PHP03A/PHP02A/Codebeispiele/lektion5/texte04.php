<?php
$text = array();
$text[0][0]="<h1>Webshop</h1>";
$text[0][1]="<p>Folgende Artikel k&ouml;nnen Sie bei uns bestellen.</p>";
$text[0][2]="<p><a href=\"".$_SERVER['PHP_SELF']."?pdf\">Artikelliste als PDF.</a></p>";
$text[1][0]="<br /><a href=\"".$_SERVER['PHP_SELF']."?wk\">Zum Warenkorb</a>";
$text[2][0]="<p><a href=\"".$_SERVER['PHP_SELF']."?order\">bestellen</a></p>";
$text[2][1]="<p><a href=\"". $_SERVER['PHP_SELF']."\">zur&uuml;ck zur Artikelauswahl</a>";
$text[3][0]="<h1>Warenkorb</h1>";
$text[3][1]="<p>Im Warenkorb liegen:</p>";
$text[4][0]="<p>Ihre Bestellung wurde aufgenommen.";
$text[4][1]="<br/>Vielen Dank.</p>";
$text[4][2]="<p><a href=\"". $_SERVER['PHP_SELF']."\">zur&uuml;ck zur Artikelauswahl</a>";
?>
