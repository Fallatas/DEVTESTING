<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Beispielformular</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Ihr Vorname: <br />
<input type="text" name="vorname" size="20" maxlength="30" />
<br />
Ihr Nachname: <br />
<input type="text" name="nachname" size="20" maxlength="30" />
<br />
<input type="submit" value="Abschicken" />
</form>
<?php
if (isset($_POST["vorname"])) {
  echo "Ihre Eingaben<br />\n"
    . "Vorname: " . htmlspecialchars($_POST["vorname"])
    . ", Name: " .htmlspecialchars($_POST["nachname"]) 
    . "<br />\n";
}

?>


</body>
</html>

