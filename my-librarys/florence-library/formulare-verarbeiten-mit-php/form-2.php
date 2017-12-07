<?php
    echo "<strong style='color: red'>Formular oder Auswertung anzeigen</strong>";
    echo "<br>";
    echo "<hr style='color: red'>";
?>
<?php
if(!isset($_GET["vorname"])) {
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="get">
    Ihr Vorname: <br>
    <input type="text" name="vorname" size="20" maxlength="30"/>
    <br>
    Ihr Nachname: <br>
    <input type="text" name="nachname" size="20" maxlength="30"/>
    <br>
    <input type="submit" value="Abschicken"/> <br>
    </form>
    <?php
}else{
    echo "Ihre Eingaben: " . "<br>\n"
        . "Ihr Vorname: " . htmlspecialchars($_GET["vorname"]) . "<br>\n"
        . "Ihr Nachname: " . htmlspecialchars($_GET["nachname"]). "<br>\n";
}
?>
<?php
    echo "<strong style='color: red'>Uebertragung per Post</strong>";
    echo "<br>";
    echo "<hr style='color: red'>";

    if(isset($_POST["vorname"])){
        echo "Ihre Eingaben <br>\n"
        . "Vorname: " . htmlspecialchars($_POST["vorname"])
        . "Name: " . htmlspecialchars($_POST["nachname"])
        . "<br>\n";
    }
?>