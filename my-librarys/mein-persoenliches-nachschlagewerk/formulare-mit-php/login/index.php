<form>
    <label>Username:</label> <br>
    <input name="user" type="email"> <br>
    <label>Passwort:</label> <br>
    <input name="passwort" type="password"> <br>
    <input type="submit" value="Login">
</form>
<?php
if (empty($_GET["user"]) && empty($_GET["passwort"])){
    echo "Bitte geben sie Ihren Usernamen und das Passwort an.";
}elseif (isset($_GET["user"]) && isset($_GET["passwort"]) && $_GET["user"] == "fallatas85@gmail.com" && $_GET["passwort"] == "1234"){
    echo "Willkommen im gesichertem Berreich.";
}