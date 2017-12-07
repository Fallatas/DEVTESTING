<?php
if (!empty($_GET["name"])) {
 setcookie("name", $_GET["name"], time()+7200);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Cookies</title>
</head>
<body>
<form method="get" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
Name:<br />
<input type="text" name="name" /><br />
<input type="submit" value="Absenden" />
</form>
</body>
</html> 