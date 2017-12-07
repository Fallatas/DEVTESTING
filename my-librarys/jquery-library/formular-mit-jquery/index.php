<html>
<head>
    <title>Input Felder</title>
    <script src="jquery.inview.min.js"></script>
    <script src="layout.js"></script>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <fieldset style="width: 300px">
        <label>Vorname:</label> <br>
        <input name="vorname" id="vorname" class="feld1" minlength="1" maxlength="10" required> <br>
        <span id="nachricht1"></span> <br>
        <label>Nachname:</label> <br>
        <input name="nachname" id="nachname" class="feld2" minlength="1" maxlength="10" required> <br>
        <span id="nachricht2"></span> <br>
        <label>Passwort:</label> <br>
        <input type="password" name="passwort" id="passwort" class="feld3" minlength="5" maxlength="10" required> <br>
        <span id="nachricht3"></span> <br>
        <input type="submit" value="Senden">
        </fieldset>
    </form>
</body>
</html>