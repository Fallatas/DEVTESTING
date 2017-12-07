<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Eingaben mit der filter-Erweiterung filtern</title>
</head>
<body>
<?php
$email = "ich@mir.de";
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo "E-Mail $email nicht gültig";
} else {
  echo "E-Mail gültig";
}

?>
</body>
</html>