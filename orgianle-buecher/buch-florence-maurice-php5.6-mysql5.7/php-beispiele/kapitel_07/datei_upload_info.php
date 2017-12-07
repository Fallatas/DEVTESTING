<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Beispielformular</title>
 
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
Datei: <br />
<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
<input type="file" name="datei" /><br />
<input type="submit" value="Hochladen" />
</form>

<?php
if (isset($_FILES["datei"])) {
  foreach ($_FILES["datei"] as $k => $v) {
    echo "$k: $v <br />\n";
  }
}

?>


</body>
</html>

