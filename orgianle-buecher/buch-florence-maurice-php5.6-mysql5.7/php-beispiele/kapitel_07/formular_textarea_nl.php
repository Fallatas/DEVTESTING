<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Beispielformular</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
<input type="radio" name="anrede" value="Frau" checked="checked"/> Frau
<input type="radio" name="anrede" value="Herr" /> Herr
<input type="radio" name="anrede" value="Firma" /> Firma <br />
Nachname: <br />
<input type="text" name="nachname" size="20" maxlength="30" />
<br />
Themen: <br />
<select name="thema">
  <option value="HTML">HTML</option>
  <option value="CSS">CSS</option>
  <option value="JavaScript">JavaScript</option>
  <option value="PHP">PHP</option>
</select>
<br />
Kommentar: <br />
<textarea name="kommentar" rows="3" cols="20"></textarea>
<br />
<input type="submit" value="Abschicken" />
</form>

<?php
if (!empty($_GET["nachname"])) {
  echo "Ihre Eingaben<br />\n";
  if (!empty($_GET["anrede"])) {
    echo htmlspecialchars($_GET["anrede"]);
  }
  echo " " . htmlspecialchars($_GET["nachname"]) . "<br />\n";
  if (!empty($_GET["thema"])){
    echo "Das gewählten Thema: ". htmlspecialchars($_GET["thema"]) . "<br />\n ";
   }
  if (!empty($_GET["kommentar"])){
    echo "Ihr Kommentar: ";
    echo nl2br(htmlspecialchars($_GET['kommentar']));
    echo "<br />\n";
}

}
?>
</body>
</html>

