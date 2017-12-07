<html>
  <body>
    <p>
      <b>Hauptmenu</b><br>
      <ul style="list-style-type: none;">
        <li><a href="<?php print $_SERVER['PHP_SELF']?>?wahl=1">Erster Eintrag</a></li>
        <li><a href="<?php print $_SERVER['PHP_SELF']?>?wahl=2">Zweiter Eintrag</a></li>
        <li><a href="<?php print $_SERVER['PHP_SELF']?>?wahl=3">Dritter Eintrag</a></li>
      </ul>
    </p>
<?php
  # einfache Anzeige
  if (!empty($_REQUEST['wahl']))
  {
    print "<h3>Sie haben den Men&uuml;punkt ".$_REQUEST['wahl']." gew&auml;hlt.</h3>\n";
    # Auswahl anhand des Wertes
    switch ($_GET['wahl'])
    {
      case 1:
        print "Sie haben den <b>Men&uuml;punkt 1</b> ausgew&auml;hlt.\n";
        # hier koennte der Aufruf einer zugehoerigen Funktion stehen
      break;
      case 2:
        print "Mit dem zweiten Men&uuml;punkt kann eine andere ".
              "Funktion aufgerufen werden\n";
      break;
      case 3:
        print "Funktion ist noch nicht implementiert!\n";
      break;
      default:
        print "ung&uuml;ltiger Wert\n";
    }
  }
?>
  </body>
</html>
