<html>
<head>
    <meta charset="UTF-8" />
    <title>Login mit Sessions</title>
    <style>
        .fehler {color: red;}
    </style>
</head>
<body>
    <?php
    if(isset($_GET["f"]) && isset($_GET["f"]) == 1){
        echo "<p class='fehler'>Logindaten nicht korrekt</p>";
    }
    ?>
    <form action="login.php" method="post">
        Ihr Nachme: <br>
        <input type="text" name="name" size="20" /> <br>
        Ihr Passwort: <br>
        <input type="text" name="passwort" size="20" /> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>