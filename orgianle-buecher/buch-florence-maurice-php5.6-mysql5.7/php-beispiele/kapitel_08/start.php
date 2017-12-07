<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Login mit Sessions</title>
<style>
  .fehler { color: red; }
  </style>
  </head>
<body>
<?php
if (isset($_GET["f"]) && $_GET["f"] == 1) {
  echo "<p class='fehler'>Login-Daten nicht korrekt</p>";
}
?>
<form method="post" action="login.php">
Ihr Name: <br />
<input type="text" name="name" size="20" />
<br />
Passwort: <br />
<input type="password" name="passwort" size="20" /><br />
<input type="submit" value="Login" />
</form>
</body>
</html>
