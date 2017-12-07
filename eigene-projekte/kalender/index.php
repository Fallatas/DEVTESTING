<?php
$datum = date("d.m.Y");
$uhrzeit = date("H.i.s");
echo "Heute ist der " . $datum . " und es ist " . $uhrzeit . "<br>\n";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
    <h5>Registrierung</h5>
    <label>Anrede:</label> <br>
    <select name="anrede">
        <option>Herr</option>
        <option>Frau</option>
    </select>
    <hr>
    <label>Namensangaben:</label> <br>
    <label>Vorname:</label>
    <input type="text" name="vorname" size="20" maxlength="20">
    <label>Nachname:</label>
    <input type="text" name="nachname" size="20" maxlength="20">
    <hr>
    <label>Geburtstag:</label> <br>
    <label>Tag:</label>
    <input type="number" name="day" size="2">
    <label>Monat:</label>
    <input type="number" name="month" size="2" maxlength="2">
    <label>Jahr:</label>
    <input type="number" name="year" size="4" maxlength="4">
    <hr>
    <label>Wohnort:</label> <br>
    <label>Adresse:</label>
    <input name="adresse" size="40" maxlength="40" >
    <label>Postleitzahl:</label>
    <input name="plz" size="40" maxlength="40">
    <hr>
    <label>Informationen:</label> <br>
    <label>Email:</label>
    <input type="email" name="email" size="40" maxlength="40">
    <label>Telefon:</label>
    <input name="telefon" size="40" maxlength="40">
    <label>Handynummer:</label>
    <input name="handy" size="40" maxlength="40">
    <hr>
    <label>Notiz:</label> <br>
    <textarea name="textarea"></textarea>
    <hr>
    <input type="checkbox" value="steam" name="spiele[]">Steam
    <input type="checkbox" value="origin" name="spiele[]">Origin
    <input type="checkbox" value="andere" name="spiele[]">Andere
    <hr>
    <input type="submit" value="Senden">
    <hr>
</form>
<?php
if (isset($_GET['vorname'])){
    echo "<strong style='color: #00A8C6'>Die Eingaben: </strong><br>\n"
    . "<p style='color: #00A8C6'>Namensangaben: </p><br>\n"
    .  "Vorname: " . htmlspecialchars($_GET['vorname']) . "<br>\n"
    . "Nachname: " . htmlspecialchars($_GET['nachname']) . "<br>\n";




}
