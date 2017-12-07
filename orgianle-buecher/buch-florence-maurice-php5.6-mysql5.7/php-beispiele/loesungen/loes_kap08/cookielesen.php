<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Cookies</title>
</head>
<body>
<?php
if (isset($_COOKIE["name"])) {
	echo "Hallo " . htmlspecialchars($_COOKIE["name"]);
}
else {
	echo "Hallo Unbekannter";
}
?>
</body> 
</html>