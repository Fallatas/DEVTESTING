
<?php
echo "<strong style='color: red'>Arbeiten mit strip_tags</strong>";
echo "<br>";
echo "<hr style='color: red'>";
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    <fieldset>
        <label>Bitte hier Text eingeben:</label> <br>
        <input name="text"> <br>
        <input type="submit" value="Senden"> <br>
        <?php
        /*strip_tags — Entfernt HTML- und PHP-Tags aus einem String*/

        echo "Ihre eingegebener Text lautet: " . strip_tags($_POST["text"]);
        ?>
    </fieldset>
</form>