<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Eingaben mit der filter-Erweiterung filtern</title>
</head>
<body>
<?php
$url = "http://www.php.net";
var_dump(filter_var($url, FILTER_VALIDATE_URL));

$url = "http://www.php.net/index.php";
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));

$url = "http://www.php.net";
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
?>

</body>
</html>