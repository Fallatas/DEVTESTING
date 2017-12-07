<?php
echo "<strong style='color: red'>Arbeiten mit replace</strong>";
echo "<br>";
echo "<hr style='color: red'>";
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    <fieldset>
        <label>Bitte hier Text eingeben:</label> <br>
        <textarea name="text" cols="50" rows="10"></textarea> <br>
        <input type="submit" value="Senden"> <br>
        <?php
        $text_ohne_nl = str_replace("\n", "", $_REQUEST["text"]);
        echo "Ihr eingegebener Text lautet: " . $text_ohne_nl . "<br>\n";

        $vokale = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $onlyconsonants = str_replace($vokale, "", "Hallo PHP-Welt");

        echo $onlyconsonants;

        ?>
    </fieldset>
</form>