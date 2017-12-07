<?php
echo "<strong style='color: red'>Ein einfaches Formular</strong>";
echo "<br>";
echo "<hr style='color:red'>";
?>
<form action="form-1.php" method="get">
    Ihr Vorname: <br>
    <input type="text" name="vorname" size="20" maxlength="30" />
    <br>
    Ihr Nachname: <br>
    <input type="text" name="nachname" size="20" maxlength="30" />
    <br>
    <input type="submit" value="Abschicken" />
</form>
<?php
    echo "Ihre Eingaben: <br>\n"
        . "Ihr Vorname: {$_GET['vorname']} <br>\n"
        . "Ihr Nachname: {$_GET['nachname']} <br>\n"
?>
<?php
    echo "<strong style='color: red'>Eine Ergaenzung mit htmlspecialchar</strong>";
    echo "<br>";
    echo "<hr style='color: red'>"
?>
<form action="form-1.php" method="get">
    Ihr Vorname: <br>
    <input type="text" name="vorname" size="20" maxlength="30" />
    <br>
    Ihr Nachname: <br>
    <input type="text" name="nachname" size="20" maxlength="30" />
    <br>
    <input type="submit" value="Abschicken" /> <br></form>
<?php
    echo "Ihre Eingaben: <br>\n"
            . "Ihr Vorname: " . htmlspecialchars($_GET["vorname"]) . "<br>\n"
            . "Ihr Nachname: " . htmlspecialchars($_GET["nachname"]) . "<br>\n";
?>
<?php
echo "<strong style='color: red'>Verarbeitung im selben Script</strong>";
echo "<br>";
echo "<p style='color: red'>Mit PHP_SELF ermittelt PHP selbst wo das Script liegt.</p>";
echo "<hr style='color: red'>"
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="get">
    Ihr Vorname: <br>
    <input type="text" name="vorname" size="20" maxlength="30" />
    <br>
    Ihr Nachname: <br>
    <input type="text" name="nachname" size="20" maxlength="30" />
    <br>
    <input type="submit" value="Abschicken" /> <br>
</form>
<?php
    if(isset($_GET["vorname"])){
        echo "Ihre Eingaben: <br>\n"
            . "Ihr Vorname: " . htmlspecialchars($_GET["vorname"]) . "<br>\n"
            . "Nachname: " . htmlspecialchars($_GET["nachname"]) . "<br>\n";
    }
?>
<?php
echo "<hr style='color: red'>";
echo "<strong style='color: red'>Part 1 Ende</strong>";
echo "<br>";;
echo "<hr style='color: red'>"
?>