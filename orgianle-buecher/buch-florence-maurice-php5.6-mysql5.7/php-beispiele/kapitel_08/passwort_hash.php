<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Passwort Hash-API</title>
</head>
<body>
<?php
$meinhash = password_hash("geheim", PASSWORD_DEFAULT);
echo $meinhash."<br />\n";

if (password_verify("geheim", $meinhash)) {
    echo "Passwort passt";
} else {
    echo "Passt nicht";
}

echo "<br />";
print_r( password_get_info($meinhash));

?>
</body>
</html>