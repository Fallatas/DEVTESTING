<?php
echo "<strong style='color: red'>Arbeiten mit trim</strong>";
echo "<br>";
echo "<hr style='color: red'>";
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    <fieldset>
        <label>Bitte hier Text eingeben:</label> <br>
        <input name="text"> <br>
        <input type="submit" value="Senden"> <br>
        <?php
            /*trim — Entfernt Whitespaces (oder andere Zeichen) am Anfang und Ende eines Strings*/
            /*Hierbei kann man auch noch optional verschiedene Parameter angeben.*/

            $zu_trimmender_text = trim($_POST["text"]);

            echo "Der zu trimmende Text lautet: " . $zu_trimmender_text;
        ?>
    </fieldset>
</form>
