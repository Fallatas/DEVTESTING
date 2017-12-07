<?php
 if($_REQUEST['name'] != "")
 {
   print "Hallo ";
   switch ($_REQUEST['anrede'])
   {
     case 1:
       print "Herr ";
     break;
     case 2:
       print "Frau ";
     break;
     case 3:
       print "Familie ";
     break;
     case 4:
       print "Firma ";
     break;
   }
   print $_REQUEST['name'];
 }
?>

<html>
  <body>
    <form method="post" action="<?php print $_SERVER['SELF_PHP'] ?>">
      Bitte geben Sie Ihren Namen an: <input type="text" name="name" size="15"><br>
      Bitte w&auml;hlen Sie die Anrede aus:
      <select name="anrede" size="1">
        <option value="1" selected>Herr</option>
        <option value="2">Frau</option>
        <option value="3">Familie</option>
        <option value="4">Firma</option>
      </select><br>
      <input type="submit" value="senden">
    </form>
  </body>
</html>
