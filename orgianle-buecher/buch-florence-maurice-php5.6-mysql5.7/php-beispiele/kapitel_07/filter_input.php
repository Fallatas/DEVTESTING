<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Eingaben mit der filter-Erweiterung filtern</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
Ihr Alter: <br />
<input type="text" name="alter" size="3" maxlength="3" />
<br />
<input type="submit" value="Abschicken" />
</form>
<?php
if (filter_has_var(INPUT_GET, "alter")) {
  $min = 3;
  $max = 99;
  $optionen = array(
    "options" => array(
                    "min_range"=>$min, 
                    "max_range"=>$max)
  );
  $alter = filter_input(INPUT_GET, "alter", FILTER_VALIDATE_INT, $optionen);
  if ($alter !== false) {
    echo "Sie haben $alter angegeben";
  } else {
    echo "Bitte geben Sie ein Alter zwischen 3 und 99 an!";
  }
}
?>

</body>
</html>