<html>
<head>
    <title>Mein großes Formular</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="form-style-5">
    <form>
        <fieldset>
            <legend><span class="number">1</span> Candidate Info</legend>
            <input type="text" name="field1" placeholder="Dein Name *">
            <input type="email" name="field2" placeholder="Deine Email *">
            <textarea name="field3" placeholder="Über dich"></textarea>
            <label for="job">Interests:</label>
            <select id="job" name="field4">
                <optgroup label="Indoors">
                    <option value="fishkeeping">Fishkeeping</option>
                    <option value="reading">Reading</option>
                    <option value="boxing">Boxing</option>
                    <option value="debate">Debate</option>
                    <option value="gaming">Gaming</option>
                    <option value="snooker">Snooker</option>
                    <option value="other_indoor">Other</option>
                </optgroup>
                <optgroup label="Outdoors">
                    <option value="football">Football</option>
                    <option value="swimming">Swimming</option>
                    <option value="fishing">Fishing</option>
                    <option value="climbing">Climbing</option>
                    <option value="cycling">Cycling</option>
                    <option value="other_outdoor">Other</option>
                </optgroup>
            </select>
        </fieldset>
        <fieldset>
            <legend><span class="number">2</span> Additional Info</legend>
            <textarea name="field3" placeholder="About Your School"></textarea>
        </fieldset>
        <input type="submit" value="Bestätigen" onclick="Senden()"/>
    </form>
    <?php
    ?>
</div>
</body>
<script>
    var string = "Hallo Welt";
    console.log(string);

    function Senden() {
        var vorname = document.forms[0].elements[1].value;
        var nachname = document.forms[0].elements[2].value;
        var anzahl = document.forms[0].elements.length;
        alert(vorname);
    }
</script>
</html>